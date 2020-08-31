@extends('layouts.app')

@section('content')
    <!-- Start olima_breadcrumb section -->
    <section class="olima_breadcrumb bg_image" style="background-image: url({{ asset('assets/images/breadcrumb_bg.jpg') }})">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcrumb-title">
                        <h1>Blog Details</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li class="active">Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_breadcrumb section -->
    <!-- Start olima_blog_details section -->
    <section class="olima_blog_details pt-140 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog_details_wrapper">
                        <div class="post_img">
                            <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->slug }}">
                        </div>
                        <div class="post_content pb-70">
                            <h3>{{ $post->title }}</h3>
                            <div class="post_meta">
                                <span class="calender">{{ $post->created_at->format('l j, Y') }}</span>
                                <span class="comment">0 Comment</span>
                                <span class="time">{{ rand(10, 45) }} min read</span>
                            </div>
                                <div class="para_1">
                                    {!! $post->body !!}
                                </div>


                            <blockquote>
                                <p>
                                    Mauris imperdiet orci dapibus, commodo libero nec, interdum tortor. Morbi in nibh faucibus, iaculis lorem vitae, cursus velit. Etiam non blandit ex. Mauris in fringilla velit.
                                </p>
                            </blockquote>
                            <div class="row pt-45 pb-45">
                                <div class="col-lg-6">
                                    <div class="olima_img">
                                        <a href="#"><img src="{{ asset('assets/images/post_46.jpg') }}" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="olima_img">
                                        <a href="#"><img src="{{ asset('assets/images/post_47.jpg') }}" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <p>Duis porta, ligula rhoncus euismod pretium, nisi tellus eleifend odio, luctus viverra sem dolor id sem. Maecenas a venenatis enim, quis porttitor magna. Etiam nec rhoncus neque. Sed quis ultrices eros. Curabitur sit amet eros eu arcu consectetur pulvinar. Aliquam sodales, turpis eget tristique tempor, sapien lacus facilisis diam, molestie efficitur sapien velit nec magna. Maecenas interdum efficitur tempor.</p>
                            <p>Integer ac interdum lacus. Nunc porta semper lacus a varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sagittis consectetur velit, ac gravida nunc gravida et. Vestibulum at eros imperdiet, volutpat nunc vitae, ornare erat. Proin interdum aliquet porta. Fusce ut semper ligula.</p>
                            <div class="content_list mb-50">
                                <h3>Cooking Materials</h3>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Donec tincidunt nulla in enim sodales, eu faucibus ipsum egestas.</li>
                                    <li>Mauris semper mauris quis massa mollis feugiat.</li>
                                    <li>Cras quis orci eu augue tempor ornare.</li>
                                    <li>Duis at est non lorem iaculis imperdiet sit amet vitae nisi.</li>
                                    <li>Sed dignissim velit non purus consequat maximus.</li>
                                    <li>Praesent convallis eros ac dolor dapibus, vel dictum ante congue.</li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/images/post_48.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="post_share_tag">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="post_tag_box">
                                        <ul>
                                            <li><span>Tags:</span></li>
                                            <li><a href="#">Flexiaddons</a></li>
                                            <li><a href="#">Recipe</a></li>
                                            <li><a href="#">Asian Food</a></li>
                                            <li><a href="#">Food</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="social_box">
                                        <ul>
                                            <li><span>Share:</span></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post_prev_next">
                            <div class="box">
                                <a href="#" class="prev"><i class="fas fa-long-arrow-alt-left"></i> Previous</a>
                            </div>
                            <div class="box">
                                <a href="#"><img src="{{ asset('assets/images/icon.png') }}" alt=""></a>
                            </div>
                            <div class="box">
                                <a href="#" class="next">Next <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="author_box mb-60">
                            <img src="{{ asset('assets/images/admin_7.png') }}" class="img-fluid" alt="">
                            <h5>Author Name</h5>
                            <h6>Articles Writer</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                        </div>
                        <div class="related_post pb-60">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="mb-35">Related Articles</h3>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid_item">
                                        <div class="post_img">
                                            <a href="#"><img src="{{ asset('assets/images/post_49.jpg') }}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_meta">
                                                <span class="calender">February 20, 2020</span>
                                                <span class="comment">0 Comment</span>
                                            </div>
                                            <h3><a href="#">Garlic Butter Chicken Bites for Morning (20-Minute Recipe!)</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid_item">
                                        <div class="post_img">
                                            <a href="#"><img src="{{ asset('assets/images/post_50.jpg') }}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="post_content">
                                            <div class="post_meta">
                                                <span class="calender">February 20, 2020</span>
                                                <span class="comment">0 Comment</span>
                                            </div>
                                            <h3><a href="#">Garlic Butter Chicken Bites for Morning (20-Minute Recipe!)</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment_area pt-50">
                            <h3>{{ count($comments) }} Comments</h3>
                            @foreach($comments as $comment)
                            <div class="single_comment d-flex">
                                <div class="comment_img">
                                    <img src="{{ asset('assets/images/comment_1.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="comment_info">
                                    <a href="#" class="reply_btn"><i class="fas fa-reply"></i></a>
                                    <h5>{{ $comment->name }}</h5>
                                    <h6>{{ $comment->created_at->format('l j, Y') }}</h6>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="comment_form">
                            <h3>Leave a Comment</h3>
                            <form action="{{ route('article', $post->slug) }}" method="post">
                                @csrf
                                <input name="id" type="hidden" value="{{ $post->id }}">
                                <input name="type" type="hidden" value="TCG\Voyager\Models\Post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <label>Comment</label>
                                            <textarea class="form_control" placeholder="Type" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <label>Name</label>
                                            <input type="text" class="form_control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <label>Website</label>
                                            <input type="url" class="form_control" name="url">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <label>Email</label>
                                            <input type="email" class="form_control" name="email">
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
                <div class="col-lg-3">
                    <div class="olima_sidebar sidebar_v1">
                        <div class="widget_box about_box mb-45">
                            <div class="about_img">
                                <img src="{{ asset('assets/images/about_1.jpg') }}" class="img-fluid" alt="">
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
                                    <a href="#"><img src="{{ asset('assets/images/thumb_1.jpg') }}" class="img-fluid" alt=""></a>
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
                                    <a href="#"><img src="{{ asset('assets/images/thumb_2.jpg') }}" class="img-fluid" alt=""></a>
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
                                    <a href="#"><img src="{{ asset('assets/images/thumb_3.jpg') }}" class="img-fluid" alt=""></a>
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
                        <div class="widget_box booking_widget mb-45">
                            <div class="title">
                                <h3>Cook Book</h3>
                            </div>
                            <img src="{{ asset('assets/images/book_1.jpg') }}" class="img-fluid" alt="">
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
