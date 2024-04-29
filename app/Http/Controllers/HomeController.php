<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\VerifyToken;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = USER::select('name','email','number','is_admin','profile')->where('id',auth()->user()->id)->first();
        if(isset($user) && $user->is_admin){
             $userAll = USER::select('id','name','email','number','is_admin','profile')->get();
            return view('admin', compact('userAll'));
        }else{
            return view('home', compact('user'));
        }
    }

    // public function verifyAccount(){
    //     return view('verifyAccount');
    // }

    // public function userVerify(Request $request){
    //     $getToken = $request->token;
    //     VerifyToken::where('token',$getToken)->first();
    // }
}
