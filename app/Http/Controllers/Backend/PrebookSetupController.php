<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\VehicleModel;
use App\Models\PrebookSetup;
use Carbon\Carbon;

class PrebookSetupController extends Controller
{
    
    public function PrebookSetup(){
        
        $prebook_setup = PrebookSetup::latest()->get();
        
            
            //Bike Vehicle
          $bike = Vehicle::where('vehicle_name','Bike')->first();

          //upcoming category of bike

          $upcoming_bike = Category::where('category_name','Upcoming')->where('vehicle_id',$bike->id)->first();
          
          
          //Scooter Vehicle
          $scooter = Vehicle::where('vehicle_name','Scooter')->first();

          //upcoming category of Vehicle
          $upcoming_scooter = Category::where('category_name','Upcoming')->where('vehicle_id',$scooter->id)->first();

        
        return view('Backend.Prebooking.prebook_setup',compact('prebook_setup','upcoming_bike','upcoming_scooter'));
    }
    
    public function AddPrebookSetup(){
        $vehicles = Vehicle::latest()->get();
   
        
        return view('Backend.Prebooking.add_prebook_setup',compact('vehicles'));
    }

    

    

    public function StorePrebookSetup(Request $request){
        
            
    
            $startTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->start_time);
            $endTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  
            $launchDate = Carbon::createFromFormat('Y-m-d\TH:i', $request->launch_date);  

        
            PrebookSetup::insert([
                'vehicle_id' => $request->vehicle_id,
                'model_id' => $request->model_id,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'launch_date' => $launchDate,
                'limit_no' => $request->limit_no,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'PreBooking Setup Complete',
                'alert-type' => 'success'
            );
    
            return redirect()->route('show.prebooksetup')->with($notification);
       
      
    }//end function
    

    public function EditPrebookSetup($id){
        $vehicles = Vehicle::latest()->get();
        $models = VehicleModel::latest()->get();
        $editPrebook = PrebookSetup::findOrFail($id);
        return view('Backend.Prebooking.edit_prebook_setup',compact('editPrebook','vehicles','models'));
    }
       

    public function UpdatePrebookSetup(Request $request){
        $prebookSetup = $request->id;
    
        $start = Carbon::createFromFormat('Y-m-d\TH:i', $request->start_time);
        $end = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  
        $launch = Carbon::createFromFormat('Y-m-d\TH:i', $request->launch_date);  

    
        PrebookSetup::find($prebookSetup)->update([
                'vehicle_id' => $request->vehicle_id,
                'model_id' => $request->model_id,
                'start_time' => $start,
                'end_time' => $end,
                'launch_date' => $launch,
                'limit_no' => $request->limit_no,
                'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'PreBooking Setup Update Success',
            'alert-type' => 'success'
        );

        return redirect()->route('show.prebooksetup')->with($notification);
   
    }//end function

    public function DeletePrebookSetup($id){
        PrebookSetup::findOrFail($id)->delete();
        
        $notification = array(
            'message' => 'PreBooking Setup Delete Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}