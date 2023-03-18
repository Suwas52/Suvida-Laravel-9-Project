<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactpage;

class ContactpageController extends Controller
{
    public function Contactpage(){
        $contacts = Contactpage::latest()->get();
        return view('Backend.Contacts.contactpage',compact('contacts'));
    }

    public function contact(Request $req) {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contactpage::create([
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ]);

        $notification = array(
            'message' => 'Message sent Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteContactinfo($id){
        $emails = Contactpage::find($id);

        Contactpage::find($id)->delete();

        return back();
    }
}