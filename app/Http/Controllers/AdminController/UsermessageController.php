<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Usermessage;
use Illuminate\Http\Request;

class UsermessageController extends Controller
{
    //
    public function messagelist(){
        $getallmessage=Usermessage::orderby('id','desc')->get();
        return view('backend.usermessage.view', compact('getallmessage'));
    }
    public function deletemessage($id){
        $data=Usermessage::find($id);
        $data->delete();
        return redirect('message-list');
    }
}
