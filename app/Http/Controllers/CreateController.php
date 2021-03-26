<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        return view('employees/create');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'department' => 'required',
            'job' => 'required',
          ]);

        return view('employees');

    }
}
