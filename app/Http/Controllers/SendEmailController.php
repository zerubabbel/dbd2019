<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function index(){
    	return view('contact/send_email');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('zerubabbel.uidev@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
