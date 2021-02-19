<!-- Start Navigation -->
<div class="header header-light head-shadow">
	<div class="container">
		<nav id="navigation" class="navigation navigation-landscape">
			<div class="nav-header">
				<a class="nav-brand" href="{{url('/')}}">
					<img src="{{ asset('frontend')}}/img/logo.png" class="logo" alt="" />
				</a>
				<div class="nav-toggle"></div>
			</div>
			<div class="nav-menus-wrapper" style="transition-property: none;">
				<ul class="nav-menu">
					<li><a href="{{route('aboutUs')}}">About Us</a></li>
					<li><a href="{{route('coureses')}}">Courses</a></li>
				
					<li><a href="{{route('blog')}}">Blog</a></li>
					<li><a href="{{route('pricing')}}">Pricing</a></li>
					<li><a href="{{route('contact-us')}}">Contact</a></li>
					<li class=""><a href="#">User Dashboard<span class="submenu-indicator"></span></a>
						<ul class="nav-dropdown nav-submenu">
							<li><a href="dashboard.php">User Dashboard</a></li>
							<li><a href="my-profile.php">My Profile</a></li>
							<li><a href="all-courses.php">My Courses</a></li>
							<li><a href="my-order.php">My Order</a></li>
							<li><a href="saved-courses.php">Saved Courses</a></li>
							<li><a href="reviews.php">My Reviews</a></li>
							<li><a href="settings.php">My Settings</a></li>
						</ul>
					</li>
				</ul>
				
				<ul class="nav-menu nav-menu-social align-to-right">
					<li class="login_click light">
						<a href="#" data-toggle="modal" data-target="#login">Sign in</a>
					</li>
					<li class="login_click">
						<a href="{{route('register')}}">Sign up</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
