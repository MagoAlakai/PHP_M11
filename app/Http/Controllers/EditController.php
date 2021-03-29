<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Employee;

class EditController extends Controller
{
    public function index($id){

        $employee = Employee::find($id);
        return view('employees/edit', compact('employee'));
    }

    public function edit(Request $request, $id) {
        $employee = Employee::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,'.$employee->id,
            'phone' => 'required|integer',
            'department' => 'required',
            'job' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $department = $request->input('department');
        $job = $request->input('job');

        if($name !== null && $email !== null && $phone !== null && $department !== null && $job !== null){

            $employee->update($request->all());
            Alert::success('You have updated the employee: '.$name.'.')->persistent(true,false);
            return redirect('employees');
        }else{
            return redirect('error404');
        }
    }
}

