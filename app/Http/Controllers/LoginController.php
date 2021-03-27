<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function check(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
          ]);

        $name = $request->input('name');
        $password = $request->input('password');

        Cookie::queue(Cookie::make('login', $request->name, 60));

        if($name !== null && $password !== null){
            Alert::success('Your login has been successful!', 'You will be redirect to your personal account!')->persistent(true,false);
            return redirect('employees');
        }else{
            return redirect('error404');
        }
    }
}
