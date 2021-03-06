@extends('frontend.layouts.master')
@section('content')
	<!-- ============================ Hero Banner  Start================================== -->
	<div class="image-cover hero_banner shadow rlt bg-light">
		<div class="container">
			<!-- Type -->
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-7 col-sm-12">
					<div class="banner-search-2 transparent">
						<h1 class="big-header-capt cl_2 mb-2 f_2">Simple Seminarybd <br>Your New Development Skills</h1>
						<p>Study any topic, anytime. Choose from thousands of expert-led courses now.</p>
						<div class="mt-4">
							<a href="#" class="btn btn-modern dark">Enroll Now<span><i class="ti-arrow-right"></i></span></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-5 col-md-5 col-sm-12">
					<div class="flixio">
                        <img class="img-fluid" src="{{ asset('frontend') }}/img/edu_1.png" alt="">
                    </div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ============================ Hero Banner End ================================== -->
	
	<!-- ============================ Featured Courses Start ================================== -->
	<section>
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="sec-heading center">
						<p>New &amp; Trending</p>
						<h2><span class="theme-cl">Featured</span> Courses by professional Instructor</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<!-- Cource Grid 1 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="education_block_grid style_2">
						
						<div class="education_block_thumb n-shadow">
							<a href="detail.php"><img src="{{ asset('frontend') }}/img/co-1.jpg" class="img-fluid" alt=""></a>
						</div>
						
						<div class="education_block_body">
							<h4 class="bl-title"><a href="detail.php">Tableau For Beginners: Get CA Certified, Grow Your Career</a></h4>
						</div>
						
						<div class="cources_facts">
							<ul class="cources_facts_list">
								<li class="facts-1">Expert</li>
								<li class="facts-2">Professional</li>
								<li class="facts-5">Design</li>
							</ul>
						</div>
						
						<div class="cources_info">
							<div class="cources_info_first">
								<ul>
									<li><strong>1,84684 Views</strong></li>
									<li class="theme-cl">3h 30min</li>
								</ul>
							</div>
							<div class="cources_info_last">
								<h3>$69.77</h3>
							</div>
						</div>
						
						<div class="education_block_footer">
							<div class="education_block_author">
								<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-1.jpg" class="img-fluid" alt=""></a></div>
								<h5><a href="instructor-detail.php">Shaurya Preet</a></h5>
							</div>
							<span class="education_block_time"><i class="ti-calendar mr-1"></i>1 hour ago</span>
						</div>
						
					</div>	
				</div>
				
				<!-- Cource Grid 1 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="education_block_grid style_2">
						
						<div class="education_block_thumb n-shadow">
							<a href="detail.php"><img src="{{ asset('frontend') }}/img/co-2.jpg" class="img-fluid" alt=""></a>
						</div>
						
						<div class="education_block_body">
							<h4 class="bl-title"><a href="detail.php">The Complete Business Plan Course (Includes 50 Templates)</a></h4>
						</div>
						
						<div class="cources_facts">
							<ul class="cources_facts_list">
								<li class="facts-1">Expert</li>
								<li class="facts-2">Professional</li>
								<li class="facts-5">Design</li>
							</ul>
						</div>
						
						<div class="cources_info">
							<div class="cources_info_first">
								<ul>
									<li><strong>2,25684 Views</strong></li>
									<li class="theme-cl">4h 30min</li>
								</ul>
							</div>
							<div class="cources_info_last">
								<h3>$57.00</h3>
							</div>
						</div>
						
						<div class="education_block_footer">
							<div class="education_block_author">
								<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-2.jpg" class="img-fluid" alt=""></a></div>
								<h5><a href="instructor-detail.php">Savitha Tripathi</a></h5>
							</div>
							<span class="education_block_time"><i class="ti-calendar mr-1"></i>20 min ago</span>
						</div>
						
					</div>	
				</div>
				
				<!-- Cource Grid 1 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="education_block_grid style_2">
						
						<div class="education_block_thumb n-shadow">
							<a href="detail.php"><img src="{{ asset('frontend') }}/img/co-3.jpg" class="img-fluid" alt=""></a>
						</div>
						
						<div class="education_block_body">
							<h4 class="bl-title"><a href="detail.php">An Entire MBA In 1 Course:Award Winning Business School Prof</a></h4>
						</div>
						
						<div class="cources_facts">
							<ul class="cources_facts_list">
								<li class="facts-1">Expert</li>
								<li class="facts-2">Professional</li>
								<li class="facts-5">Design</li>
							</ul>
						</div>
						
						<div class="cources_info">
							<div class="cources_info_first">
								<ul>
									<li><strong>5,69684 Views</strong></li>
									<li class="theme-cl">5h 32min</li>
								</ul>
							</div>
							<div class="cources_info_last">
								<h3>$98.40</h3>
							</div>
						</div>
						
						<div class="education_block_footer">
							<div class="education_block_author">
								<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-3.jpg" class="img-fluid" alt=""></a></div>
								<h5><a href="instructor-detail.php">Shaurya Preet</a></h5>
							</div>
							<span class="education_block_time"><i class="ti-calendar mr-1"></i>1 days ago</span>
						</div>
						
					</div>	
				</div>
				
				<!-- Cource Grid 1 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="education_block_grid style_2">
						
						<div class="education_block_thumb n-shadow">
							<a href="detail.php"><img src="{{ asset('frontend') }}/img/co-4.jpg" class="img-fluid" alt=""></a>
						</div>
						
						<div class="education_block_body">
							<h4 class="bl-title"><a href="detail.php">The Complete Financial Analyst Course 2020</a></h4>
						</div>
						
						<div class="cources_facts">
							<ul class="cources_facts_list">
								<li class="facts-1">Expert</li>
								<li class="facts-2">Professional</li>
								<li class="facts-5">Design</li>
							</ul>
						</div>
						
						<div class="cources_info">
							<div class="cources_info_first">
								<ul>
									<li><strong>7,42854 Views</strong></li>
									<li class="theme-cl">6h 30min</li>
								</ul>
							</div>
							<div class="cources_info_last">
								<h3>$79.99</h3>
							</div>
						</div>
						
						<div class="education_block_footer">
							<div class="education_block_author">
								<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-4.jpg" class="img-fluid" alt=""></a></div>
								<h5><a href="instructor-detail.php">Litha Maildick</a></h5>
							</div>
							<span class="education_block_time"><i class="ti-calendar mr-1"></i>1 days ago</span>
						</div>
						
					</div>	
				</div>
				
				<!-- Cource Grid 1 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="education_block_grid style_2">
						
						<div class="education_block_thumb n-shadow">
							<a href="detail.php"><img src="{{ asset('frontend') }}/img/co-5.jpg" class="img-fluid" alt=""></a>
						</div>
						
						<div class="education_block_body">
							<h4 class="bl-title"><a href="detail.php">PMP Exam Prep Seminar - PMBOK Guide 6</a></h4>
						</div>
						
						<div class="cources_facts">
							<ul class="cources_facts_list">
								<li class="facts-1">Expert</li>
								<li class="facts-2">Professional</li>
								<li class="facts-5">Design</li>
							</ul>
						</div>
						
						<div class="cources_info">
							<div class="cources_info_first">
								<ul>
									<li><strong>5,32984 Views</strong></li>
									<li class="theme-cl">5h 50min</li>
								</ul>
							</div>
							<div class="cources_info_last">
								<h3>$149.7</h3>
							</div>
						</div>
						
						<div class="education_block_footer">
							<div class="education_block_author">
								<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-5.jpg" class="img-fluid" alt=""></a></div>
								<h5><a href="instructor-detail.php">Chrish Gyle</a></h5>
							</div>
							<span class="education_block_time"><i class="ti-calendar mr-1"></i>2 days ago</span>
						</div>
						
					</div>	
				</div>
				
				<!-- Cource Grid 1 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="education_block_grid style_2">
						
						<div class="education_block_thumb n-shadow">
							<a href="detail.php"><img src="{{ asset('frontend') }}/img/co-6.jpg" class="img-fluid" alt=""></a>
						</div>
						
						<div class="education_block_body">
							<h4 class="bl-title"><a href="detail.php">Tableau 2020 A-Z:Hands-On Tableau Training For Data Science!</a></h4>
						</div>
						
						<div class="cources_facts">
							<ul class="cources_facts_list">
								<li class="facts-1">Expert</li>
								<li class="facts-2">Professional</li>
								<li class="facts-5">Design</li>
							</ul>
						</div>
						
						<div class="cources_info">
							<div class="cources_info_first">
								<ul>
									<li><strong>6,56684 Views</strong></li>
									<li class="theme-cl">6h 40min</li>
								</ul>
							</div>
							<div class="cources_info_last">
								<h3>$99.7</h3>
							</div>
						</div>
						
						<div class="education_block_footer">
							<div class="education_block_author">
								<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-6.jpg" class="img-fluid" alt=""></a></div>
								<h5><a href="instructor-detail.php">Shilpa Shekh</a></h5>
							</div>
							<span class="education_block_time"><i class="ti-calendar mr-1"></i>4 days ago</span>
						</div>
						
					</div>	
				</div>
				
				
			</div>
			
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="text-center">
						<a href="#" class="btn btn-theme btn-browse-btn">Browse More Courses</a>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- ============================ Featured Courses End ================================== -->
	
	<!-- ============================ Featured Category Start ================================== -->
	<section class="bg-light">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="sec-heading center">
						<p>Popular Category</p>
						<h2><span class="theme-cl">Hot &amp; Popular</span> Category For Learn</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 p-0">

					<div class="arrow_slide three_slide-dots arrow_middle">
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="edu_cat">
								<div class="pic">
									<a class="pic-main" href="#" style="background-image:url({{ asset('frontend') }}/img/course-7.jpg);"></a>
								</div>
								<div class="edu_data">
									<h4 class="title"><a href="#">Finance & Accounting</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
										<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
									</ul>
								</div>
							</div>	
						</div>
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="edu_cat">
								<div class="pic">
									<a class="pic-main" href="#" style="background-image:url({{ asset('frontend') }}/img/course-8.jpg);"></a>
								</div>
								<div class="edu_data">
									<h4 class="title"><a href="#">Gym & Lifestyle</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
										<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
									</ul>
								</div>
							</div>		
						</div>
						
					
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="edu_cat">
								<div class="pic">
									<a class="pic-main" href="#" style="background-image:url({{ asset('frontend') }}/img/course-10.jpg);"></a>
								</div>
								<div class="edu_data">
									<h4 class="title"><a href="#">Software & Development</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
										<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
									</ul>
								</div>
							</div>		
						</div>
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="edu_cat">
								<div class="pic">
									<a class="pic-main" href="#" style="background-image:url({{ asset('frontend') }}/img/course-11.jpg);"></a>
								</div>
								<div class="edu_data">
									<h4 class="title"><a href="#">Business Development</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
										<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
									</ul>
								</div>
							</div>
						</div>
					
					</div>
				</div>

			</div>
			
		</div>
	</section>
	<!-- ============================ Featured Category End ================================== -->
	
	<!-- ========================== About Facts List Section =============================== -->
	<section>
		<div class="container">
			
			<div class="row align-items-center">
			
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="list_facts_wrap">
						<div class="sec-heading mb-3">
							<h2>Know about <span class="theme-cl">e-Learn</span> learning platform</h2>
						</div>
						<div class="list_facts">
							<div class="list_facts_icons"><i class="ti-desktop"></i></div>
							<div class="list_facts_caption">
								<h4>Nemo enim ipsam voluptatem quia.</h4>
								<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure</p>
							</div>
						</div>
						<div class="list_facts">
							<div class="list_facts_icons"><i class="ti-heart"></i></div>
							<div class="list_facts_caption">
								<h4>Nemo enim ipsam voluptatem quia.</h4>
								<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure</p>
							</div>
						</div>
						<div class="list_facts">
							<div class="list_facts_icons"><i class="ti-harddrives"></i></div>
							<div class="list_facts_caption">
								<h4>Nemo enim ipsam voluptatem quia.</h4>
								<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure</p>
							</div>
						</div>
						
					</div>
					<a href="#" class="btn btn-modern">Know More<span><i class="ti-arrow-right"></i></span></a>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="list_facts_wrap_img">
					
						<img src="{{ asset('frontend') }}/img/edu_2.png" class="img-fluid" alt="" />
						
					</div>
				</div>

			</div>
			
		</div>
	</section>
	<!-- ========================== About Facts List Section =============================== -->
	
	<!-- ========================== Featured Courses Section =============================== -->
	<section class="gray">
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="sec-heading center">
						<p>Hot &amp; Trending</p>
						<h2><span class="theme-cl">Recent</span> Courses by professional Instructor</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 p-0">

					<div class="arrow_slide three_slide-dots arrow_middle">
	
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="education_block_grid style_2">
						
								<div class="education_block_thumb">
									<a href="detail.php"><img src="{{ asset('frontend') }}/img/course-2.jpg" class="img-fluid" alt=""></a>
									<div class="education_ratting"><i class="fa fa-star"></i>4.7 (40)</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="detail.php">The Complete Business Plan Course (Includes 50 Templates)</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>10682 Views</li>
										<li><i class="ti-control-skip-forward mr-2"></i>82 Lectures</li>
										<li><i class="ti-time mr-2"></i>9h 45min</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-2.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.php">Litha Jethaani</a></h5>
									</div>
									<div class="cources_price_foot"><span class="price_off">$199.00</span>149.00</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="education_block_grid style_2">
						
								<div class="education_block_thumb">
									<a href="detail.php"><img src="{{ asset('frontend') }}/img/course-3.jpg" class="img-fluid" alt=""></a>
									<div class="education_ratting"><i class="fa fa-star"></i>4.9 (29)</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="detail.php">An Entire MBA In 1 Course:Award Winning Business School Prof</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>9882 Views</li>
										<li><i class="ti-control-skip-forward mr-2"></i>47 Lectures</li>
										<li><i class="ti-time mr-2"></i>6h 30min</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-3.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.php">Adam Gilvork</a></h5>
									</div>
									<div class="cources_price_foot"><span class="price_off">$89.65</span>49.10</div>
								</div>
								
							</div>		
						</div>
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="education_block_grid style_2">
						
								<div class="education_block_thumb">
									<a href="detail.php"><img src="{{ asset('frontend') }}/img/course-4.jpg" class="img-fluid" alt=""></a>
									<div class="education_ratting"><i class="fa fa-star"></i>4.7 (60)</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="detail.php">The Complete Financial Analyst Course 2020</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>5882 Views</li>
										<li><i class="ti-control-skip-forward mr-2"></i>52 Lectures</li>
										<li><i class="ti-time mr-2"></i>5h 15min</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-4.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.php">Shilpa Shekh</a></h5>
									</div>
									<div class="cources_price_foot"><span class="price_off">$149.77</span>99.00</div>
								</div>
								
							</div>			
						</div>
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="education_block_grid style_2">
						
								<div class="education_block_thumb">
									<a href="detail.php"><img src="{{ asset('frontend') }}/img/course-5.jpg" class="img-fluid" alt=""></a>
									<div class="education_ratting"><i class="fa fa-star"></i>4.8 (45)</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="detail.php">PMP Exam Prep Seminar - PMBOK Guide 6</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>4732 Views</li>
										<li><i class="ti-control-skip-forward mr-2"></i>32 Lectures</li>
										<li><i class="ti-time mr-2"></i>3h 30min</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-5.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.php">Shaurya Preet</a></h5>
									</div>
									<div class="cources_price_foot"><span class="price_off">$107.77</span>55.99</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="education_block_grid style_2">
						
								<div class="education_block_thumb">
									<a href="detail.php"><img src="{{ asset('frontend') }}/img/course-6.jpg" class="img-fluid" alt=""></a>
									<div class="education_ratting"><i class="fa fa-star"></i>4.7 (40)</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="detail.php">Tableau 2020 A-Z:Hands-On Tableau Training For Data Science!</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>7582 Views</li>
										<li><i class="ti-control-skip-forward mr-2"></i>62 Lectures</li>
										<li><i class="ti-time mr-2"></i>3h 10min</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-6.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.php">Litha Anshal</a></h5>
									</div>
									<div class="cources_price_foot"><span class="price_off">$99.77</span>47.99</div>
								</div>
								
							</div>			
						</div>
						
						<!-- Single Slide -->
						<div class="singles_items">
							<div class="education_block_grid style_2">
						
								<div class="education_block_thumb">
									<a href="detail.php"><img src="{{ asset('frontend') }}/img/course-1.jpg" class="img-fluid" alt=""></a>
									<div class="education_ratting"><i class="fa fa-star"></i>4.8 (70)</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="detail.php">Tableau For Beginners: Get CA Certified, Grow Your Career</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>7482 Views</li>
										<li><i class="ti-control-skip-forward mr-2"></i>63 Lectures</li>
										<li><i class="ti-time mr-2"></i>6h 30min</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.php"><img src="{{ asset('frontend') }}/img/user-1.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.php">Dhananjay Preet</a></h5>
									</div>
									<div class="cources_price_foot"><span class="price_off">$79.0</span>49.99</div>
								</div>
								
							</div>		
						</div>
					
					</div>
				</div>

			</div>
			
		</div>
	</section>
	<!-- ========================== Featured Courses Section =============================== -->
	
	<!-- ============================ Testimonial Start ================================== -->
	<section style="background:url({{ asset('frontend') }}/img/testimonial.png)">
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="sec-heading center">
						<p>What People Say?</p>
						<h2><span class="theme-cl">Reviews</span> By Our Success & Top Students</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div id="testimonials_style" class="slick-carousel-3 arrow_middle">
						<div class="testimonial-detail">
							<div class="client-detail-box">
								<div class="pic">
									<img src="{{ asset('frontend') }}/img/user-3.jpg" alt="">
								</div>
								<div class="client-detail">
									<h3 class="testimonial-title">Neyamul</h3>
									<span class="post">Web Developer</span>
								</div>
							</div>
							<p class="description">
								" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam eligendi facilis itaque minus non odio, quaerat ullam unde  unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi. "
							</p>
						</div>

						<div class="testimonial-detail">
							<div class="client-detail-box">
								<div class="pic">
									<img src="{{ asset('frontend') }}/img/user-5.jpg" alt="">
								</div>
								<div class="client-detail">
									<h3 class="testimonial-title">Adnan Morshed</h3>
									<span class="post">Apps Developer</span>
								</div>
							</div>
							<p class="description">
								" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum eligendi facilis itaque minus non odio, quaerat ullam unde  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi."
							</p>
						</div>
						
						<div class="testimonial-detail">
							<div class="client-detail-box">
								<div class="pic">
									<img src="{{ asset('frontend') }}/img/user-3.jpg" alt="">
								</div>
								<div class="client-detail">
									<h3 class="testimonial-title">Rout Millance</h3>
									<span class="post">Web Designer</span>
								</div>
							</div>
							<p class="description">
								" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi."
							</p>
						</div>
						
						<div class="testimonial-detail">
							<div class="client-detail-box">
								<div class="pic">
									<img src="{{ asset('frontend') }}/img/user-4.jpg" alt="">
								</div>
								<div class="client-detail">
									<h3 class="testimonial-title">williamson</h3>
									<span class="post">Web Developer</span>
								</div>
							</div>
							<p class="description">
								" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum eligendi facilis itaque minus non odio, quaerat ullam unde ? "
							</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>	
	<!-- ============================ Testimonial End ================================== -->
	
	<!-- ========================== Brand Section =============================== -->
	<section class="pt-2">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="sec-heading center">
						<p>New &amp; Trending</p>
						<h2><span class="theme-cl">Trusted</span> by our professional partner</h2>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="single_brand" id="brand-slide">
						
						<!-- single -->
						<div class="single_brands">
							<img src="{{ asset('frontend') }}/img/brand-1.png" class="img-fluid" alt="" />
						</div>
						
						<!-- single -->
						<div class="single_brands">
							<img src="{{ asset('frontend') }}/img/brand-2.png" class="img-fluid" alt="" />
						</div>
						
						<!-- single -->
						<div class="single_brands">
							<img src="{{ asset('frontend') }}/img/brand-3.png" class="img-fluid" alt="" />
						</div>
						
						<!-- single -->
						<div class="single_brands">
							<img src="{{ asset('frontend') }}/img/brand-4.png" class="img-fluid" alt="" />
						</div>
						
						<!-- single -->
						<div class="single_brands">
							<img src="{{ asset('frontend') }}/img/brand-5.png" class="img-fluid" alt="" />
						</div>
						
						<!-- single -->
						<div class="single_brands">
							<img src="{{ asset('frontend') }}/img/brand-6.png" class="img-fluid" alt="" />
						</div>
						
						<!-- single -->
						<div class="single_brands">
							<img src="{{ asset('frontend') }}/img/brand-7.png" class="img-fluid" alt="" />
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========================== Brand Section =============================== -->
	
	<!-- ============================== Start Newsletter ================================== -->
	<section class="newsletter theme-bg inverse-theme">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-8 col-sm-12">
					<div class="text-center">
						<h2>Join Thousand of Happy Students!</h2>
						<p>Subscribe our newsletter & get latest news and updation!</p>
						<form class="sup-form">
							<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
							<input type="submit" class="btn btn-theme" value="Get Started">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================================= End Newsletter =============================== -->
@endsection