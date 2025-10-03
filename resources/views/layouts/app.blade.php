<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body id="kt_body" class="antialiased flex h-full text-base text-foreground bg-background demo1 kt-sidebar-fixed kt-header-fixed">
    <script>
   const defaultThemeMode = 'light'; // light|dark|system
    let themeMode;

    if (document.documentElement) {
        if (localStorage.getItem('kt-theme')) {
            themeMode = localStorage.getItem('kt-theme');
        } else if (
            document.documentElement.hasAttribute('data-kt-theme-mode')
        ) {
            themeMode =
                document.documentElement.getAttribute('data-kt-theme-mode');
        } else {
            themeMode = defaultThemeMode;
        }

        if (themeMode === 'system') {
            themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches
                ? 'dark'
                : 'light';
        }

        document.documentElement.classList.add(themeMode);
    }
</script>

    <!-- Header -->
    @include('partials.header')
    <div class="flex grow">
            <!-- Sidebar -->
            @include('partials.sidebar')
        </div>
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
    <!-- Main -->
    
    

    <!-- Scripts -->
     @stack('scripts')

   <!-- Scripts -->
  <script src="assets/js/core.bundle.js">
  </script>
  <script src="assets/vendors/ktui/ktui.min.js">
  </script>
  <script src="assets/vendors/apexcharts/apexcharts.min.js">
  </script>
  <script src="assets/js/widgets/general.js">
  </script>
  <script src="assets/js/layouts/demo1.js">
  </script>
  <!-- End of Scripts -->
</body>
</html>
