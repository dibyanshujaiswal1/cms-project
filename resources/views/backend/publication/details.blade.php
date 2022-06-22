@extends('backend.layouts.master')
@section('content')



<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
    

        <div class="col-xl-12 col-lg-12">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                   

                    <h4 class="m-0 font-weight-bold text-primary">{{$publicationdetails->title}}</h4>

                </div>

                </div>
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">{{$publicationdetails->author}}</h4>

                </div>
                <div class="card-body">
                    
                    <h6 class="m-0 font-weight-bold text-primary"><iframe src="{{asset('backend/img/publication/'.$publicationdetails->file)}}" alt="" width="500" height="300"></iframe></h6>
                    <h6 class="m-0 font-weight-bold text-primary">{!!$publicationdetails->description!!}</h6>

                
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">{{$publicationdetails->refrence}}</h4>

                </div>
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">{{$publicationdetails->publicatiom_type}}</h4>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection