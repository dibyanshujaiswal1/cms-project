@extends('frontend.layouts.master')
@section('content')
<div class="breadcrumbs">
    <div>
        <div class="breadcrumb-content-inner">
            <div class="gva-breadcrumb-content">
                <div id="block-gavias-kunco-breadcrumbs" class="text-light block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                    <div class="breadcrumb-style gva-parallax-background" style="background-color: gray; background-repeat: no-repeat; height:9px">
                        <div class="container">
                            <div class="breadcrumb-content-main">
                                <h2 class="page-title">{{$publicationdetails->title}} </h2>
                                <div class="">
                                    <div class="content block-content">
                                        <div class="breadcrumb-links">
                                            <div class="content-inner">
                                                <nav class="breadcrumb " aria-labelledby="system-breadcrumb">
                                                    <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                                                    <ol>

                                                        <li>
                                                            <a href="{{url('/')}}">Home</a>
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

    <div id="content" class="content content-full" style="background-color: #BEE5B0">
        <div class="container">
            <div class="content-main-inner">
                <div class="row">
                    <div id="page-main-content" class="main-content col-xs-12 col-md-6 sb-r ">
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
                                                            <div class="item-image">
                                                            <img src="{{asset('backend/img/publication/thumbnail/'.$publicationdetails->thumbnail)}}" style="height:400px">
                                                            </div>
                                                        </div>


                                                    </div>


                                                </div>

                                            </article>

                                            <!-- End Display article for detail page -->

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div id="page-main-content" class="main-content col-xs-12 col-md-6 sb-r ">
                        <div class="main-content-inner">
                            <div class="content-main">
                                <div>
                                    <div id="block-gavias-kunco-content" class="block block-system block-system-main-block no-title" style="padding-top: 30px">
                                        <div class="content block-content">
                                            <h4>Publication Title : {{$publicationdetails->title}}</h4>
                                            <h4>Author Name : {{$publicationdetails->author}}</h4>
                                            <h4>Refrence : {{$publicationdetails->refrence}}</h4>
                                            <h4>Published Date : {{\Carbon\Carbon::parse($publicationdetails->created_at)->format('d-M-Y')}}</h4>
                                            <h4><a href="{{route('download.file',$publicationdetails->file)}}">
                                                   download
                                                </a></h4>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Sidebar Left -->
                    <!-- End Sidebar Left -->

                    <!-- Sidebar Right -->




                </div>
            </div>
        </div>
    </div>



</div>

@endsection