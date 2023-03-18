<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\VehicleModel;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function AddToWishlist(Request $request)
    {
        $user_id = $request->user_id;
        $model_id = $request->model_id;
        
    
        // Check if the product is already in the user's wishlist
        $wishlist = Wishlist::where('user_id', $user_id)->where('model_id', $model_id)->first();
    
        if ($wishlist) {
            // Model is already in the user's wishlist
            
            $notification = array(
                'message' => 'Model is already in wishlist',
                'alert-type'=> 'error' 
            );
            
            return redirect()->back()->with($notification);
        } else {
            // Add the product to the user's wishlist
            Wishlist::insert([
                'user_id' => $user_id,
                'model_id' => $model_id,
                'created_at' => Carbon::now(),
                
            ]);

            $notification = array(
                'message' => 'Model successfull to added in  wishlist',
                'alert-type'=> 'success' 
            );
            
            return redirect()->back()->with($notification);

            
        }
    }

    public function UserWishlist(){
        $wishlist = Wishlist::with('model')->where('user_id',Auth::id())->latest()->get();
                
        return view('frontend.index.wishlist', compact('wishlist'));
    }
    
    public function RemoveWishlist($id){
        

        Wishlist::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Wishlist remove Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('wishlist')->with($notification);
    }
}