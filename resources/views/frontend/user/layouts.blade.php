@extends('frontend.layouts.master')

@section('extra_css')
    <link href="{{asset('assets')}}/node_modules/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    	.profileImageBox { position: relative; width: 100%; height: 120px;}
    	.uploadIcon{position: absolute;bottom: 50%;transform: translate(50%, 35%);right: 50%;opacity: 0;font-size: 25px;color:#1bd43b;}
    	.profileImageBox:hover .uploadIcon{opacity: 1;}
    </style>
@endsection
@section('content')
<!-- ============================ Dashboard: Dashboard Start ================================== -->
<section class="gray pt-0">
	<div class="container-fluid">
							
		<div class="row">
		
			<div class="col-lg-2 col-md-2 p-0">
				<div class="dashboard-navbar">
	
					<div class="d-user-avater" data-toggle="modal" data-target="#user_imageModal">
						<div class="profileImageBox">
							<img style="height: 100%;" src="{{ asset('upload/images/users') }}/{{(Auth::user()->photo) ? Auth::user()->photo : 'defaultprofile.png'}}" class="img-fluid avater" alt="">
							<span class="uploadIcon" ><i class="fa fa-camera"></i></span>
						</div>
						<h4>{{Auth::user()->name}}</h4>
						
					</div>
					
					<div class="d-navigation">
						<ul id="side-menu">
							<li><a href="{{route('user.dashboard')}}"><i class="ti-user"></i>Dashboard</a></li>
							<li><a href="{{route('user.profile')}}"><i class="ti-heart"></i>My Profile</a></li>
							<li><a href="saved-courses.php"><i class="ti-heart"></i>Saved Courses</a></li>
							<li class="dropdown">
								<a href="all-courses.php"><i class="ti-layers"></i>All Courses<span class="ti-angle-left"></span></a>
								<ul class="nav nav-second-level">
									<li><a href="all-courses.php">All</a></li>
									<li><a href="javascript:void(0);">Published</a></li>
									<li><a href="javascript:void(0);">Pending</a></li>
									<li><a href="javascript:void(0);">Expired</a></li>
									<li><a href="javascript:void(0);">In Draft</a></li>
								</ul>
							</li>
							<li><a href="my-order.php"><i class="ti-shopping-cart"></i>My Order</a></li>
							<li><a href="settings.php"><i class="ti-settings"></i>Settings</a></li>
							<li><a href="reviews.php"><i class="ti-comment-alt"></i>Reviews</a></li>
							<li><a href="{{route('user.change-password')}}"><i class="fa fa-edit"></i>Change Password</a></li>
							<li><a href="{{route('userLogout')}}"><i class="ti-power-off"></i>Log Out</a></li>
						</ul>
					</div>
					
				</div>


			</div>	
			
			<div class="col-lg-10 col-md-10">
				<br/>
				@yield('userLayouts')
			</div>
		
		</div>
		
	</div>
</section>
<!--user image Modal -->
<div class="modal fade" id="user_imageModal">
    <div class="modal-dialog">
      <!-- Modal content-->
      	<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Change Profile Image</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>	
			</div>
	        <form action="{{route('changeProfileImage')}}" method="post" enctype="multipart/form-data">
	        	@csrf
		        <div class="modal-body">
		         	<div class="form-group"> 
				        <input data-default-file="{{asset('upload/images/users/'.Auth
				        ::user()->photo)}}" type="file" class="dropify" accept="image/*" data-type='image' data-allowed-file-extensions="jpg jpeg png gif" required="" data-max-file-size="10M"  name="profileImage" id="input-file-events">
				        <i style="color: red;font-size: 12px;">Image Size: 150px*150px</i>
				    </div>
				    @if ($errors->has('profileImage'))
				        <span class="invalid-feedback" role="alert">
				            {{ $errors->first('profileImage') }}
				        </span>
				    @endif
		        </div>
		        <div class="modal-footer">
		          	<button type="submit" class="btn btn-success" >Change Image</button>
		        </div>
	        </form>
      	</div>
    </div>
</div>

@endsection

@section('extra_js')
    <script src="{{asset('assets')}}/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
       
    });
    </script>
@endsection
