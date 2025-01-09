<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog Cms</title>

    <!-- color-modes:js -->
    <script src="{{asset('admin/assets/js/color-modes.js')}}"></script>
    <!-- endinject -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/core/core.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flatpickr/flatpickr.min.css')}}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/fonts/feather-font/css/iconfont.css')}}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo1/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}"/>
    @yield('styles')
</head>
<body>
<div class="main-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.partials.sidebar')
    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.partials.navbar')


        <!-- partial -->

        <div class="page-content">
            @yield('content')

        </div>

        <!-- partial:partials/_footer.html -->
        <footer class="footer d-flex flex-row align-items-center justify-content-between px-4 py-3 border-top small">
            <p class="text-secondary mb-1 mb-md-0">Copyright © 2024 <a href="#" target="_blank">Yasin - Oğuz</a>.</p>
            <p class="text-secondary">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
        </footer>
        <!-- partial -->

    </div>

</div>

<!-- core:js -->
<script src="{{asset('admin/assets/vendors/core/core.js')}}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{asset('admin/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{asset('admin/assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->

</body>
</html>
