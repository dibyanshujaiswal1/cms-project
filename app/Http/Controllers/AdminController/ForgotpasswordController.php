<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class ForgotpasswordController extends Controller
{
    //
    public function forgotpassword(){
        return view('Auth.forgotpassword');
    }
    public function submit(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',  
        ]);
        $token=Str::random(60);
        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);
        Mail::send('Auth.passwordresetlink',['token'=>$token], function($message) use ($request){
         $message->to($request->email);
         $message->subject('Password Reset Link');
        });
        return redirect()->back()->with('success', 'Please Check your email');
       
    }
    public function resetpassword($token){
        return view('Auth.newpassword',['token'=>$token]);
    }
    public function setpassword(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users',
            'new_password' => 'required',
            'confirm_password'=>'required|same:new_password'
            
        ]);
       
$updatepassword=DB::table('password_resets')->where([
    'email'=>$request->email,
    'token'=>$request->token,
])->first();
if(!$updatepassword){
return back()->with('error','token expire and email not match');
}
\App\Models\User::where('email',$request->email)->update(['password'=>Hash::make($request->new_password)]);
DB::table('password_resets')->where([
    'email'=>$request->email,
])->delete();
return redirect('login')->with('message', 'password changes sucessfully!!');
    }
}
