<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\VehicleModel;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function AddReview($model_slug){
        $models = VehicleModel::where('model_slug',$model_slug)->first();
        

        if($models){
           
            return view("frontend.index.review",compact('models'));
            
        }
         else{
         $notification = array(
              'message' => 'The link you follow was broken So you need you login first',
              'alert-type'=> 'error' 
          );
          
          return redirect()->back()->with($notification);

        }
    }

    public function PostReview(Request $request){
        $model_id = $request->model_id;
        $user_review = $request->user_review;
        
        $review = Review::where('user_id',Auth::id())->where('model_id',$model_id)->first();
        

        if($review){
            return view("frontend.index.review.edit_review",compact('review'));
            
        }else{
            Review::insert([
                'user_id' => Auth::id(),
                'model_id' => $model_id,
                'user_review' => $user_review,
                'created_at'=>Carbon::now(),
            ]);
           

            $notification = array(
                'message' => 'Thank You for writing a review',
                'alert-type'=> 'success' 
            );
            
            return redirect()->back()->with($notification);
        }
    }

    public function EditReview($id,$model_slug){
        $models=VehicleModel::findOrFail($id);
        
        $review= Review::where('user_id',Auth::id())->where('model_id',$models->id)->first();
        
        if($review){
            
            return view("frontend.index.review.edit_review",compact('review','models'));
        }else{
            $notification = array(
                'message' => 'The link is broken so you need to login first',
                'alert-type'=> 'success' 
            );
            
            return redirect()->back()->with($notification);
        }
         
    }

    public function UpdateReview(Request $request){
        $review_id = $request->review_id;
        $user_review = $request->user_review;
        
        Review::findOrFail($review_id)->update([
            'user_review'=>$user_review,
        ]);
            $notification = array(
                'message' => 'Review Update Successfully',
                'alert-type'=> 'success' 
            );
            
            return redirect()->back()->with($notification);
       
    }

    public function DeleteReview($id){
        Review::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Review Delete Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->back()->with($notification);
        
    }
}