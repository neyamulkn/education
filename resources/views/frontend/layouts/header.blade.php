<!-- Start Navigation -->
<div class="header header-light head-shadow">
	<div class="container">
		<nav id="navigation" class="navigation navigation-landscape">
			<div class="nav-header">
				<a class="nav-brand" href="{{url('/')}}">
					<img src="{{asset('upload/images/logo/'.Config::get('siteSetting.logo'))}}" class="logo" alt="" />
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
					
				</ul>
				
				<ul class="nav-menu nav-menu-social align-to-right">
					
					@if(Auth::check())
					<li style="transition: all ease 0.4s; background: #ffffff; border: 1px solid rgba(100, 123, 156,0.3) !important;height: 45px; border-radius: 3px; top: 19px;position: relative;"><a style="padding: 10px 8px;" href="#">{{Auth::user()->name}}<span class="submenu-indicator"></span></a>
						<ul class="nav-dropdown nav-submenu">
							<li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
							<li><a href="{{route('user.profile')}}">My Profile</a></li>
							<li><a href="saved-courses.php">Saved Courses</a></li>
							<li><a href="{{route('userLogout')}}">Logout</a></li>
						</ul>
					</li>
					
					@else
					<li class="login_click light">
						<a href="#" data-toggle="modal" data-target="#login">Sign in</a>
					</li>
					<li class="login_click">
						<a href="{{route('register')}}">Sign up</a>
					</li>
					@endif
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
