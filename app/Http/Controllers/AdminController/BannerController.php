<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Hash;

class BannerController extends Controller
{
    public function createBanner()
    {
        return view('backend.Banner.create');
    }
    public function bannerList()
    {
        $getallbanner = Banner::orderBy('id', 'desc')->get();
        return view('backend.Banner.view', compact('getallbanner'));
    }
   
    public function storeBanner(Request $request)
    {
        $request->validate([
            'banner_heading' => 'required',
            'image' => 'required',
            'description' => 'required',


        ]);
        $filename = $request->file('image');

        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/banner/');
        $filename->move($destination, $file);

        $var = Banner::insert([
            'banner_heading' => $request->banner_heading,
            'image' => $file,
            'description' => $request->description,

        ]);
        return redirect()->back()->with('message', 'Banner added sucessfully!!');
    }

    public function editBanner($id)
    {
        $data = Banner::find($id);
        return view('backend.Banner.edit', ['data' => $data]);
    }

    public function updateBanner(Request $request, $id)
    {
        $data = Banner::find($id);
        if ($request->file('image')) {
            $filename = $request->file('image');
            $file = time() . '-' . 'banner' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/banner/');
            $filename->move($destination, $file);
            $data->image = $file ?  $data->image = $file : '';
        }
        $data->banner_heading = $request->banner_heading;
        $data->description = $request->description;
        $data->save();
        return  redirect('bannerlist');
    }
    public function delete($id){
        $data=Banner::find($id);
        $data->delete();
        return redirect('bannerlist');
    }
    public function BannerDetails($id){
        $bannerdetails=Banner::find($id);
        return view('backend.Banner.details',compact('bannerdetails'));
        // return redirect('Banner-Details');
    }

}
