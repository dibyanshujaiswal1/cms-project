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
                                <h2 class="page-title">{{$publicationdetails->title}} </h2>
                                <div class="">
                                    <div class="content block-content">
                                        <div class="breadcrumb-links">
                                            <div class="content-inner">
                                                <nav class="breadcrumb " aria-labelledby="system-breadcrumb">
                                                    <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                                                    <ol >

                                                        <li>
                                                            <a href="{{url('/')}}">गृहपृष्ठ</a>
                                                            <span class=""> - </span>

                                                        </li>
                                                        <li>


                                                        </li>
                                                        <li>
                                                            Publication Details

                                                        </li>

                                                        <li></li>
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

    <div class="clearfix"></div>


    <div class="help gav-help-region">
        <div class="container">
            <div class="content-inner">
                <div>
                    <div data-drupal-messages-fallback class="hidden"></div>

                </div>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="clearfix"></div>

    <div id="content" class="content content-full">
        <div class="container">
            <div class="content-main-inner">
                <div class="row">
                    <div id="page-main-content" class="main-content col-xs-12 col-md-9  sb-r ">
                        <div class="main-content-inner">
                            <div class="content-main">
                                <div>
                                    <div id="block-gavias-kunco-content" class="block block-system block-system-main-block no-title">
                                        <div class="content block-content">
                                            <!-- Start Display article for teaser page -->
                                            <!-- Start Display article for detail page -->
                                            <article data-history-node-id="8" role="article" about="/drupal/kunco/close-shot-blue-and-cream-coloured" typeof="schema:Article" class="node node-detail node--type-article node--promoted node--view-mode-full clearfix">
                                                <div class="post-block">
                                                    <div class="post-thumbnail post-standard">
                                                        <div class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                            <iframe src="{{asset('backend/img/publication/'.$publicationdetails->file)}}" frameborder="0" style="width:70%; height:600px" class="mobile-frame"></iframe>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="page-main-content" class="main-content col-xs-12 col-md-3 sb-r ">
                        <div class="main-content-inner">
                            <div class="content-main">
                                <div>
                                    <div id="block-gavias-kunco-content" class="block block-system block-system-main-block no-title" style="padding-top:50px;margin-left:-192px;">
                                        <div class="content block-content">
                                            <h4>Publication Title : {{$publicationdetails->title}}</h4>
                                            <h4>Author Name : {{$publicationdetails->author}}</h4>
                                            <h4>Refrence : {{$publicationdetails->refrence}}</h4>
                                            <h4>Published Date : {{\Carbon\Carbon::parse($publicationdetails->created_at)->format('d-M-Y')}}</h4>
                                            <h4><a href="{{route('download.file',$publicationdetails->file)}}">
                                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                                                </a></h4>
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