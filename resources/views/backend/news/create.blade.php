@extends('backend.layouts.master')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <a class=" border-none " href="{{route('get.news')}}">News List</a> </h3>
                        </h6>

                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add News</h1>

                        </div>
                        @if(Session::has('message'))
                        <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                        @endif
                        <form class="user" action="{{route('add.news')}}" method="post" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">

                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="title">News Title</label>

                                    <input type="text" class="form-control " name="title" id="exampleFirstName" placeholder="News Title">
                                    @error('title')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="short_description">Short Description</label>
                                    <textarea name="short_description" class="form-control " id="short_description" placeholder="Description" style="height:200px"></textarea>

                                    @error('short_description')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <br>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="long_description">Long Description</label>
                                    <textarea name="long_description" class="form-control " id="long_description" placeholder="Description" style="height:200px"></textarea>

                                    @error('long_description')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="image">Image</label>

                                    <input type="file" class="form-control " id="exampleLastName" name="image">
                                    @error('image')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="title">News Date</label>

                                    <input type="date" class="form-control " name="date" id="exampleFirstName" placeholder="News Date">
                                    @error('date')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                Add News
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
    CKEDITOR.replace('short_description');
</script>
<script>
    CKEDITOR.replace('long_description');
</script>
@endsection