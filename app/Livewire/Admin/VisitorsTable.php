<?php

namespace App\Livewire\Admin;

use App\Livewire\WithBulkAction;
use App\Livewire\WithSorting;
use App\Models\Visitor;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class VisitorsTable extends Component
{
    use WithPagination, WithSorting, WithBulkAction;

    public $search = '';
    public $tent_no = '';

    public $visitorId;

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
        $query = Visitor::tableSearch($this->search, ['mobile', 'firstname', 'lastname', 'fullname', 'national_code'])
            ->when($this->tent_no,function($query, $status) { 
                $query->SearchTent($status);})
            ->orderBy($this->sortField, $this->sortDirection);
        return $this->applySorting($query);
    }

    public function leavedAt($id)
    {
        Visitor::find($id)->update([
            'leaved_at' => Carbon::now()
        ]);

        $this->dispatch('visitor-exited'); 
    }

    public function exitedAt($id)
    {
        $array = [];

        if(!is_null(Visitor::find($id)->exited_at)) {
            foreach(json_decode(Visitor::find($id)->exited_at) as $item) {
                array_push($array, $item);
            }
        }

        array_push($array, Carbon::now());
        
        Visitor::find($id)->update([
            'exited_at' => $array
        ]);

        $this->dispatch('visitor-leaved'); 

    }

    public function showModal($id)
    {
        $this->visitorId = $id;
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
        return view('livewire.admin.visitors-table', [
            'objects' => $this->rows,
            'counts' => $this->rowsCount
        ]);
    }
}
