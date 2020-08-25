@extends('layouts.app')

@section('content')
    <!-- Start olima_breadcrumb section -->
    <section class="olima_breadcrumb bg_image" style="background-image: url({{ asset('assets/images/breadcrumb_bg.jpg') }});">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcrumb-title">
                        <h1>Blog Grid View With Sidebar </h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_breadcrumb section -->
    <!-- Start olima_blog_details section -->
    <section class="olima_blog_grid pt-140 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @for($i = 0; $i < 10; $i++)
                            <div class="col-lg-6">
                            <div class="grid_item mb-50">
                                <div class="post_img">
                                    <a href="{{ route('article') }}"><img src="assets/images/post_53.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="post_meta">
                                        <span class="calender">February 20, 2020</span>
                                        <span class="time">14 min read</span>
                                    </div>
                                    <h3><a href="#">Garlic Butter Chicken Bites for Morning (20-Minute Recipe!) {{ $i }}</a></h3>
                                    <a href="#" class="comments"><i class="fas fa-comments"></i>0 Comment</a>
                                    <a href="#" class="btn_heart"><i class="fas fa-heart"></i>1</a>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <div class="col-lg-12">
                            <div class="olima_pagination mt-30 mb-60">
                                <ul>
                                    <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="olima_sidebar sidebar_v1">
                        <div class="widget_box about_box mb-40">
                            <div class="about_img">
                                <img src="assets/images/about_1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="about_content">
                                <h4>Hi, I am Apex!</h4>
                                <p>Loves nature and healthy food, and good coffee. Don't hesitate</p>
                                <ul class="social_link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="olima_btn">Learn More</a>
                        </div>
                        <div class="widget_box featured_post mb-50">
                            <h4>Featured Post</h4>
                            <div class="single_post d-flex align-items-center">
                                <div class="post_img">
                                    <a href="#"><img src="assets/images/thumb_1.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="#">Cream Cheese Frosting</a></h3>
                                    <div class="post_meta">
                                        <span><a href="#">April 27, 2020</a></span>
                                        <span class="comment">127</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post d-flex align-items-center">
                                <div class="post_img">
                                    <a href="#"><img src="assets/images/thumb_2.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="#">Chicken Tortilla Soup</a></h3>
                                    <div class="post_meta">
                                        <span><a href="#">April 27, 2020</a></span>
                                        <span class="comment">127</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post d-flex align-items-center">
                                <div class="post_img">
                                    <a href="#"><img src="assets/images/thumb_3.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="#">Cream Cheese Frosting</a></h3>
                                    <div class="post_meta">
                                        <span><a href="#">April 27, 2020</a></span>
                                        <span class="comment">127</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget_box booking_widget mb-40">
                            <div class="title">
                                <h3>Cook Book</h3>
                            </div>
                            <img src="assets/images/book_1.jpg" class="img-fluid" alt="">
                            <a href="#" class="olima_btn">Get The Book</a>
                        </div>
                        <div class="widget_box categories_widget mb-40">
                            <h4>Categories</h4>
                            <ul>
                                <li class="active"><a href="#">All Categories</a></li>
                                <li><a href="#">Images Posts</a></li>
                                <li><a href="#">Life Style</a></li>
                                <li><a href="#">Photograph</a></li>
                                <li><a href="#">Recipe</a></li>
                                <li><a href="#">Asian Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Chines Food</a></li>
                            </ul>
                        </div>
                        <div class="widget_box tags_widget mb-40">
                            <h4>Tags</h4>
                            <ul>
                                <li><a href="#">Images Posts</a></li>
                                <li><a href="#">Life Style</a></li>
                                <li><a href="#">Life Style</a></li>
                                <li><a href="#">Asian Food</a></li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Recipe</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Photograph</a></li>
                            </ul>
                        </div>
                        <div class="widget_box add_widget mb-50">
                            <div class="add_img">
                                <a href="#"><img src="assets/images/add_1.jpg" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                        <div class="widget_box newsletter_widget">
                            <img src="assets/images/icon_1.png" alt="">
                            <h4>Newsletter</h4>
                            <p>Subscribe to our newsletter & stay update</p>
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Enter your email" name="email" required>
                                </div>
                                <div class="form_group">
                                    <button class="olima_btn sidebar_btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_blog_details section -->
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