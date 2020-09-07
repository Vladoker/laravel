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
                            <li><a href="{{ route('home') }}">HOME</a></li>
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
                        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d4574.3100617353175!2d28.839022310451856!3d47.02254754582402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d47.022984199999996!2d28.841097299999998!5e0!3m2!1sru!2s!4v1599468571446!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                        <form method="post" action="{{ route('createTestimonial') }}">
                            @csrf
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
                                        <input type="text" class="form_control" name="lastname" required>
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
  @include('components.footerImages')
    <!-- End olima_instagram section -->
@endsection
