<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Cookie;

class EmployeesController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('employees/employees', compact('data'));
    }

    public function jobFilter(Request $request){

        $job = strtolower($request->input('jobFilter'));
        $jobs = Employee::where('job', $job)->get();

        Cookie::queue(Cookie::make('job', $job));

        if(count($jobs) > 0){
            return view('employees/employeesByJob', compact('jobs'));
        }else{
            Alert::warning('This job does not exist!', 'Please insert a valid job.')->persistent(true,false);
            return redirect('employees');
        }

    }
}
