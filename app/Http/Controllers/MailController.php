<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendMail(){
        Mail::to('dilanegpt@gmail.com')->send(
            new TestMail([
                'otp' =>  "0013"
            ])
        );
    }
}
