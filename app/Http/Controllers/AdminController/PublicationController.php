<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PublicationController extends Controller
{
    //
    public function createpublication(){
        return view('backend.publication.create');
    }
    public function storepublication(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'author' => 'required',
        ]);
        $filename = $request->file('file');
        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/publication/');
        $filename->move($destination, $file);
        
        $filenames = $request->file('thumbnail');
        list($width, $height) = getimagesize($request->file('thumbnail'));
               
        if ($width != 370 || $height != 280) {
            $notification = [
                'message' => 'Image size must be 370*280',
                'alert-type' => 'error',
            ];
            return redirect()
                ->back()
                ->with($notification);
        }
        $files = time() . '-' . 'thumbnail' . '.' . $filenames->getClientOriginalExtension();
        $destinations = public_path('backend/img/publication/thumbnail/');
        $filenames->move($destinations, $files);
        $var = Publication::insert([
            'file' => $file,
            'thumbnail' =>$files,
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'refrence' => $request->refrence,
            'publication_type'=>$request->publication_type,       
             'created_at'=>Carbon::now()
        ]);
        return redirect()->back()->with('message', 'Publication added sucessfully!!');
    }
    public function publicationlist(){
        $getallpublication=Publication::orderby('id','desc')->get();
        return view('backend.publication.view', compact('getallpublication'));
    }
    public function publicationdetails($id){
        $publicationdetails=Publication::find($id);
        return view('backend.publication.details',compact('publicationdetails'));
    }    
    public function editpublication($id)
    {
        $data = Publication::find($id);
        return view('backend.publication.edit', ['data' => $data]);
    }
    public function updatepublication(Request $request, $id)
    {
        $data = Publication::find($id);
        if ($request->file('file')) {
            
            $efilename = $request->file('file');
            $efile = time() . '-' . 'publication' . '.' . $efilename->getClientOriginalExtension();
            $destination = public_path('backend/img/publication/');
            $efilename->move($destination, $efile);
            $data->file = $efile ;
              
        }
        if($request->file('thumbnail')){
            list($width, $height) = getimagesize($request->file('thumbnail'));
               
        if ($width != 370 || $height != 280) {
            $notification = [
                'message' => 'Image size must be 370*280',
                'alert-type' => 'error',
            ];
            return redirect()
                ->back()
                ->with($notification);
        }
            $ethumbfilename = $request->file('thumbnail');
            $ethumbfile = time() . '-' . 'thumnail' . '.' . $ethumbfilename->getClientOriginalExtension();
            $thumbdestination = public_path('backend/img/publication/thumbnail/');
            $ethumbfilename->move($thumbdestination, $ethumbfile);
            $data->thumbnail = $ethumbfile;
        }
        
        $data->title = $request->title;
        $data->description = $request->description;
        $data->author = $request->author;
        $data->refrence = $request->refrence;
        $data->publication_type=$request->publication_type;
        $data->save();
        return  redirect('publicationlist');
    }
    public function deletepublication($id){
        $data=Publication::find($id);
        $data->delete();
        return redirect('publicationlist');
    }
}
