<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public  function creategallery()
    {
        return view('backend.gallery.create');
    }

    public function storegallery(Request $request)
    {
        $request->validate([
            'image' => 'required',



        ]);

        foreach ($request->file('image') as $img) {

            $file = rand(1, 99999) . '-' . 'gallery' . '.' . $img->getClientOriginalExtension();
            $destination = public_path() . '/backend/img/gallery/';
            $img->move($destination, $file);
            $image = new Gallery();
            $image->image = $file;
            $image->save();
        };

        return redirect()->back()->with('message', 'Gallery added sucessfully!!');
    }
    public function gallarylist()
    {
        $getallgallery = Gallery::orderby('id', 'desc')->get();
        
        return view('backend.gallery.view', compact('getallgallery'));
    }
    public function editgallery($id)
    {
        $data = Gallery::find($id);
        return view('backend.gallery.edit', ['data' => $data]);
    }
    public function updategallery(Request $request, $id)
    {
        $data = Gallery::find($id);
        if ($request->file('image')) {
            $filename = $request->file('image');
            $file = time() . '-' . 'gallery' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/gallery/');
            $filename->move($destination, $file);
            $data->image = $file ?  $data->image = $file : '';
        }
        $data->save();
        return  redirect('gallerylist');
    }
    public function deletegallery($id){
        $data=Gallery::find($id);
        $data->delete();
        return redirect('gallerylist');
    }
}
