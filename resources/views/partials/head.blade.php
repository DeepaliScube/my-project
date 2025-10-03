<head>
    <meta charset="utf-8"/>
    <title>@yield('title', 'ERP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Favicon -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/app/apple-touch-icon.png') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/media/app/favicon-32x32.png') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/media/app/favicon-16x16.png') }}"/> --}}
    {{-- <link rel="shortcut icon" href="{{ asset('assets/media/app/favicon.ico') }}"/> --}}

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/> --}}

    <!-- Vendor Styles -->
    <link href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet"/>

    <!-- Main Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
</head>

@stack('styles')
