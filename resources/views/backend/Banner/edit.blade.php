@extends('backend.layouts.master')
@section('content')

<h2>Update your Banner</h2>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add Banner</h1>
                        </div>
                        <form class="user" action="{{route('update.banner',$data->id)}}" method="post" enctype="multipart/form-data">

                            @csrf 
                            <div class="col-sm-12">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="banner_heading">Banner Heading</label>

                                    <input type="text" class="form-control " name="banner_heading" id="exampleFirstName" value="{{$data->banner_heading}}">
                                </div>
                                <div class="col-sm-12">
                                    <label for="image">Banner Image</label>

                                    <input type="file" class="form-control " id="exampleLastName" name="image">
                                    <img src="{{asset('backend/img/banner/'.$data->image)}}" alt="" width="100" height="100">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Banner Description</label>

                                <textarea class="form-control " name="description" value="{{$data->description}}" id="exampleInputEmail" style="height:200px">{{$data->description}}</textarea>
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                update Banner
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection