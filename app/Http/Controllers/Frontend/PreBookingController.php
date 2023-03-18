<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PreBooking;
use App\Models\VehicleModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PreBookingController extends Controller
{
    public function PreBook($id){
        $model=VehicleModel::findOrFail($id);
        return view('frontend.index.prebooking.prebook',compact('model'));
    }

    public function AddPrebook(Request $request){

        $prebookDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->prebook_time);

        PreBooking::insert([
            'user_id'=>auth()->user()->id,
            'model_id'=>$request->model_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'zone'=>$request->zone,
            'district'=>$request->district,
            'city'=>$request->city,
            'address'=>$request->address,
            'model_color'=>$request->model_color,
            'prebook_time'=>$prebookDateTime,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'PreBooking Successful',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function showPrebook(){
   
       $prebook = PreBooking::latest()->get();
        return view('Backend.Prebooking.show_prebooking',compact('prebook'));
    }
}