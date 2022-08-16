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
                            <h1 class="h4 text-gray-900 mb-4">Add Contact</h1>
                        </div>
                        @if(Session::has('message'))
                        <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                        @endif
                        <form class="user" action="{{route('admin.contact')}}" method="post">
                            @csrf
                            
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="name">Address</label>
                                    <input type="text" class="form-control " name="address" id="" placeholder="Enter Your Address">
                                    @error('address')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control " name="email" id="exampleFirstName" placeholder="Enter Your Email">
                                    @error('email')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="" placeholder="Phone Number">
                                    @error('phone')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="" placeholder="Facebook"><br>
                                    @error('facebook')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="map">Map</label>
                                    <input type="text" class="form-control" name="map" id="" placeholder="Map"><br>
                                    @error('map')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Add Contact
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection