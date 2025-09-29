<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assetsbackend/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assetsbackend/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assetsbackend/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assetsbackend/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('assetsbackend/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assetsbackend/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assetsbackend/images/favicon.png') }}" />
</head>
<body>
    @include('layouts.backend.navbar')
    @include('layouts.backend.sidebar')

    @yield('content')

    <!-- plugins:js -->
<script src="{{ asset('assetsbackend/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- inject:js -->
<script src="{{ asset('assetsbackend/js/off-canvas.js') }}"></script>
<script src="{{ asset('assetsbackend/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assetsbackend/js/template.js') }}"></script>
<script src="{{ asset('assetsbackend/js/settings.js') }}"></script>
<script src="{{ asset('assetsbackend/js/todolist.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- endinject -->

</body>
</html>
