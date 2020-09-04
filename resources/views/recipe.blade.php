@extends('layouts.app')
@section('title'){{ $recipe->meta_title }}@endsection
@section('meta_desc'){{ $recipe->meta_desc }}@endsection

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
    <section class="olima_blog_details pt-140 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog_details_wrapper">
                        <div class="post_img">
                            <img src="{{ asset('storage/'. $recipe->image) }}" class="img-fluid" alt="{{ $recipe->slug }}">
                        </div>
                        <div class="post_content pb-70">
                            <h3>{{ $recipe->title }}</h3>
                            <div class="post_meta">
                                <span class="calender">{{ $recipe->created_at->format('l j, Y') }}</span>
                                <span class="comment">0 Comment</span>
                            </div>
                            <div class="para_1">
                                {!! $recipe->content !!}
                            </div>
                        </div>

                        <div class="post_prev_next">
                            <div class="box">
                                <a href="#" class="prev"><i class="fas fa-long-arrow-alt-left"></i> Previous</a>
                            </div>
                            <div class="box">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/icon.png') }}" alt=""></a>
                            </div>
                            <div class="box">
                                <a href="#" class="next">Next <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>

                        <div class="comment_area pt-50">
                            @if(count($comments) != 0)
                                <h3>{{ count($comments) }} Comments</h3>
                            @endif
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
                            <form action="{{ route('createRecipe') }}" method="post">
                                @csrf
                                <input name="commentable_id" type="hidden" value="{{ $recipe->id }}">
                                <input name="commentable_type" type="hidden" value="App\Models\Recipe">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <label>Comment</label>
                                            <textarea class="form_control" placeholder="Type" name="comment"></textarea>
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
                            @foreach($recipes as $index => $recipe)
                                <div class="single_post d-flex align-items-center">
                                    <div class="post_img">
                                        <a href="{{ route('recipe', $recipe->slug)  }}">
                                            <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid" alt="{{ $recipe->slug }}">
                                        </a>
                                    </div>
                                    <div class="post_content">
                                        <h3><a href="{{ route('recipe', $recipe->slug) }}">{{ $recipe->category_recipe->title }}</a></h3>
                                        <div class="post_meta">
                                            <span class="calender">
                                                <a href="{{ route('recipe', $recipe->slug) }}">
                                                    {{ $recipe->created_at->format('l j, Y') }}
                                                </a>
                                            </span>
                                            <span class="comment">{{ count($recipe->comments) }}</span>
                                        </div>
                                    </div>
                                </div>
                                @if($index == 2)
                                    @break
                                @endif
                            @endforeach
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
                                @foreach($categories as $categorie)
                                <li><a href="#">{{ $categorie->title }}</a></li>
                                @endforeach
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
