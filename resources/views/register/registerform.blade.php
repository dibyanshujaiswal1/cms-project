@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register!</h1>
                                    </div>
                                    @if(Session::has('error'))
                                    <p style="color:red;text-align:center">{{Session::get('error')}}</p>
                                    @endif
                                    @if(Session::has('success'))
                                    <p style="color:green;text-align:center">{{Session::get('success')}}</p>
                                    @endif
                                    <form class="user" action="{{route('submit.registerform')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="name" placeholder="Ente Your Name...">
                                            @error('name')
                                            <span style="color:red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your Email" name="email">
                                            @error('email')
                                            <span style="color:red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your Password" name="password">
                                            @error('password')
                                            <span style="color:red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirm Your Password" name="confirm_password">
                                            @error('confirm_password')
                                            <span style="color:red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                        </div>
                                       
                                    </form>             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endsection