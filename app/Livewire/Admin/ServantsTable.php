<?php

namespace App\Livewire\Admin;

use App\Livewire\WithBulkAction;
use App\Livewire\WithSorting;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ServantsTable extends Component
{
    use WithPagination, WithSorting, WithBulkAction;

    public $filters = [
        'ban' => '',
        'search' => '',
        'role' => '',
        'active' => '',
        'province' => '',
        'state' => '',
        'beginDate' => '',
        'endDate' => '',
        'state' => '',
        'organization' => '',
        'training' => '',
        'rolePermission' => ''
    ];

    /**
     * perpage default show
     *
     * @var integer
     */
    public $perpage = 10;

    /**
     * add query string to searching content
     *
     * @var array
     */
    protected $queryString = ['sortField', 'sortDirection' => 'desc'];

    /**
     * update pagination after search
     *
     * @return void
     */
    public function updatingSearch() { $this->resetPage(); }

    /**
     * update pagination after filter
     *
     * @return void
     */
    public function updatingFilters() { $this->resetPage(); }
    
    /**
     * property for query to the database
     *
     * @return void
     */
    public function getRowsQueryProperty()
    {
        $query = User::whereIsAdmin(1)
            ->tableSearch($this->filters['search'], ['mobile', 'firstname', 'lastname', 'fullname', 'national_code'])
            ->orderBy($this->sortField, $this->sortDirection);
        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->rowsQuery->paginate($this->perpage);
    }

    /**
     * count all rows
     *
     * @return void
     */
    public function getRowsCountProperty()
    {
        return $this->rowsQuery->count();
    }

    /**
     * reset all the elements of filter
     *
     * @return void
     */
    public function resetFilters() { $this->reset('filters'); }

    public function render()
    {
        return view('livewire.admin.servants-table', [
            'objects' => $this->rows,
        ]);
    }
}
