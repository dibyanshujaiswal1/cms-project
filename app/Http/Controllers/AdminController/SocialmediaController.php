<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Socialmedia;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    //
    public function createmedia(){
        return view('backend.socialmedia.create');
    }
    public function storemedia(Request $request)
    {
        $request->validate([
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'skype' => 'required',
            'googleplus' => 'required',
           
            


        ]);
        $var = Socialmedia::insert([
            
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'skype' =>$request->skype,
            'googleplus' =>$request->googleplus,

        ]);
        return redirect()->back()->with('message', 'Links added sucessfully!!');
    }
    public function mediatlist(){
        $getallmedia=Socialmedia::orderby('id','desc')->get();
        return view('backend.socialmedia.view', compact('getallmedia'));
    }
    public function editmedia($id)
    {
        $data = Socialmedia::find($id);
        return view('backend.socialmedia.edit', ['data' => $data]);
    }
    public function updatemedia(Request $request, $id)
    {
        $data = Socialmedia::find($id);
        
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->twitter = $request->twitter;
        $data->skype = $request->skype;
        $data->googleplus = $request->googleplus;
        $data->save();
        return  redirect('media-list');
    }
    public function deletemedia($id){
        $data=Socialmedia::find($id);
        $data->delete();
        return redirect('media-list');
    }

}
