<?php

namespace App\Livewire\Backend\Statistic;

use App\Models\Statistic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
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
    public $sortDirection = 'asc';
    public $sortColumn    = 'title';
    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $amount;
    public $icon;
    public $class;
    public $content;
    public $editingStatisticIcon;
    public $editingStatisticAmount;
    public $editingStatisticClass;
    public $editingStatisticcontent;

    #[Rule('required|min:2|unique:statistics,title')]
    public $title;

    public $editingStatisticID;

    #[Rule('required|min:2|unique:statistics,title')]
    public $editingStatisticTitle;

    public function store()
    {
        $validateData = [
            'title' => 'required|min:2|unique:statistics,title',
        ];

        $this->validate($validateData);
        // Default data
        $data = [
            'title'   => $this->title,
            'slug'    => Str::slug($this->title),
            'icon'    => $this->icon,
            'amount'  => $this->amount,
            'content' => $this->content,
            'class'   => $this->class,
            'author_id'   => Auth::id(),

        ];

        $statistic = Statistic::create($data);

        // even listener -> dispatch
        $this->reset('title');
        $this->reset('icon');
        $this->reset('amount');
        $this->reset('content');
        $this->reset('class');
        $this->statusUpdate = false;
        $this->dispatch('statisticStored', $statistic);
        // This is to reset our public variables
    }

    #[On('statisticStored')]
    public function updateList($statistic)
    {
        session()->flash('success', 'Add Statistic Successfully');
        // dd($statistic);
    }

    #[On('statisticUpdated')]
    public function statisticUpdated()
    {
        // dd('Update');
        session()->flash('warning', 'Update Statistic  Successfully');
    }

    public function edit($statisticID)
    {
        $this->statusUpdate       = true;
        $this->editingStatisticID = $statisticID;

        $model = Statistic::find($this->editingStatisticID);

        $this->editingStatisticTitle    = $model->title;
        $this->editingStatisticIcon    = $model->icon;
        $this->editingStatisticAmount  = $model->amount;
        $this->editingStatisticcontent = $model->content;
        $this->editingStatisticClass   = $model->class;
    }

    public function cancelEdit()
    {
        $this->statusUpdate = false;
        $this->search = '';
        $this->resetPage();

    }

    public function update()
    {
        // $this->validateOnly('editingStatisticName');

        $statistic = Statistic::find($this->editingStatisticID);
        $data = [
            'title' => $this->editingStatisticTitle,
            'slug'  => Str::slug($this->editingStatisticTitle),
            'icon' => $this->editingStatisticIcon,
            'amount' => $this->editingStatisticAmount,
            'content' => $this->editingStatisticcontent,
            'class' => $this->editingStatisticClass,
            'updated_by'      => Auth::id(),

        ];
        $statistic->update($data);

        $this->reset('editingStatisticTitle', 'title');
        $this->reset('editingStatisticIcon', 'icon');
        $this->reset('editingStatisticAmount', 'amount');
        $this->reset('editingStatisticcontent', 'content');
        $this->reset('editingStatisticClass', 'class');

        $this->statusUpdate = false;
        $this->dispatch('statisticUpdated');
    }

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'title' => 'Title',
            'amount' => 'Amount',
            'icon' => 'Icon',
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

    public function getStatisticQueryProperty()
    {

        return Statistic::orderBy($this->sortColumn, $this->sortDirection)
            ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getStatisticProperty()
    {
        return $this->statisticQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->statistic->pluck('id')->map(fn ($item) => (string) $item)->toArray();
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
        $this->checked = $this->statisticQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function statisticStored($statistic)
    {
        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Success!',
            'timer' => 5000,
            'icon' => 'success',
            'text' => 'Statistic ' . $statistic['title'] . ' was Stored',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton' => false,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
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
        Statistic::whereKey($this->checked)->delete();

        $this->checked = [];
        $this->selectAll = false;
        $this->selectPage = false;
        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Deleted Success!',
            'timer' => 4000,
            'icon' => 'success',
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
        $masterstatistic = Statistic::where('masterstatus', 1)->first();

        $postsubcategory = Statistic::find($this->selectedItem);

        if ($postsubcategory->masterstatus == config('cms.default_masterstatistic')) {
            $this->dispatch('swal:modaldelete', [
                'title' => 'Importan!',
                'timer' => 4000,
                'type'  => 'warning',
                'text'  => 'Statistic cannot deleted',
                // 'toast'=>true, // Jika mau menggunakan toas
                // 'position'=>'top-right', // Jika mau menggunakan toas
                'showConfirmButton' => true,
                'showCancelButton'  => false,
            ]);
            $this->dispatch('refreshParent');
            $this->dispatch('closeDeleteModal');
        } else {

            if ($postsubcategory->posts->count() <> 0) {
                // Update posts yang postsubcategory_id dihapus ke postsubcategory_id master

                // Poststatistics::where('postsubcategory_id', $postsubcategory->id)->update(['postsubcategory_id' => $masterstatistic->id]);

            }

            Statistic::destroy($this->selectedItem);

            // Sweet alert
            $this->dispatch('swal:modal', [
                'title' => 'Deleted Success!',
                'timer' => 4000,
                'icon'  => 'success',
                'text'  => 'Statistic was deleted',
                // 'toast'=>true, // Jika mau menggunakan toas
                // 'position'=>'top-right', // Jika mau menggunakan toas
                'showConfirmButton' => true,
                'showCancelButton'  => false,
            ]);

            $this->dispatch('refreshParent');
            // This will hide the modal in the frontend
            $this->dispatch('closeDeleteModal');
        }
    }

    #[Title('Statistic List')]
    public function render()
    {
        return view('livewire.backend.statistic.index', [
            'datastatistic' => $this->statistic,
            'title' => 'Statistic List'
        ]);
    }

}