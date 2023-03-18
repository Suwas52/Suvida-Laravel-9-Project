<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Category;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('Backend.Category.all_category',compact('categories'));
    }

    public function AddCategory(){
        $vehicles = Vehicle::orderBy('vehicle_name','ASC')->get();
        return view('Backend.Category.add_category',compact('vehicles'));
    }

    public function StoreCategory(Request $request){
        Category::insert([
           'vehicle_id'=>$request->vehicle_name, 
           'category_name'=>$request->category_name,
           'category_slug'=>strtolower(str_replace(' ','-',$request->category_name)),
        ]);

        
        $notification = array(
            'message' => 'Vehicle Category Inserted Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->route('all.category')->with($notification);
    }

    public function EditCategory($id){
        $vehicles = Vehicle::orderBy('vehicle_name','ASC')->get();
        $category = Category::find($id);
        return view('Backend.Category.edit_category',compact('vehicles','category'));
    }

    public function UpdateCategory(Request $request){
        $category_id = $request->id;
        
        Category::find($category_id)->update([
            'vehicle_id' => $request->vehicle_name,
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
        ]);

        $notification = array (
          'message' => 'Category Updated Successfully',
          'alert-type' => 'success'  
        );

        return redirect()->route('all.category')->with($notification);
    }

    public function DeleteCategory($id){
        Category::find($id)->delete();
        $notification = array (
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'  
          );
  
          return redirect()->back()->with($notification);
    }
}