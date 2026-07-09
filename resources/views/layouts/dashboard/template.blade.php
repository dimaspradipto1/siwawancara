<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logouis.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logouis.png') }}">
    <title>
        Dashboard wawancara
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.4') }}" rel="stylesheet" />

    {{--  datatables CSS  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.bootstrap5.css">

    <style>
        /* UIS Green Colors */
        .bg-uis-green { background-color: #077c39 !important; color: white !important; }
        .text-uis-green { color: #077c39 !important; }
        .btn-uis-green { background-color: #077c39 !important; color: white !important; border-color: #077c39 !important; }
        .btn-uis-green:hover, .btn-uis-green:focus, .btn-uis-green:active { background-color: #06662f !important; color: white !important; border-color: #06662f !important; }

        @media (min-width: 768px) {
            .w-md-auto {
                width: auto !important;
            }
        }

        /* Override Pagination Active Color to UIS Green */
        .page-item.active .page-link, 
        .pagination .page-item.active .page-link,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.active > .page-link {
            background-color: #077c39 !important;
            border-color: #077c39 !important;
            color: #ffffff !important;
            background-image: none !important;
            box-shadow: 0 3px 5px -1px rgba(7, 124, 57, 0.2), 0 2px 4px -1px rgba(7, 124, 57, 0.07) !important;
        }

        /* Fix double scrollbar */
        html, body {
            overflow-x: hidden !important;
        }
        
        @media (min-width: 1200px) {
            .main-content {
                overflow-y: hidden !important;
            }
            .g-sidenav-hidden .navbar-vertical .sidenav-mini-hide {
                opacity: 0;
                width: 0;
                height: 0;
                overflow: hidden;
                margin: 0 !important;
                padding: 0 !important;
            }
            .g-sidenav-hidden .navbar-vertical:hover .sidenav-mini-hide {
                opacity: 1;
                width: auto;
                height: auto;
                margin-top: 1rem !important;
                padding-left: 1.5rem !important;
                margin-left: 0.5rem !important;
            }
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('layouts.dashboard.sidebar')


    <main class="main-content position-relative mt-1 border-radius-lg ">
        <!-- Navbar -->
        {{-- @include('layouts.dashboard.navbar') --}}
        <!-- End Navbar -->
        @include('sweetalert::alert')
        @yield('content')
        @include('layouts.dashboard.footer')

    </main>


    </div>
    <!--   Core JS Files   -->
    {{-- Load jQuery first before any other scripts --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/63b8672806.js" crossorigin="anonymous"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>

    {{-- datatables - jQuery already loaded above --}}
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.bootstrap5.js"></script>
    {{-- end datatables --}}

    {{-- Fix Sidebar Toggle --}}
    <script>
        $(document).ready(function() {
            $('#iconNavbarSidenav').on('click', function(e) {
                // e.preventDefault(); // Keep if necessary, but don't toggle g-sidenav-pinned on mobile to avoid conflicting with soft-ui-dashboard.min.js
                if ($(window).width() >= 1200) {
                    $('body').toggleClass('g-sidenav-hidden');
                }
            });
        });
    </script>
    @stack('scripts')
    @stack('style')
</body>

</html>
