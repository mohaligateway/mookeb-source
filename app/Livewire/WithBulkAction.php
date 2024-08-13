<?php

namespace App\Livewire;

trait WithBulkAction {
    public $selectPage = false;
    public $selectAll = false;
    public $selected = [];
    /**
     * updating selected page after selecting
     *
     * @param string $value
     * @return void
     */
    public function updatedSelectPage($value)
    {
        if($value) return $this->selectPageRows();
        $this->selected = [];
    }
    /**
     * initialize in render
     *
     * @return void
     */
    public function initializeWithBulkAction()
    {
        //
    }
    /**
     * select all the row of the table
     *
     * @return void
     */
    public function selectAll()
    {
        $this->selectAll = true;
    }
    /**
     * update selected page
     *
     * @return void
     */
    public function updatedSelected()
    {
        $this->selectAll = false;
        $this->selectPage = false;
    }
    /**
     * get the selected rows query
     *
     * @return object
     */
    public function getSelectedRowsQueryProperty()
    {
        if(!empty($this->selected)) {
            return (clone $this->rowsQuery)
                ->unless($this->selectAll, fn($query) => $query->whereIn('sab_users.id', $this->selected));
        }
    }
    /**
     * select page rows
     *
     * @return void
     */
    public function selectPageRows()
    {
        $this->selected = $this->rows->pluck('id')->map(fn($id) => (string) $id);
    }
}