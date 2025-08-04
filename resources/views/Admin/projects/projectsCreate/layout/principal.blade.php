<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/projects-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>@yield('title')</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.ico')}}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css')}}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/jquery.steps.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/quill.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/datepicker.min.css')}}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/theme.min.css')}}">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

    @include('Admin.projects.projectsCreate.parcial.header')
    @include('Admin.projects.projectsCreate.parcial.menu')
    <main class="nxl-container">
        @yield('content-projectsCreate')
        @include('Admin.projects.projectsCreate.parcial.footer')
    </main>
    @include('Admin.projects.projectsCreate.parcial.thema')

    <!--! BEGIN: Vendors JS !-->
    <script src="{{ url('assets/vendors/js/vendors.min.js')}}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ url('assets/vendors/js/jquery.steps.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/jquery.validate.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/select2.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/select2-active.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/quill.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/datepicker.min.js')}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min.js')}}"></script>
    <script src="{{ url('assets/js/projects-create-init.min.js')}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/theme-customizer-init.min.js')}}"></script>
    <!--! END: Theme Customizer !-->
</body>


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/projects-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:46 GMT -->

</html>