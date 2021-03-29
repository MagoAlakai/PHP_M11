<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use RealRashid\SweetAlert\Facades\Alert;

class DeleteController extends Controller
{
    public function delete($id){

        $employee = Employee::find($id);
        $name = $employee->name;

        $employee->delete();

        Alert::success('You have deleted the employee: '.$name.'.')->persistent(true,false);
        return redirect('employees');
    }
}
