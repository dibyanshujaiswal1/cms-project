@extends('frontend.layouts.master')
@section('content')
<div class="breadcrumbs">
    <div>
        <div class="breadcrumb-content-inner">
            <div class="gva-breadcrumb-content">
                <div id="block-gavias-kunco-breadcrumbs" class="text-light block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                    <div class="breadcrumb-style gva-parallax-background" style="background-color: #F6F6F6;background-image: url(%27/drupal/kunco/themes/gavias_kunco/images/breadcrumb.html);background-position: center center;background-repeat: no-repeat;">
                        <div class="container">
                            <div class="breadcrumb-content-main">
                                <h2 class="page-title">About Us </h2>


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
                                                            About Us

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
<div class="node__content clearfix">
    <div class="field field--name-field-content-builder field--type-gavias-content-builder field--label-hidden field__item">
        <div class="gavias-blockbuilder-content">
            <div class="gavias-builder--content">
                <div class="gbb-row-wrapper">
                    <div class=" gbb-row  bg-size-cover " style="padding-top:30px">
                        <div class="bb-inner remove_padding_top">
                            <div class="bb-container container">
                                <div class="row">
                                    <div class="row-wrapper clearfix">
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 ">                                      
                                            <div class="column-inner  bg-size-cover  ">                                           
                                                <div class="column-content-inner">
                                                    @foreach($getaboutus as $abouts)
                                                    <div class="widget gsc-heading  align-left style-2 text-dark ">
                                                        <h2 class="title"><span><strong>{{$abouts->heading}}</strong> in 125 Countries.</span></h2>
                                                        <div class="title-desc">
                                                            <p>{!!$abouts->description!!}</p>
                                                        </div>
                                                        <img src="{{asset('backend/img/aboutus/'.$abouts->image)}}" alt="" style="height:400px; width:450px" typeof="foaf:Image" />
                                                    </div> 
                                                    
                                                    @endforeach                                                
                                                    <div class="gbb-row-wrapper">
                                                    <div class=" gbb-row  bg-size-cover " style="">
                                                        <div class="bb-inner default">
                                                            <div class="bb-container container">
                                                                <div class="row">
                                                                    <div class="row-wrapper clearfix">
                                                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="column-inner  bg-size-cover  ">
                                                                                <div class="column-content-inner">
                                                                                    <div class="widget gsc-heading  align-center style-1 text-dark " data-aos="fade-up">

                                                                                        <h2 class="title">
                                                                                            <span>Meet
                                                                                                Our
                                                                                                <strong>Team</strong></span>
                                                                                        </h2>
                                                                                        <div class="title-desc">
                                                                                            <p>Dhoreli Sewa Samaj
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="clearfix">
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="widget block clearfix gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off" data-aos="fade-up" data-aos-delay="300">
                                                                                            <div class="views-element-container">
                                                                                                <div class="gva-view js-view-dom-id-da5e370a75b640e31827b1130c9e4aa90a992f4bbb8e2fc896b61becf020b8e3">

                                                                                                    <div class="owl-carousel init-carousel-owl" data-items="4" data-items_lg="4" data-items_md="4" data-items_sm="3" data-items_xs="2" data-loop="1" data-speed="200" data-auto_play="1" data-auto_play_speed="1000" data-auto_play_timeout="3000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">
                                                                                                        @foreach($getallmember as $teams)
                                                                                                        <div class="item">
                                                                                                            <div>
                                                                                                                <!-- Start Display article for teaser page -->

                                                                                                                <div data-history-node-id="59" role="article" about="/drupal/kunco/node/59" class="node node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                                                                    <div class="team-block">
                                                                                                                        <div class="team-image">
                                                                                                                            <div class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                                                                <div class="item-image">
                                                                                                                                    <img src="{{asset('backend/img/members/'.$teams->picture)}}" alt="" typeof="foaf:Image" />

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="team-content">
                                                                                                                            <div class="team-name">
                                                                                                                                <a href="node/59.html">
                                                                                                                                    {{$teams->name}}
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                            <div class="team-job">
                                                                                                                                {{$teams->position}}
                                                                                                                            </div>
                                                                                                                            <div class="socials-team">
                                                                                                                                <a class="gva-social" href="#"><i class="fa fa-facebook"></i></a>

                                                                                                                                <a class="gva-social" href="#"><i class="fa fa-linkedin"></i></a>

                                                                                                                                <a class="gva-social" href="#"><i class="fa fa-pinterest"></i></a>

                                                                                                                                <a class="gva-social" href="#"><i class="fa fa-twitter"></i></a>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <!-- End Display article for teaser page -->

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
                <!-- team member space -->
               
            </div>
        </div>
    </div>
</div>
@endsection