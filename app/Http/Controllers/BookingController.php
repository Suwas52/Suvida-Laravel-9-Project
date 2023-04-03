<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\VehicleModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Notifications\BookingRequest;
use App\Notifications\BookingVerified;
use Illuminate\Support\Facades\Notification;

class BookingController extends Controller
{
  

    
    public function booking($id){
        $bike=VehicleModel::findOrFail($id);
        return view('booking',compact('bike'));
    }
    public function bookingSubmit(Request $request){

        $user = User::where('role','admin')->get();
        
        Booking::insert([
            'user_id'=>auth()->user()->id,
            'bike_id'=>$request->bike_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'zone'=>$request->zone,
            'district'=>$request->district,
            'city'=>$request->city,
            'address'=>$request->address,
            'model_color'=>$request->model_color,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Booking Success',
            'alert-type' => 'success'
        );

        Notification::send($user, new BookingRequest($request->first_name));

        return redirect()->route('dashboard')->with($notification);
    }

    public function RemoveBooking($id){
        Booking::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Booking Remove Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    
    public function showBookings(){
        $bookings = Booking::with('rBike')->with('rUser')->get();
        return view('Backend.bookings',compact('bookings'));
    }
    

    public function BookingVerify($id){

        $book_id = Booking::where('id',$id)->first();
    
        $user = User::where('role','user')->where('id',$book_id->user_id)->first();
      

        Booking::where('id',$id)->update(['status'=>'Confirmed']);

        $notification = array(
            'message' => 'Booking Verify Successfully',
            'alert-type' => 'success'
        );

        Notification::send($user, new BookingVerified());

        return redirect()->back()->with($notification);
    }
    public function BookingReject($id){
        
        $booking_id = Booking::where('id',$id)->update(['status'=>'Rejected']); 

        $notification = array(
            'message' => ' Booking Reject Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function UserBooking(){
        $userBooking = Booking::with('rBike')->where('user_id',Auth::id())->latest()->get();

        return view('frontend.index.booking.user_booking', compact('userBooking'));
    }
    
}