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
                            <h1 class="h4 text-gray-900 mb-4">Update Publication</h1>
                        </div>
                        <form class="user" action="{{route('update.publication',$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="file">Add File</label>
                                   <input type="file" class="form-control " name="file" id="exampleFirstName" > <iframe src="{{asset('backend/img/publication/'.$data->file)}}" alt="" width="200" height="200"></iframe>
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="title">Publication Title</label>

                                    <input type="text" class="form-control " name="title" id="exampleFirstName" placeholder="Publication Title" value="{{$data->title}}">
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control " id="description" placeholder="Description" value="{{$data->long_description}}">{{$data->long_description}}</textarea>
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="author">Author Name</label>
                                    <input type="text" class="form-control " name="author" id="exampleFirstName" placeholder="Author Name" value="{{$data->author}}">
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="refrence">Reference</label>
                                    <input type="text" class="form-control " name="refrence" id="exampleFirstName" placeholder="Reference" value="{{$data->refrence}}">
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="form-control " id="exampleLastName" name="thumbnail">
                                    <img src="{{asset('backend/img/publication/thumbnail/'.$data->thumbnail)}}" alt="" width="100" height="100" value="{{$data->thumbnail}}"> 
                               </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="status">Publication Type</label>

                                    <select class="form-control " name="publication_type" id="exampleFirstName" placeholder="Publication Type" value="{{$data->publication_type}}">
                                        <option value="our">Our publication</option>
                                        <option value="refrence">Refrence Publication</option>
                                        <option value="reports">Reports Publication</option>
                                    </select>
                                </div>
                               
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                Update Publication
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