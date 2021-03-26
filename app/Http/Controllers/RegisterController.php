<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirmPassword' => 'required',
          ]);

        $name = $request->input('name');

        if($name !== null){
            //TODO: solucionar alerts Sweet Alert
            Alert::success('Your registration has been successful!', 'You Will be redirect to the login page!');
        }else{
            return redirect('error404');
        }
        //TODO: solucionar redireccion
        return redirect('login');
    }
}
