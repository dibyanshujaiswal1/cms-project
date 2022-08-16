<?php
namespace App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Models\Register;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    public function register(){
        return view('register.registerform');
    }
    public function submitform(Request $request){
        $request->validate([
            'name' =>'required',
            'email' => 'required|email|',
            'password' => 'required|string|min:6',
            'confirm_password'=>'required|same:password'   
             ]);
             $var = Register::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'created_at'=>Carbon::now()
        ]);
        $email=$request->email;
        Mail::send('register.registeradderesslink',['email'=>$email], function($message) use ($request){
         $message->to($request->email);
         $message->subject('mail verified Link');
        });
        return redirect()->back()->with('success', 'Please Check your email');   
    }
    public function verify(Request $request, $email)
    {
        $data = Register::where('email',$email)->first();
        $data->email_verified_at=Carbon::now();
        $data->update();
        return redirect('register-form')->with('success', 'registered sucessfully!!');
    }
}
