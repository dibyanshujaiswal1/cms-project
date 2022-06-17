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
                            <h1 class="h4 text-gray-900 mb-4">Add social Media Links</h1>
                        </div>
                        @if(Session::has('message'))
                        <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                        @endif
                        <form class="user" action="{{route('add.socialmedia')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="facebook">facebook</label>

                                    <input type="text" class="form-control " name="facebook" id="exampleFirstName" placeholder="Enter Your Facebook Links">
                                    @error('facebook')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                &emsp;
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="instagram">Instagram </label>

                                    <input type="text" class="form-control " name="instagram" id="exampleFirstName" placeholder="Enter Your Instagram Links">
                                    @error('instagram')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="twiter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="exampleInputEmail" placeholder="Enter your Twitter Links">
                                    @error('twitter')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                &emsp;
                                <div class="form-group">
                                    <label for="skype">Skype</label>
                                    <input type="text" class="form-control" name="skype" id="exampleInputEmail" placeholder="Enter your Skype Links">
                                    @error('skype')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                &emsp;
                                <div class="form-group">
                                    <label for="googleplus">Google Plus</label>
                                    <input type="text" class="form-control" name="googleplus" id="exampleInputEmail" placeholder="Enter your Google Plus Links">
                                    @error('googleplus')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                Add Social Media
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection