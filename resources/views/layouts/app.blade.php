<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title') | Barter Bage</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('includes.header')

    <div class="container">
        @yield('content')
    </div>

    @include('includes.footer')

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>