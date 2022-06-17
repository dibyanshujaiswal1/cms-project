@extends('backend.layouts.master')
@section('content')



<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
    

        <div class="col-xl-12 col-lg-12">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                   

                    <h4 class="m-0 font-weight-bold text-primary">{{$blogdetails->title}}</h4>

                </div>

                </div>
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">{{$blogdetails->author_name}}</h4>

                </div>
                <div class="card-body">
                    
                    <h6 class="m-0 font-weight-bold text-primary"><img src="{{asset('backend/img/blog/'.$blogdetails->image)}}" alt="" width="500" height="300"></h6>
                    <h6 class="m-0 font-weight-bold text-primary">{!!$blogdetails->description!!}</h6>

                
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">{{$blogdetails->status}}</h4>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection