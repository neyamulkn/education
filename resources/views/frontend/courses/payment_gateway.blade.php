@extends('frontend.layouts.master')
@section('title', 'Purchase |'. $course_details->title)

@section('css')
<style type="text/css">
	#lessonlist i{padding-right: 5px;color: #8c8989;}
</style>
@endsection
@section('content')

	<!-- ============================ Course Detail ================================== -->
	<section class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="custom-tab customize-tab tabs_creative" style="background:#fff;">
						<ul class="nav nav-tabs" id="myTab" role="tablist" style="background: #ddd">
							@foreach($paymentgateways as $methodIndex => $method)
							<li class="nav-item">
								<a class="nav-link @if($methodIndex == 0) active @endif" id="home-tab" data-toggle="tab" href="#method{{$method->id}}" role="tab" aria-controls="method{{$method->id}}" aria-selected="{{($methodIndex == 0) ? 'true' : 'false' }}"><img src="{{asset('upload/images/payment/'.$method->method_logo)}}"><p style="margin-bottom: 0;text-align: center;">{{$method->method_name}}</p></a>

							</li>
							@endforeach
							
						</ul>
						<div class="tab-content" id="myTabContent" style="padding:10px 15px;">
							@foreach($paymentgateways as $methodIndex => $method)
							<div class="tab-pane fade @if($methodIndex == 0) show active @endif" id="method{{$method->id}}" role="tabpanel" aria-labelledby="home-tab">
								{!! $method->method_info !!}
							<form action="{{route('course.payment')}}" method="post">
                              @csrf
                           
                              <input type="hidden" name="course_id" value="{{$course_details->id}}">
                              <input type="hidden" name="manual_method_name" value="{{$method->method_slug}}">
                              <strong>Pay Mobile Number</strong>
                              <p><input type="text" required placeholder="Pay Mobile Number" class="form-control" name="pay_mobile_no"></p>
                              <strong>Transaction Id</strong>
                              <p><input type="text" required placeholder="Enter Transaction Id" class="form-control" name="trnx_id"></p>
                              <strong>Write Your Payment Information below.</strong>
                              <textarea required name="payment_info" style="margin: 0;" rows="2" placeholder="Write Payment Information" class="form-control"></textarea>

                              <div class="text-left">
                                <span class="secure-checkout-banner1">
                                  <i class="fa fa-lock"></i> Secure checkout
                                </span>
                              </div>
                              <div class="text-right">
                                  <button name="payment_method" value="manual" style="width: 40%" class="btn btn-success"><span><i class="fa fa-money" aria-hidden="true"></i> Pay {{$method->method_name}}</span></button>
                              </div>
                            </form>
							</div>
							@endforeach
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<!-- Total Cart -->
					<div class="cart_totals checkout">
						<h4>Order Summary</h4>
						<div class="cart-wrap">
							<ul class="cart_list">
								<li>Price<strong>{{Config::get('siteSetting.currency_symble')}}{{$course_details->price}}</strong></li>
								<li>Discount<strong>{{Config::get('siteSetting.currency_symble')}}0.00</strong></li>
								
							</ul>
							<div class="flex_cart">
								<div class="flex_cart_1">
									Total Cost
								</div>
								<div class="flex_cart_2">
									{{Config::get('siteSetting.currency_symble')}}{{$course_details->price}}
								</div>
							</div>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- ============================ Course Detail ================================== -->
	

@endsection

@section('js')

@endsection