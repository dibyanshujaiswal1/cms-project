@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog List &emsp;&emsp;&emsp;<a class="collapse-item"
                    href="{{route('blog.create')}}">Add Blog</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>image</th>
                            <th>title</th>
                            <th>description</th>
                            <th>author_name</th>
                            <th>status</th>
                            <th>Action </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($getallblog as $key=>$blogs)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td> <img src="{{asset('backend/img/blog/'.$blogs->image)}}" alt="" width="100"
                                    height="100"></td>
                            <td>{{$blogs->title}}</td>
                            <td>{!!Str::limit($blogs->description,20)!!}</td>
                            <td>{{$blogs->author_name}}</td>
                            <td>
                            <input data-id="{{$blogs->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $blogs->status ? 'checked' : '' }}>

                            </td>
                            <td>
                                <a href="{{route('view.blogsdetails',$blogs->id)}}" class="btn btn-success">View</a>
                                <a href="{{url('updateblog',$blogs->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{url('deleteblog',$blogs->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection