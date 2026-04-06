<?php

use Livewire\Component;
use App\Models\Performance;
use Livewire\WithPagination;


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
    public $sortColumn    = 'title';
    public $statusUpdate  = false;
    public $uploadPath    = 'uploads/images/performance';
    public $headersTable;
    public $action;
    public $selectedItem;

    public $title;
    public $slug;


    protected $queryString = [
    // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
    'search'      => ['except' => ''],
    'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
        'image' => 'Image',
        'title' => 'Title',
        // 'parent_id' => 'Parent',
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

    public function getPerformanceQueryProperty()
    {

        return Performance::orderBy($this->sortColumn, $this->sortDirection)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getPerformanceProperty()
    {
        return $this->performanceQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->performance->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked = $this->performanceQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function performanceStored($performance)
    {
        // Sweet alert
        $this->dispatch('swal:modal', [
        'title' => 'Success!',
        'timer' => 5000,
        'type' => 'success',
        'text' => 'Blog Category ' . $performance['title'] . ' was Stored',
        'toast' => true, // Jika mau menggunakan toas
        'position' => 'top-right', // Jika mau menggunakan toas
        'showConfirmButton' => true,
        'showCancelButton' => false,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function performanceUpdated($performance)
    {
        // Sweet alert
        $this->dispatch('swal:modal', [
        'title' => 'Success!',
        'timer' => 5000,
        'type' => 'success',
        'text' => 'Blog Category ' . $performance['title'] . ' was Updated',
        // 'toast'=>true, // Jika mau menggunakan toas
        // 'position'=>'top-right', // Jika mau menggunakan toas
        'showConfirmButton' => true,
        'showCancelButton' => false,
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
        } else {
            $this->dispatch('getModelId', $this->selectedItem);
            // This will show the openUpdateModal in the frontend
            $this->dispatch('openEditModal');
        }
    }

    public function deleteRecords()
    {
        Performance::whereKey($this->checked)->delete();

        $this->checked = [];
        $this->selectAll = false;
        $this->selectPage = false;
        // Sweet alert
        $this->dispatch('swal:modal', [
        'title' => 'Deleted Success!',
        'timer' => 4000,
        'type' => 'success',
        'text' => 'Selected Records were deleted Successfully',
        // 'toast'=>true, // Jika mau menggunakan toas
        // 'position'=>'top-right', // Jika mau menggunakan toas
        'showConfirmButton' => true,
        'showCancelButton' => false,
        ]);
        $this->dispatch('refreshParent');
        $this->dispatch('closeDeleteModalAll');
    }

    // Delete Single Record
    public function delete()
    {
        $masterperformance = Performance::where('masterstatus', 1)->first();

        $performance = Performance::find($this->selectedItem);
        $image = $performance->image;
        if ($performance->masterstatus == config('cms.default_masterperformance')) {
            $this->dispatch('swal:modaldelete', [
            'title' => 'Importan!',
            'timer' => 4000,
            'type'  => 'warning',
            'text'  => 'Blog Category cannot deleted',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
            ]);
            $this->dispatch('refreshParent');
            $this->dispatch('closeDeleteModal');

        } else {

            if ($performance->blogs->count() <> 0) {
                // Update posts yang performance_id dihapus ke performance_id master
                Blog::where('performance_id', $performance->id)->update(['performance_id' => $masterperformance->id]);
            }

            $performance = Performance::destroy($this->selectedItem);


            if ($image) {
                $this->removeImage($image);
            }
            // Sweet alert
            $this->dispatch('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'type'  => 'success',
            'text'  => 'Blog Category was deleted',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
            ]);

            $this->dispatch('refreshParent');
            // This will hide the modal in the frontend
            $this->dispatch('closeDeleteModal');
            return redirect()->route('backend.blogcategories.index')->with(['warning' => 'Delete Blog Category  was successfully!']);
        }
    }

    // function remove image
    private function removeImage($image)
    {
        if (!empty($image)) {
            $imagePath     = $this->uploadPath . '/' . $image;

            $ext           = substr(strrchr($image, '.'), 1);

            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;


            if (file_exists($imagePath)) unlink($imagePath);
            if (file_exists($thumbnailPath)) unlink($thumbnailPath);
        }
    }

    public function render()
    {
        return $this->view( [
        'dataperformance' => $this->performance,
        'title_page' => 'Prestasi',
        ]);
    }
};
?>

<div>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">{{$title_page}}</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">
                                <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Blog
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
                <h4 class="box-title">{{$title_page}}</h4>
                <div class="box-controls pull-right">
                    <a  href="{{ route('backend.performance.create') }}" class="btn btn-primary btn-sm"> <i class="fa fa-plus" aria-hidden="true"></i> {{ __('Add') }}</a>
                </div>
            </div>
            <div class="box-body">
                <x-flash-message/>
                <div class="row pt-15">
                    <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                        <select wire:model.live="paginate" name="" id="" class="w-auto form-control-sm custom-select">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="text-right ms-auto col-md-5 col-lg-5 col-12 ">
                        <div class="form-group">
                            <div class="mb-3 input-group">
                                <input type="search" wire:model.live.debounce.500ms="search" class="form-control" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" class="float-right form-control" placeholder="Search by ...">
                                <span class="input-group-text"><i class="ti-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                        @if ($dataperformance->count())
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover">
                                <tbody>
                                    <tr>
                                        <th width="4%" scope="col">#</th>
                                        @foreach ($headersTable as $key => $value)
                                        <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                            {{ $value }}
                                            @if ($sortColumn == $key)
                                            <span>{!! $sortDirection == 'asc' ? '&#8659' : '&#8657' !!}</span>
                                            @endif
                                        </th>
                                        @endforeach
                                        <th scope="col" width="20%" class="text-center">Action</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    @foreach ($dataperformance as $no => $item)
                                    <tr class="@if ($this->isChecked($item->id)) table-primary @endif">
                                        <th class="text-right" scope="row">{{ $no + $dataperformance->firstItem() }}</th>
                                        <td width="10%">
                                            <img class="rounded w-80" src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/assets/images/no_image.png' }}" alt="...">
                                        </td>
                                        <td>

                                            {{ !empty($item->title) ? $item->title : '' }}
                                            <br>

                                            <i class="fa fa-user ms-2 me-2" aria-hidden="true"></i>
                                            {{ $item->author->name }}

                                        </td>
                                        <td class="text-center align-midle">
                                            <a title="Edit" class="btn btn-xs btn-warning edit-row" href="{{ route('backend.performance.edit', $item->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button wire:click="selectItem('{{ $item->id }}' , 'delete')" class="mx-1 my-1 btn btn-xs btn-danger" title="Send to Trash">
                                                <i class="fa fa-trash "></i>
                                            </button>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12 text-start small text-muted">
                                @if ($dataperformance->total() > 10)
                                {{ $dataperformance->links() }}
                                @else
                                Page : {{ $dataperformance->currentPage() }} | Show {{ $dataperformance->count() }} data
                                of {{ $dataperformance->total() }}
                                @endif
                            </div>
                        </div>
                        @else
                        <hr>
                        <h2 style="color: red" class="text-center">Data Prestasi belum tersedia</h2>
                        @endif
                    </div>
                </div>
                <div class="modal center-modal fade" id="modalFormDelete" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Send to Trash Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <h3>Do you wish to continue?</h3>
                                </p>
                            </div>
                            <div class="modal-footer modal-footer-uniform">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button wire:click="delete" class="btn btn-primary float-end">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


