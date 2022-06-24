<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function createblog(){
        return view('backend.blog.create');
    }

    public function storeblog(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'author_name' => 'required',


        ]);
        $filename = $request->file('image');

        $file = time() . '-' . 'profile' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('backend/img/blog/');
        $filename->move($destination, $file);

        $var = Blog::insert([
            'image' => $file,
            'title' => $request->title,
            'description' => $request->description,
            'author_name' => $request->author_name,

        ]);
        return redirect()->back()->with('message', 'Blog added sucessfully!!');
    }


    public function bloglist(){
        $getallblog=Blog::orderby('id','desc')->get();
        return view('backend.blog.view', compact('getallblog'));

    }
    public function editBlog($id)
    {
        $data = Blog::find($id);
        return view('backend.Blog.edit', ['data' => $data]);
    }
    public function updateBlog(Request $request, $id)
    {
        $data = Blog::find($id);
        if ($request->file('image')) {
            $filename = $request->file('image');
            $file = time() . '-' . 'blog' . '.' . $filename->getClientOriginalExtension();
            $destination = public_path('backend/img/blog/');
            $filename->move($destination, $file);
            $data->image = $file ?  $data->image = $file : '';
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->author_name = $request->author_name;
        $data->save();
        return  redirect('bloglist');
    }
    public function BlogDetails($id){
        $blogdetails=Blog::find($id);
        return view('backend.blog.details',compact('blogdetails'));
        
    }
    public function delete($id){
        $data=Blog::find($id);
        $data->delete();
        return redirect('bloglist');
    }
    public function changeStatus(Request $request)
    {
        $blogs = Blog::find($request->blogstatus_id);
        $blogs->status = $request->status;
        $blogs->save();
        return response()->json(['success'=>'User status change successfully.']);

    }
}
