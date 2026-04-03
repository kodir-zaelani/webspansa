<?php

namespace App\Livewire\Backend\Semester;

use App\Models\Semester;
use App\Models\Tahunajaran;
use Illuminate\Support\Str;
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
    public $sortColumn    = 'semesterid';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $namasemester ='';
    public $semester_id ='';
    public $tahunajaran_id;
    public $nama;
    public $semesterid;
    public $semestername;
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
            'semesterid'     => 'Semester Id',
            'tahunajaran_id' => 'Tahun Ajaran',
            'nama'            => 'Nama',
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
    public function kalkulasi()
    {

    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getSemesterQueryProperty()
    {
        return Semester::orderBy($this->sortColumn, $this->sortDirection)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getSemesterProperty()
    {
        return $this->semesterQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->semester->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked = $this->semesterQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        Semester::whereKey($this->checked)->delete();

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
        Semester::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Semester was deleted',
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
            // 'nama'            => 'required',
            // 'semesterid'      => 'required',
            'semestername'    => 'required',
            'tahunajaran_id'  => 'required',
            'periode_aktif'   => 'required',
            'tanggal_mulai'   => 'required',
            'tanggal_selesai' => 'required',
        ];

        $tahunajaran = Tahunajaran::find($this->tahunajaran_id);
        if ($this->semestername == 1) {
            $this->namasemester = $tahunajaran->nama . ' Ganjil';
        } elseif ($this->semestername == 2) {
            $this->namasemester = $tahunajaran->nama . ' Genap';
        }

        $slice = Str::before($tahunajaran->nama, '/');
        $this->semester_id = $slice . '' . $this->semestername;
        // Default data
        $data = [
            'tahunajaran_id'  => $this->tahunajaran_id,
            'semesterid'      => $this->semester_id,
            'semester'        => $this->semestername,
            'nama'            => $this->namasemester,
            'periode_aktif'   => $this->periode_aktif,
            'tanggal_mulai'   => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
        ];

        $this->validate($validateData);

        $semester = Semester::create($data);

        $semester_aktif = Semester::where('periode_aktif', 1)->where('id', '!=', $semester->id)->first();

        if ($this->periode_aktif == 1 && $semester_aktif) {
            $semester_aktif->update(['periode_aktif' => 0]);
        }

        session()->flash('success', 'Create Semester Successfully');

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
        $this->tahunajaran_id  = null;
        $this->nama            = null;
        $this->semesterid      = null;
        $this->semestername        = null;
        $this->periode_aktif   = null;
        $this->tanggal_mulai   = null;
        $this->tanggal_selesai = null;
    }

    public function edit($semesterID)
    {
        $this->statusUpdate = true;
        $this->modelId = $semesterID;

        $model = Semester::find($this->modelId);

        $this->tahunajaran_id  = $model->tahunajaran_id;
        $this->nama            = $model->nama;
        $this->semesterid      = $model->semesterid;
        $this->semestername        = $model->semester;
        $this->periode_aktif   = $model->periode_aktif;
        $this->tanggal_mulai   = $model->tanggal_mulai;
        $this->tanggal_selesai = $model->tanggal_selesai;
    }

    public function update()
    {
        $validateData = [
            'nama'            => 'required|min:2',
            'tahunajaran_id'  => 'required',
            'semesterid'      => 'required',
            // 'semestername'        => 'required',
            'periode_aktif'   => 'required',
            'tanggal_mulai'   => 'required',
            'tanggal_selesai' => 'required',
        ];

        $tahunajaran = Tahunajaran::find($this->tahunajaran_id);
        if ($this->semestername == 1) {
            $this->namasemester = $tahunajaran->nama . ' Ganjil';
        } elseif ($this->semestername == 2) {
            $this->namasemester = $tahunajaran->nama . ' Genap';
        }
        $slice = Str::before($tahunajaran->nama, '/');
        $this->semester_id = $slice . '' . $this->semestername;
        // Default data
        $data = [
            'nama'            => $this->namasemester,
            'tahunajaran_id'  => $this->tahunajaran_id,
            'semesterid'      => $this->semester_id,
            'semester'        => $this->semestername,
            'periode_aktif'   => $this->periode_aktif,
            'tanggal_mulai'   => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
        ];

        $this->validate($validateData);
        $semester = Semester::find($this->modelId);

        $semester->update($data);

        $semester_aktif = Semester::where('periode_aktif', 1)->where('id', '!=', $this->modelId)->first();

        if ($this->periode_aktif == 1 && $semester_aktif) {
            $semester_aktif->update(['periode_aktif' => 0]);
        }

        session()->flash('success', 'Update Semester Successfully');

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
        return view('livewire.backend.semester.index', [
            'tahunajaran' => Tahunajaran::orderBy('periode_aktif', 'desc')->get(),
            'datasemester' => $this->semester,
            'title' => 'Semester',
        ]);
    }

}