<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jabatantugasptk;

new class extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;
    public $sortDirection = 'asc';
    public $sortColumn    = 'jabatan_tugasptk_id';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;


    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'nama'                => 'Nama',
            'jabatan_utama'       => 'Jabatan Utama',
            'tugas_tambahan_guru' => 'Tugas Tambahan Guru',
            'jumlah_jam_diakui'   => 'Jumlah Jam Diakui',
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

    public function getJabatantugasptkQueryProperty()
    {
        return Jabatantugasptk::orderBy($this->sortColumn, $this->sortDirection)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getJabatantugasptkProperty()
    {
        return $this->jabatantugasptkQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->jabatantugasptk->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked = $this->jabatantugasptkQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function religiStored($religi)
    {
        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Success!',
            'timer'=>5000,
            'icon'=>'success',
            'text'=>'Jabatantugasptk ' . $religi['kebutuhan_khusus'] . ' was Stored',
            'toast'=>true, // Jika mau menggunakan toas
            'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton'=>true,
            'showCancelButton'=>false,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function religiUpdated($religi)
    {
        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Success!',
            'timer'=>5000,
            'icon'=>'success',
            'text'=>'Jabatantugasptk ' . $religi['kebutuhan_khusus'] . ' was Updated',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton'=>true,
            'showCancelButton'=>false,
        ]);
        $this->statusUpdate = false;
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
        Jabatantugasptk::whereKey($this->checked)->delete();

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
        Jabatantugasptk::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Jabatantugasptk was deleted',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);


        $this->dispatch('refreshParent');
        // This will hide the modal in the frontend
        $this->dispatch('closeDeleteModal');
    }


    public function render()
    {
        return $this->view([
            'datajabatantugasptk' => $this->jabatantugasptk,
            'title' => 'Jabatan Tugas Tambahan PTK',
        ]);

    }
};
?>

<div>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">{{ $title}}</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="fa fa-home"><span
                                class="path1"></span><span class="path2"></span></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Referensi</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                    <div class="box box-bordered border-primary">
                        <div class="box-header with-border">
                            <div class="mb-2 row">
                                <div class="mb-2 col-xl-2 col-lg-2 col-md-2 col-12">
                                    <select wire:model.live="paginate" name="" id="" class="w-auto form-control-sm custom-select">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="mb-2 ms-auto col-md-5 col-lg-5 col-12 ">
                                    <div class="form-group">
                                        <div class="mb-3 input-group">
                                            <input type="search" wire:model.live.debounce.500ms="search" class="form-control" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" class="float-right form-control" placeholder="Search by ...">
                                            <span class="input-group-text"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                    @if ($datajabatantugasptk->count())
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-hover">
                                            <tbody>
                                                <tr>
                                                    <th width="4%" scope="col">#</th>
                                                    @foreach ($headersTable as $key => $value)
                                                    <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                                        {{ $value }}
                                                        @if ($sortColumn == $key)
                                                        <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                                        @endif
                                                    </th>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                @foreach ($datajabatantugasptk as $no =>  $item)
                                                <tr>
                                                    <th class="text-right" scope="row">{{ $no + $datajabatantugasptk->firstItem() }}</th>
                                                    <td>
                                                        {{ !empty($item->nama) ? $item->nama:'' }}<br/>
                                                    </td>
                                                    <td>
                                                        {{ !empty($item->jabatan_utama) ? $item->jabatan_utama:'' }}<br/>
                                                    </td>
                                                    <td>
                                                        {{ !empty($item->tugas_tambahan_guru) ? $item->tugas_tambahan_guru:'' }}<br/>
                                                    </td>
                                                    <td>
                                                        {{ !empty($item->jumlah_jam_diakui) ? $item->jumlah_jam_diakui:'' }}<br/>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3 row">
                                        <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                            @if ($datajabatantugasptk->total() > 10)
                                            {{ $datajabatantugasptk->links() }}
                                            @else
                                            Page : {{ $datajabatantugasptk->currentPage() }} | Show {{ $datajabatantugasptk->count() }} data
                                            of {{ $datajabatantugasptk->total() }}
                                            @endif
                                        </div>

                                    </div>
                                    @else
                                    <hr>
                                    <h2 style="color: red" class="text-center">@yield('title') not available</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

