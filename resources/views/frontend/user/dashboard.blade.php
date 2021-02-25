@extends('frontend.user.layouts')
@section('title', 'Dashboard')

@section('userLayouts')
<!-- Row -->
<div class="row">

	<div class="col-lg-4 col-md-6 col-sm-12">
		<div class="dashboard_stats_wrap widget-1">
			<div class="dashboard_stats_wrap_content"><h4>0</h4> <span>Total Enrolled</span></div>
			<div class="dashboard_stats_wrap-icon"><i class="ti-location-pin"></i></div>
		</div>	
	</div>
	
	<div class="col-lg-4 col-md-6 col-sm-12">
		<div class="dashboard_stats_wrap widget-2">
			<div class="dashboard_stats_wrap_content"><h4>0</h4> <span>Pending Enrolled</span></div>
			<div class="dashboard_stats_wrap-icon"><i class="ti-pie-chart"></i></div>
		</div>	
	</div>
	
	<div class="col-lg-4 col-md-6 col-sm-12">
		<div class="dashboard_stats_wrap widget-4">
			<div class="dashboard_stats_wrap_content"><h4>0</h4> <span>Wallet Balance</span></div>
			<div class="dashboard_stats_wrap-icon"><i class="ti-user"></i></div>
		</div>	
	</div>

</div>
<!-- /Row -->

<!-- Row -->
<div class="row">

	<div class="col-lg-8 col-md-12 col-sm-12">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="course_overlay_cat">
					<div class="course_overlay_cat_thumb">
						<a href="#" tabindex="0"><img src="{{ asset('frontend') }}/img/course-1.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="course_overlay_cat_caption">
						<div class="llp-left">
							<h4><a href="#">Web Designing</a></h4>
							<span>17 Classes</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="course_overlay_cat">
					<div class="course_overlay_cat_thumb">
						<a href="#" tabindex="0"><img src="{{ asset('frontend') }}/img/course-2.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="course_overlay_cat_caption">
						<div class="llp-left">
							<h4><a href="#">Digital Marketing</a></h4>
							<span>20 Classes</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="course_overlay_cat">
					<div class="course_overlay_cat_thumb">
						<a href="#" tabindex="0"><img src="{{ asset('frontend') }}/img/course-3.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="course_overlay_cat_caption">
						<div class="llp-left">
							<h4><a href="#">Account & Chart</a></h4>
							<span>22 Classes</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="course_overlay_cat">
					<div class="course_overlay_cat_thumb">
						<a href="#" tabindex="0"><img src="{{ asset('frontend') }}/img/course-5.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="course_overlay_cat_caption">
						<div class="llp-left">
							<h4><a href="#">Business Development</a></h4>
							<span>10 Classes</span>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="col-lg-4 col-md-12 col-sm-12">
		<div class="card">
			<div class="card-header">
				<h6>Notifications</h6>
			</div>
			<div class="ground-list ground-hover-list">
				<div class="ground ground-list-single">
					<a href="#">
						<div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>
					</a>

					<div class="ground-content">
						<h6><a href="#">Maryam Amiri</a></h6>
						<small class="text-fade">Check New Admin Dashboard..</small>
						<span class="small">Just Now</span>
					</div>
				</div>
				
				<div class="ground ground-list-single">
					<a href="#">
						<div class="btn-circle-40 btn-danger"><i class="ti-calendar"></i></div>
					</a>

					<div class="ground-content">
						<h6><a href="#">Maryam Amiri</a></h6>
						<small class="text-fade">You can Customize..</small>
						<span class="small">02 Min Ago</span>
					</div>
				</div>
				
				<div class="ground ground-list-single">
					<a href="#">
						<div class="btn-circle-40 btn-info"><i class="ti-calendar"></i></div>
					</a>

					<div class="ground-content">
						<h6><a href="#">Maryam Amiri</a></h6>
						<small class="text-fade">Need Responsive Business Tem...</small>
						<span class="small">10 Min Ago</span>
					</div>
				</div>
				
				<div class="ground ground-list-single">
					<a href="#">
						<div class="btn-circle-40 btn-warning"><i class="ti-calendar"></i></div>
					</a>

					<div class="ground-content">
						<h6><a href="#">Maryam Amiri</a></h6>
						<small class="text-fade">Next Meeting on Tuesday..</small>
						<span class="small">15 Min Ago</span>
					</div>
				</div>
				
			</div>
		</div>		
	</div>

</div>
<!-- /Row -->

@endsection
