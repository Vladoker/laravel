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
                        <h1>{{ $recipe->title }}</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">{{ $recipe->title }}</li>
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
                                <span class="comment">{{ count($comments) }}</span>
                                <span class="eye">{{ $recipe->eye }}</span>
                            </div>
                            <div class="para_1">
                                {!! $recipe->content !!}
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

                        <div class="widget_box categories_widget mb-40">
                            <h4>Categories</h4>
                            <ul>
                                @foreach($categories as $categorie)
                                <li><a href="#">{{ $categorie->title }}</a></li>
                                @endforeach
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

    <!-- End olima_instagram section -->
@endsection
