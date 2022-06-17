@extends('backend.layouts.master')
@section('content')



<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">


        <div class="col-xl-12 col-lg-12">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">


                    <h4 class="m-0 font-weight-bold text-primary">{{$newsdetails->title}}</h4>

                </div>
                

            </div>
            <div class="card-header py-3">
                
            <h4 class="m-0 font-weight-bold text-primary"><h6 class="m-0 font-weight-bold text-primary">{!!$newsdetails->short_description!!}</h6></h4>

            </div>
           
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><img src="{{asset('backend/img/news/'.$newsdetails->image)}}" alt="" width="300" height="300"></h6>
                <h6 class="m-0 font-weight-bold text-primary">{!!$newsdetails->long_description!!}</h6>
                </div>


            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">{{$newsdetails->date}}</h4>

            </div>

        </div>
    </div>
</div>

</div>

@endsection