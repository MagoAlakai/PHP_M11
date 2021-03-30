@extends('layout')
@section('title', 'Show')

@section('content')

<h3 mt-2 class="text-center mb-4 mt-5">Employee Details</h3 mt-2>
<hr>

<div class="container mt-4">
    <ul class="row d-block">
        <li class="col-3 mt-2 mx-auto"><strong>Name: </strong>{{$employee->name}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Email: </strong>{{$employee->email}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Phone: </strong>{{$employee->phone}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Department: </strong>{{$employee->department}}</li>
        <li class="col-3 mt-2 mx-auto"><strong>Job: </strong>{{$employee->job}}</li>
    </ul>

    <div class="container d-flex justify-content-center">
        <a href="{{url('/employees')}}"><button type="button" class="btn btn-outline-primary mt-4">Back to Employees List</button></a>
    </div>
</div>

@endsection
