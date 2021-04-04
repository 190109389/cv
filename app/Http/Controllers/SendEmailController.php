<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('contact');
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

     Mail::to('190103389@stu.sdu.edu.kz')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting me!');

    }
}

