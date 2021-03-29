<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Employee;

class CreateController extends Controller
{
    public function index(){
        return view('employees/create');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
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
            Employee::create([
                'name'=> $name,
                'email'=> $email,
                'phone'=> $phone,
                'department'=> $department,
                'job'=> $job,
            ]);
              Alert::success('The new employee has been created successfully!')->persistent(true,false);
              return redirect('employees');
          }else{
              return redirect('error404');
          }
    }
}
