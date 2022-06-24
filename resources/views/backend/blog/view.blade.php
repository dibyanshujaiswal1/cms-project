@extends('backend.layouts.master')
@section('content')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog List</h6>
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
                            <td> <img src="{{asset('backend/img/blog/'.$blogs->image)}}" alt="" width="100" height="100"></td>
                            <td>{{$blogs->title}}</td>
                            <td>{!!Str::limit($blogs->description,20)!!}</td>
                            <td>{{$blogs->author_name}}</td>
                            <td>{{$blogs->status}}</td>
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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
@endsection