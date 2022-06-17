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
                            <h1 class="h4 text-gray-900 mb-4">Edit social Media Links</h1>
                        </div>
                        <form class="user" action="{{route('update.media',$data->id)}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="facebook">facebook</label>

                                    <input type="text" class="form-control " name="facebook" id="exampleFirstName" placeholder="Enter Your Facebook Links"  value="{{$data->facebook}}">
                                    
                                </div>
                                &emsp;
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="instagram">Instagram </label>

                                    <input type="text" class="form-control " name="instagram" id="exampleFirstName" placeholder="Enter Your Instagram Links"  value="{{$data->instagram}}">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="twiter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="exampleInputEmail" placeholder="Enter your Twitter Links"  value="{{$data->twitter}}">
                                   
                                </div>
                                &emsp;
                                <div class="form-group">
                                    <label for="skype">Skype</label>
                                    <input type="text" class="form-control" name="skype" id="exampleInputEmail" placeholder="Enter your Skype Links"  value="{{$data->skype}}">
                                   
                                </div>
                                &emsp;
                                <div class="form-group">
                                    <label for="googleplus">Google Plus</label>
                                    <input type="text" class="form-control" name="googleplus" id="exampleInputEmail" placeholder="Enter your Google Plus Links"  value="{{$data->googleplus}}">
                                   
                                </div>
                            </div>

                            <button class="btn btn-primary btn-user btn-block">
                                update Social Media
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection