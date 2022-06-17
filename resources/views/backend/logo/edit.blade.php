@extends('backend.layouts.master')
@section('content')

<h2>Update your Logo</h2>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update Logo</h1>
                        </div>
                        <form class="user" action="{{route('update.logo',$data->id)}}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="col-sm-12">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="image">Logo picture</label>

                                    <input type="file" class="form-control " id="exampleLastName" name="image">
                                    <img src="{{asset('backend/img/logo/'.$data->image)}}" alt="" width="100" height="100" value="{{$data->image}}">
                                </div>
                            </div>
                    </div>

                    <button class="btn btn-primary btn-user btn-block">
                        update Logo
                    </button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection