<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('material-dashboard-master/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('material-dashboard-master/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link href="{{ asset('material-dashboard-master/assets/css/material-dashboard.css') }}" rel="stylesheet" />
    @stack('styles')
</head>

<body class="@yield('body-class', 'bg-gray-200')">
    @yield('navbar')
    
    <main class="main-content mt-0">
        @yield('content')
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('material-dashboard-master/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('material-dashboard-master/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('material-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('material-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    @stack('scripts')
</body>
</html>