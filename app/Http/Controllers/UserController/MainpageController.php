<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\News;
use App\Models\Socialmedia;
use App\Models\Team;
use App\Models\Usermessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class MainpageController extends Controller
{
  
    public function main(){
        $getallbanner=Banner::get();
        $getallblog=Blog::orderby('id','desc')->where('status','active')->get();
        $getallnews=News::orderby('id','desc')->get();
        
        $getallevent=Event::orderby('id','desc')->limit(4)->get();
    

        $getallmember=Team::get();
        $getallgallery=Gallery::get(); 
        $getallnews=News::orderby('id','desc')->get();
        
       

       
        // dd($getallbanner);
        return view('frontend.layouts.mainpage', compact('getallbanner','getallblog','getallmember','getallgallery','getallnews', 'getallevent'));
        
    }
    //
    public function blogdetails($id){
        $blogsdetails=Blog::find($id);
        $allblogs=Blog::orderby('id','desc')->get();
        return view('frontend.blogsdetail',compact('blogsdetails','allblogs'));
    }
    public function allblogs(){
        $getallbloglist=Blog::orderby('id','desc')->paginate(9);
        return view('frontend.allbloglist',compact('getallbloglist'));
    }
    public function newsdetails($id){
        $newsdetails=News::find($id);
        $allnews=News::orderby('id','desc')->get();
        return view('frontend.newsdetails',compact('newsdetails','allnews'));
    }
    public function allnews(){
        $getallnewslist=News::orderby('id','desc')->paginate(9);
        return view('frontend.allnewslist',compact('getallnewslist'));
    }
    public function eventdetails($id){
        $eventdetails=Event::find($id);
        $allevent=Event::orderby('id','desc')->get();
        return view('frontend.eventdetails',compact('eventdetails','allevent'));
    }
    public function allevent(){
        $getalleventlist=Event::orderby('id','desc')->paginate(9);
        return view('frontend.alleventlist',compact('getalleventlist'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function storeusermessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $var = Usermessage::insert([      
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' =>$request->message,
        ]);
        return redirect()->back()->with('message', 'Message sents sucessfully!!');
    }
    public function allabout(){
        $getaboutus=About::get();
        $getallmember=Team::get();
        return view('frontend.aboutuslist',compact('getaboutus','getallmember'));
  }
    

}
