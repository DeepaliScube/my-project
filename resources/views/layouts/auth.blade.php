<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title', 'Auth') | ERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Metronic Assets -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!-- Left side with branding -->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center" 
                 style="background-image: url('{{ asset('assets/media/misc/auth-bg.png') }}')">
                <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
                    <a href="{{ url('/') }}">
                        <img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}" class="h-40px mb-5"/>
                    </a>
                    <h1 class="text-white fs-2qx fw-bold text-center mb-7">ERP System</h1>
                </div>
            </div>

            <!-- Right side (form content) -->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
</body>
</html>
