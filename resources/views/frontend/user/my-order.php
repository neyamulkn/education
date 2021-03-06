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
											<li class="breadcrumb-item active" aria-current="page">My orders</li>
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
												<h4>View Order</h4>
											</div>
										</div>
										<div class="dashboard_container_body">
											<div class="table-responsive">
												<table class="table">
													<thead class="thead-dark">
														<tr>
															<th scope="col">Order</th>
															<th scope="col">Date</th>
															<th scope="col">Status</th>
															<th scope="col">Total</th>
															<th scope="col">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">#0000149</th>
															<td>02 July 2020</td>
															<td><span class="payment_status inprogress">In Progress</span></td>
															<td>$110.00</td>
															<td>
																<div class="dash_action_link">
																	<a href="#" class="view">View</a>
																	<a href="#" class="cancel">Cancel</a>
																</div>	
															</td>
														</tr>
														<tr>
															<th scope="row">#0000150</th>
															<td>04 July 2020</td>
															<td><span class="payment_status complete">Completed</span></td>
															<td>$119.00</td>
															<td>
																<div class="dash_action_link">
																	<a href="#" class="view">View</a>
																	<a href="#" class="cancel">Cancel</a>
																</div>	
															</td>
														</tr>
														<tr>
															<th scope="row">#0000151</th>
															<td>07 July 2020</td>
															<td><span class="payment_status complete">Completed</span></td>
															<td>$149.00</td>
															<td>
																<div class="dash_action_link">
																	<a href="#" class="view">View</a>
																	<a href="#" class="cancel">Cancel</a>
																</div>	
															</td>
														</tr>
														<tr>
															<th scope="row">#0000152</th>
															<td>10 July 2020</td>
															<td><span class="payment_status pending">Pending Payment</span></td>
															<td>$199.00</td>
															<td>
																<div class="dash_action_link">
																	<a href="#" class="view">View</a>
																	<a href="#" class="cancel">Cancel</a>
																</div>	
															</td>
														</tr>
														<tr>
															<th scope="row">#0000153</th>
															<td>21 July 2020</td>
															<td><span class="payment_status hold">Oh Hold</span></td>
															<td>$166.00</td>
															<td>
																<div class="dash_action_link">
																	<a href="#" class="view">View</a>
																	<a href="#" class="cancel">Cancel</a>
																</div>	
															</td>
														</tr>
														<tr>
															<th scope="row">#0000154</th>
															<td>11 July 2020</td>
															<td><span class="payment_status cancel">Cancel</span></td>
															<td>$166.00</td>
															<td>
																<div class="dash_action_link">
																	<a href="#" class="view">View</a>
																	<a href="#" class="cancel">Cancel</a>
																</div>	
															</td>
														</tr>
													</tbody>
												</table>
											</div>
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
			

<?php include('inc/footer.php'); ?>