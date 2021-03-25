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
            'author' => 'required',
            'year' => 'required|integer'
          ],[
              'name.required' => 'El campo name es obligatorio!',
              'year.integer' => 'Please insert only numbers!',
              'year.required' => 'The year field is mandatory!'
          ]);

        $name = $request->input('name');
        $author = $request->input('author');
        $year = $request->input('year');
        $newBook = [
            'name' => $name,
            'author' => $author,
            'year' => $year];

        return view('employees')->with($newBook);

    }
}
