<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $temp = [
            'email' => 'hdc.retail@gmail.com',
            'subject' => $request->subject,
            'name' => 'HDC',
            'content' => $request->content . "\n\n" . "- " . $request->email,
        ];

        $data = [
          'subject' => "Thank you!",
          'name' => $request->name,
          'email' => $request->email,
          'content' => "We have recived your inquiry and a team member will respond to you as soon as possible."
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        Mail::send('email-template', $temp, function($message) use ($temp) {
            $message->to($temp['email'])
            ->subject($temp['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
