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
                            <h1 class="h4 text-gray-900 mb-4">Add Logo</h1>
                        </div>
                        @if(Session::has('message'))
                        <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                        @endif
                        <form class="user" action="{{route('add.logo')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="image">Logo Image</label>
                                    <input type="file" class="form-control " id="exampleLastName" name="image">
                                    @error('image')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Add Image
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection