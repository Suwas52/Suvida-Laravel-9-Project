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
        
            
    
            $startTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->start_time);
            $endTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  
            $launchDate = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  

        
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
       
      
    }//end function
    

    public function EditPrebookSetup($id){
        $vehicles = Vehicle::latest()->get();
        $models = VehicleModel::latest()->get();
        $editPrebook_setup = PrebookSetup::findOrFail($id);
        return view('Backend.Prebooking.edit_prebook_setup',compact('editPrebook_setup','vehicles','models'));
    }
       

    public function UpdatePrebookSetup(Request $request){
        $prebooksetup_id = $request->id;
    
        $startTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->start_time);
        $endTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  
        $launchDate = Carbon::createFromFormat('Y-m-d\TH:i', $request->end_time);  

    
        PrebookSetup::findOrFail($prebooksetup_id)->update([
            'vehicle_id' => $request->vehicle_id,
            'model_id' => $request->model_id,
            'start_time' => $startTime,
            'end_time' => $endTime,
            'launch_date' => $launchDate,
            'limit_no' => $request->limit_no,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'PreBooking Setup Update Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
   
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