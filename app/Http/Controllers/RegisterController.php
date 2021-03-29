<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirmPassword' => 'required | same:password',
        ], [
            'email.unique' => 'This mail is already registered!',
            'confirmPassword.same' => "The two passwords don't match!"
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = $request->input('admin');

        if($admin == 'Yes'){
            $admin_verified = true;
        }elseif($admin == 'No'){
            $admin_verified = false;
        };

        Cookie::queue(Cookie::make('login', $name, 60));
        Cookie::queue(Cookie::make('admin', $admin_verified, 60));

        if($name !== null && $email !== null && $password !== null){
            User::create([
                'name'=> $name,
                'email'=> $email,
                'password'=> bcrypt($password),
                'admin'=> $admin_verified,
            ]);

            Alert::success('Your registration has been successful!', 'You will be redirect to your account page!')->persistent(true,false);
            return redirect('employees');
        }else{
            return redirect('error404');
        }
    }
}
