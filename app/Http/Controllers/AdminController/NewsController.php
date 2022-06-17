<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function createnews(){
        return view('backend.news.create');
    }
    public function storenews(Request $request)
    {
        $request->validate([
            
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
            'date' => 'required',


        ]);
        $filename = $request->file('image');

        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/news/');
        $filename->move($destination, $file);

        $var = News::insert([
            
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $file,
            'date' => $request->date,

        ]);
        return redirect()->back()->with('message', 'News added sucessfully!!');
    }
    public function newslist(){
        $getallnews=News::orderby('id','desc')->get();
        return view('backend.news.view', compact('getallnews'));
    }
    public function editnews($id)
    {
        $data = News::find($id);
        return view('backend.news.edit', ['data' => $data]);
    }
    public function updatenews(Request $request, $id)
    {
        $data = News::find($id);
        if ($request->file('image')) {
            $filename = $request->file('image');
            $file = time() . '-' . 'news' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/news/');
            $filename->move($destination, $file);
            $data->image = $file ?  $data->image = $file : '';
        }
        $data->title = $request->title;
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->date = $request->date;
        $data->save();
        return  redirect('news-list');
    }
    public function Newsdetails($id){
        $newsdetails=News::find($id);
        return view('backend.news.details',compact('newsdetails'));
    }
    public function deletenews($id){
        $data=News::find($id);
        $data->delete();
        return redirect('news-list');
    }
}
