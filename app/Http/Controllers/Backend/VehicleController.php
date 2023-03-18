<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Image;

class VehicleController extends Controller
{
    public function AllVehicle(){
        $vehicles = Vehicle::latest()->get();
        return view('Backend.Vehicle.all_vehicle',compact('vehicles'));
    }

    public function AddVehicle(){
        return view('Backend.Vehicle.add_vehicle');
    }

    public function StoreVehicle(Request $request){
        $vehicle_img =  $request->file('vehicle_image');
        $vehicle_name_gen = hexdec(uniqid()).'.'.$vehicle_img->getClientOriginalExtension();
        
        Image::make($vehicle_img)->resize(960,720)->save('upload/vehicleImage/'.$vehicle_name_gen);
        $save_image = 'upload/vehicleImage/'.$vehicle_name_gen;
        
        Vehicle::insert([
            'vehicle_name' =>$request->vehicle_name,
            'vehicle_slug' =>strtolower(str_replace(' ','-',$request->vehicle_name)),
            'vehicle_image' =>$save_image,
        ]);

        $notification = array (
            'message' => 'Vehicle Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.vehicle')->with($notification);
    }

    public function EditVehicle($id){
        $vehicles = Vehicle::find($id);
        return view('Backend.Vehicle.edit_vehicle',compact('vehicles'));
    }

    public function UpdateVehicle(Request $request){
        $vehicle_id = $request->id;
        $vehicle_old_img = $request->vehicle_img;

        if($request->file('vehicle_image')){
            $vehicle_img =  $request->file('vehicle_image');
            $vehicle_name_gen = hexdec(uniqid()).'.'.$vehicle_img->getClientOriginalExtension();

            if(file_exists($vehicle_old_img)){
                unlink($vehicle_old_img);
            }
            
            Image::make($vehicle_img)->resize(960,720)->save('upload/vehicleImage/'.$vehicle_name_gen);
            $save_image = 'upload/vehicleImage/'.$vehicle_name_gen;
            
            Vehicle::find($vehicle_id)->update([
                'vehicle_name' =>$request->vehicle_name,
                'vehicle_slug' =>strtolower(str_replace(' ','-',$request->vehicle_name)),
                'vehicle_image' =>$save_image,
            ]);

            $notification = array (
                'message' => 'Vehicle update with Image  Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.vehicle')->with($notification);
        }
        else {
            Vehicle::find($vehicle_id)->update([
                'vehicle_name' =>$request->vehicle_name,
                'vehicle_slug' =>strtolower(str_replace(' ','-',$request->vehicle_name)),
            ]);

            $notification = array (
                'message' => 'Vehicle update without Image  Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.vehicle')->with($notification);
        }
    }

    public function DeleteVehicle($id){
        $vehicle = Vehicle::find($id);
        $vehicle_img = $vehicle->vehicle_image;

        unlink($vehicle_img);

        Vehicle::find($id)->delete();

        $notification = array (
            'message' => 'Vehicle Delete  Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}