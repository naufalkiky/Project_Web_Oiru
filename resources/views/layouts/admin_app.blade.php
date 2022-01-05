<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title') | Admin</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container mt-3 mx-auto py-3 mb-5">
        @yield('admin_content')
    </div>

    @include('includes.admin_footer')
    
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>