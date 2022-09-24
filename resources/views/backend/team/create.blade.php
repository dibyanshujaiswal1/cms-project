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
                            <h1 class="h4 text-gray-900 mb-4">Add Team</h1>
                        </div>
                        @if(Session::has('message'))
                        <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                        @endif
                        <form class="user" action="{{route('add.member')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="name">Member Name</label>

                                    <input type="text" class="form-control " name="name" id="exampleFirstName" placeholder="Member name">
                                    @error('name')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="status">Member Position</label>

                                    <select class="form-control " name="position" id="exampleFirstName" placeholder="Select Member Position">
                                    <option value="">Select Type</option>
                                        <option value="chairperson">Our Chair Person</option>
                                        <option value="generalsecurity">General Security</option>
                                        <option value="lifetimemember">Life Time Member</option>
                                        <option value="members">Member</option>
                                    </select>
                                        @error('position')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="name">Contact</label>
                                    <input type="text" class="form-control " name="contact" id="exampleFirstName" placeholder="Contact">
                                    @error('contact')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="image">Picture</label>

                                    <input type="file" class="form-control " id="exampleLastName" name="picture">
                                    @error('picture')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="status">Member Type</label>

                                    <select class="form-control " name="type" id="exampleFirstName" placeholder="Select Type">
                                    <option value="">Select Type</option>
                                        <option value="actiing-member">Acting Committe</option>
                                        <option value="ex-member">Ex-Committee</option>
                                    </select>
                                        @error('type')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Add Member
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection