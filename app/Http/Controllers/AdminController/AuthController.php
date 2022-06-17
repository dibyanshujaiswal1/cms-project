<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{
    //
    public function login(){
        return view('Auth.login');
    }
    public function storelogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return  redirect('admin/dashboard'); 
            
        }
       

        return redirect()->back()->with('error', 'Oppes! You have entered incorrect data');
       
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
     }

     
     public function showChangePasswordGet() {
        return view('Auth/changepassword');
    }

    public function changePassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8',
            'confirm_password'=>'required|same:new_password'
        ]);
        if(!Hash::check($request->current_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        //Change Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->back()->with("success","Password successfully changed!");
    }           
}
    
    
