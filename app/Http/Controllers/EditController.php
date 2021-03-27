<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EditController extends Controller
{
    public function index($id){
        return view('employees/edit', compact('id'));
    }

    public function edit(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'department' => 'required',
            'job' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('password');
        $department = $request->input('password');
        $job = $request->input('password');

        if($name !== null && $email !== null && $phone !== null && $department !== null && $job !== null){
            Alert::success('The update has been successful!')->persistent(true,false);
            return redirect('employees');
        }else{
            return redirect('error404');
        }

    }
}
