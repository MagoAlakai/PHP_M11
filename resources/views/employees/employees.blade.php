@extends('layout')
@section('title', 'Catalog')

@section('content')

<h3 class="container text-center mt-5">Employees List</h3>

<div class="container mt-4">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone number</th>
            <th scope="col">Department</th>
            <th scope="col">Job</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $employee)
            <tr class="align-middle">
                <th scope="row">1</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->department}}</td>
                <td>{{$employee->job}}</td>
                <td class="d-inline-flex">
                    <a href="employees/show/id"><i class="far fa-lg fa-eye me-4 " style="color:rgb(86, 170, 80)";></i></a>
                    <a href="employees/edit/id"><i class="far fa-lg fa-edit me-4"></i></a>
                    <a href="employees/delete/id"><i class="far fa-lg fa-trash-alt me-4" style="color:rgb(209, 64, 64);"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

      <div class="container d-flex justify-content-center">
        <a href="employees/create"><button type="button" class="btn btn-lg btn-primary mt-4">Create new employee</button></a>
      </div>
</div>

@endsection
