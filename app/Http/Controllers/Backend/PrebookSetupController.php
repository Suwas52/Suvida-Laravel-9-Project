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
       
        
        return view('Backend.Prebooking.prebook_setup',compact('prebook_setup'));
    }
    
    public function AddPrebookSetup(){
        $vehicles = Vehicle::latest()->get();
   
        
        return view('Backend.Prebooking.add_prebook_setup',compact('vehicles'));
    }

    

    

    public function StorePrebookSetup(Request $request){
        $vehicles = Vehicle::latest()->get();
        foreach($vehicles as $vehicle){
            $Upcoming= Category::where('vehicle_id',$vehicle->id)->where('category_name','Upcoming')->first();
            $Upcoming_bike = VehicleModel::where('category_id',$Upcoming->id)->get();
    
            $startTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->start_time);
            $endTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  
            $launchDate = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  
    
           if($Upcoming_bike){
            
            foreach($Upcoming_bike as $Upcoming){
                if($request->model_id == $Upcoming->id ){
                    $notification = array(
                        'message' => 'Model is already Setup Complete',
                        'alert-type' => 'error'
                    );
            
                    return redirect()->back()->with($notification);
                }
    
                else {
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
            
                    return redirect()->back()->with($notification);
                } 
            }
    
                
            }
            else {
                $notification = array(
                    'message' => 'Only Upcoming Model can be setup for prebooking',
                    'alert-type' => 'error'
                );
        
                return redirect()->back()->with($notification);
            }
        }
        }
       

}