<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from megasoft.biz/olima/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Aug 2020 10:44:59 GMT -->
<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_desc')">
    <meta name="author" content="@yield('meta_author')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="viewport" content="wid th=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- page title -->
    <title>@yield('title')</title>
    <!------ Favicon Icon ------->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/png">
    <!-- All css -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">
    <!-- magnific css-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- slick css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- swiper slider css-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- nice-select css-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- jquery.nice-number css-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.nice-number.css') }}">
    <!-- jquery-ui css-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <!-- default css-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <!-- style css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    
</head>
<body>
<!-- Start preloader area -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- End preloader area -->
<!-- Start olima_header area -->
<header class="olima_header header_v1">
    <div class="top_header light_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="top_left">
                        <ul>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contacts') }}">Contact</a></li>
                            <li><a href="{{ route('blog') }}">Blogs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="social_box">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_navigation">
        <div class="container">
            <div class="nav-container d-flex align-items-center justify-content-between">
                <div class="nav-menu">
                    <!-- Navbar Close Icon -->
                    <div class="navbar-close">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- nav-emnu -->
                    <nav class="main-menu">
                        {{ menu('main', 'layouts.my_menu') }}
                    </nav>
                    <!-- nav-pushed -->
                    <div class="nav-pushed-item">
                        <div class="header_search">
                            <form>
                                @csrf
                                <div class="form_group">
                                    <input type="search" class="form_control" placeholder="Hit enter to search" name="search" required>
                                    <i class="fas fa-search"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- site logo -->
                <div class="brand_logo">
                    <a href="{{ route('home') }}"><img src="assets/images/logo_1.png" class="img-fluid" alt=""></a>
                </div>
                <div class="nav-push-item">
                    <div class="header_search">
                        <form>
                            <div class="form_group">
                                <input type="search" class="form_control" placeholder="Hit enter to search" name="search" required>
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Navbar Toggler -->
                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>
</header><!-- End olima_header area -->

<div id="app">
  @yield('content')   
</div>





<!-- Start olima_footer -->
<footer class="olima_footer footer_v1 white_gray_bg pt-100 pb-90">
    <div class="footer_widget">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget_box useful_link_widget">
                        <ul class="widget_link">
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="{{ route('contacts') }}">Contact</a></li>
                            <li><a href="{{ route('about') }}">About Me</a></li>
                        </ul>
                        <ul class="social_link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="widget_box about_box">
                        <a href="{{ route('home') }}"><img src="{{ asset('storage/'. setting('site.logo')) }}" class="img-fluid" alt=""></a>
                        <p>{{ setting('footer.desc') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget_box copyright_box">
                        <h6>Cook and Blog with <i class="fas fa-heart"></i> by Vladislav</h6>
                        <p>{{ setting('footer.Copywriting') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('/js/app.js') }}"></script>
<!-- End olima_footer -->
<!--Scroll-up-->
<a id="scroll_up" ><i class="fas fa-angle-up"></i></a>
<!-- jquery  -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.0.min.js') }}"></script>
<!--modernizr js-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<!-- Bootstrap js  -->
<script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<!-- Magnific-popup js-->
<script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
<!-- Slick js-->
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<!-- swiper slider js-->
<script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
<!-- Isotope js-->
<script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<!-- Slick js-->
<script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<!-- nice select js-->
<script src="{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
<!-- select number -->
<script src="{{ asset('assets/js/vendor/jquery.nice-number.min.js') }}"></script>
<!-- jquery-ui js-->
<script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
<!-- custom js  -->
<script src="{{ asset('assets/js/custom.js') }}"></script>


</body>


</html>
