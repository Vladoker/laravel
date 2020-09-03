@extends('layouts.app')
@section('title'){{ setting('site.title') }}@endsection
@section('meta_desc'){{ setting('site.description') }}@endsection
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
                                <span class="love">{{ $recipe->likes }}</span>
                                <span class="comment">127</span>
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
                                <h3>Latest Recipes</h3>
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
                                                <span class="love">{{ $recipes->first()->likes }}</span>
                                                <span class="comment">127</span>
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
                                            <span class="comment">127</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="olima_sidebar sidebar_v1">
                        <div class="widget_box about_box mb-40">
                            <div class="about_img">
                                <img src="assets/images/about_1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="about_content">
                                <h4>Hi, I am Apex!</h4>
                                <p>Loves nature and healthy food, and good coffee. Don't hesitate to come for say a small "hello!"</p>
                                <ul class="social_link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="olima_btn">Learn More</a>
                        </div>
                        <div class="widget_box booking_widget mb-40">
                            <div class="title">
                                <h3>Cook Book</h3>
                            </div>
                            <img src="assets/images/book_1.jpg" class="img-fluid" alt="">
                            <a href="#" class="olima_btn">Get The Book</a>
                        </div>
                        <div class="widget_box add_widget mb-40">
                            <div class="add_img">
                                <a href="#"><img src="assets/images/add_1.jpg" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                        <div class="widget_box featured_post">
                            @for($i = 0; $i < count($recipes); $i++)

                            <div class="single_post d-flex align-items-center">
                                <div class="post_img">
                                    <a href="{{ route('recipe', $recipes[$i]->slug)  }}"><img src="{{ asset('storage/' . $recipes[$i]->image) }}" class="img-fluid" alt="{{ $recipes[$i]->slug }}"></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="{{ route('recipe', $recipes[$i]->slug) }}">{{ $recipes[$i]->category_recipe->title }}</a></h3>
                                    <div class="post_meta">
                                        <span class="calender"><a href="{{ route('recipe', $recipes[$i]->slug) }}">{{ $recipes[$i]->created_at->format('l j, Y') }}</a></span>
                                        <span class="comment">127</span>
                                    </div>
                                </div>
                            </div>
                                @if($i == 2)
                                    @break
                                @endif
                            @endfor

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
    <!-- End olima_latest_post section -->
    <!-- Start olima_video section -->
    <section class="olima_video video_v1 bg_image pt-130 pb-215" style="background-image: url({{ asset('assets/images/video_bg_1.jpg') }});">
        <div class="container-full">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title mb-50 text-center">
                        <h3>My Top Videos</h3>
                    </div>
                </div>
            </div>
            <div class="video_slide_v1">
                <div class="grid_item">
                    <div class="post_img">
                        <img src="assets/images/video_1.jpg" class="img-fluid" alt="">
                        <div class="post_overlay">
                            <div class="play_button">
                                <a href="https://www.youtube.com/watch?v=8PNTZEv-e54" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post_content">
                                <h3><a href="#">Honey Lime Rainbow Fruit Salad</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid_item">
                    <div class="post_img">
                        <img src="assets/images/video_2.jpg" class="img-fluid" alt="">
                        <div class="post_overlay">
                            <div class="play_button">
                                <a href="https://www.youtube.com/watch?v=8PNTZEv-e54" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post_content">
                                <h3><a href="#">Honey Lime Rainbow Fruit Salad</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid_item">
                    <div class="post_img">
                        <img src="assets/images/video_3.jpg" class="img-fluid" alt="">
                        <div class="post_overlay">
                            <div class="play_button">
                                <a href="https://www.youtube.com/watch?v=8PNTZEv-e54" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post_content">
                                <h3><a href="#">Honey Lime Rainbow Fruit Salad</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid_item">
                    <div class="post_img">
                        <img src="assets/images/video_4.jpg" class="img-fluid" alt="">
                        <div class="post_overlay">
                            <div class="play_button">
                                <a href="https://www.youtube.com/watch?v=8PNTZEv-e54" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post_content">
                                <h3><a href="#">Honey Lime Rainbow Fruit Salad</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid_item">
                    <div class="post_img">
                        <img src="assets/images/video_5.jpg" class="img-fluid" alt="">
                        <div class="post_overlay">
                            <div class="play_button">
                                <a href="https://www.youtube.com/watch?v=8PNTZEv-e54" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post_content">
                                <h3><a href="#">Honey Lime Rainbow Fruit Salad</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid_item">
                    <div class="post_img">
                        <img src="assets/images/video_1.jpg" class="img-fluid" alt="">
                        <div class="post_overlay">
                            <div class="play_button">
                                <a href="https://www.youtube.com/watch?v=8PNTZEv-e54" class="play_btn"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post_content">
                                <h3><a href="#">Honey Lime Rainbow Fruit Salad</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <h3>Vegetarian</h3>
                        <p>Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Praesent sollicitudin felis vel mi facilisis posuere.</p>
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
                                            <span class="comment">127</span>
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
                        <h3>Trending Posts</h3>
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
                                        <span class="comment">127</span>
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
