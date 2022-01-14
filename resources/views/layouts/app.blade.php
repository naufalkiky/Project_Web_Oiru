<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title') | BarterBage</title>

    <link rel="shortcut icon" type="image/png" href="https://drive.google.com/thumbnail?id=1OUnWMKBH_FCLq3D0keAbvMu_BFAQ_9y2">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('includes.header')

    <div class="container mt-3 mx-auto py-3 mb-5">
        @yield('content')
    </div>

    @include('includes.footer')

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>