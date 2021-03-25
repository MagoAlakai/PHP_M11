<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index(){
        return view('auth/password');
    }

    public function store(Request $request){

        $request->validate([
            'password' => 'required',
            'newpassword' => 'required',
        ],[
            'newpassword.required' => 'The new password field is required'
        ]);

        $password = $request->input('newpassword');

        if($password !== null){
            echo "
            <div class='container mt-4 w-50 alert alert-success'>
                <p class='text-center'>Your password has been reset!</p>
            </div>
            ";
        }else{
            return redirect('error404');
        }
        return view('auth/password');
    }
}
