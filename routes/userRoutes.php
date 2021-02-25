<?php

use Illuminate\Support\Facades\Route;

Route::get('user/login', 'User\UserLoginController@LoginForm')->name('LoginForm');
Route::post('user/login', 'User\UserLoginController@login')->name('userLogin');
Route::get('user/register', 'User\UserRegController@RegisterForm')->name('userRegisterForm');
Route::post('user/register', 'User\UserRegController@register')->name('userRegister');
Route::get('user/logout', 'Auth\LoginController@logout')->name('userLogout');


Route::get('addto/compare/{product_id}', 'User\CompareController@addToCompare')->name('addToCompare');
Route::get('compare/product', 'User\CompareController@compare')->name('productCompare');
Route::get('compare/product/remove/{product_id}', 'User\CompareController@remove')->name('productCompareRemove');

route::group(['middleware' => ['auth']], function(){

	//return routes
	Route::get('order/return/{order_id}/{product_slug}', 'RefundController@orderReturn')->name('user.orderReturn');
	Route::post('order/return/request/send', 'RefundController@sendReturnRequest')->name('user.sendReturn_request');
	Route::get('order/return/requests', 'RefundController@userReturnRequestList')->name('user.return_request');
	

	//product review
	route::get('product/review/form', 'ReviewController@getReviewForm')->name('getReviewForm');
	Route::post('product/review/insert', 'ReviewController@reviewInsert')->name('review.insert');

	
	route::group(['prefix' => 'user'], function(){
		//user account
		Route::get('dashboard', 'StudentController@dashboard')->name('user.dashboard');
		Route::get('profile', 'StudentController@userProfile')->name('user.profile');
		Route::post('profile/update', 'StudentController@profileUpdate')->name('user.profileUpdate');
		Route::post('address/update', 'StudentController@addressUpdate')->name('user.addressUpdate');
		Route::get('change-password', 'StudentController@changePasswordForm')->name('user.change-password');
		Route::post('change-password', 'StudentController@changePassword')->name('user.change-password');

		Route::get('addto/wishlist', 'WishlistController@store')->name('wishlist.add');
		Route::get('wishlist', 'WishlistController@index')->name('wishlists');
		Route::get('wishlist/remove/{id}', 'WishlistController@remove')->name('wishlist.remove');

		
		Route::get('course/enrolled/{slug}', 'CourseEnrolledController@courseEnrolled')->name('courseEnrolled');
		Route::get('course/purchase/payment/{enrolled_id}', 'PaymentController@coursePurchase')->name('coursePurchase');
		Route::post('course/purchase/payment/{enrolled_id}', 'PaymentController@coursePayment')->name('coursePayment');

		
		//checkout routes
		Route::get('checkout/shipping/review', 'CheckoutController@shippingReview')->name('shippingReview');
		Route::post('checkout/order/confirm', 'OrderController@orderConfirm')->name('orderConfirm');
		Route::get('checkout/payment/{orderId}', 'PaymentController@orderPaymentGateway')->name('order.paymentGateway');
		Route::post('checkout/payment/{orderId}', 'PaymentController@orderPayment')->name('order.payment');
		Route::get('checkout/payment/confirm/{orderId}', 'PaymentController@paymentConfirm')->name('order.paymentConfirm');

		// Cash  payment 
		Route::post('order/cash/payment/{orderId}', 'PaymentController@handCashPayment')->name('handCashPayment');

		//order routes
		Route::get('order/history', 'OrderController@orderHistory')->name('user.orderHistory');
		Route::get('order/details/{order_id?}', 'OrderController@orderDetails')->name('user.orderDetails');
		Route::get('order/cancel/{order_id?}', 'OrderController@orderCancel')->name('user.orderCancel');

		

	});
});





