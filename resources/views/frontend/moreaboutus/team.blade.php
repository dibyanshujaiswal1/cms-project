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
                                <h2 class="page-title">हाम्रो समूह</h2>
                                <div class="">
                                    <div class="content block-content">
                                        <div class="breadcrumb-links">
                                            <div class="content-inner">
                                                <nav class="breadcrumb " aria-labelledby="system-breadcrumb">
                                                    <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                                                    <ol>
                                                        <li>
                                                            <a href="{{url('/')}}">गृहपृष्ठ</a>
                                                            <span class=""> - </span>

                                                        </li>
                                                        <li>
                                                            सदस्यहरू
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
<div role="main" class="main main-page">
    <div id="content" class="content content-full">
        <div class="container">
            <div class="content-main-inner">
                <div class="row">
                    <div id="page-main-content" class="main-content col-md-12 col-xs-12">
                        <div class="main-content-inner">
                            <div class="content-main">
                                <div>
                                    <div id="block-gavias-kunco-content" class="block block-system block-system-main-block no-title">
                                        <div class="content block-content">
                                            <div class="views-element-container">
                                                <div class="post-style-grid gva-view view-page js-view-dom-id-dd2c2acba784d5f58b6a4de52a852ef2d3e5e265e5a55929193a3dda505c7ed1">
                                                    <div class="views-view-grid horizontal cols-3 clearfix">
                                                        <div class="views-row row clearfix row-1">
                                                        <div style="background-color: #cbd9d454;height: 48px;margin-bottom: 11px;">
                                                           <h1 class="text-center" style="padding-top:6px">Acting Member</h1></div>
                                                            @foreach($getallmember as $teams)
                                                            @if($teams->type=='actiing-member')
                                                            <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="post-block">
                                                                    <div class="post-image">
                                                                        <div class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                                            <div class="item-image">
                                                                                <img src="{{asset('backend/img/members/'.$teams->picture)}}" alt="" typeof="foaf:Image" style="height:260px; width:500px" alt="alt" typeof="foaf:Image" />
                                                                            </div>
                                                                            <div class="post-content text-left">
                                                                                <div class="post-title"><span property="schema:name">
                                                                                        <h4 class="text-center">{{$teams->name}}</h4>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="post-meta">
                                                                                    <span class="">
                                                                                        <h5 class="text-center">{{$teams->position}}</h5 class="text-center">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="views-row row clearfix row-1">
                                                            <div style="background-color: #cbd9d454;height: 48px;margin-bottom: 11px;">
                                                                <h1 class="text-center" style="padding-top:6px">Ex Member</h1>
                                                            </div>
                                                            @foreach($getallmember as $teams)
                                                            @if($teams->type=='ex-member')
                                                            <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="post-block">
                                                                    <div class="post-image">
                                                                        <div class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                                            <div class="item-image">
                                                                                <img src="{{asset('backend/img/members/'.$teams->picture)}}" alt="" typeof="foaf:Image" style="height:260px; width:500px" alt="alt" typeof="foaf:Image" />
                                                                            </div>
                                                                            <div class="post-content text-left">
                                                                                <div class="post-title"><span property="schema:name">
                                                                                        <h4 class="text-center">{{$teams->name}}</h4>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="post-meta">
                                                                                    <span class="">
                                                                                        <h5 class="text-center">{{$teams->position}}</h5 class="text-center">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
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

    </div>
</div>
@endsection