@extends('backend.layouts.master')
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
                                        <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                    </div>
                                    @if(Session::has('error'))
                                    <p style="color:red;text-align:center">{{Session::get('error')}}</p>
                                    @endif
                                    @if(Session::has('success'))
                                    <p style="color:green;text-align:center">{{Session::get('success')}}</p>
                                    @endif
                                    <form class="user" action="{{route('change.password')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="current_password" placeholder="Ente Your Current Password...">
                                            @error('currrent_password')
                                            <span style="color:red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your New Password" name="new_password">
                                            @error('new_password')
                                            <span style="color:red">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirm Your New Password" name="confirm_password">
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
                                        </div>
                                        
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>



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