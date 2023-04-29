<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PreBooking;
use App\Models\PrebookSetup;
use App\Models\VehicleModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PrebookRequest;
use App\Notifications\PrebookAccept;
use Carbon\Carbon;

class PreBookingController extends Controller
{
    public function PreBook($id){
        $model=VehicleModel::findOrFail($id);
        return view('frontend.index.prebooking.prebook',compact('model'));
    }

    public function AddPrebook(Request $request){
        $user = User::where('role','admin')->get();

        $prebook_model = $request->model_id;
        $count_model = PreBooking::where('model_id',$prebook_model)->count();
       
        $all_prebookSetup = PreBookSetup::latest()->get();

        foreach($all_prebookSetup as $prebookSetup){
            
            if($prebook_model == $prebookSetup->model_id && $count_model >= $prebookSetup->limit_no  ){
                $notification = array(
                    'message' => 'Limited Prebooking is completed so Next Time Come Fast',
                    'alert-type' => 'error'
                );
        
                return redirect()->back()->with($notification);
            }else {
                $prebookDateTime = Carbon::createFromFormat('Y-m-d\TH:i', $request->prebook_time);
    
                if($prebook_model == $prebookSetup->model_id && $prebookDateTime >= $prebookSetup->end_time ){
                    $notification = array(
                        'message' => 'PreBooking This time is not available ',
                        'alert-type' => 'error'
                    );
            
                    return redirect()->back()->with($notification);
                }

                $request->validate([
                'first_name' => ['required' ],
                'last_name' => ['required'],
                'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'phone_no'=>['required'],
                'zone'=>['required'],
                'district'=>['required'],
                'city'=>['required'],
                'address'=>['required'],
                'model_color'=>['required'],
                 ]);
        
                PreBooking::insert([
                    'user_id'=>auth()->user()->id,
                    'model_id'=>$prebook_model,
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
        
                Notification::send($user, new PrebookRequest($request));
                return redirect()->route('dashboard')->with($notification);
        }
    }
        
        
        
      
    }

    public function showPrebook(){
   
       $prebook = PreBooking::latest()->get();
        return view('Backend.Prebooking.show_prebooking',compact('prebook'));
    }

    public function PrebookVerify($id){
        $prebook = PreBooking::where('id', $id)->first();
        $user = User::where('id',$prebook->user_id)->first();
       
        PreBooking::where('id',$id)->update(['status'=>'Verified']);
        $notification = array(
            'message' => 'PreBooking Verified Successful',
            'alert-type' => 'success'
        );
        
        Notification::send($user, new PrebookAccept($prebook));
        return redirect()->back()->with($notification);
    }

    public function PrebookReject($id){
        PreBooking::where('id',$id)->update(['status'=>'Rejected']);
        
        $notification = array(
            'message' => 'PreBooking Rejected Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function RemovePrebook($id){
        PreBooking::findOrFail($id)->delete();

        $notification = array(
            'message' => 'PreBooking Delete Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}