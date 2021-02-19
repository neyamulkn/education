<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{

    //home page
    public function index(Request $request)
    {
        return view('frontend.index');
    }    

    //about Us page
    public function aboutUs(Request $request)
    {
        return view('frontend.about-us');
    }

}
