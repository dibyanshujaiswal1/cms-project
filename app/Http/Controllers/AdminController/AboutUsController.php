<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function createaboutus()
    {
        return view('backend.aboutus.create');
    }
    public function storeaboutus(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
        $filename = $request->file('image');

        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/aboutus/');
        $filename->move($destination, $file);

        $var = About::insert([
            'heading' => $request->heading,
            'image' => $file,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('message', 'Data added sucessfully!!');
    }
    public function aboutslist()
    {
        $getallaboutus = About::orderBy('id', 'desc')->get();
        return view('backend.aboutus.view', compact('getallaboutus'));
    }
    public function editaboutus($id)
    {
        $data = About::find($id);
        return view('backend.aboutus.edit', ['data' => $data]);
    }

    public function updateaboutus(Request $request, $id)
    {
        $data = About::find($id);
        if ($request->file('image')) {
            $filename = $request->file('image');
            $file = time() . '-' . 'aboutus' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/aboutus/');
            $filename->move($destination, $file);
            $data->image = $file ?  $data->image = $file : '';
        }
        $data->heading = $request->heading;
        $data->description = $request->description;
        $data->save();
        return  redirect('aboutlist');
    }
    public function aboutusdetails($id){
        $aboutusdetails=About::find($id);
        return view('backend.aboutus.details',compact('aboutusdetails'));
    }
    public function deleteaboutus($id){
        $data=About::find($id);
        $data->delete();
        return redirect('aboutlist');
    }
}
