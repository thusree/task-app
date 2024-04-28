<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\User;

class SmsController extends Controller
{
    public function sendContactSms(){
        // $sid = getenv("TWILIO_SID");
        // $token = getenv("TWILIO_TOKEN");
        // $senderNumber = getenv("TWILIO_PHONE");
        // $twilio = new Client($sid, $token);
        // $otp = mt_rand(100000, 999999);
        // $message = $twilio->messages
        //                 ->create("+91 96885 75469", // to
        //                         [
        //                             "body" => "Your Teks Verification Code is: $otp" ,
        //                             "from" => $senderNumber
        //                         ]
        //                 );
        //                 dd($message);
        $user = USER::select('name','email','number','is_admin','profile')->where('id',auth()->user()->id)->first();
        return view('verifyAcccount', compact('user'));
    }

    public function sendContactverified(Request $request){
        $user = USER::select('name','email','number','is_admin','profile','otp_verfied')->where('otp_verfied',$_POST['otp_verified'])->where('id',auth()->user()->id)->first();
        if(isset($user)){
            return view('home', compact('user'));
        }else{
            $user = USER::select('name','email','number','is_admin','profile')->where('id',auth()->user()->id)->first();
            return view('verifyAcccount', compact('user'));
        }
    }
}
