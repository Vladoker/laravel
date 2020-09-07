@extends('layouts.app')
@section('title'){{ $page->first()->title }}@endsection
@section('meta_desc'){{ $page->first()->meta_description }}@endsection
@section('meta_keywords'){{ $page->first()->meta_keywords }}@endsection
@section('content')
    <!-- Start olima_banner section -->
    <section class="olima_banner hero_post_v1">
        <div class="hero_post_slide_v1">
            @foreach($sliderRecipes as $recipe)
            <!-- grid_item -->
            <div class="grid_item">
                <div class="post_img">
                    <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid" alt="">
                    <div class="post_overlay">
                        <div class="post_content">
                            <a href="{{ route('recipe', $recipe->slug) }}" class="cat_btn">{{ $recipe->category_recipe->title }}</a>
                            <h3>
                                <a href="{{ route('recipe', $recipe->slug) }}">{{ $recipe->content }}</a>
                            </h3>
                            <div class="post_meta">

                                <span class="comment">{{ count($recipe->comments) }}</span>
                                <span class="eye">{{ $recipe->eye }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- grid_item -->
            @endforeach
        </div>
    </section>
    <!-- End olima_banner section -->
    <!-- Start olima_categories section -->
    <section class="olima_categories categories_v1 pt-130 pb-110">
        <div class="container">
            <div class="categories_slide">
                @foreach($categories as $category)
                    <a href="#" class="categories_box">
                        <div class="cat_img">
                            <img src="{{ Voyager::image($category->image) }}" class="img-fluid" alt="">
                            <div class="cat_overlay">
                                <div class="cat_content">
                                    <h5>{{ $category->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End olima_categories section -->
    <!-- Start olima_latest_post section -->
    <section class="olima_latest_post latest_post_v1 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section_title mb-50">
                                <h3>{{ setting('home.recipes_title') }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="grid_item grid_post_big mb-40">
                                <div class="post_img">
                                    <a href="{{ route('recipe', $recipes->first()->slug) }}">
                                        <img src="{{ asset('storage/' . $recipes->first()->image)  }}" class="img-fluid" alt="">
                                    </a>
                                    <div class="post_overlay">
                                        <div class="post_content">
                                            <a href="{{ route('recipe', $recipes->first()->slug) }}" class="cat_btn">{{ $recipes->first()->category_recipe->title }}</a>
                                            <h3><a href="{{ route('recipe', $recipes->first()->slug) }}">{{ $recipes->first()->title }}</a></h3>
                                            <div class="post_meta">
                                                <span class="eye">{{ $recipes->first()->eye }}</span>
                                                <span class="comment">{{ count($recipes->first()->comments) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $recipes->shift() @endphp
                        @foreach($recipes as $recipe)
                            <div class="col-lg-6">
                                <div class="grid_item mb-40">
                                    <div class="post_img">
                                        <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid" alt="">
                                        <div class="post_overlay">
                                            <div class="post_tag">
                                                <a href="{{ route('recipe', $recipe->slug)  }}" class="cat_btn">{{ $recipe->category_recipe->title }}</a>
                                                <a href="#" class="love_btn"><i class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <h3><a href="{{ route('recipe', $recipe->slug) }}">{{ $recipe->title }}</a></h3>
                                        <div class="post_meta">
                                            <span class="calender">
                                                <a href="{{ route('recipe', $recipe->slug) }}">
                                                    {{ $recipe->created_at->format('l j, Y') }}
                                                </a>
                                            </span>
                                            <span class="comment">{{ count($recipe->comments) }}</span>
                                            <span class="eye">{{ $recipe->eye }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="olima_sidebar sidebar_v1">

                        <div class="widget_box featured_post">
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
                                            <span class="eye">{{ $recipe->eye }}</span>
                                        </div>
                                    </div>
                                </div>
                                @if($index == 2)
                                    @break
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End olima_latest_post section -->
    <!-- Start olima_video section -->
    <section class="olima_video video_v1 bg_image pt-130 pb-215" style="background-image: url({{ asset('assets/images/video_bg_1.jpg') }});">
        <div class="container-full">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title mb-50 text-center">
                        <h3>{{ setting('home.videos_title') }}</h3>
                    </div>
                </div>
            </div>
            <div class="video_slide_v1">
                @foreach($videos as $video)
                    <div class="grid_item">
                        <div class="post_img">
                            <img src="{{ Voyager::image($video->image) }}" class="img-fluid" alt="">
                            <div class="post_overlay">
                                <div class="play_button">
                                    <a href="{{ $video->url }}" class="play_btn"><i class="fas fa-play"></i></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="{{ $video->url }}">{{ $video->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End olima_video section -->
    <!-- Start olima_vagetarian section -->
    <section class="olima_vagetarian vagetarian_v1 pt-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title mb-50">
                        <h3>{{ setting('home.vegetarian_title') }}</h3>
                        <p>{{ setting('home.desc_veg') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="button_box">

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($vegetarianRecipes as $recipe)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="grid_item mb-40">
                            <div class="post_img">
                                <a href="{{ route('recipe', $recipe->slug)  }}">
                                    <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid" alt="{{ $recipe->slug }}">
                                </a>
                                <div class="post_overlay">
                                    <div class="post_tag">
                                        <a href="{{ route('recipe', $recipe->slug) }}" class="cat_btn">{{ $recipe->category_recipe->title }}</a>
                                        <a href="#" class="love_btn"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <div class="post_content">
                                        <h3>
                                            <a href="{{ route('recipe', $recipe->slug) }}">
                                                {{ $recipe->title }}
                                            </a>
                                        </h3>
                                        <div class="post_meta">
                                            <span class="calender">
                                                <a href="{{ route('recipe', $recipe->slug) }}">
                                                    {{ $recipe->created_at->format('l j, Y') }}
                                                </a>
                                            </span>
                                            <span class="comment">{{ count($recipe->comments) }}</span>
                                            <span class="eye">{{ $recipe->eye }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- End olima_vagetarian section -->
    <!-- Start oilima_trending section -->
    <section class="oilima_trending trending_v1 pt-90 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title mb-50 text-center">
                        <h3>{{ setting('home.trending_posts_title') }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($trendingRecipes as $recipe)
                <div class="col-lg-6">
                    <div class="grid_item mb-40">
                        <div class="post_img">
                            <a href="{{ route('recipe', $recipe->slug) }}">
                                <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid" alt="">
                            </a>
                            <div class="post_overlay">
                                <div class="post_tag">
                                    <a href="{{ route('recipe', $recipe->slug) }}" class="cat_btn">
                                        {{ $recipe->category_recipe->title }}
                                    </a>
                                    <a href="#" class="love_btn">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="{{ route('recipe', $recipe->slug) }}">
                                            {{ $recipe->content }}
                                        </a>
                                    </h3>
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End oilima_trending section -->
    <!-- Start olima_instagram section -->
    @include('components.footerImages')
    <!-- End olima_instagram section -->

@endsection
