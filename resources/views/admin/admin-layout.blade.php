<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
    {{-- Style --}}
    @include('admin.includes.style')
</head>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    {{-- Header --}}
    @include('admin.includes.header')
    {{-- Sidebar --}}
    @include('admin.includes.sidebar')
    {{-- Main Content--}}
    @yield('content')
    {{-- Footer --}}
    @include('admin.includes.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    {{-- Script --}}
    @include('admin.includes.script')
    </body>
</html>
