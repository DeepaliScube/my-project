<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name') }} | @yield('title', 'Home')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="assets/media/app/DIPL-Logo.png" rel="icon" type="image/png"/>
    <!-- Vendor Styles -->
    <link href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet"/>

    <!-- Main Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
</head>

@stack('styles')
