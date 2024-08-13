<?php

namespace App\Livewire;

trait WithSorting {
    public $sortField = "created_at";
    public $sortDirection = 'desc';
    /**
     * sorting function
     *
     * @param string $field
     * @return void
     */
    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field
            ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
            : 'asc';
        
        $this->sortField = $field;
    }
    /**
     * sorting query in datatables
     *
     * @param object $query
     * @return object
     */
    public function applySorting($query)
    {
        return $query->orderBy($this->sortField, $this->sortDirection);
    }
}