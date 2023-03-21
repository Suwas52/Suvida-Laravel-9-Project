<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\MultiImage;
use Image;
use Carbon\Carbon;

class ModelController extends Controller
{
    public function AllModel(){
        $models = VehicleModel::latest()->get();
        return view('Backend.VehicleModel.all_model',compact('models'));
    }
    public function AddModel(){
        $brands = Brand::latest()->get();
        $vehicles = Vehicle::latest()->get();
        $categories = Category::latest()->get();
        return view('Backend.VehicleModel.add_model',compact('brands','vehicles','categories'));
    }

    public function StoreModel(Request $request) {
        $image = $request->file('model_thumbnail');
        $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(960,720)->save('upload/modelImage/mainImage/'.$img_name_gen);
        $save_img_url = 'upload/modelImage/mainImage/'.$img_name_gen;
        
        $category = Category::where('category_name','Upcoming')->first();
        
        if($request->category_id == "$category->id"){
            $model_id = VehicleModel::insertGetId([
            'brand_id' => $request->brand_id,
            'vehicle_id' => $request->vehicle_id,
            'category_id' => $request->category_id,
            'model_name' => $request->model_name,
            'model_slug' => strtolower(str_replace(' ','-',$request->model_name)),
            'model_thumbnail' => $save_img_url,
            'model_color' => $request->model_color,
            'engine_type' => $request->engine_type,
            'displacement' => $request->displacement,
            'weight' => $request->weight,
            'max_power' => $request->max_power,
            'max_torque' => $request->max_torque,
            'mileage' => $request->mileage,
            'emission_type' => $request->emission_type,
            'price' => $request->price,
            'description' => $request->description,
            'braking_type' => $request->braking_type,
            'starting' => $request->starting,
            'fuel_supply' => $request->fuel_supply,
            'body_type' => $request->body_type,
            'cooling_system' => $request->cooling_system,
            'fuel_capacity' => $request->fuel_capacity,
            'speedometer' => $request->speedometer,
            'techometer' => $request->techometer,
            'odometer' => $request->odometer,
            'tripmeter' => $request->tripmeter,
            'fuel_gauge' => $request->fuel_gauge,
            'gear_box' => $request->gear_box,
            'width' => $request->width,
            'height' => $request->height,
            'saddle_height' => $request->saddle_height,
            'ground_clearance' => $request->ground_clearance,
            'length' => $request->length,
            'headlight' => $request->headlight,
            'tail_light' => $request->tail_light,
            'seat_type' => $request->seat_type,
            'brake_front' => $request->brake_front,
            'brake_rear' => $request->brake_rear,
            'suspension_front' => $request->suspension_front,
            'suspension_rear' => $request->suspension_rear,
            'tyre_front' => $request->tyre_front,
            'tyre_rear' => $request->tyre_rear,
            'riding_mode' => $request->riding_mode,
            'rain_mode' => $request->rain_mode,
            'abs' => $request->abs,
            'top_speed' => $request->top_speed,
            'status' => 1,
            'created_at' =>Carbon::now(),
            ]);
        }else{
            $model_id = VehicleModel::insertGetId([
                'brand_id' => $request->brand_id,
                'vehicle_id' => $request->vehicle_id,
                'category_id' => $request->category_id,
                'model_name' => $request->model_name,
                'model_slug' => strtolower(str_replace(' ','-',$request->model_name)),
                'model_thumbnail' => $save_img_url,
                'model_color' => $request->model_color,
                'engine_type' => $request->engine_type,
                'displacement' => $request->displacement,
                'weight' => $request->weight,
                'max_power' => $request->max_power,
                'max_torque' => $request->max_torque,
                'mileage' => $request->mileage,
                'emission_type' => $request->emission_type,
                'price' => $request->price,
                'description' => $request->description,
                'braking_type' => $request->braking_type,
                'starting' => $request->starting,
                'fuel_supply' => $request->fuel_supply,
                'body_type' => $request->body_type,
                'cooling_system' => $request->cooling_system,
                'fuel_capacity' => $request->fuel_capacity,
                'speedometer' => $request->speedometer,
                'techometer' => $request->techometer,
                'odometer' => $request->odometer,
                'tripmeter' => $request->tripmeter,
                'fuel_gauge' => $request->fuel_gauge,
                'gear_box' => $request->gear_box,
                'width' => $request->width,
                'height' => $request->height,
                'saddle_height' => $request->saddle_height,
                'ground_clearance' => $request->ground_clearance,
                'length' => $request->length,
                'headlight' => $request->headlight,
                'tail_light' => $request->tail_light,
                'seat_type' => $request->seat_type,
                'brake_front' => $request->brake_front,
                'brake_rear' => $request->brake_rear,
                'suspension_front' => $request->suspension_front,
                'suspension_rear' => $request->suspension_rear,
                'tyre_front' => $request->tyre_front,
                'tyre_rear' => $request->tyre_rear,
                'riding_mode' => $request->riding_mode,
                'rain_mode' => $request->rain_mode,
                'abs' => $request->abs,
                'top_speed' => $request->top_speed,
                'status' => 0,
                'created_at' =>Carbon::now(),
            ]);
        }

        

        $multi_img = $request->file('multi_img');
        foreach($multi_img as $img){
            $multi_name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(960,720)->save('upload/modelImage/multiImage/'.$multi_name_gen);
            $save_multi_url = 'upload/modelImage/multiImage/'.$multi_name_gen;

            MultiImage::insert([
                'model_id' => $model_id,
                'photo_name' => $save_multi_url,
            ]);

        }


        
        $notification = array(
            'message' => 'Model Inserted Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->route('all.model')->with($notification);
        
        
    }

    public function EditModel($id){
        $multiImg = MultiImage::where('model_id',$id)->get();
        $brands = Brand::latest()->get();
        $vehicles = Vehicle::latest()->get();
        $categories = Category::latest()->get();
        $models = VehicleModel::findOrFail($id);
        return view('Backend.VehicleModel.edit_model',compact('brands','vehicles','categories','models','multiImg'));
    }

    public function UpdateModel(Request $request) {
        $model_id = $request->id;

        
        $category = Category::where('category_name','Upcoming')->first();

        if($request->category_id == $category->id){
            VehicleModel::findOrFail($model_id)->update([
                'brand_id' => $request->brand_id,
                'vehicle_id' => $request->vehicle_id,
                'category_id' => $request->category_id,
                'model_name' => $request->model_name,
                'model_slug' => strtolower(str_replace(' ','-',$request->model_name)),
                'engine_type' => $request->engine_type,
                'displacement' => $request->displacement,
                'model_color' => $request->model_color,
                'weight' => $request->weight,
                'max_power' => $request->max_power,
                'max_torque' => $request->max_torque,
                'mileage' => $request->mileage,
                'emission_type' => $request->emission_type,
                'price' => $request->price,
                'description' => $request->description,
                'braking_type' => $request->braking_type,
                'starting' => $request->starting,
                'fuel_supply' => $request->fuel_supply,
                'body_type' => $request->body_type,
                'cooling_system' => $request->cooling_system,
                'fuel_capacity' => $request->fuel_capacity,
                'speedometer' => $request->speedometer,
                'techometer' => $request->techometer,
                'odometer' => $request->odometer,
                'tripmeter' => $request->tripmeter,
                'fuel_gauge' => $request->fuel_gauge,
                'gear_box' => $request->gear_box,
                'width' => $request->width,
                'height' => $request->height,
                'saddle_height' => $request->saddle_height,
                'ground_clearance' => $request->ground_clearance,
                'length' => $request->length,
                'headlight' => $request->headlight,
                'tail_light' => $request->tail_light,
                'seat_type' => $request->seat_type,
                'brake_front' => $request->brake_front,
                'brake_rear' => $request->brake_rear,
                'suspension_front' => $request->suspension_front,
                'suspension_rear' => $request->suspension_rear,
                'tyre_front' => $request->tyre_front,
                'tyre_rear' => $request->tyre_rear,
                'riding_mode' => $request->riding_mode,
                'rain_mode' => $request->rain_mode,
                'abs' => $request->abs,
                'top_speed' => $request->top_speed,
                'status' => 1,
                'updated_at' => Carbon::now(),
            ]);
        }else {
            VehicleModel::findOrFail($model_id)->update([
                'brand_id' => $request->brand_id,
                'vehicle_id' => $request->vehicle_id,
                'category_id' => $request->category_id,
                'model_name' => $request->model_name,
                'model_slug' => strtolower(str_replace(' ','-',$request->model_name)),
                'engine_type' => $request->engine_type,
                'displacement' => $request->displacement,
                'model_color' => $request->model_color,
                'weight' => $request->weight,
                'max_power' => $request->max_power,
                'max_torque' => $request->max_torque,
                'mileage' => $request->mileage,
                'emission_type' => $request->emission_type,
                'price' => $request->price,
                'description' => $request->description,
                'braking_type' => $request->braking_type,
                'starting' => $request->starting,
                'fuel_supply' => $request->fuel_supply,
                'body_type' => $request->body_type,
                'cooling_system' => $request->cooling_system,
                'fuel_capacity' => $request->fuel_capacity,
                'speedometer' => $request->speedometer,
                'techometer' => $request->techometer,
                'odometer' => $request->odometer,
                'tripmeter' => $request->tripmeter,
                'fuel_gauge' => $request->fuel_gauge,
                'gear_box' => $request->gear_box,
                'width' => $request->width,
                'height' => $request->height,
                'saddle_height' => $request->saddle_height,
                'ground_clearance' => $request->ground_clearance,
                'length' => $request->length,
                'headlight' => $request->headlight,
                'tail_light' => $request->tail_light,
                'seat_type' => $request->seat_type,
                'brake_front' => $request->brake_front,
                'brake_rear' => $request->brake_rear,
                'suspension_front' => $request->suspension_front,
                'suspension_rear' => $request->suspension_rear,
                'tyre_front' => $request->tyre_front,
                'tyre_rear' => $request->tyre_rear,
                'riding_mode' => $request->riding_mode,
                'rain_mode' => $request->rain_mode,
                'abs' => $request->abs,
                'top_speed' => $request->top_speed,
                'status' => 0,
                'updated_at' => Carbon::now(),
            ]);
        }
        


        
        $notification = array(
            'message' => 'Model update without Image Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->route('all.model')->with($notification);
    }

    public function UpdateModelImg(Request $request){

        $model_id = $request->id;
        $img = $request->old_img;

        $image = $request->file('model_thumbnail');
        $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(960,720)->save('upload/modelImage/mainImage/'.$img_name_gen);
        $save_img_url = 'upload/modelImage/mainImage/'.$img_name_gen;

        if(file_exists($img)){
            unlink($img);
        }

        VehicleModel::findOrFail($model_id)->update([
            'model_thumbnail' => $save_img_url,
            'updated_at' => Carbon::now(),
        ]);

        
        $notification = array(
            'message' => 'Model update with Image Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
        
    }

    public function UpdateModelMultiImg(Request $request){
        $multiImg = $request->multi_img;

        foreach($multiImg as $id => $img){
            $unlinkImg = MultiImage::findOrFail($id);
            unlink($unlinkImg->photo_name);

            $multi_name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(960,720)->save('upload/modelImage/multiImage/'.$multi_name_gen);
            $save_multi_url = 'upload/modelImage/multiImage/'.$multi_name_gen;

            MultiImage::where('id',$id)->update([
                'photo_name' => $save_multi_url,
                'updated_at' => Carbon::now(),
            ]);
        }
 
        $notification = array(
            'message' => 'Model update with Multiple Image Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
    }

    public function MultiImgDelete($id){
        $multi_img_id =  MultiImage::findOrFail($id);

        unlink($multi_img_id->photo_name);

        MultiImage::findOrFail($id)->delete();
        
        $notification = array(
            'message' => 'Model Delete Multiple Image Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
    }

    public function ModelInactive($id){

        $status_id = VehicleModel::findOrFail($id)->update(['status'=>'0']); 

        $notification = array(
            'message' => 'Status Inactive Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
    }

    public function ModelActive($id){

        $status_id = VehicleModel::findOrFail($id)->update(['status'=>'1']); 

        $notification = array(
            'message' => 'Status Active Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
    }

    public function DeleteModel($id){
        $main_img = VehicleModel::findOrFail($id);
        unlink($main_img->model_thumbnail);

        VehicleModel::findOrFail($id)->delete();
        
        $multi_img = MultiImage::where('model_id',$id)->get();
        foreach($multi_img as $multiImg ){
            
            unlink($multiImg->photo_name);
            MultiImage::where('model_id',$id)->delete();
        }

        $notification = array(
            'message' => 'Model Deleted Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
    }
}