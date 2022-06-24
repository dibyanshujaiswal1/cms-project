@extends('backend.layouts.master')
@section('content')
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
                        @if(Session::has('message'))
                        <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                        @endif
                        <form class="user" action="{{route('add.blog')}}" method="post" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="image">Blog Image</label>

                                    <input type="file" class="form-control " id="exampleLastName" name="image">
                                    @error('image')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="title">Blog Title</label>

                                    <input type="text" class="form-control " name="title" id="exampleFirstName" placeholder="Blog Title">
                                    @error('title')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="description">Blog Description</label>
                                    <textarea name="description" class="form-control " id="description" placeholder="Description"></textarea>

                                    @error('description')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="author_name">Author Name</label>

                                    <input type="text" class="form-control " name="author_name" id="exampleFirstName" placeholder="Author Name">
                                    @error('author_name')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                Add Blog
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