<head>
    <meta charset="utf-8"/>
    <title>@yield('title', 'ERP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO & Social -->
    <meta content="follow, index" name="robots"/>
    <link href="{{ url()->current() }}" rel="canonical"/>
    <meta content="Metronic - ERP" name="description"/>
    <meta content="@keenthemes" name="twitter:site"/>
    <meta content="@keenthemes" name="twitter:creator"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="ERP System" name="twitter:title"/>
    <meta content="ERP Application with Metronic" name="twitter:description"/>
    <meta content="{{ asset('assets/media/app/og-image.png') }}" name="twitter:image"/>
    <meta content="en_US" property="og:locale"/>
    <meta content="website" property="og:type"/>
    <meta content="ERP System" property="og:site_name"/>
    <meta content="ERP System" property="og:title"/>
    <meta content="ERP Application with Metronic" property="og:description"/>
    <meta content="{{ asset('assets/media/app/og-image.png') }}" property="og:image"/>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/app/apple-touch-icon.png') }}"/>
    <link rel="icon" sizes="32x32" type="image/png" href="{{ asset('assets/media/app/favicon-32x32.png') }}"/>
    <link rel="icon" sizes="16x16" type="image/png" href="{{ asset('assets/media/app/favicon-16x16.png') }}"/>
    <link rel="shortcut icon" href="{{ asset('assets/media/app/favicon.ico') }}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>

    <!-- Vendor Styles -->
    <link href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet"/>

    <!-- Metronic Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
</head>
@stack('styles')