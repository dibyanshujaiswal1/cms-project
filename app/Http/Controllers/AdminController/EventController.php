<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function createevent(){
        return view('backend.event.create');
    }
    public function storeevent(Request $request)
    {
        $request->validate([
            
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'vanue' => 'required',


        ]);
        $filename = $request->file('image');
        list($width, $height) = getimagesize($request->file('image'));
               
        if ($width != 370 || $height != 280) {
            $notification = [
                'message' => 'Image size must be 370*280',
                'alert-type' => 'error',
            ];
            return redirect()
                ->back()
                ->with($notification);
        }
        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/event/');
        $filename->move($destination, $file);

        $var = Event::insert([
            
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
            'vanue' =>$request->vanue,
            'image' => $file,
            
        ]);
        return redirect()->back()->with('message', 'Vanue added sucessfully!!');
    }
    public function eventlist(){
        $getallevent=Event::orderby('id','desc')->get();
        return view('backend.event.view', compact('getallevent'));
    }
    public function editevent($id)
    {
        $data = Event::find($id);
        return view('backend.event.edit', ['data' => $data]);
    }
    public function updateevent(Request $request, $id)
    {
        $data = Event::find($id);
        if ($request->file('image')) {
            list($width, $height) = getimagesize($request->file('image'));
               
            if ($width != 370 || $height != 280) {
                $notification = [
                    'message' => 'Image size must be 370*280',
                    'alert-type' => 'error',
                ];
                return redirect()
                    ->back()
                    ->with($notification);
            }
            $filename = $request->file('image');
            $file = time() . '-' . 'event' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/event/');
            $filename->move($destination, $file);
            $data->image = $file ?  $data->image = $file : '';
        }
        $data->date = $request->date;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->vanue = $request->vanue;
        $data->save();
        return  redirect('event-list');
    }
    public function eventdetails($id){
        $eventdetails=Event::find($id);
        return view('backend.event.details',compact('eventdetails'));
    }
    public function deleteevent($id){
        $data=Event::find($id);
        $data->delete();
        return redirect('event-list');
    }
}
