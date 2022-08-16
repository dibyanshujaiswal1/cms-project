<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Team;
use Illuminate\Http\Request;

class MoreAboutUsController extends Controller
{
    public function Team(){
        $getallmember=Team::orderBy('id','desc')->get();
        return view('frontend.moreaboutus.team',compact('getallmember'));
  }
  public function Gallery(){
    $getallgallery=Gallery::orderBy('id','desc')->get();
    return view('frontend.moreaboutus.gallery',compact('getallgallery'));
}
}
