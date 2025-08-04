<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/proposal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title> @yield('title')</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/dataTables.bs5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify-data.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/quill.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2-theme.min.css')}}">
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
@include('Admin.proposal.proposal.parcial.header')
@include('Admin.proposal.proposal.parcial.menu')

    <main class="nxl-container">
        @yield('content-proposal')
    </main>

@include('Admin.proposal.proposal.parcial.thema')
@include('Admin.proposal.proposal.parcial.footer')

<script src="{{ url('assets/vendors/js/vendors.min.js')}}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ url('assets/vendors/js/circle-progress.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/dataTables.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/dataTables.bs5.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/tagify.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/tagify-data.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/quill.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/select2.min.js')}}"></script>
    <script src="{{ url('assets/vendors/js/select2-active.min.js')}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min.js')}}"></script>
    <script src="{{ url('assets/js/proposal-init.min.js')}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/theme-customizer-init.min.js')}}"></script>
    <!--! END: Theme Customizer !-->
</body>


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/proposal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:33 GMT -->
</html>