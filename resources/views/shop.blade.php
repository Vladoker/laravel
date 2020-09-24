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
				<div class="shop_filter mb-80">
					<div class="row align-items-center">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="shop_cat text-center">
								<select class="olima_select">
								  	<option data-display="Short By">Short By</option>
								  	<option value="1">Position</option>
								  	<option value="2">Product Name</option>
								  	<option value="3">Price</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="shop_cat text-center">
								<select class="olima_select">
								  	<option data-display="Category">Category</option>
								  	<option value="1">Bags</option>
								  	<option value="2">Clothing</option>
								  	<option value="3">Jewellery</option>
								  	<option value="4">Men</option>
								  	<option value="5">Shoes</option>
								  	<option value="6">Vintage</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="shop_result text-center">
								<h5>Showing 1–09 of 42 results</h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="short_box text-center">
								<ul>
									<li>View As:</li>
									<li><a href="#"><i class="fas fa-th-list"></i></a></li>
									<li><a href="#"><i class="fas fa-th"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="olima_sidebar sidebar_v1">
							<div class="widget_box category_widget_2 mb-50">
								<h4>Category</h4>
								<ul>
									<li><a href="#">Accessories <span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Bags<span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Clothing<span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Jewellery<span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Men<span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Shoes<span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Uncategorized<span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Vintage<span><i class="fas fa-plus"></i></span></a></li>
									<li><a href="#">Women<span><i class="fas fa-plus"></i></span></a></li>
								</ul>
							</div>
							<div class="widget_box price_ranger_widget mb-50">
								<h4>Filter By Price</h4>
								<div id="slider-range"></div>
								<label for="amount">Price :</label>
								<input type="text" id="amount">
							</div>
							<div class="widget_box size_widget mb-50">
								<h4>Filter By Size</h4>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check1" name="check1">
						  			<label class="single_label input_check" for="check1"><span>X</span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check2" name="check2">
						  			<label class="single_label input_check" for="check2"><span>Xl</span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check3" name="check3">
						  			<label class="single_label input_check" for="check3"><span>XXl</span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check4" name="check4">
						  			<label class="single_label input_check" for="check4"><span>s</span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check5" name="check5">
						  			<label class="single_label input_check" for="check5"><span>m</span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check6" name="check6">
						  			<label class="single_label input_check" for="check6"><span>Xs</span></label>
								</div>
							</div>
							<div class="widget_box color_widget mb-50">
								<h4>Filter By Color</h4>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check1" name="check7">
						  			<label class="single_label color_1" for="check7"><span></span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check8" name="check8">
						  			<label class="single_label color_2" for="check8"><span></span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check3" name="check9">
						  			<label class="single_label color_3" for="check9"><span></span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check10" name="check10">
						  			<label class="single_label color_4" for="check10"><span></span></label>
								</div>
								<div class="single_checkbox">
									<input type="checkbox" class="single_input" id="check11" name="check11">
						  			<label class="single_label color_5" for="check11"><span></span></label>
								</div>
							</div>
							<div class="widget_box tags_widget mb-50">
								<h4>Tags</h4>
								<ul>
									<li><a href="#">Shop</a></li>
									<li><a href="#">Ecommerce</a></li>
									<li><a href="#">Man</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Cloth</a></li>
									<li><a href="#">Jens</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="product_box mb-30">
									<div class="product_img">
										<a href="shop_details"><img src="assets/images/product_1.jpg" class="img-fluid" alt=""></a>
										<div class="product_overlay">
											<div class="product_link">
												<a href="#"><i class="fas fa-cart-arrow-down"></i></a>
												<a href="#"><i class="fas fa-eye"></i></a>
												<a href="#"><i class="fas fa-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="product_info">
										<ul class="rating">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
										<h3><a href="shop_details.html">Red Book Fair</a></h3>
										<span class="price">$10.50</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="product_box mb-30">
									<div class="product_img">
										<a href="shop_details"><img src="assets/images/product_2.jpg" class="img-fluid" alt=""></a>
										<div class="product_overlay">
											<div class="product_link">
												<a href="#"><i class="fas fa-cart-arrow-down"></i></a>
												<a href="#"><i class="fas fa-eye"></i></a>
												<a href="#"><i class="fas fa-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="product_info">
										<ul class="rating">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
										<h3><a href="shop_details.html">Yellow Book Fair</a></h3>
										<span class="price">$10.50</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="product_box mb-30">
									<div class="product_img">
										<a href="shop_details"><img src="assets/images/product_3.jpg" class="img-fluid" alt=""></a>
										<div class="product_overlay">
											<div class="product_link">
												<a href="#"><i class="fas fa-cart-arrow-down"></i></a>
												<a href="#"><i class="fas fa-eye"></i></a>
												<a href="#"><i class="fas fa-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="product_info">
										<ul class="rating">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
										<h3><a href="shop_details.html">USA History Book</a></h3>
										<span class="price">$10.50</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="product_box mb-30">
									<div class="product_img">
										<a href="shop_details"><img src="assets/images/product_4.jpg" class="img-fluid" alt=""></a>
										<div class="product_overlay">
											<div class="product_link">
												<a href="#"><i class="fas fa-cart-arrow-down"></i></a>
												<a href="#"><i class="fas fa-eye"></i></a>
												<a href="#"><i class="fas fa-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="product_info">
										<ul class="rating">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
										<h3><a href="shop_details.html">Red Files Color Book</a></h3>
										<span class="price">$10.50</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="product_box mb-30">
									<div class="product_img">
										<a href="shop_details"><img src="assets/images/product_5.jpg" class="img-fluid" alt=""></a>
										<div class="product_overlay">
											<div class="product_link">
												<a href="#"><i class="fas fa-cart-arrow-down"></i></a>
												<a href="#"><i class="fas fa-eye"></i></a>
												<a href="#"><i class="fas fa-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="product_info">
										<ul class="rating">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
										<h3><a href="shop_details.html">Red Book Fair</a></h3>
										<span class="price">$10.50</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="product_box mb-30">
									<div class="product_img">
										<a href="shop_details"><img src="assets/images/product_6.jpg" class="img-fluid" alt=""></a>
										<div class="product_overlay">
											<div class="product_link">
												<a href="#"><i class="fas fa-cart-arrow-down"></i></a>
												<a href="#"><i class="fas fa-eye"></i></a>
												<a href="#"><i class="fas fa-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="product_info">
										<ul class="rating">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
										<h3><a href="shop_details.html">Yellow Book Fair</a></h3>
										<span class="price">$10.50</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
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
