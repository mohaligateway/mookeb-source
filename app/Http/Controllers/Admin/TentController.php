<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        return view('admin.tent.index');
    }
}
