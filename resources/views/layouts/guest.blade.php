<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <meta charset="utf-8"/>
        <meta content="follow, index" name="robots"/>
        <link href="https://127.0.0.1:8001/metronic-html-starter-kit/layout-1/index.html" rel="canonical"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="@keenthemes" name="twitter:site"/>
        <meta content="@keenthemes" name="twitter:creator"/>
        <meta content="summary_large_image" name="twitter:card"/>
        <meta content="Metronic - Tailwind CSS " name="twitter:title"/>
        <meta content="" name="twitter:description"/>
        <meta content="assets/media/app/og-image.png" name="twitter:image"/>
        <meta content="https://127.0.0.1:8001/metronic-html-starter-kit/layout-1/index.html" property="og:url"/>
        <meta content="en_US" property="og:locale"/>
        <meta content="website" property="og:type"/>
        <meta content="@keenthemes" property="og:site_name"/>
        <meta content="Metronic - Tailwind CSS " property="og:title"/>
        <meta content="" property="og:description"/>
        <meta content="assets/media/app/og-image.png" property="og:image"/>
        <link href="assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>
        <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png"/>
        <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png"/>
        <link href="assets/media/app/favicon.ico" rel="shortcut icon"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
        <link href="assets/vendors/apexcharts/apexcharts.css" rel="stylesheet"/>
        <link href="assets/vendors/keenicons/styles.bundle.css" rel="stylesheet"/>
        <link href="assets/css/styles.css" rel="stylesheet"/>
    </head>
    <body class="antialiased flex h-full text-base text-foreground bg-background demo1 kt-sidebar-fixed kt-header-fixed">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
