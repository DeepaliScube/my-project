@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
        <div class="text-gray-500 fw-semibold fs-6">Enter your credentials</div>
    </div>

    <!-- Email -->
    <div class="fv-row mb-8">
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" 
               class="form-control bg-transparent @error('email') is-invalid @enderror" required autofocus>
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <!-- Password -->
    <div class="fv-row mb-3">
        <input type="password" name="password" placeholder="Password" 
               class="form-control bg-transparent @error('password') is-invalid @enderror" required>
        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <!-- Remember & Forgot -->
    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
            <label class="form-check-label" for="remember_me">Remember me</label>
        </div>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="link-primary">Forgot Password?</a>
        @endif
    </div>

    <!-- Submit -->
    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary">Sign In</button>
    </div>
</form>

<div class="d-grid mb-10">
   <a href="{{ route('register') }}">Don't have an account</a>
</div>
@endsection
