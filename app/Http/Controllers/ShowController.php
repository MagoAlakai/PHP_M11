<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index($id){
        return view('employees/show', compact('id'));
    }
}
