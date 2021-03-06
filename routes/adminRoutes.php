<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'Admin\AdminLoginController@LoginForm')->name('adminLoginForm');
Route::post('/login', 'Admin\AdminLoginController@login')->name('adminLogin');
Route::get('/register', 'Admin\AdminLoginController@RegisterForm')->name('adminRegisterForm');
Route::post('/register', 'Admin\AdminLoginController@register')->name('adminRegister');
Route::get('/logout', 'Admin\AdminLoginController@logout')->name('adminLogout');

Route::group(['middleware' => ['auth:admin', 'admin']], function(){

	//setting
	Route::get('general/setting', 'GeneralSettingController@generalSetting')->name('generalSetting');
	Route::post('general/setting/update/{id}', 'GeneralSettingController@generalSettingUpdate')->name('generalSettingUpdate');

	Route::get('logo/setting', 'GeneralSettingController@logoSetting')->name('logoSetting');
	Route::post('logo/setting/update/{id}', 'GeneralSettingController@logoSettingUpdate')->name('logoSettingUpdate');

	Route::get('social/setting', 'GeneralSettingController@socialSetting')->name('socialSetting');
	Route::post('social/setting/store', 'GeneralSettingController@socialSettingStore')->name('socialSettingStore');
	Route::get('social/setting/edit/{id}', 'GeneralSettingController@socialSettingEdit')->name('socialSettingEdit');
	Route::post('social/setting/update/{id}', 'GeneralSettingController@socialSettingUpdate')->name('socialSettingUpdate');
	Route::get('social/setting/delete/{id}', 'GeneralSettingController@socialSettingDelete')->name('socialSettingDelete');
	
	Route::get('footer/setting', 'GeneralSettingController@footerSetting')->name('footerSetting');
	Route::post('footer/setting/update/{id}', 'GeneralSettingController@footerSettingUpdate')->name('footerSettingUpdate');


	//course review
	route::get('course/review', 'ReviewController@reviewList')->name('adminReviewList');
	route::post('course/review/insert', 'ReviewController@reviewInsert')->name('courseReviewInsert');
	
	route::get('course/review/edit/{id}', 'ReviewController@reviewEdit')->name('adminReviewEdit');
	route::post('course/review/update', 'ReviewController@reviewUpdate')->name('adminReviewUpdate');
	route::get('course/review/delete/{id}', 'ReviewController@reviewDelete')->name('adminReviewDelete');

	route::get('course/review/reply/{id}', 'ReviewController@reviewReplyList')->name('reviewReplyList');
	route::post('course/review/reply/{id}', 'ReviewController@reviewReply')->name('reviewReply');

	
});

// authenticate routes & check subject admin
Route::group(['middleware' => ['auth:admin', 'admin'], 'namespace' => 'Admin'], function(){
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

	Route::get('profile/update', 'AdminController@profileEdit')->name('admin.profileUpdate');
	Route::post('profile/update', 'AdminController@profileUpdate')->name('admin.profileUpdate');	

	Route::get('change/password', 'AdminController@passwordChange')->name('admin.passwordChange');
	Route::post('change/password', 'AdminController@passwordUpdate')->name('admin.passwordChange');
	 
	//category routes
	Route::get('category', 'CategoryController@category')->name('category');
	Route::get('get/category', 'CategoryController@getcategory')->name('getcategory');
	Route::post('category/store', 'CategoryController@category_store')->name('category.store');
	Route::get('category/edit/{id}', 'CategoryController@category_edit')->name('category.edit');
	Route::post('category/update', 'CategoryController@category_update')->name('category.update');
	Route::get('category/delete/{id}', 'CategoryController@category_delete')->name('category.delete');

	// sub category routes
	Route::get('subcategory', 'CategoryController@subcategory')->name('subcategory');

	Route::post('subcategory/store', 'CategoryController@subcategory_store')->name('subcategory.store');
	Route::get('subcategory/list', 'CategoryController@subcategory_index')->name('subcategory.list');
	Route::get('subcategory/edit/{id}', 'CategoryController@subcategory_edit')->name('subcategory.edit');
	Route::post('subcategory/update', 'CategoryController@subcategory_update')->name('subcategory.update');
	Route::get('subcategory/delete/{id}', 'CategoryController@subcategory_delete')->name('subcategory.delete');

	Route::get('get/subcategory/{id}', 'CategoryController@get_subcategory')->name('get_subcategory');

	Route::get('category/sorting', 'CategoryController@categorySorting')->name('categorySorting');
	Route::get('get/category/banner/{slug}', 'CategoryController@getCategoryBanner')->name('getCategoryBanner');

	// subject routes
	Route::get('class/list/{status?}', 'AllClassController@index')->name('class');
	Route::post('class/store', 'AllClassController@store')->name('class.store');
	Route::get('class/{id}/edit', 'AllClassController@edit')->name('class.edit');
	Route::post('class/update', 'AllClassController@update')->name('class.update');
	Route::get('class/delete/{id}', 'AllClassController@delete')->name('class.delete');

	// subject routes
	Route::get('subject/list', 'SubjectController@index')->name('subject');
	Route::post('subject/store', 'SubjectController@store')->name('subject.store');
	Route::get('subject/{id}/edit', 'SubjectController@edit')->name('subject.edit');
	Route::post('subject/update', 'SubjectController@update')->name('subject.update');
	Route::get('subject/delete/{id}', 'SubjectController@delete')->name('subject.delete');

	// attribute routes
	Route::get('attribute', 'AttributeController@attribute_create')->name('attribute');
	Route::post('attribute/store', 'AttributeController@attribute_store')->name('attribute.store');
	Route::get('attribute/list', 'AttributeController@attribute_list')->name('attribute.list');
	Route::get('attribute/edit/{id}', 'AttributeController@attribute_edit')->name('attribute.edit');
	Route::post('attribute/update', 'AttributeController@attribute_update')->name('attribute.update');
	Route::get('attribute/delete/{id}', 'AttributeController@attribute_delete')->name('attribute.delete');

	// attributeValue routes
	Route::get('attributevalue/{attribute_slug}/list', 'AttributeController@attributevalue')->name('attributeValue');
	Route::post('attributevalue/store', 'AttributeController@attributevalue_store')->name('attributeValue.store');
	Route::get('attributevalue/list', 'AttributeController@attributevalue_list')->name('attributeValue.list');
	Route::get('attributevalue/edit/{id}', 'AttributeController@attributevalue_edit')->name('attributeValue.edit');
	Route::post('attributevalue/update', 'AttributeController@attributevalue_update')->name('attributeValue.update');
	Route::get('attributevalue/delete/{id}', 'AttributeController@attributevalue_delete')->name('attributeValue.delete');

	// course routes
	Route::get('course/create', 'CourseController@create')->name('admin.course.create');
	Route::get('course/list/{status?}', 'CourseController@index')->name('admin.course.list');
	Route::post('course/store', 'CourseController@store')->name('admin.course.store');
	Route::get('course/{slug}/edit', 'CourseController@edit')->name('admin.course.edit');
	Route::post('course/update/{id}', 'CourseController@update')->name('admin.course.update');
	Route::get('course/delete/{id}', 'CourseController@delete')->name('admin.course.delete');
	
	//section & lesson routes
	Route::get('course/lessons/{slug?}', 'CourseSectionController@index')->name('admin.course.lessons');
	
	Route::post('course/section/store/{course_id}', 'CourseSectionController@store')->name('admin.course.section.store');
	Route::get('course/section/{id}/edit', 'CourseSectionController@edit')->name('admin.course.section.edit');
	Route::post('course/section/update', 'CourseSectionController@update')->name('admin.course.section.update');
	Route::get('course/section/delete/{id}', 'CourseSectionController@delete')->name('admin.course.section.delete');
	//lesson store
	Route::post('course/lesson/store', 'CourseLessonController@store')->name('admin.course.lesson.store');
	Route::get('course/lesson/{id}/edit', 'CourseLessonController@edit')->name('admin.course.lesson.edit');
	Route::post('course/lesson/update', 'CourseLessonController@update')->name('admin.course.lesson.update');
	Route::get('course/lesson/delete/{id}', 'CourseLessonController@delete')->name('admin.course.lesson.delete');
	//get highlight popup
	Route::get('course/highlight/popup/{id}', 'CourseController@highlight')->name('course.highlight');
 	//add/remove highlight course
	Route::get('course/highlight/addRemove', 'CourseController@highlightAddRemove')->name('highlightAddRemove');

	// payment route
	Route::get('payment/gateway', 'PaymentGatewayController@index')->name('paymentGateway');
	Route::post('payment/gateway/store', 'PaymentGatewayController@store')->name('paymentGateway.store');
	Route::get('payment/gateway/edit/{id}', 'PaymentGatewayController@edit')->name('paymentGateway.edit');
	Route::post('payment/gateway/update', 'PaymentGatewayController@update')->name('paymentGateway.update');
	Route::get('payment/gateway/delete/{id}', 'PaymentGatewayController@delete')->name('paymentGateway.delete');
	Route::get('payment/gateway/mode/change', 'PaymentGatewayController@paymentModeChange')->name('paymentModeChange');


	Route::get('enroll/{status?}', 'AdminOrderController@orderHistory')->name('admin.orderList');
	Route::get('enroll/details/{enroll_id}', 'AdminOrderController@orderDetails')->name('admin.getOrderDetails');
	Route::get('enroll/invoice/{enroll_id?}', 'AdminOrderController@orderInvoice')->name('admin.orderInvoice');

	//change payment status
	Route::get('payment/status/change', 'AdminOrderController@changePaymentStatus')->name('admin.changePaymentStatus');
	//change order status
	Route::get('order/status/change', 'AdminOrderController@changeOrderStatus')->name('admin.changeOrderStatus');
	// page routes
	Route::get('page/create', 'PageController@create')->name('page.create');
	Route::post('page/store', 'PageController@store')->name('page.store');
	Route::get('page/list', 'PageController@index')->name('page.list');
	Route::get('page/{slug}/edit', 'PageController@edit')->name('page.edit');
	Route::post('page/update/{id}', 'PageController@update')->name('page.update');
	Route::get('page/delete/{id}', 'PageController@delete')->name('page.delete');
	Route::get('page/slug/create', 'PageController@getSlug')->name('page.slug');

	Route::get('page/status/{id}', 'PageController@status')->name('page.status');
	Route::get('page/homepage-status/{id}', 'PageController@homepageStatus')->name('page.homepageStatus');


	// banner routes
	Route::get('banner/list/{type?}', 'BannerController@index')->name('banner');
	Route::post('banner/store', 'BannerController@store')->name('banner.store');

	Route::get('banner/{id}/edit', 'BannerController@edit')->name('banner.edit');
	Route::post('banner/update', 'BannerController@update')->name('banner.update');
	Route::get('banner/delete/{id}', 'BannerController@delete')->name('banner.delete');
	Route::get('banner/image/delete', 'BannerController@bannerImage_delete')->name('bannerImage_delete');

	// service routes
	Route::post('service/store', 'ServicesController@store')->name('service.store');
	Route::get('service/list', 'ServicesController@index')->name('service.list');
	Route::get('service/{id}/edit', 'ServicesController@edit')->name('service.edit');
	Route::post('service/update', 'ServicesController@update')->name('service.update');
	Route::get('service/delete/{id}', 'ServicesController@delete')->name('service.delete');



	//state
	Route::get('state', 'LocationController@state')->name('state');
	Route::post('state/store', 'LocationController@state_store')->name('state.store');
	Route::get('state/edit/{id}', 'LocationController@state_edit')->name('state.edit');
	Route::post('state/update', 'LocationController@state_update')->name('state.update');
	Route::get('state/delete/{id}', 'LocationController@state_delete')->name('state.delete');

	// city route
	Route::get('city', 'LocationController@city')->name('city');
	Route::post('city/store', 'LocationController@city_store')->name('city.store');
	Route::get('city/edit/{id}', 'LocationController@city_edit')->name('city.edit');
	Route::post('city/update', 'LocationController@city_update')->name('city.update');
	Route::get('city/delete/{id}', 'LocationController@city_delete')->name('city.delete');

	// area route
	Route::get('area', 'LocationController@area')->name('area');
	Route::post('area/store', 'LocationController@area_store')->name('area.store');
	Route::get('area/edit/{id}', 'LocationController@area_edit')->name('area.edit');
	Route::post('area/update', 'LocationController@area_update')->name('area.update');
	Route::get('area/delete/{id}', 'LocationController@area_delete')->name('area.delete');

	// payment route
	Route::get('payment/gateway', 'PaymentGatewayController@index')->name('paymentGateway');
	Route::post('payment/gateway/store', 'PaymentGatewayController@store')->name('paymentGateway.store');
	Route::get('payment/gateway/edit/{id}', 'PaymentGatewayController@edit')->name('paymentGateway.edit');
	Route::post('payment/gateway/update', 'PaymentGatewayController@update')->name('paymentGateway.update');
	Route::get('payment/gateway/delete/{id}', 'PaymentGatewayController@delete')->name('paymentGateway.delete');
	Route::get('payment/gateway/mode/change', 'PaymentGatewayController@paymentModeChange')->name('paymentModeChange');

	// user routes
	
	Route::post('student/store', 'StudentAdminController@store')->name('student.store');
	Route::get('student/{id}/edit', 'StudentAdminController@edit')->name('student.edit');
	Route::post('student/update', 'StudentAdminController@update')->name('student.update');
	Route::get('student/delete/{id}', 'StudentAdminController@delete')->name('student.delete');

	Route::get('student/list/{status?}', 'StudentAdminController@studentList')->name('student.list');
	Route::get('student/secret/login/{id}', 'StudentAdminController@studentSecretLogin')->name('admin.studentSecretLogin');
	Route::get('student/profile/{username}', 'StudentAdminController@studentProfile')->name('student.profile');	

	//wallet history
	Route::get('student/wallet/history', 'StudentAdminController@walletHistory')->name('student.walletHistory')->middleware('adminPermission');
	Route::get('student/wallet/information', 'StudentAdminController@studentWalletInfo')->name('student.walletInfo');	
	Route::post('student/wallet/recharge', 'StudentAdminController@walletRecharge')->name('student.walletRecharge');	


	
});



?>
