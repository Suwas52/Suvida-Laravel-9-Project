<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletters;

class NewslettersController extends Controller
{
    public function Newsletters(){
        $emails = Newsletters::latest()->get();
        return view('Backend.Newsletters.newsletters',compact('emails'));
    }

    public function newslettersmail(Request $req) {
        $req->validate([
            'emails' => 'required'
        ]);

        Newsletters::create([
            'emails' => $req->emails
        ]);

        $notification = array(
            'message' => 'You have been successfully subscribe ',
            'alert-type'=> 'success' 
        );

        return back()->with("");
    }

    public function deleteEmail($id){
        $emails = Newsletters::find($id);

        Newsletters::find($emails)->delete();

        return back();
    }
}