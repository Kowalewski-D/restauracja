<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link href="{{ asset('back/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />

    @stack('css')

</head>
<body>
    <div id="app">
        <div class="wrapper ">

            @if(Request::is('admin*'))

                @include('layouts.partial.sidebar')

            @endif

            <div class="main-panel">

                @if(Request::is('admin*'))

                    @include('layouts.partial.topbar')

                @endif

                    @yield('content')

                @if(Request::is('admin*'))

                    @include('layouts.partial.footer')

                @endif
                <script>
                    const x = new Date().getFullYear();
                    let date = document.getElementById('date');
                    date.innerHTML = '&copy; ' + x + date.innerHTML;
                </script>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src="{{ asset('back/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('back/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('back/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="{{ asset('back/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('back/js/plugins/bootstrap-notify.js') }}"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('back/js/material-dashboard.js?v=2.1.0') }}"></script>

    @stack('scripts')

</body>
</html>
