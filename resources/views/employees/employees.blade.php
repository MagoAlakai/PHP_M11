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
            @if(Cookie::get('admin') == true)
            <th scope="col">Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
            @foreach($data as $employee)
            <tr class="align-middle">
                <td><strong>{{$employee->id}}</strong></td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->department}}</td>
                <td>{{$employee->job}}</td>
                @if(Cookie::get('admin') == true)
                <td class="d-inline-flex justify-content-center align-items-center">
                    <a href="employees/show/{{$employee->id}}"><i class="far fa-lg fa-eye me-3" style="color:rgb(86, 170, 80)";></i></a>
                    <a href="employees/edit/{{$employee->id}}"><i class="far fa-lg fa-edit"></i></a>
                    <form action="employees/delete/{{$employee->id}}" method="POST" type="submit">
                        @csrf
                        @method("DELETE")
                            <button type="submit" class="btn btn-small btn-outline-link">
                                <i class="far fa-lg fa-trash-alt" style="color:rgb(209, 64, 64);"></i>
                            </button>

                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    @if(Cookie::get('admin') == true)
    <div class="container d-flex justify-content-center">
        <a href="employees/create"><button type="button" class="btn btn-outline-primary mt-4">Create new employee</button></a>
    </div>
    @endif
</div>

@endsection
