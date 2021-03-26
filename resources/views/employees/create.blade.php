@extends('layout')
@section('title', 'Create')

@section('content')

<h3 class="container text-center mt-5 mb-4">Create Employee</h3>

<form method="POST" class="row col-8 mx-auto">
    @csrf
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-4">
            <label class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--TODO:averiguar cómo seleccionar de department y jobs ya creados.-->
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-4">
            <label class="form-label">Department</label>
            <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department">
            @error('department')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Job</label>
            <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job">
            @error('job')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary col-8 mx-auto">Submit</button>
  </form>

@endsection
