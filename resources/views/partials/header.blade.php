<!-- Header -->
<header class="kt-header fixed top-0 z-10 start-0 end-0 flex items-stretch shrink-0 bg-background" data-kt-sticky="true" data-kt-sticky-class="border-b border-border" data-kt-sticky-name="header" id="header">
    <!-- Container -->
    <div class="kt-container-fixed flex justify-between items-stretch lg:gap-4" id="headerContainer">
      
        <!--Megamenu Contaoner-->
        <div class="flex items-stretch" id="megaMenuContainer">

        </div>
        <!--End of Megamenu Contaoner-->
        <!-- Topbar -->
        <div class="flex items-center gap-2.5">
            <!-- Search  -->
            @include('partials.header-icons.search')
            <!-- Notifications -->
            @include('partials.header-icons.notifications')
            <!-- Chat -->
            @include('partials.header-icons.chat')
            <!-- Apps -->
            @include('partials.header-icons.apps')
            <!-- User -->
            @include('partials.header-icons.profile')
        </div>
        <!-- End of Topbar -->
    </div>
    <!-- End of Container -->
</header>
<!-- End of Header -->
