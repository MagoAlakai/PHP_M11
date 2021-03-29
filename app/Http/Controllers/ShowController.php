<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ShowController extends Controller
{
    public function index($id){

        $employee = Employee::find($id);

        return view('employees/show', compact('employee'));
    }
}
