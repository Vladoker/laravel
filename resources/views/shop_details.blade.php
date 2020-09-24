@extends('layouts.app')
@section('content')
		<!-- Start olima_breadcrumb section -->
		<section class="olima_breadcrumb bg_image" style="background-image: url(assets/images/breadcrumb_bg.jpg);">
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
								<a href="assets/images/product_7.jpg" class="gallery-single"><img src="assets/images/product_7.jpg" class="img-fluid" alt=""></a>
								<span class="new">new</span>
							</div>
							<div class="olima_img">
								<a href="assets/images/product_7.jpg" class="gallery-single"><img src="assets/images/product_7.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="shop_thumb_slide">
							<div class="olima_img">
								<img src="assets/images/product_8.jpg" class="img-fluid" alt="">
							</div>
							<div class="olima_img">
								<img src="assets/images/product_9.jpg" class="img-fluid" alt="">
							</div>
							<div class="olima_img">
								<img src="assets/images/product_10.jpg" class="img-fluid" alt="">
							</div>
							<div class="olima_img">
								<img src="assets/images/product_9.jpg" class="img-fluid" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="shop_details_box">
							<h2>Graphic Design</h2>
							<ul class="rating">
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<span class="price">$89.00</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing is Industrial thingsed do eiusmod tempor incididunt ut labore doloremagna aliqua. Uts up enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ecommodo consequat. Duis aute irure dolor in reprehend voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
							<div class="button_box pt-30">
								<input type="number" value="1">
								<a href="#" class="olima_btn">Add To Cart</a>
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
				<div class="row">
					<div class="col-lg-12">
						<div class="discription_area">
							<div class="discription_tabs">
								<ul class="nav nav-tabs">
								    <li class="nav-item">
								      <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" data-toggle="tab" href="#additional">Additional information</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (1)</a>
								    </li>
								</ul>
							</div>
							<div class="tab-content">
							    <div id="description" class="tab-pane active"><br>
							      	<div class="olima_content_box">
							      		<p>Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint occaecat cupidatat non proident, sunt.</p>
							      	</div>
							    </div>
							    <div id="additional" class="tab-pane fade"><br>
							      	<div class="olima_content_box">
							      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil unde rem tenetur maiores iure. Ab, aliquam et ipsam ducimus aut labore doloremque nihil unde atque fuga, enim deserunt assumenda, nisi, minima excepturi dicta. Quam rem at autem vero porro earum, eos voluptas blanditiis, deleniti quas commodi. Facere provident, consectetur deleniti earum expedita, eaque facilis eos alias aut nisi ad distinctio.</p>
							      	</div>
							    </div>
							    <div id="reviews" class="tab-pane fade"><br>
							      	<div class="shop_review_area">
                                        <h4 class="title">1 Review for digital electronic speakers</h4>
                                        <div class="review_user">
                                            <img src="assets/images/person-1.jpg">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><span>admin</span> – December 24, 2018</span>
                                            <p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="review_form">
                                            <form>
                                                <div class="form_group">
                                                    <label>Your Name *</label>
                                                    <input type="text" class="form_control" placeholder="Name *">
                                                </div>
                                                <div class="form_group">
                                                    <label>Your Email *</label>
                                                    <input type="email" class="form_control" placeholder="Email *">
                                                </div>
                                                <div class="form_group">
                                                    <label>Your review *</label>
                                                    <textarea class="form_control" name="#" placeholder="Your review *"></textarea>
                                                </div>
                                                <div class="form_group">
                                                    <span>Your review *</span>
                                                    <ul class="rating">
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="single_checkbox">
													<input type="checkbox" class="single_input" id="check1" name="check1">
										  			<label class="single_input_label sigle_input_check" for="check1"><span>Save my name, email, and website in this browser for the next time I comment.</span></label>
												</div>
                                                <div class="form_button">
                                                    <button type="submit" class="olima_btn">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
							    </div>
							 </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End olima_shop_details section -->
		<!-- Start olima_shop section -->
		<section class="olima_shop pb-80">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section_title mb-70 text-center">
							<span>New Arrival</span>
							<h2>Related Product</h2>
						</div>
					</div>
				</div>
				<div class="releted_post_slide">
					<div class="product_box">
						<div class="product_img">
							<a href="shop_details.html"><img src="assets/images/product_1.jpg" class="img-fluid" alt=""></a>
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
					<div class="product_box">
						<div class="product_img">
							<a href="shop_details.html"><img src="assets/images/product_2.jpg" class="img-fluid" alt=""></a>
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
					<div class="product_box">
						<div class="product_img">
							<a href="shop_details.html"><img src="assets/images/product_5.jpg" class="img-fluid" alt=""></a>
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
					<div class="product_box">
						<div class="product_img">
							<a href="shop_details.html"><img src="assets/images/product_5.jpg" class="img-fluid" alt=""></a>
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