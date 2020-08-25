@extends('layouts.app')
@section('content')
    <!-- Start olima_breadcrumb section -->
    <section class="olima_breadcrumb bg_image" style="background-image: url({{ asset('assets/images/breadcrumb_bg.jpg') }});">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="breadcrumb-title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_breadcrumb section -->
    <!-- Start olima_map section -->
    <section class="contact_map pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map_box">
                        <i class="fas fa-map-marker-alt"></i>
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=dhaka&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_map section -->
    <!-- Start olima_conact section -->
    <section class="olima_conact conact_v1 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_information">
                        <div class="title">
                            <h3>Don't Hesitate To contact Me</h3>
                        </div>
                        <div class="info_box">
                            <span><i class="fas fa-map-marker-alt"></i> Visit Us</span>
                            <h5>3184  Ben Street, <br> Albany,  New York, USA</h5>
                        </div>
                        <div class="info_box">
                            <span><i class="fas fa-envelope"></i> Email:</span>
                            <h5><a href="mailto:Sayhello@olima.com">Sayhello@olima.com</a></h5>
                            <h5><a href="mailto:Sayhello@olima.com">Supprot@olima.com</a></h5>
                        </div>
                        <div class="info_box">
                            <span><i class="fas fa-phone"></i> Phone:</span>
                            <h5><a href="tel:(053)286-3699">(053)286-3699</a></h5>
                            <h5><a href="tel:(053)286-3699">(077)619-7757</a></h5>
                        </div>
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
                <div class="col-lg-9">
                    <div class="contact-form">
                        <h3>Get Touch It</h3>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <label>First Name</label>
                                        <input type="text" class="form_control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <label>last Name</label>
                                        <input type="text" class="form_control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <label>Email</label>
                                        <input type="email" class="form_control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <label>Subject</label>
                                        <input type="text" class="form_control" name="subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <label>Message</label>
                                        <textarea class="form_control" placeholder="Start write here your message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_button">
                                        <button class="olima_btn">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_conact section -->
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
