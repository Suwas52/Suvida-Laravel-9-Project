<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Rating;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller

{

    public function Master(){
        
        $category_1 = Category::skip(0)->first();
        $popular_category = Category::where('category_name','Popular')->first();
        $popular_bikes = VehicleModel::where('category_id',$popular_category->id)->orderBy('model_name','ASC')->get();
        $off_road = VehicleModel::where('body_type','Off Road')->orderBy('model_name','ASC')->get();
        $sport = VehicleModel::where('body_type','Sport')->orderBy('model_name','ASC')->get();
        $best_mileage =VehicleModel::whereBetween('mileage', [50,80] )->orderBy('model_name','ASC')->get();
        $cruiser =VehicleModel::where('body_type','Cruiser' )->orderBy('model_name','ASC')->get();
        $commuter =VehicleModel::where('body_type','Commuter' )->orderBy('model_name','ASC')->get();
        $category_1_model = VehicleModel::where('category_id',$category_1->id)->orderBy('model_name','ASC')->get();

        $category_2 = Category::skip(1)->first();
        $category_2_model = VehicleModel::where('category_id',$category_2->id)->orderBy('model_name','ASC')->get();
        
        $category_3= Category::skip(2)->first();
        $category_3_model = VehicleModel::where('category_id',$category_3->id)->orderBy('model_name','ASC')->get();
        
        $category_4= Category::skip(3)->first();
        $category_4_model = VehicleModel::where('category_id',$category_4->id)->orderBy('model_name','ASC')->get();

        

        

        
       
   
        return view('frontend.index',compact('popular_bikes','category_1','category_1_model','category_2','category_2_model',
        'category_3','category_3_model','category_4','category_4_model','off_road','sport','best_mileage','cruiser','commuter'));
    }


    public function BrandModel($id,$slug){
        
        $brand = Brand::findOrFail($id);
        
        $category = Category::where('category_name','Upcoming')->first();
        $brands = Brand::all();
        
        $models = VehicleModel::where('brand_id',$brand->id)->where('category_id','!=',$category->id)->orderBy('model_name','asc')->latest()->get();
        
  

    
        $model_Upcoming = VehicleModel::where('brand_id',$brand->id)->where('category_id',$category->id)->limit(3)->latest()->get();

        return view('frontend.index.show_brand.show_brand',compact('brand','models','model_Upcoming','brands','category'));
    }

    
    public function ModelDetails($id,$slug){
        $models= VehicleModel::findOrFail($id);
        $ratings = Rating::where('model_id',$models->id)->get();
        $rating_sum = $ratings->sum('stars_rated');
        $user_rating = Rating::where('model_id',$models->id)->where('user_id',Auth::id())->first();
        $reviews = Review::where('model_id',$models->id)->get();
        

        if($ratings->count()>0){
            $rating_value = $rating_sum/$ratings->count();
        }
        else {
            $rating_value = 0;
        }
       
        
        $multiImg = MultiImage::where('model_id',$id)->get();

        return view('frontend.index.model_details',compact('models','multiImg','ratings','rating_value','user_rating','reviews'));
    }
    
    public function CategoryBike(Request $request,$id,$slug){
        $brand = $request->brand_select;
        $selectByCC = $request->select_cc;
       
        
        
        $categories = Category::where('id',$id)->get();
        

        $models = VehicleModel::where('category_id',$id)->get();

        
            
            
        
        
        
        
        
    
       return view('frontend.index.bike_categories',compact('categories','models'));
    }

    public function ContactAdmin(){
        return view('frontend.contact.contact');
    }

    public function AllBrandShow(){
        return view('frontend.index.all_brand_show');
    }
    public function Compare(){
        return view('frontend.index.compare');     
    }

    public function ModelSearch(Request $request){
        $request->validate(['search'=> "required"]);
        $vehicle = $request->search;

        $models = VehicleModel::where('model_name','LIKE',"%$vehicle%")->get();
        $brands = Brand::where('brand_name','LIKE',"%$vehicle%")->get();
        return view('frontend.index.search.all_search',compact('models','vehicle','brands'));
    }

   public function SearchModels(){
    $models = VehicleModel::select('model_name')->get();

    $data = [];

    foreach ($models as $item){
        $data[] = $item['model_name'];
    }
    return $data;
   }

   public function CompareModel(Request $request){
    $request->validate(['model_1'=> "required"]);
    $request->validate(['model_2'=> "required"]);
    $vehicle_1 = $request->model_1;
    $vehicle_2 = $request->model_2;
    
    $models_1 = VehicleModel::where('model_name',$vehicle_1)->first();
    $models_2 = VehicleModel::where('model_name',$vehicle_2)->first();
    // dd($models_1);

    //model -1
        $ratings_model_1 = Rating::where('model_id',$models_1->id)->get();
        $rating_sum_model_1 = $ratings_model_1->sum('stars_rated');
        $reviews_count = Review::where('model_id',$models_1->id)->count();

        // dd($reviews_count);
        if($ratings_model_1->count()>0){
            $rating_value_model_1 = $rating_sum_model_1/$ratings_model_1->count();
        }
        else {
            $rating_value_model_1 = 0;
        }

    //Model-2
    $ratings_models_2 = Rating::where('model_id',$models_2->id)->get();
    $rating_sum_models_2 = $ratings_models_2->sum('stars_rated');
    $reviews_count2 = Review::where('model_id',$models_2->id)->count();

    // dd($reviews_count);
    if($ratings_models_2->count()>0){
        $rating_value_models_2 = $rating_sum_models_2/$ratings_models_2->count();
    }
    else {
        $rating_value_models_2 = 0;
    }

    return view('frontend.index.compareSpecification',compact('models_1','models_2','rating_value_model_1','reviews_count','rating_value_models_2','reviews_count2'));
   }

  
   
}