@extends('layouts.auth')
@section('title', 'Verify Email')

@section('content')
<div class="text-center mb-11">
    <h1 class="text-dark fw-bolder mb-3">Verify Your Email</h1>
    <div class="text-gray-500">We have sent a verification link to your email.</div>
</div>

@if (session('status') == 'verification-link-sent')
    <div class="alert alert-success">
        A new verification link has been sent to your email address.
    </div>
@endif

<form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </div>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <div class="d-grid">
        <button type="submit" class="btn btn-light">Logout</button>
    </div>
</form>
@endsection
