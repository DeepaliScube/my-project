@extends('layouts.auth')
@section('title', 'Register')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Create an Account</h1>
    </div>

    <div class="fv-row mb-8">
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name"
               class="form-control bg-transparent @error('name') is-invalid @enderror" required>
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fv-row mb-8">
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
               class="form-control bg-transparent @error('email') is-invalid @enderror" required>
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fv-row mb-8">
        <input type="password" name="password" placeholder="Password"
               class="form-control bg-transparent @error('password') is-invalid @enderror" required>
        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fv-row mb-8">
        <input type="password" name="password_confirmation" placeholder="Confirm Password"
               class="form-control bg-transparent" required>
    </div>

    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
@endsection
