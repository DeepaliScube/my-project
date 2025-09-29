@extends('layouts.auth')
@section('title', 'Reset Password')

@section('content')
<form method="POST" action="{{ route('password.store') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Reset Password</h1>
    </div>

    <div class="fv-row mb-8">
        <input type="email" name="email" value="{{ old('email', $request->email) }}" placeholder="Email"
               class="form-control bg-transparent @error('email') is-invalid @enderror" required autofocus>
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fv-row mb-8">
        <input type="password" name="password" placeholder="New Password"
               class="form-control bg-transparent @error('password') is-invalid @enderror" required>
        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fv-row mb-8">
        <input type="password" name="password_confirmation" placeholder="Confirm New Password"
               class="form-control bg-transparent" required>
    </div>

    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </div>
</form>
@endsection
