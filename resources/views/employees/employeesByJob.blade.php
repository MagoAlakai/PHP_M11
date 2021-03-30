@extends('layout')
@section('title', 'Catalog')

@section('content')

<h3 class="container text-center mt-5">Employees List</h3>

@if(Cookie::get('job'))
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
                @foreach($jobs as $job)
                <tr class="align-middle">
                    <td><strong>{{$job->id}}</strong></td>
                    <td>{{$job->name}}</td>
                    <td>{{$job->email}}</td>
                    <td>{{$job->phone}}</td>
                    <td>{{$job->department}}</td>
                    <td>{{$job->job}}</td>
                    @if(Cookie::get('admin') == true)
                    <td class="d-inline-flex justify-content-center align-items-center">
                        <a href="show/{{$job->id}}"><i class="far fa-lg fa-eye me-3" style="color:rgb(86, 170, 80)";></i></a>
                        <a href="edit/{{$job->id}}"><i class="far fa-lg fa-edit"></i></a>
                        <form action="delete/{{$job->id}}" method="POST" type="submit">
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

        <div class="container d-flex justify-content-center">
            <a href="{{url('/employees')}}"><button type="button" class="btn btn-outline-primary mt-4">Back to Employees List</button></a>
        </div>
    </div>

@endif

@endsection
