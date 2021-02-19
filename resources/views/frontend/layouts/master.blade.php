<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="author" content="#" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
    <title>Online Course & Education</title>
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Online Course & Education. Education is the key to unlocking potential for a better future.">
    <meta itemprop="description" content="Our free online education courses will give you the means to inspire the next generation. Education is the key to unlocking potential for a better future.">
 
    <link href="{{ asset('frontend')}}/css/styles.css" rel="stylesheet">
	
	<!-- Custom Color Option -->
	<link href="{{ asset('frontend')}}/css/colors.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('frontend')}}/css/custom.css" rel="stylesheet">
	@yield('css')
</head>
	
<body class="red-skin">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
	
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

		@include('frontend.layouts.header')

		@yield('content')

		@include('frontend.layouts.footer')

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="registermodal">
					<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
					<div class="modal-body">
						<h4 class="modal-header-title">Log In</h4>
						<div class="login-form">
							<form>
							
								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="Username">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="*******">
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width pop-login">Login</button>
								</div>
							
							</form>
						</div>
						
						<div class="social-login mb-3">
							<ul>
								<li>
									<input id="reg" class="checkbox-custom" name="reg" type="checkbox">
									<label for="reg" class="checkbox-custom-label">Save Password</label>
								</li>
								<li><a href="#" class="theme-cl">Forget Password?</a></li>
							</ul>
						</div>
						
						<div class="text-center">
							<p class="mt-2">Haven't Any Account? <a href="register.html" class="link">Click here</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Sign Up Modal -->
		<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="sign-up">
					<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
					<div class="modal-body">
						<h4 class="modal-header-title">Sign Up</h4>
						<div class="login-form">
							<form>
							
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Full Name">
								</div>
								
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email">
								</div>
								
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Username">
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control" placeholder="*******">
								</div>

								
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
								</div>
							
							</form>
						</div>
						<div class="text-center">
							<p class="mt-3"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
	<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend') }}/js/select2.min.js"></script>
	<script src="{{ asset('frontend') }}/js/slick.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
	<script src="{{ asset('frontend') }}/js/counterup.min.js"></script>
	<script src="{{ asset('frontend') }}/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<!-- for course page -->
	<script>
		function openNav() {
		  document.getElementById("filter-sidebar").style.width = "320px";
		}

		function closeNav() {
		  document.getElementById("filter-sidebar").style.width = "0";
		}
	</script>

	<!-- //for user dashboard  -->

	<script src="{{ asset('frontend') }}/js/metisMenu.min.js"></script>	
	<script>
		$('#side-menu').metisMenu();
	</script>

	@yield('js')

	</body>
</html>