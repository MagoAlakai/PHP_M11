<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordController extends Controller
{
    public function index(){
        return view('auth/password');
    }

    public function store(Request $request){

        $request->validate([
            'password' => 'required',
            'newpassword' => 'required | same:password',
        ],[
            'newpassword.required' => 'The new password field is required',
            'newpassword.same' => "The two passwords don't match!"
        ]);

        $password = $request->input('newpassword');

        if($password !== null){
            Alert::success('Your password has been updated successfully!')->persistent(true,false);
            return redirect('employees');
        }else{
            return redirect('error404');
        }
        return view('auth/password');
    }
}
