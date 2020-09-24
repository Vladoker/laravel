@extends('layouts.app')
@section('content')
    <!-- Start olima_breadcrumb section -->
    <section class="olima_breadcrumb bg_image" style="background-image: url({{ asset('assets/images/breadcrumb_bg.jpg') }});">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcrumb-title">
                        <h1>404</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li class="active">Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_ breadcrumb section -->
    <!-- Start olima_404 section -->
    <section class="olima_404 pt-150 pb-145">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="error_content text-center">
                        <img src="assets/images/404.png" class="img-fluid" alt="">
                        <h2>Looks Like Here Is Nothing</h2>
                        <h4>Don’t be fret. <a href="index-2.html">We are here.</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <footer-images-slider 
    title="{{ setting('footer.slider_title') }}"
    link="{{ setting('footer.slider_link') }}"
    linktitle="{{ setting('footer.link_title') }}"
    />

@endsection
