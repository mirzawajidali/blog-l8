<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Blog L8 - Lifestyle Blog Template</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/blog/img/core-img/favicon.ico')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/blog/style.css')}}">
</head>

    {{-- Main Content --}}
    @yield('content')

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('public/blog/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('public/blog/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('public/blog/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('public/blog/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('public/blog/js/active.js')}}"></script>
</body>
</html>
