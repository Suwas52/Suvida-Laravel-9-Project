<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestRide;
use App\Models\VehicleModel;
use Carbon\Carbon;

class TestRideController extends Controller
{
    public function TestRide(){
        return view('frontend.index.testRide.test_ride');
    }

    public function AddTestRide(Request $request){

        $bookingDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->book_time);

        if($bookingDateTime<=now()){
            $notification = array(
                'message' => 'You cannot booking this  time  ',
                'alert-type' => 'error'
            );
    
            return redirect()->back()->with($notification);
        }

        
        $models= $request->model_name;
        $model = VehicleModel::where('model_name',$models)->first();
        

        TestRide::insert([
            'user_id'=>auth()->user()->id,
            'bike_id'=>$model->id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'zone'=>$request->zone,
            'district'=>$request->district,
            'city'=>$request->city,
            'address'=>$request->address,
            'book_time'=>$bookingDateTime,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Test Ride Success',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }


    public function TestRiderUser(){
        $all_testrider = TestRide::latest()->get();
        return view('Backend.TestRide.all_testrider',compact('all_testrider'));
    }

    public function TestRideVerify($id){
        TestRide::where('id',$id)->update(['status'=>'Verified']);
        $notification = array(
            'message' => 'TestRide Verified Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function TestRideReject($id){
        TestRide::where('id',$id)->update(['status'=>'Rejected']);
        $notification = array(
            'message' => 'TestRide Rejected Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}