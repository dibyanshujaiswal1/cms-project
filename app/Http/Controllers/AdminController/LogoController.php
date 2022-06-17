<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    //
    public  function createlogo()
    {
        return view('backend.logo.create');
    }
    public function storelogo(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);
        $filename = $request->file('image');

        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/logo/');
        $filename->move($destination, $file);

        $var = Logo::insert([
            'image' => $file,
            
        ]);
        return redirect()->back()->with('message', 'Logo added sucessfully!!');
    }
    public function logolist()
    {
        $getalllogo = Logo::orderby('id', 'desc')->get();

        return view('backend.logo.view', compact('getalllogo'));
    }
    public function editlogo($id)
    {
        $data = Logo::find($id);
        return view('backend.logo.edit', ['data' => $data]);
    }
    public function updatelogo(Request $request, $id)
    {
        $data = Logo::find($id);
        if ($request->file('image')) {
            $filename = $request->file('image');
            $file = time() . '-' . 'logo' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/logo/');
            $filename->move($destination, $file);
            $data->image = $file ?  $data->image = $file : '';
        }
        $data->save();
        return  redirect('logolist');
    }
    public function deletelogo($id){
        $data=Logo::find($id);
        $data->delete();
        return redirect('logolist');
    }
}
