@extends('backend.layouts.master')
@section('content')
<h2>Update your Member</h2>
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update Member</h1>
                        </div>
                        @if(Session::has('message'))
                        <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                        @endif
                        <form class="user" action="{{route('update.member',$data->id)}}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="col-sm-12">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="name">Member Name</label>

                                    <input type="text" class="form-control " name="name" id="exampleFirstName" value="{{$data->name}}">
                                </div>


                                &emsp;
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="status">Member Position</label>
                                    <select class="form-control " name="position" id="exampleFirstName" placeholder="Select Member Position" value="{{$data->position}}">
                                        <option value="chairperson"{{$data->type=="chairperson"?'selected':''}}>Our Chair Person</option>
                                        <option value="generalsecurity" {{$data->type=="generalsecurity"?'selected':''}}>General Security</option>
                                        <option value="lifetimemember" {{$data->type=="lifetimemember"?'selected':''}}>Life Time Member</option>
                                        <option value="members" {{$data->type=="members"?'selected':''}}>Member</option>
                                    </select>
                                </div>&emsp;

                                <div class="form-group">
                                    <label for="contact">Member contact</label>

                                    <input type="text" class="form-control " name="contact" value="{{$data->contact}}" id="exampleInputEmail">
                                </div>
                                <div class="col-sm-12">
                                    <label for="picture">Member picture <span class="text-danger">use 370*280 image size</span></label>
                                    <input type="file" class="form-control " id="exampleLastName" name="picture">
                                    <img src="{{asset('backend/img/members/'.$data->picture)}}" alt="" width="100" height="100" value="{{$data->picture}}">
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="status">Member Type</label>
                                    <select class="form-control " name="type" id="exampleFirstName" placeholder="Select Type" >
                                        <option value="actiing-member" {{$data->type=="actiing-member"?'selected':''}} >Acting Member</option>
                                        <option value="ex-member" {{$data->type=="ex-member"?'selected':''}} >Ex-Membere</option>
                                    </select>
                                </div>
                            </div>
                           
                    </div>

                    <button class="btn btn-primary btn-user btn-block">
                        update Member
                    </button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection