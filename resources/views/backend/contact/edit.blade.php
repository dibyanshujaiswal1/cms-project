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
                            <h1 class="h4 text-gray-900 mb-4">Edit Contact</h1>
                        </div>
                        <form class="user" action="{{route('update.contact',$data->id)}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="name">Address</label>

                                    <input type="text" class="form-control " name="address" id="exampleFirstName" placeholder="Enter Your Address"  value="{{$data->address}}">
                                   
                                </div>
                                &emsp;
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="name">Email</label>

                                    <input type="text" class="form-control " name="email" id="exampleFirstName" placeholder="Enter Your Email" value="{{$data->email}}">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="exampleInputEmail" placeholder="Phone Number" value="{{$data->phone}}">
                                   
                                </div>
                                &emsp;
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="exampleInputEmail" placeholder="Facebook" value="{{$data->facebook}}">
                                   
                                </div>
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                Update Contact
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection