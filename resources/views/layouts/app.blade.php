<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }}</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet" />
    @stack('styles')
</head>

<body class="g-sidenav-show bg-gray-100">
    @include('layouts.partials.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('layouts.partials.navbar')

        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>

    <!-- Core JS Files -->
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
    <script src="{{ asset('assets/js/material-dashboard.js') }}"></script>
    @stack('scripts')
    <script>
        // Initialize sidenav toggle
        document.addEventListener('DOMContentLoaded', function() {
            const iconNavbarSidenav = document.getElementById('iconNavbarSidenav');
            const iconSidenav = document.getElementById('iconSidenav');
            const sidenav = document.getElementById('sidenav-main');
            const body = document.body;

            const className = 'g-sidenav-pinned';

            if (iconNavbarSidenav) {
                iconNavbarSidenav.addEventListener('click', toggleSidenav);
            }

            if (iconSidenav) {
                iconSidenav.addEventListener('click', toggleSidenav);
            }

            function toggleSidenav() {
                if (body.classList.contains(className)) {
                    body.classList.remove(className);
                    iconSidenav.classList.add('d-none');
                } else {
                    body.classList.add(className);
                    iconSidenav.classList.remove('d-none');
                }
            }
        });
    </script>
</body>

</html>
