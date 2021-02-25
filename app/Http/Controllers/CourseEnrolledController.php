<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseEnrolled;
use App\Traits\CreateSlug;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class CourseEnrolledController extends Controller
{
    use CreateSlug;
    public function courseEnrolled($slug){
        $user_id = Auth::id();
        $course = Course::where('slug', $slug)->where('status', 'active')->first();
        if($course) {
            $numberLen = strlen($user_id);
            $numberLen = 9 - $numberLen;
            $enrolled_id = 'E' . $user_id . strtoupper(substr(str_shuffle("0123456789"), -$numberLen));
            $enrolled_id = $this->uniqueOrderId('course_enrolleds', 'enrolled_id', $enrolled_id);
            $total_price = $course->price;
            $coupon_discount = null;
            if (Session::has('couponAmount')) {
                $coupon_discount = (Session::get('couponType') == '%') ? round($total_price * Session::get('couponAmount'), 2) : Session::get('couponAmount');
            }
            //insert user enroll in enroll table
            $order = new CourseEnrolled();
            $order->enrolled_id = $enrolled_id;
            $order->course_id = $course->course_id;
            $order->user_id = $user_id;
            $order->user_name = Auth::user()->name;
            $order->user_phone = Auth::user()->mobile;
            $order->user_email = Auth::user()->email;
            $order->total_qty = 1;
            $order->total_price = $total_price;
            $order->coupon_code = (Session::has('couponCode') ? Session::get('couponCode') : null);
            $order->coupon_discount = $coupon_discount;

            $order->currency = Config::get('siteSetting.currency');
            $order->currency_sign = Config::get('siteSetting.currency_symble');
            $order->currency_value = Config::get('siteSetting.currency_symble');
            $order->enrolled_date = now();
            $order->payment_status = 'pending';
            $order->order_status = 'pending';
            $order = $order->save();
            if($order){
                //redirect payment method page for payment
                return redirect()->route('coursePurchase', $enrolled_id);
            }
        }

        Toastr::error('Something went wrong please try again.');
        return back();
    }
}
