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
                            <h1 class="h4 text-gray-900 mb-4">Update Data</h1>
                        </div>
                       
                        <form class="user" action="{{route('update.aboutus',$data->id)}}" method="post" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="banner_heading">About Us Heading</label>

                                    <input type="text" class="form-control " name="heading" id="exampleFirstName" placeholder="About Us Heading" value="{{$data->heading}}">
                                   
                                </div>
                                <div class="col-sm-12">
                                    <label for="image"> Image</label>

                                    <input type="file" class="form-control " id="exampleLastName" name="image">
                                    <img src="{{asset('backend/img/aboutus/'.$data->image)}}" alt="" width="100" height="100" value="{{$data->image}}">
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control " id="description" placeholder="Description" style="height:200px" value="{{$data->description}}">{{$data->description}}</textarea>

                                   
                                </div>

                            <button class="btn btn-primary btn-user btn-block">
                                Update Data
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