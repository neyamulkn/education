	<?php include('inc/header.php'); ?>
			
			<!-- ============================ Dashboard: My Order Start ================================== -->
			<section class="gray pt-0">
				<div class="container-fluid">
					
					<!-- Row -->
					<div class="row">
					
						<div class="col-lg-3 col-md-3 p-0">
						<?php include('inc/dashboard-navbar.php'); ?>
						</div>	
						
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Settings</li>
										</ol>
									</nav>
								</div>
							</div>
							<!-- /Row -->
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
												<h4>Setup Your Detail</h4>
											</div>
										</div>
										<div class="dashboard_container_body p-4">
											<!-- Basic info -->
											<div class="submit-section">
												<div class="form-row">
												
													<div class="form-group col-md-6">
														<label>Your Name</label>
														<input type="text" class="form-control" value="Shaurya Preet">
													</div>
													
													<div class="form-group col-md-6">
														<label>Email</label>
														<input type="email" class="form-control" value="preet77@gmail.com">
													</div>
													
													<div class="form-group col-md-6">
														<label>Your Title</label>
														<input type="text" class="form-control" value="Web Designer">
													</div>
													
													<div class="form-group col-md-6">
														<label>Phone</label>
														<input type="text" class="form-control" value="123 456 5847">
													</div>
													
													<div class="form-group col-md-6">
														<label>Address</label>
														<input type="text" class="form-control" value="522, Arizona, Canada">
													</div>
													
													<div class="form-group col-md-6">
														<label>City</label>
														<input type="text" class="form-control" value="Montquebe">
													</div>
													
													<div class="form-group col-md-6">
														<label>State</label>
														<input type="text" class="form-control" value="Canada">
													</div>
													
													<div class="form-group col-md-6">
														<label>Zip</label>
														<input type="text" class="form-control" value="160052">
													</div>
													
													<div class="form-group col-md-12">
														<label>About</label>
														<textarea class="form-control">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
													</div>
													
												</div>
											</div>
											<!-- Basic info -->
											
											<!-- Social Account info -->
											<div class="form-submit">	
												<h4 class="pl-2 mt-2">Social Accounts</h4>
												<div class="submit-section">
													<div class="form-row">
													
														<div class="form-group col-md-6">
															<label>Facebook</label>
															<input type="text" class="form-control" value="https://facebook.com/">
														</div>
														
														<div class="form-group col-md-6">
															<label>Twitter</label>
															<input type="email" class="form-control" value="https://twitter.com/">
														</div>
														
														<div class="form-group col-md-6">
															<label>Google Plus</label>
															<input type="text" class="form-control" value="https://googleplus.com/">
														</div>
														
														<div class="form-group col-md-6">
															<label>LinkedIn</label>
															<input type="text" class="form-control" value="https://linkedin.com/">
														</div>
														
														<div class="form-group col-lg-12 col-md-12">
															<button class="btn btn-theme" type="submit">Save Changes</button>
														</div>
														
													</div>
												</div>
											</div>
											<!-- / Social Account info -->
											
										</div>
										
									</div>
								</div>
							</div>
							<!-- /Row -->
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			<!-- ============================ Dashboard: My Order Start End ================================== -->
			
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

		<script src="assets/js/metisMenu.min.js"></script>	
		<script>
			$('#side-menu').metisMenu();
		</script>
	<?php include('inc/footer.php'); ?>