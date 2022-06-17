<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;


class MemberController extends Controller
{
    //
    public function createmember(){
        return view('backend.team.create');
    }

    public function storemember(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'contact' => 'required',
            'picture' => 'required',
            


        ]);
        $filename = $request->file('picture');

        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/members/');
        $filename->move($destination, $file);

        $var = Team::insert([
            
            'name' => $request->name,
            'position' => $request->position,
            'contact' => $request->contact,
            'picture' => $file,

        ]);
        return redirect()->back()->with('message', 'Member added sucessfully!!');
    }
    public function memberlist(){
        $getallmember=Team::orderby('id','desc')->get();
        return view('backend.team.view', compact('getallmember'));

    }
    public function editmember($id){
        $data=Team::find($id);
        return view('backend.team.edit',['data'=>$data]);

    }
    public function updatemember(Request $request, $id)
    {
        $data = Team::find($id);
        if ($request->file('picture')) {
            $filename = $request->file('picture');
            $file = time() . '-' . 'members' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/members/');
            $filename->move($destination, $file);
            $data->picture = $file ?  $data->picture = $file : '';
        }
        $data->name = $request->name;
        $data->position = $request->position;
        $data->contact = $request->contact;
        $data->save();
        return  redirect('memberlist');
    }
    public function MemberDetails($id){
        $memberdetails=Team::find($id);
        return view('backend.team.details',compact('memberdetails'));
        
    }
    public function deletemember($id){
        $data=Team::find($id);
        $data->delete();
        return redirect('memberlist');
    }
}
