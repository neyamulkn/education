<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class HomeController extends Controller
{

    //home page
    public function index(Request $request)
    {
        return view('frontend.index');
    }

    public function category(Request $request, $catslug=null){
        $Courses = Course::where('status', 'active');
        //check search keyword
        if ($request->q) {
            $keyword = $request->q;
            $Courses->where(function ($query) use ($keyword) {
                $query->orWhere('title', 'like', '%' . $keyword . '%');
                $query->orWhere('meta_keywords', 'like', '%' . $keyword . '%');
                $query->orWhere('summery', 'like', '%' . $keyword . '%');
                $query->orWhere('description', 'like', '%' . $keyword . '%');
            });
        }

        if ($catslug) {
            $cat = Category::where('slug', $catslug)->first();
            if ($cat){
                $Courses->where(function ($query) use ($cat) {
                    $query->orWhere('category_id', $cat->id);
                    $query->orWhere('subcategory_id', $cat->id);
                    $query->orWhere('childcategory_id', $cat->id);
                });
            }
        }

        //check ratting
        if ($request->ratting) {
            $Courses = $Courses->where('avg_ratting', $request->ratting);
        }

        //check brand
        if ($request->brand) {
            if (!is_array($request->brand)) { // direct url tags
                $brand = explode(',', $request->brand);
            } else { // filter by ajax
                $brand = implode(',', $request->brand);
            }
            $Courses = $Courses->whereIn('brand_id', $brand);
        }
        $field = 'id'; $value = 'desc';
        if (isset($request->sortby) && $request->sortby) {
            try {
                $sort = explode('-', $request->sortby);
                if ($sort[0] == 'name') {
                    $field = 'title';
                } elseif ($sort[0] == 'price') {
                    $field = 'price';
                } elseif ($sort[0] == 'ratting') {
                    $field = 'avg_ratting';
                } else {
                    $field = 'id';
                }
                $value = ($sort[1] == 'a' || $sort[1] == 'l') ? 'asc' : 'desc';
                $Courses = $Courses->orderBy($field, $value);
            }catch (\Exception $exception){}
        }
        $Courses = $Courses->orderBy($field, $value);

        //check price keyword
        if ($request->price) {
            $price = explode(',', $request->price);
            $Courses = $Courses->whereBetween('price', [$price[0], $price[1]]);
        }

        //check perPage
        $perPage = 24;
        if (isset($request->perPage) && $request->perPage) {
            $perPage = $request->perPage;
        }
        $data['Courses'] = $Courses->selectRaw('Courses.id,title,price,discount, discount_type, Courses.slug, thumbnail_image' )->paginate($perPage);
        //check ajax request
        if($request->filter){
            return view('frontend.Courses.filter_Courses')->with($data);
        }else {
            $data['categories'] = Category::join('Courses', 'categories.id', 'Courses.category_id')
                ->where('vendor_id', $data['seller']->id)
                ->where('categories.status', 1)
                ->groupBy('categories.id')
                ->selectRaw('categories.id,categories.name, categories.slug')->get();
            //get all category id for brand
            $category_id = array_column($data['categories']->toArray(), 'id');

            return view('frontend.shop.seller_Courses')->with($data);
        }
    }

    //display Course details by Course id/slug
    public function course_details($slug)
    {
        $data['course_details'] = Course::with(['course_sections.courseLessons'])->where('slug', $slug)->first();
        //dd($data['course_details']);
        if($data['course_details']) {

            //recent views set category id
            $recent_catId = ($data['course_details']->subcategory_id) ? $data['course_details']->subcategory_id : $data['course_details']->category_id;
            $recentViews = (Cookie::has('recentViews') ? json_decode(Cookie::get('recentViews')) :  []);
            $recentViews = array_merge([$recent_catId], $recentViews);
            $recentViews = array_values(array_unique($recentViews)); //reindex & remove duplicate value
            Cookie::queue('recentViews', json_encode($recentViews), time() + (86400));

            if(!Cookie::has('recentViews')) {
                $data['course_details']->increment('views');
            }
            $related_Courses = Course::where('status', 'active');
            if($data['course_details']->childcategory_id != null){
                $category_feild = 'childcategory_id';
                $category_id = $data['course_details']->childcategory_id;
            }elseif($data['course_details']->subcategory_id != null){
                $category_feild = 'subcategory_id';
                $category_id = $data['course_details']->subcategory_id;
            }else{
                $category_feild = 'category_id';
                $category_id = $data['course_details']->category_id;
            }

            $data['related_Courses'] = $related_Courses->where($category_feild, $category_id)->selectRaw('id,title,slug,thumbnail_image,price,discount,discount_type,summery')->where('id', '!=', $data['course_details']->id)->take(8)->get();

            return view('frontend.courses.details')->with($data);
        }else{
            return view('404');
        }
    }

    public function course_purchase($slug){
        $data['course_details'] = Course::with(['course_sections.courseLessons'])->where('slug', $slug)->first();
        if($data['course_details']){
            return view('frontend.courses.purchase')->with($data);
        }else{
            return view('404');
        }
    }

    //about Us page
    public function aboutUs(Request $request)
    {
        return view('frontend.about-us');
    }

    public function page404(){
        return view('404');
    }

}
