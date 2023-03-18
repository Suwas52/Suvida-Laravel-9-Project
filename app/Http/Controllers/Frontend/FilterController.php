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

class FilterController extends Controller
{
    public function FilterBikesAndScooters(){

        $models = VehicleModel::query();

        if (!empty($_GET['brand'])){
            $slugs = explode(',',$_GET['brand']);
            $brandId = Brand::select('id')->whereIn('brand_slug',$slugs)->pluck('id')->toArray();
            $models = VehicleModel::whereIn('brand_id',$brandId)->orderBy('model_name','ASC')->get();
        }  
        
        else {
            $models = VehicleModel::orderBy('model_name','ASC')->get();
        }

        if (!empty($_GET['vehicle'])){
            $slugs = explode(',',$_GET['vehicle']);
            $vehicleId = Vehicle::select('id')->whereIn('vehicle_slug',$slugs)->pluck('id')->toArray();
            $models = $models->whereIn('vehicle_id',$vehicleId);
        } 


        if(!empty($_GET['price'])){
            $price = explode('-', $_GET['price']);
            $models = $models->whereBetween('price',$price);   

        }

        
        

        
        $brands = Brand::orderBy('brand_name','ASC')->get();
        $vehicles = Vehicle::orderBy('vehicle_name','ASC')->get();
        
        return view('frontend.index.search.filter_all_bikes&scooters',compact('models','brands','vehicles'));
    }

    public function AllFilter(Request $request){
        $data = $request->all();

        //filter for brand

        $brandUrl = "";

        if(!empty($data['brand'])) {
            foreach($data['brand'] as $brand){
                if(empty($brandUrl)) {
                    $brandUrl .= '&brand='.$brand;
                }else {
                    $brandUrl .= ','.$brand;
                }
            }
        }


         //filter for vehicle

         $vehicleUrl = "";

         if(!empty($data['vehicle'])) {
             foreach($data['vehicle'] as $vehicle){
                 if(empty($vehicleUrl)) {
                     $vehicleUrl .= '&vehicle='.$vehicle;
                 }else {
                     $vehicleUrl .= ','.$vehicle;
                 }
             }
         }

         //filter for the price range

         $priceRangeUrl = "";
         if(!empty($data['price_range'])){
            $priceRangeUrl .= '&price='.$data['price_range'];
            
         }

        return redirect()->route('all.filter.bikes&scooters',$brandUrl.$vehicleUrl.$priceRangeUrl);
    }
}