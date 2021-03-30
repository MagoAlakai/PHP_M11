@extends('layout')

@section('content')

<h3 class="container text-center mt-5 mb-3">User Login</h3>

<form method="POST" class="row col-8 mx-auto form">
    @csrf
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Full Name</label>
        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-outline-primary col-8 mx-auto">Login</button>
  </form>

  <div class="mt-3 d-flex justify-content-center">
    <a class="" href="password">Did you forget your password?</a>
</div>

@endsection
