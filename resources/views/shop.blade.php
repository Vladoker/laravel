@extends('layouts.app')
@section('content')
		<!-- Start olima_breadcrumb section -->
		<section class="olima_breadcrumb bg_image" style="background-image: url(assets/images/breadcrumb_bg.jpg);">
			<div class="bg_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="breadcrumb-title">
							<h1>Our Shop</h1>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="breadcrumb-link">
							<ul>
								<li><a href="#">HOME</a></li>
								<li class="active">Our Shop</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End olima_ breadcrumb section -->
		<!-- Start olima_shop section -->
		<section class="olima_shop pt-140 pb-140">
			<div class="container">
				
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							@foreach ($products as $product)
								<card-component 
								title="{{ $product->title }}"
								image="{{ $product->image }}"
								:rating="{{ $product->rating }}"
								link="{{ $product->slug }}"
								:price="{{ $product->price }}"
								>
								</card-component>
							@endforeach						
						</div>
						<div class="row">
							<div class="col-lg-12 d-flex justify-content-center">
								<div class="olima_pagination">
									<ul>
										<li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End olima_shop section -->
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
		<!-- Start olima_footer -->
@endsection
