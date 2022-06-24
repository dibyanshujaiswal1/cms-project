@extends('backend.layouts.master')
@section('content')

<h2>Update your Blog</h2>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add Blog</h1>
                        </div>
                        <form class="user" action="{{route('update.blog',$data->id)}}" method="post" enctype="multipart/form-data">

                            @csrf 
                            <div class="col-sm-12">
                            </div>

                            <div class="col-sm-12">
                                    <label for="image">Blog Image</label>

                                    <input type="file" class="form-control " id="exampleLastName" name="image">
                                    <img src="{{asset('backend/img/blog/'.$data->image)}}" alt="" width="100" height="100">
                                </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="title">title</label>

                                    <input type="text" class="form-control " name="title" id="exampleFirstName" value="{{$data->title}}">
                                </div>
                              
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                
                                <textarea name="description" class="form-control " id="description" placeholder="Description" style="height:200px" value="{{$data->description}}">{{$data->description}}</textarea>
                            </div>

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="author_name">Author Name</label>

                                    <input type="text" class="form-control " name="author_name" id="exampleFirstName" value="{{$data->author_name}}">
                                </div>              

                            <button class="btn btn-primary btn-user btn-block">
                                update Blog
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>

@endsection