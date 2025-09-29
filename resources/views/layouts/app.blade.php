<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title', 'ERP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Metronic Assets -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">

    <!-- Header -->
    @include('partials.header')

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Main Content -->
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="container-xxl" id="kt_content_container">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
</body>
</html>
