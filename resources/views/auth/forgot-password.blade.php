@extends('layouts.auth')
@section('title', 'Forgot Password')

@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Forgot Password?</h1>
        <div class="text-gray-500">Enter your email to reset your password</div>
    </div>

    <div class="fv-row mb-8">
        <input type="email" name="email" placeholder="Email"
               class="form-control bg-transparent @error('email') is-invalid @enderror" required>
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </div>
</form>
@endsection
