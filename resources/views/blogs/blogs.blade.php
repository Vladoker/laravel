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
                        @foreach($posts as $post)
                            <div class="col-lg-6">
                            <div class="grid_item mb-50">
                                <div class="post_img">
                                    <a href="{{ route('article', $post->slug) }}">
                                        @php
                                            if(file_exists(public_path('/storage/' . $post->image))){
                                                $image = Voyager::image($post->image);
                                            }else{
                                                $image = $post->image;
                                            }
                                        @endphp
                                        <img src="{{ $image }}" class="img-fluid" alt="{{ $post->slug }}">
                                    </a>
                                </div>
                                <div class="post_content">
                                    <div class="post_meta">
                                        <span class="calender">{{ $post->created_at->format('l j, Y') }}</span>
                                        <span class="time">{{ $post->min_read }} min read</span>
                                    </div>
                                    <h3><a href="{{ route('article', $post->slug) }}">{{ $post->title }}</a></h3>
                                    <a href="{{ route('article', $post->slug) }}" class="comments"><i class="fas fa-comments"></i>{{ count($post->comments) }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="olima_pagination mt-30 mb-60">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>--}}
{{--                                    <li class="active"><a href="#">1</a></li>--}}
{{--                                    <li><a href="#">2</a></li>--}}
{{--                                    <li><a href="#">3</a></li>--}}
{{--                                    <li><a href="#">4</a></li>--}}
{{--                                    <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="olima_sidebar sidebar_v1">

                        <div class="widget_box featured_post mb-50">
                            <h4>Featured Post</h4>
                            @foreach($popularPosts as $post)
                                <div class="single_post d-flex align-items-center">
                                    <div class="post_img">
                                        <a href="{{ route('article', $post->slug) }}">
                                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->slug }}">
                                        </a>
                                    </div>
                                    <div class="post_content">
                                        <h3>
                                            <a href="{{ route('article', $post->slug) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h3>
                                        <div class="post_meta">
                                            <span>
                                                <a href="{{ route('article', $post->slug) }}">
                                                    {{ $post->created_at->format('l j, Y') }}
                                                </a>
                                            </span>
                                            <span class="comment">{{ count($post->comments) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="widget_box categories_widget mb-40">
                            <h4>Categories</h4>
                            <ul>
                                @foreach($categories as $categorie)
                                    <li>
                                        <a href="#">{{ $categorie->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
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
