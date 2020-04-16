<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        // dd($request->name, $request->email );
        return $this->markdown('contactmail', ['name'=>$request->name, 
                                          'email'=>$request->email,
                                          'msg'=>$request->message])
                    ->subject('Customer Contact Us Message')
                    ->to("info@yerosanbusinessgroup.com");
    }
}
