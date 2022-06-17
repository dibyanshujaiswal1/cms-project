<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function createcontact(){
        return view('backend.contact.create');
    }
    public function storecontact(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'facebook' => 'required',
            


        ]);
        // dd($request->all());
        $var = Contact::insert([
            
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'facebook' =>$request->facebook,

        ]);
        return redirect()->back()->with('message', 'Contact added sucessfully!!');
    }
    public function contactlist(){
        $getallcontact=Contact::orderby('id','desc')->get();
        return view('backend.contact.view', compact('getallcontact'));
    }
    public function editcontact($id)
    {
        $data = Contact::find($id);
        return view('backend.contact.edit', ['data' => $data]);
    }
    public function updatecontact(Request $request, $id)
    {
        $data = Contact::find($id);
        
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->facebook = $request->facebook;
        $data->save();
        return  redirect('contact-list');
    }
    public function deletecontact($id){
        $data=Contact::find($id);
        $data->delete();
        return redirect('contact-list');
    }
}
