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
use App\Models\Publication;
use App\Models\Socialmedia;
use App\Models\Team;
use App\Models\Usermessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;

// use Mail;

class MainpageController extends Controller
{
  
    public function main(){
        $getallbanner=Banner::get();
        $getallblog=Blog::orderby('id','desc')->where('status',1)->get();
        $getallnews=News::orderby('id','desc')->get();    
        $getallevent=Event::orderby('id','desc')->limit(4)->get();
        $getallmember=Team::orderby('id','desc')->get();
        $getallgallery=Gallery::get(); 
        $getallnews=News::orderby('id','desc')->get();
        $getaboutus=About::get();
        $getourpublication=Publication::orderby('id','desc')->get();
        return view('frontend.layouts.mainpage', compact('getallbanner','getallblog','getallmember','getallgallery','getallnews', 'getallevent','getaboutus','getourpublication'));
        
    }
    //
    public function blogdetails($id){
        $blogsdetails=Blog::find($id);
        $allblogs=Blog::orderby('id','desc')->paginate(4);
        return view('frontend.blogsdetail',compact('blogsdetails','allblogs'));
    }
    public function allblogs(){
        $getallbloglist=Blog::orderby('id','desc')->where('status', 1)->paginate(6);
        return view('frontend.allbloglist',compact('getallbloglist'));
    }
    public function newsdetails($id){
        $newsdetails=News::find($id);
        $allnews=News::orderby('id','desc')->paginate(4);
        return view('frontend.newsdetails',compact('newsdetails','allnews'));
    }
    public function allnews(){
        $getallnewslist=News::orderby('id','desc')->paginate(9);
        return view('frontend.allnewslist',compact('getallnewslist'));
    }
    public function eventdetails($id){
        $eventdetails=Event::find($id);
        $allevent=Event::orderby('id','desc')->paginate(4);
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
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
         Usermessage::insert([      
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' =>$request->message,
        ]);
        $user=[
            'name'=>$request->name,
            'phone'=>$request->phone,
        ];
        Mail::to('dibyanshu8055@gmail.com')->send(new \App\Mail\MyTestMail($user));
        return redirect()->back()->with('message', 'Message sents sucessfully!!');
    }
    public function allabout(){
        $getaboutus=About::get();
        $getallmember=Team::get();
        return view('frontend.aboutuslist',compact('getaboutus','getallmember'));
  }
  public function ourpublication(){
    $getourpublication=Publication::orderby('id','desc')->where('publication_type','our')->paginate(9);
    return view('frontend.ourpublication',compact('getourpublication'));
}
public function refrencepublication(){
    $getourpublication=Publication::orderby('id','desc')->where('publication_type','refrence')->paginate(9);
    return view('frontend.ourpublication',compact('getourpublication'));
} 
public function reportpublication(){
    $getourpublication=Publication::orderby('id','desc')->where('publication_type','reports')->paginate(9);
    return view('frontend.ourpublication',compact('getourpublication'));
} 
public function publicationdetails($id){
    $publicationdetails=Publication::find($id);
    return view('frontend.publicationdetails',compact('publicationdetails',));
} 

public function download($title)
{
    // $data = Publication::find($title);
    $path = public_path('backend/img/publication/'.$title);
    return Response::download($path);
}

}
