<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index($id){
        return "Deleting employee $id";
    }

    public function delete(Request $request){
        return view('employees');
    }
}
