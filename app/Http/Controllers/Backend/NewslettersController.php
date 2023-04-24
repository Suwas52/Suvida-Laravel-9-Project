<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletters;
use Carbon\Carbon;

class NewslettersController extends Controller
{
    public function Newsletters(){
        $emails = Newsletters::latest()->get();
        return view('Backend.Newsletters.newsletters',compact('emails'));
    }

    public function AddSubscriber(Request $request) {
        
        $request->validate([
            'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'
        ]);

        $subscriberCount = Newsletters::where('email',$request['email'])->count();

        if($subscriberCount > 0) {
            $notification = array(
                'message' => 'Subscriber email already exists! ',
                'alert-type'=> 'warning' 
            );
    
            return back()->with($notification);
        }
        else {
            

            Newsletters::insert([
                'email' => $request->email,
                'status' => 0,
                'created_at' => Carbon::now(),
            ]);
    
            $notification = array(
                'message' => 'You have been successfully subscribe ',
                'alert-type'=> 'success' 
            );
    
            return back()->with($notification);
        }
        
    }

    public function InactiveSubscribe($id){
        Newsletters::where('id',$id)->update(['status'=>0]);
        $notification = array(
            'message' => 'Subscriber Inactive Successful',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveSubscribe($id){
        Newsletters::where('id',$id)->update(['status'=>1]);
        $notification = array(
            'message' => 'Subscribe Active Successful',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DeleteSubscriber($id){
        Newsletters::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Subscriber Delete Successful',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }
}