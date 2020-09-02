@extends('layouts.app')
@section('content')
    <!-- Start olima_breadcrumb section -->
    <section class="olima_breadcrumb bg_image" style="background-image: url({{asset('assets/images/breadcrumb_bg.jpg')}});">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="breadcrumb-title">
                    <h1>{{ setting('about.hero_title') }}</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">ABOUT ME</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_breadcrumb section -->
    <!-- Start olima_about section -->
    <section class="olima_about pt-140">
        <div class="container">
            <div class="row pb-130">
                <div class="col-lg-6">
                    <div class="olima_img">
                    <img src="{{Voyager::image(setting('about.images1')) }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="olima_img">
                        <img src="assets/images/about_5.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="olima_img">
                        <img src="assets/images/about_6.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row pb-80">
                <div class="col-lg-4">
                    <div class="olima_content_box">
                        <span>Welcome</span>
                        <h2>Hi, I am Apex!</h2>
                        <img src="assets/images/sign_1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="olima_content_box">
                        <p class="para-1">Aenean non accumsan ante. Duis et risus accumsan sem tempus porta nec sit amet est. Sed ut euismod quam. Suspendisse potenti. Aliquam fringilla orci tincidunt, ullamcorper erat in, malesuada metus. Vivamus luctus maximus vestibulum. Donec et enim vitae tellus auctor ornare. Aenean leo diam, feugiat sed nulla sed, consequat venenatis est. Praesent commodo consequat pharetra. Fusce fermentum ante ac metus interdum elementum. Nam arcu lectus, lacinia non augue a, Mollis bibendum augue.</p>
                        <blockquote>
                            <i class="fas fa-quote-left"></i>
                            <p>Aenean non accumsan ante. Duis et risus accumsan sem tempus porta nec sit amet est. Sed ut euismod quam. Suspendisse potenti. Aliquam fringilla orci tincidunt, ullamcorper erat in, malesuada metus.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row pb-140">
                <div class="col-lg-12">
                    <div class="grid_item">
                        <div class="post_img">
                            <img src="assets/images/video_11.jpg" class="img-fluid" alt="">
                            <div class="post_button">
                                <a href="https://www.youtube.com/watch?v=8PNTZEv-e54" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_content">
                            <h3><a href="#">Nunc scelerisque tincidunt elit. Vestibulum non mi ipsum. Cras pretium suscipit tellus sit amet aliquet.</a></h3>
                            <p>Aenean non accumsan ante. Duis et risus accumsan sem tempus porta nec sit amet est. Sed ut euismod quam. Suspendisse potenti. Aliquam fringilla orci tincidunt, ullamcorper erat in, malesuada metus. Vivamus luctus maximus vestibulum. Donec et enim vitae tellus auctor ornare. Aenean leo diam, feugiat sed nulla sed, consequat venenatis est. Praesent commodo consequat pharetra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_about section -->
    <!-- Start olima_testimonial section -->
    <section class="olima_testimonial testimonial_v1 pb-140">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="section_title pb-65">
                        <h3>What Say Reader</h3>
                        <p>Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Praesent sollicitudin felis vel mi facilisis posuere.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="button_box pb-65">
                        <a href="#" class="olima_btn">View All Quote</a>
                    </div>
                </div>
            </div>
            <div class="testimonial_slide">
                @foreach($comments as $comment)
                <div class="testimonial_box">
                    <ul class="rating">
                        @for($i = 0; $i < $comment->rating; $i++)
                            <li><i class="fas fa-star"></i></li>
                        @endfor
                    </ul>
                    <p>{{ $comment->comment }}</p>
                    <div class="author_box">
                        <img src="assets/images/admin_5.jpg" class="img-fluid" alt="">
                        <span>{{ $comment->name }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End olima_testimonial section -->
    <!-- Start olima_sponsor section -->
    <section class="olima_sponsor sponsor_v1 pb-140">
        <div class="container">
            <div class="sponsor_slide">
                <div class="sponsor_box">
                    <div class="olima_img">
                        <img src="assets/images/sponsor_1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="sponsor_box">
                    <div class="olima_img">
                        <img src="assets/images/sponsor_2.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="sponsor_box">
                    <div class="olima_img">
                        <img src="assets/images/sponsor_3.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="sponsor_box">
                    <div class="olima_img">
                        <img src="assets/images/sponsor_4.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="sponsor_box">
                    <div class="olima_img">
                        <img src="assets/images/sponsor_1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_sponsor section -->
    <!-- Start olima_instagram section -->
    <section class="olima_instagram instagram_v1">
        <div class="container-full">
            <div class="instagram_wrap">
                <div class="instagram_slide_v1">
                    <div class="gird_item">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/insta_1.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="gird_item">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/insta_2.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="gird_item">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/insta_3.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="gird_item">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/insta_4.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="gird_item">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/insta_5.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="gird_item">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/insta_6.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="gird_item">
                        <div class="post_img">
                            <a href="#"><img src="assets/images/insta_6.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="insta_wrap_box">
                    <div class="insta_content">
                        <h4>Follow Me</h4>
                        <a href="#">@Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_instagram section -->
@endsection
