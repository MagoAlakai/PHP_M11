<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('employees');
    }
}
