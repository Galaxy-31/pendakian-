<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div id="app">
        @include('layouts.mazer.sidebar')
        <div id="main">
            @include('layouts.mazer.header')
            <div class="m-3">
                @yield('content')
            </div>

            @include('layouts.mazer.footer')
        </div>
    </div>
    <script src="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('mazer-1.0.0 (3)/mazer-1.0.0/dist/assets/js/main.js') }}"></script>
</body>

</html>