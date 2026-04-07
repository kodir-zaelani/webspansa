<?php

namespace App\Livewire\Backend\Tahunajaran;

use App\Models\Tahunajaran;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;
    public $sortDirection = 'desc';
    public $sortColumn    = 'tahun_ajaran_id';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $tahun_ajaran_id;
    public $nama;
    public $periode_aktif;
    public $tanggal_mulai ;
    public $tanggal_selesai ;
    public $modelId;

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'tahun_ajaran_id' => 'Tahun Ajaran',
            'nama'            => 'Nama',
            // 'periode_aktif'   => 'Status Aktif',
            'tanggal_mulai'   => 'Periode',
        ];
    }

    public function sortBy($column)
    {
        $this->sortColumn = $column;

        $this->sortDirection = $this->reverseSort();

    }

    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
        ? 'desc'
        : 'asc';
    }

    public function mount()
    {
        $this->fill(request()->only('search', 'currentPage'));
        $this->resetSearch();
        $this->headersTable = $this->headerConfig();

    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getTahunajaranQueryProperty()
    {
        return Tahunajaran::orderBy($this->sortColumn, $this->sortDirection)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getTahunajaranProperty()
    {
        return $this->tahunajaranQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->tahunajaran->pluck('id')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function updatedChecked()
    {
        $this->selectPage = false;
    }

    public function selectAll()
    {
        $this->selectAll = true;
        $this->checked = $this->tahunajaranQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }


    public function selectItem($itemId, $action)
    {
        $this->statusUpdate = false;
        $this->selectedItem = $itemId;
        if ($action == 'delete') {
            // This will show the modal in the frontend
            $this->dispatch('openDeleteModal');
        } elseif ($action == 'show') {
            $this->dispatch('getModelId', $this->selectedItem);
            // This will show the openShowModal in the frontend
            $this->dispatch('openShowModal');
        } elseif ($action == 'edit') {
            $this->statusUpdate = true;
            $this->dispatch('getModelId', $this->selectedItem);
        }
    }

    public function deleteRecords()
    {
        Tahunajaran::whereKey($this->checked)->delete();

        $this->checked = [];
        $this->selectAll = false;
        $this->selectPage = false;
        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Deleted Success!',
            'timer'=>4000,
            'icon'=>'success',
            'text'=>'Selected Records were deleted Successfully',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton'=>true,
            'showCancelButton'=>false,
        ]);
        $this->dispatch('refreshParent');
        $this->dispatch('closeDeleteModalAll');
    }

    // Delete Single Record
    public function delete()
    {
        Tahunajaran::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Tahunajaran was deleted',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);


        $this->dispatch('refreshParent');
        // This will hide the modal in the frontend
        $this->dispatch('closeDeleteModal');
    }

    public function store()
    {
        $validateData = [
            'nama'            => 'required|min:2|unique:tahunajarans,nama',
            'tahun_ajaran_id' => 'required|min:4|max:4|unique:tahunajarans,tahun_ajaran_id',
            'periode_aktif'   => 'required',
            'tanggal_mulai'   => 'required',
            'tanggal_selesai' => 'required',
        ];

        // Default data
        $data = [
            'nama'            => $this->nama,
            'tahun_ajaran_id' => $this->tahun_ajaran_id,
            'periode_aktif'   => $this->periode_aktif,
            'tanggal_mulai'   => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
        ];

        $this->validate($validateData);

        $tahun_ajaran = Tahunajaran::create($data);

        $tahun_ajaran->update($data);

        $tahun_ajaran_aktif = Tahunajaran::where('periode_aktif', 1)->where('id', '!=', $tahun_ajaran->id)->first();

        if ($this->periode_aktif == 1 && $tahun_ajaran_aktif) {
            $tahun_ajaran_aktif->update(['periode_aktif' => 0]);
        }

        session()->flash('success', 'Create Tahun Ajaran Successfully');

        // This is to reset our public variables
        $this->cleanVars();
        $this->dispatch('refresh-the-component');
    }

    #[On('refresh-the-component')]
    public function refreshTheComponent()
    {
        // need to do Refresh this component after listen
    }
    private function cleanVars()
    {
        // Kosongkan field input
        $this->tahun_ajaran_id = null;
        $this->nama = null;
        $this->periode_aktif = null;
        $this->tanggal_mulai = null;
        $this->tanggal_selesai = null;
    }

    public function edit($tahunajaranID)
    {
        $this->statusUpdate = true;
        $this->modelId = $tahunajaranID;

        $model = Tahunajaran::find($this->modelId);

        $this->tahun_ajaran_id = $model->tahun_ajaran_id;
        $this->nama = $model->nama;
        $this->periode_aktif = $model->periode_aktif;
        $this->tanggal_mulai = $model->tanggal_mulai;
        $this->tanggal_selesai = $model->tanggal_selesai;
    }

    public function update()
    {
        $validateData = [
            'nama'            => 'required|min:2',
            'tahun_ajaran_id' => 'required|min:4|max:4|unique:tahunajarans,tahun_ajaran_id,' . $this->modelId,
            'periode_aktif'   => 'required',
            'tanggal_mulai'   => 'required',
            'tanggal_selesai' => 'required',
        ];

        // Default data
        $data = [
            'nama'            => $this->nama,
            'tahun_ajaran_id' => $this->tahun_ajaran_id,
            'periode_aktif'   => $this->periode_aktif,
            'tanggal_mulai'   => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
        ];

        $this->validate($validateData);
        $tahun_ajaran = Tahunajaran::find($this->modelId);

        $tahun_ajaran->update($data);

        $tahun_ajaran_aktif = Tahunajaran::where('periode_aktif', 1)->where('id', '!=', $this->modelId)->first();

        if ($this->periode_aktif == 1 && $tahun_ajaran_aktif) {
            $tahun_ajaran_aktif->update(['periode_aktif' => 0]);
        }

        session()->flash('success', 'Update Tahun Ajaran Successfully');

        // This is to reset our public variables
        $this->cleanVars();
        $this->statusUpdate = false;
        $this->dispatch('refresh-the-component');
    }

    public function cancelAdd()
    {
        $this->cleanVars();
        $this->statusUpdate = false;
    }
    public function cancelEdit()
    {
        $this->cleanVars();
        $this->statusUpdate = false;
    }

    public function render()
    {
        return view('livewire.backend.tahunajaran.index', [
            'datatahunajaran' => $this->tahunajaran,
            'title' => 'Tahun Ajaran',
        ]);
    }

}