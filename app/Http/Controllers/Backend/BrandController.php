<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
    public function AllBrand(){
        $brands = Brand::latest()->get();
        return view('Backend.Brand.all_brand',compact('brands'));
    }

    public function AddBrand(){
        return view('Backend.Brand.add_brand');
    }

    public function StoreBrand(Request $request){
        $logo = $request->file('brand_logo');
        $img_name_gen = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
        Image::make($logo)->resize(960,720)->save('upload/brandImage/'.$img_name_gen);
        $save_img_url = 'upload/brandImage/'.$img_name_gen;

        Brand::insert([
            'brand_name'=>$request->brand_name,
            'brand_slug'=>strtolower(str_replace(' ','-',$request->brand_name)),
            'brand_logo'=>$save_img_url,
            'description'=>$request->description,
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->route('all.brand')->with($notification);
    }

    public function EditBrand($id){
        $brands = Brand::find($id);
        return view('Backend.Brand.edit_brand', compact('brands'));
    }

    public function UpdateBrand(Request $request){
        $brand_id = $request->id;
        $old_logo = $request->old_img;

        if($request->file('brand_logo')){
            
            $logo = $request->file('brand_logo');
            $img_name_gen = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
            Image::make($logo)->resize(300,300)->save('upload/brandImage/'.$img_name_gen);
            $save_img_url = 'upload/brandImage/'.$img_name_gen;

            if(file_exists($old_logo)){
                unlink($old_logo);
            }

            Brand::find($brand_id)->update([
                'brand_name'=>$request->brand_name,
                'brand_slug'=>strtolower(str_replace(' ','-',$request->brand_name)),
                'brand_logo'=>$save_img_url,
                'description'=>$request->description,
            ]);

            $notification = array(
                'message' => 'Brand update with Image Successfully',
                'alert-type'=> 'success' 
            );
            
            return redirect()->route('all.brand')->with($notification);
        }
        else {
            Brand::find($brand_id)->update([
                'brand_name'=>$request->brand_name,
                'brand_slug'=>strtolower(str_replace(' ','-',$request->brand_name)),
                'description'=>$request->description,
            ]);

            $notification = array(
                'message' => 'Brand updated without Logo Successfully',
                'alert-type'=> 'success' 
            );
            
            return redirect()->route('all.brand')->with($notification);
        }
    }

    public function DeleteBrand($id){
        $brands = Brand::find($id);
        $logo = $brands->brand_logo;
        unlink($logo);

        Brand::find($id)->delete();

        $notification = array(
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}