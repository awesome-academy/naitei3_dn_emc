<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{mix('admin/css/admin.css')}}" type="text/css">
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}" type="text/css" />
    <link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{asset('admin/js/jquery2.0.3.min.js')}}"></script>
    <!--web font -->
    <link rel="stylesheet" href="{{asset('admin/css/toastr.min.css')}}">

</head>

<body>
    <section id="container">
        @include('admin/layouts.shared/header')

        @include('admin/layouts.shared/sidebar')
        <!--main content start-->
        <section id="main-content">
            @yield('content')
        </section>
        <!--main content end-->

    </section>
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
    <!-- //pre-process -->

    <script src="{{asset('client/js/toastr.min.js')}}" ></script>
    <script src="{{mix('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{mix('admin/js/scripts.js')}}"></script>
    <script src="{{mix('admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{mix('admin/js/jquery.nicescroll.js')}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{mix('admin/js/jquery.scrollTo.js')}}"></script>
    {{-- custom js --}}
    <script src="{{mix('admin/js/orders.js')}}"></script>
    {{-- //custom js --}}
</body>

</html>

