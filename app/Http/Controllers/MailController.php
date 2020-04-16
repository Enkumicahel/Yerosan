<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\ContactUs;
use Validator;

class MailController extends Controller
{

    public function contact(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        // if ($validator->fails()) {
        //     return back();
        // }
        // dd($request->all());

        Mail::send(new ContactUs());

        Session::flash('flashmsg', 'Thank you!');
    	
        return redirect()->back();

    }

}
