<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title') | BarterBage</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/logo/title-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

</head>
<body class="d-flex flex-column min-vh-100">
    @include('includes.header')
    
        @yield('content')

    @include('includes.dashboard_footer')

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>