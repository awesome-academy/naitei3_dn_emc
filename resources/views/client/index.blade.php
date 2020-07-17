<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Ecommerce Website</title>
    <link rel="icon" href="{{asset('client/images/logo2.png')}}">
    <!-- //Meta tag Keywords -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Css & BS -->
    <link rel="stylesheet" href="{{mix('client/css/client.css')}}" type="text/css">
    <!-- //Css & BS -->
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
    <!-- //web fonts -->

    <link rel="stylesheet" href="{{asset('client/css/toastr.min.css')}}">

</head>
<body>

    <!-- top-header -->
    @include('client.layouts.shared.header')
    <!-- //top-header -->

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">

            <div class="row">

                @include('client.layouts.shared.slidebar')

                <!-- product right -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        @yield('content')
                    </div>
                </div>
                <!-- //product right -->

            </div>
        </div>
    </div>
    <!-- //top products -->

    <!-- middle section -->
    <div class="join-w3l1 py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-agile text-left p-4">
                        <div class="row">
                            <div class="col-sm-7 offer-name">
                                <h6>Smooth, Rich & Loud Audio</h6>
                                <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                <p>Sale up to 25% off all in store</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="{{asset('client/images/off1.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="join-agile text-left p-4">
                        <div class="row ">
                            <div class="col-sm-7 offer-name">
                                <h6>A Bigger Phone</h6>
                                <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                <p>Free shipping order over $100</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="{{asset('client/images/off2.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- middle section -->

    <!-- footer -->
    @include('client.layouts.shared.footer')
    <!-- //footer -->


    <!-- js-files -->
    <!-- jquery -->
    <script src="{{asset('client/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //jquery -->

    <!-- popup modal (for location)-->
    <script src="{{mix('client/js/jquery.magnific-popup.js')}}"></script>
    <!-- //popup modal (for location)-->

    <!-- scroll seller -->
    <script src="{{mix('client/js/scroll.js')}}"></script>
    <!-- //scroll seller -->

    <!-- smoothscroll -->
    <script src="{{mix('client/js/SmoothScroll.min.js')}}"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{mix('client/js/move-top.js')}}"></script>
    <script src="{{mix('client/js/easing.js')}}"></script>
    <!-- //end-smooth-scrolling -->



    <!-- for bootstrap working -->
    <script src="{{asset('client/js/bootstrap.js')}}"></script>
    <!-- //for bootstrap working -->

    <!-- pre-process -->
    <script src="{{asset('client/js/preprocess.js')}}"></script>
    <!-- //pre-process -->

    <script src="{{asset('client/js/toastr.min.js')}}" ></script>

    <!-- custom js -->
    <script src="{{asset('client/js/preprocess.js')}}"></script>
    <script src={{mix('client/js/add_to_cart.js')}}></script>
    <!-- //custom js -->
</body>

</html>
