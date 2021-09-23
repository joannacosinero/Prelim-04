<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function showEmailForm() {
        return view('email-form');
    }

    public function sendMail(Request $request) {
        $request->validate([
            'email' => 'email|required',
            'subject' => 'string|required',
            'content' => 'string|required',
        ]);

        Mail::send('mail', ['content'=>$request->content], function($mail) use ($request) {
            $mail->to($request->email);
            $mail->subject($request->subject);
            $mail->from('joannalustre26@gmail.com');
        });

        return "<h3>The Email is sent, successfully.</h3>";
    }
}
