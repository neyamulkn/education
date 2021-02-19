<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\HomepageSection;
use App\Models\Product;
use App\Traits\CreateSlug;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HomepageSectionController extends Controller
{
    use CreateSlug;
    public function index()
    {
        $data['categories'] = Category::where('parent_id', null)->orderBy('name', 'asc')->get();
        $data['banners'] = Banner::orderBy('position', 'asc')->where('status', 1)->get();
        $data['homepageSections'] = HomepageSection::orderBy('position', 'asc')->get();
        return view('admin.homepage.index')->with($data);
    }


    public function store(Request $request)
    {

        $section = new HomepageSection();
        $section->title = $request->title;
        $section->slug = $this->createSlug('homepage_sections', $request->title);
        $section->type = $request->section_type;
        $section->layout_width = ($request->layout_width == 'full') ? 1 : null;
        $section->background_color = $request->background_color;
        $section->text_color = $request->text_color;
        $section->product_id =  ($request->section_type == 'section' ?  implode(',', $request->product_id) : $request->product_id);
        $section->status = ($request->status ? 1 : 0);
        $store = $section->save();
        if($store){
            Toastr::success('Homepage section added successfully.');
        }else{
            Toastr::error('Homepage section cann\'t added.');
        }

        return back();
    }



    public function edit($id)
    {

        $data['categories'] = Category::where('parent_id', null)->orderBy('name', 'asc')->get();
        $data['banners'] = Banner::orderBy('position', 'asc')->where('status', 1)->get();
        $data['section'] = HomepageSection::where('id', $id)->first();
        if($data['section']->type == 'section') {
            $data['products'] = Product::whereIn('id', explode(',', $data['section']->product_id))->get();
        }
        return view('admin.homepage.edit')->with($data);

    }


    public function update(Request $request)
    {

        $section = HomepageSection::find($request->id);
        $section->title = $request->title;
        $section->layout_width = ($request->layout_width == 'full') ? 1 : null;
        $section->background_color = $request->background_color;
        $section->text_color = $request->text_color;
        if($request->section_type) {
            $section->type = $request->section_type;
            $section->product_id = ($request->section_type == 'section' ? implode(',', $request->product_id) : $request->product_id);
        }
        $section->status = ($request->status ? 1 : 0);
        $store = $section->save();
        if($store){
            Toastr::success('Homepage section update successfully.');
        }else{
            Toastr::error('Homepage section update failed.');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomepageSection  $HomepageSection
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $section = HomepageSection::find($id);

        if($section){
            $section->delete();
            $output = [
                'status' => true,
                'msg' => 'Home section deleted successfully.'
            ];
        }else{
            $output = [
                'status' => false,
                'msg' => 'Home section cannot deleted.'
            ];
        }
        return response()->json($output);
    }
//
//    public function getAllProducts (Request $request){
//        $output = '';
//        $products = Product::where('category_id', $request->id)->where('status', 'active')->get();
//        if(count($products)>0){
//            foreach ($products as $source) {
//                $output .= ' <option value="'.$source->id.'">'.$source->title.'</option>';
//            }
//        }
//        echo $output;
//    }

    public function getSingleProduct (Request $request){
        $output = '';
        $products = Product::where('id', $request->id)->where('status', 'active')->get();
        if(count($products)>0){
            foreach ($products as $source) {
                $output .= ' <option selected value="'.$source->id.'">'.$source->title.'</option>';
            }
        }
        echo $output;
    }

    public function HomepageSectionSorting (Request $request){
        for($i=0; $i<count($request->sectionIds); $i++)
        {
            HomepageSection::where('id', str_replace('item', '', $request->sectionIds[$i]))->update(['position' => $i]);
        }
        echo 'Section Order has been updated';
    }
}
