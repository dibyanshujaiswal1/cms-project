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
              <h1 class="h4 text-gray-900 mb-4">Add Banner</h1>
            </div>
            @if(Session::has('message'))
              <p style="color:green;text-align:center">{{Session::get('message')}}</p>
              @endif
            <form class="user" action="{{route('add.banner')}}" method="post"  enctype="multipart/form-data">
             

              @csrf
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for="banner_heading">Banner Heading</label>

                  <input type="text" class="form-control " name="banner_heading" id="exampleFirstName" placeholder="Banner Heading">
                  @error('banner_heading')
                  <span style="color:red">{{$message}}</span>
                  @enderror
                </div>
                <div class="col-sm-12">
                  <label for="image">Banner Image</label>

                  <input type="file" class="form-control " id="exampleLastName" name="image">
                  @error('image')
                  <span>{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="description">Banner Description</label>

                <textarea class="form-control " name="description" id="exampleInputEmail" placeholder="Description" style="height:200px"></textarea>
                @error('description')
                <span>{{$message}}</span>
                @enderror
              </div>

              <button class="btn btn-primary btn-user btn-block">
                Add Banner
</button>


            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection