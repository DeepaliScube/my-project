<div id="kt_header" class="header align-items-stretch">
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!-- Logo -->
        <div class="d-flex align-items-center">
            <a href="{{ route('dashboard') }}">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo-1.svg') }}" class="h-25px"/>
            </a>
        </div>

        <!-- User Menu -->
        <div class="d-flex align-items-center">
            <span class="fw-bold">{{ Auth::user()->name ?? 'Guest' }}</span>
            <form method="POST" action="{{ route('logout') }}" class="ms-3">
                @csrf
                <button class="btn btn-sm btn-light" type="submit">Logout</button>
            </form>
        </div>
    </div>
</div>
