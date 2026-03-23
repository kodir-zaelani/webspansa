<?php

use Livewire\Component;
use App\Models\Permission;
use Livewire\WithPagination;
use Livewire\Attributes\On;

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
    public $sortColumn    = 'name';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $name;
    public $description;
    public $modelId;



    protected $queryString = [
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'name'        => 'Name',
            'description' => 'Description',
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

    public function updatingPaginate()
    {
        $this->resetPage();
    }

    public function getPermissionQueryProperty()
    {
        return Permission::orderBy($this->sortColumn, $this->sortDirection)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getPermissionProperty()
    {
        return $this->permissionQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->permission->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked = $this->permissionQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function permissionStored($permission)
    {
        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Success!',
            'timer'=>5000,
            'icon'=>'success',
            'text'=>'Pemission ' . $permission['name'] . ' was Stored',
            'toast'=>true, // Jika mau menggunakan toas
            'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton'=>true,
            'showCancelButton'=>false,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function permissionUpdated($permission)
    {
        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Success!',
            'timer'=>5000,
            'icon'=>'success',
            'text'=>'Permission ' . $permission['name'] . ' was Updated',
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
        Permission::whereKey($this->checked)->delete();

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
        Permission::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Permission was deleted',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);

        $this->resetSearch();

        $this->dispatch('refresh-the-component');
        // This will hide the modal in the frontend
        $this->dispatch('closeDeleteModal');
        session()->flash('danger', 'Delete Permission Successfully');

    }

    #[On('refresh-the-component')]
    public function refreshTheComponent()
    {
        // need to do Refresh this component after listen
    }
    public function store()
    {
        $validateData = [
            'name' => 'required|min:2|unique:permissions,name',
        ];

        // Default data
        $data = [
            'name'        => $this->name,
            'description' => $this->description,
        ];

        $this->validate($validateData);

        $pemission = Permission::create($data);

        session()->flash('success', 'Create Permission Successfully');

        // This is to reset our public variables
        $this->cleanVars();
        $this->dispatch('refresh-the-component');
    }
    public function edit($permissionID)
    {
        $this->statusUpdate = true;
        $this->modelId = $permissionID;

        $model = Permission::find($this->modelId);

        $this->name = $model->name;
        $this->description = $model->description;
    }

    public function cancelEdit()
    {
        $this->statusUpdate = false;
    }

    public function update()
    {
        $validateData = [
            'name' => 'required|min:2',
            // 'description' => 'required|min:2',
        ];

        // Default data
        $data = [
            'name'        => $this->name,
            'description' => $this->description,
        ];

        $this->validate($validateData);
        $pemission = Permission::find($this->modelId);

        $pemission->update($data);

        session()->flash('warning', 'Update Permission Successfully');
        // This is to reset our public variables
        $this->cleanVars();
        $this->statusUpdate = false;
        $this->dispatch('refresh-the-component');
    }

    private function cleanVars()
    {
        // Kosongkan field input
        $this->name        = null;
        $this->description = null;
    }

     public function render()
    {
        return $this->view([
            'datapermission' => $this->permission,
        ]);
    }
};
?>

<div>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Permissions</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('backend.dashboard') }}">
                                    <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Permission</li>
                            <li class="breadcrumb-item active" aria-current="page">Permission List</li>
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
                        <select wire:model.live="paginate" id="paginate_id" class="form-control-sm custom-select ">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <ul class="box-controls pull-right">
                            <li>
                                <div class="ms-auto form-group me-2">
                                    <div class="input-group ">
                                        <input type="search" wire:model.live="search" class="form-control border-primary" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" class="form-control" placeholder="Search by ...">
                                        <span class="input-group-text bg-primary"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <x-flash-message/>
                        <div class="row">
                            <div class="col-xl-8 col-md-8 col-lg-8 col-12">
                                @if ($datapermission->count())
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
                                                <th scope="col" width="20%">Action</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            @foreach ($datapermission as $no =>  $item)
                                            <tr class="@if ($this->isChecked($item->id))
                                                table-primary
                                                @endif">
                                                <th class="text-right" scope="row">{{ $no + $datapermission->firstItem() }}</th>
                                                <td>
                                                    {{ !empty($item->name) ? $item->name:'' }}<br/>
                                                </td>
                                                <td>
                                                    {{ !empty($item->description) ? $item->description:'' }}
                                                </td>

                                                <td class="text-center align-midle">
                                                    <button wire:click="edit('{{ $item->id }}')" class="btn btn-xs btn-warning" title="Edit"><i class="fa fa-edit "></i></button>
                                                    <button wire:click="selectItem('{{ $item->id }}', 'delete')" class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash "></i></button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                                @else
                                <hr>
                                <h2 style="color: red" class="text-center">@yield('title') not available</h2>
                                @endif
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                @if ($statusUpdate == true)
                                @include('components.backend.permission.edit')
                                @else
                                @include('components.backend.permission.create')
                                @endif
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                @if ($datapermission->total() > 10)
                                <div class="col-12 ">
                                    {{ $datapermission->links() }}
                                </div>
                                @else
                                <div class="col-12 text-start small text-muted">
                                    Page : {{ $datapermission->currentPage() }} | Show {{ $datapermission->count() }} data
                                    of {{ $datapermission->total() }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal center-modal fade" id="modalFormDelete" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- Selected Item {{ $selectedItem }} --}}
                        <p><h3>Do you wish to continue?</h3></p>
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button wire:click="delete" class="btn btn-primary float-end">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
