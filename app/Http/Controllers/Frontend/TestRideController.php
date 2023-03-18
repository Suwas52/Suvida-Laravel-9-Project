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
}