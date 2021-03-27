<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('employees/employees', compact('data'));
    }
}
