@extends('backend.layouts.master')
@section('content')



                <div class="container-fluid">
                 
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-12">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">{{$aboutusdetails->heading}}</h4>
                                   
                                </div>
                                <div class="card-body">
                                <h6 class="m-0 font-weight-bold text-primary">{!!$aboutusdetails->description!!}</h6>
                                    <h6 class="m-0 font-weight-bold text-primary"><img src="{{asset('backend/img/aboutus/'.$aboutusdetails->image)}}" alt="" width="500" height="300"></h6> 
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
@endsection                
               