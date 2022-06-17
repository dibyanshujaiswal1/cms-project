<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class WebpageController extends Controller
{

 public function dashboard(){
    $newscount=News::count();
    $eventscount=Event::count();
    $blogscount=Blog::count();
    $memberscount=Team::count();
     return view('backend.layouts.pageContent',compact('newscount','eventscount','blogscount','memberscount'));
 }

}
