@extends('backend.layouts.master')
@section('content')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">News List &emsp; &emsp; &emsp;<a class="collapse-item" href="{{route('news.create')}}">Add News</a></h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>title</th>
                            <th>short_description</th>
                            <th>long_description</th>
                            <th>image</th>
                            <th>date</th>
                            <th>Action </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($getallnews as $key=>$news)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$news->title}}</td>
                            <td>{!!Str::limit($news->long_description,20)!!}</td>
                            <td>{!!Str::limit($news->long_description,20)!!}</td>
                            <td> <img src="{{asset('backend/img/news/'.$news->image)}}" alt="" width="200" height="150"></td>

                            <td>{{$news->date}}</td>
                            <td>
                                <a href="{{route('view.news_details',$news->id)}}" class="btn btn-success">View</a>
                                <a href="{{url('updatenews',$news->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{url('deletenews',$news->id)}}" onclick="return confirm('Are You Sure to Delete This Data')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h6 class="m-0 font-weight-bold text-primary"><a class="collapse-item" href="{{route('news.create')}}">Add News</a></h6>
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