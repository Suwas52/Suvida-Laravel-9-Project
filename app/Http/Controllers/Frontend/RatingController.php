<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;
use Carbon\Carbon;

class RatingController extends Controller
{
    public function AddRating(Request $request){
        $user_rating = $request->product_rating;  
        $model_id = $request->model_id;


        $rating_check = Rating::where('user_id',Auth::id())->where('model_id',$model_id)->first();

        if($rating_check){
          $rating_check->stars_rated = $user_rating;
          $rating_check->update();
        }
        else{
            Rating::insert([
                'user_id'=>Auth::id(),
                'model_id'=>$model_id,
                'stars_rated'=>$user_rating,
                'created_at'=>Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Thank You for rating',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
        
    }
}