@extends('layouts.app')
@section('content')
		<!-- Start olima_breadcrumb section -->
		<section class="olima_breadcrumb bg_image" style="background-image: url({{ asset('assets/images/breadcrumb_bg.jpg') }} )">
			<div class="bg_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="breadcrumb-title">
							<h1>Shop Details</h1>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="breadcrumb-link">
							<ul>
								<li><a href="#">HOME</a></li>
								<li class="active">Shop Details</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End olima_ breadcrumb section -->
		<!-- Start olima_shop_details section -->
		<section class="olima_shop_details pt-140 pb-140">
			<div class="container">
				<div class="row mb-70">
					<div class="col-lg-6">
						<div class="shop_big_slide">
							<div class="olima_img">
								
								<a href="assets/images/product_7.jpg" class="gallery-single">
									<img src="{{ asset( './storage/' . $product->image)  }}" class="img-fluid" alt="">
								</a>
								<span class="new">new</span>
							</div>
							<div class="olima_img">
								<a href="assets/images/product_7.jpg" class="gallery-single">
									<img src="{{ asset( './storage/' . $product->image)  }}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="shop_details_box">
							<h2>{{ $product->title }}</h2>
							<ul class="rating">
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<span class="price">${{ $product->price }}</span>
							<p>{{ $product->desc }}</p>
							<div class="button_box pt-30">
								<form action="{{ route('make.payment') }}" >
									@csrf
									<input name="slug" type="text" hidden value="{{ $product->slug }}">
									<input type="number" value="1" name='count'>
									<button class="olima_btn">Buy</button>
								</form>
								
							</div>
							<ul class="pt-40">
								<li><span>Share Now</span></li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!-- End olima_shop_details section -->
		<!-- Start olima_shop section -->
		
		<!-- End olima_shop section -->
		<!-- Start olima_instagram section -->
		
		<!-- End olima_instagram section -->
		<!-- Start olima_footer -->
@endsection