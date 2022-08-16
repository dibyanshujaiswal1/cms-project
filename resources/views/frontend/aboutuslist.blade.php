@extends('frontend.layouts.master')
@section('content')
<div class="breadcrumbs">
    <div>
        <div class="breadcrumb-content-inner">
            <div class="gva-breadcrumb-content">
                <div id="block-gavias-kunco-breadcrumbs" class="text-light block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                    <div class="breadcrumb-style gva-parallax-background" style="height:10px">
                        <div class="container">
                            <div class="breadcrumb-content-main" style="margin-top:-50px">
                                <h2 class="page-title">हाम्रोबारे </h2>
                                <div class="mobile">
                                    <div class="content block-content">
                                        <div class="breadcrumb-links">
                                            <div class="content-inner">
                                                <nav class="breadcrumb " aria-labelledby="system-breadcrumb">
                                                    <ol class="mv">
                                                        <li>
                                                            <a href="{{url('/')}}">गृहपृष्ठ</a>
                                                            <span class=""> - </span>
                                                        <li>
                                                            हाम्रोबारे

                                                        </li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gva-parallax-inner skrollable skrollable-between" data-bottom-top="top: -80%;" data-top-bottom="top: 0%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="node__content clearfix">
    <div class="field field--name-field-content-builder field--type-gavias-content-builder field--label-hidden field__item">
        <div class="gavias-blockbuilder-content">
            <div class="gavias-builder--content">
                <div class="gbb-row-wrapper">
                    <div class=" gbb-row  bg-size-cover " style="padding-top:0px">
                        <div class="bb-inner remove_padding_top">
                            <div class="bb-container container">
                                <div class="row">
                                    <div class="row-wrapper clearfix">
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                            <div class="column-inner  bg-size-cover  ">
                                                <div class="column-content-inner">
                                                    @foreach($getaboutus as $abouts)
                                                    <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <img src="{{asset('backend/img/aboutus/'.$abouts->image)}}" alt="" style="height:550px; width:100%" typeof="foaf:Image" class="mobile-view" />
                                                    </div>
                                                    <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                                        <h2 class="title"><span><strong>{{$abouts->heading}}</strong> in 125 Countries.</span></h2>
                                                        <div class="title-desc">
                                                            <p>{!!$abouts->description!!}</p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection