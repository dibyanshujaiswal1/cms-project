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
                                <h2 class="page-title">सूचना र कार्यक्रम</h2>
                                 <div class="mobile">
                                    <div class="content block-content">
                                        <div class="breadcrumb-links">
                                            <div class="content-inner">
                                                <nav class="breadcrumb " aria-labelledby="system-breadcrumb">
                                                    <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                                                    <ol class="mv">
                                                         <li>
                                                            <a href="{{url('/')}}">गृहपृष्ठ</a>
                                                            <span class=""> - </span>

                                                        </li>
                                                         <li>
                                                         सूचना र कार्यक्रम
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
                                    <div id="block-gavias-kunco-content" class="block block-system block-system-main-block no-title" style="margin-top: 43px;">
                                        <div class="content block-content">
                                            <div class="views-element-container">
                                                <div class="post-style-grid gva-view view-page js-view-dom-id-dd2c2acba784d5f58b6a4de52a852ef2d3e5e265e5a55929193a3dda505c7ed1">

                                                    <div class="views-view-grid horizontal cols-3 clearfix">
                                                          <div class="views-row row clearfix row-1">
                                                             @foreach($getalleventlist as $events)
                                                            <div class="views-col col-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="post-block">
                                                                     <div class="post-image">
                                                                         <div class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                                            <div class="item-image">
                                                                                <a href="server-side-rendering.html"><img property="schema:image" src="{{asset('backend/img/event/'.$events->image)}}" style="height:260px; width:500px" alt="alt" typeof="foaf:Image" class="mobile-view"/>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-content text-left">
                                                                        <div class="post-title"> <a href="{{route('view.eventdetails',$events->id)}}" rel="bookmark"><span property="schema:name">{{$events->title}}</span>
                                                                            </a> </div>
                                                                        <div class="post-meta">
                                                                            <span class="post-categories">
                                                                                <div class="field field--name-field-post-category field--type-entity-reference field--label-hidden field__item"><a href="taxonomy/term/5.html" hreflang="en">{{$events->vanue}}</a></div>
                                                                            </span>
                                                                            <span class="post-created">{{\Carbon\Carbon::parse($events->date)->format('d-M-Y')}}</span>
                                                                        </div>
                                                                        <div class="post-body">

                                                                            <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">{!! Str::limit($events->long_description,100)!!}</div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                     </div>
                                                    </div>
                                                     <nav class="pager" aria-labelledby="pagination-heading">
                                                    {{$getalleventlist->links()}}
                                                </nav>
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