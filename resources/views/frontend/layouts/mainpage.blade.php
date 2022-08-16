@extends('frontend.layouts.master')
@section('content')
<div role="main" class="main main-page">

    <div class="help gav-help-region">
        <div class="container">
            <div class="content-inner">
                <div>
                    <div data-drupal-messages-fallback class="hidden"></div>
                </div>

            </div>
        </div>
    </div>
    <div id="content" class="content content-full">
        <div class="container-full">
            <div class="content-main-inner">
                <div id="page-main-content" class="main-content">
                    <div class="main-content-inner">

                        <div class="content-main">
                            <div>
                                <div id="block-gavias-kunco-content" class="block block-system block-system-main-block no-title">
                                    <div class="content block-content">
                                        <!-- Start Display article for detail page -->
                                        <article data-history-node-id="1" role="article" typeof="schema:WebPage" class="node node--type-page node--view-mode-full">
                                            <header>
                                                <div class="container">
                                                    <h2 class="title"><span><span property="schema:name">Home 1</span>
                                                        </span></h2>
                                                </div>
                                            </header>
                                            <div class="node__content clearfix">
                                                <div class="field field--name-field-content-builder field--type-gavias-content-builder field--label-hidden field__item">
                                                    <div class="gavias-blockbuilder-content">
                                                        <div class="gavias-builder--content">
                                                            <div class="gbb-row-wrapper">
                                                                <div class=" gbb-row  bg-size-cover " style="">
                                                                    <div class="bb-inner remove_padding">
                                                                        <div class="bb-container container-fw">
                                                                            <div class="row">
                                                                                <div class="row-wrapper clearfix">
                                                                                    <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                                                        <div class="column-inner  bg-size-cover  ">
                                                                                            <div class="column-content-inner">
                                                                                                <div class="widget gsc-block-drupal title-align-left  hidden-title-on remove-margin-on text-dark">
                                                                                                    <div id="block-gavias-kunco-gaviassliderlayersliderwatercharity" class="block block-gavias-sliderlayer block-gavias-sliderlayer-blockgavias-sliderlayer-block____2 no-title">

                                                                                                        <div class="content block-content">
                                                                                                            <div class="gavias_sliderlayer rev_slider_wrapper fullwidthbanner-container" style="height:800px">

                                                                                                                <div id="ez933" class="rev_slider fullwidthabanner" data-version="5.4.1">

                                                                                                                    <ul>
                                                                                                                        @foreach($getallbanner as $banners)
                                                                                                                        <li data-transition="random" data-easein="Power0.easeIn" data-easeout="Power1.easeOut" data-slotamount="7" data-kenburns="off" data-masterspeed="default" data-index="{{$loop->first?'rs-1':''}}">
                                                                                                                            <img class="rev-slidebg" src="{{asset('backend/img/banner/'.$banners->image)}}" alt="" data-duration="300" data-bgparallax="1" data-scalestart="0" data-scaleend="0" data-kenburns="off" data-bgrepeat="no-repeat" style="background-color:#f2f2f2" data-bgfit="cover" data-bgposition="center top" />
                                                                                                                            <div class="tp-caption text text-white text-center slide-style-2 " data-x="center" data-y="195" data-start="1205.48" data-transform_idle="o:1;" data-transform_in="x:inherit;y:inherit;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:4">
                                                                                                                                {{$banners->banner_heading}}
                                                                                                                            </div>
                                                                                                                            <div class="tp-caption text text-white text-center slide-style-3 " data-x="center" data-y="370" data-start="1546.58" data-transform_idle="o:1;" data-transform_in="x:inherit;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:easeOutExpo;" style="z-index:3">
                                                                                                                                {{$banners->description}}
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        @endforeach

                                                                                                                    </ul>

                                                                                                                    <div class="tp-bannertimer tp-top">
                                                                                                                    </div>
                                                                                                                </div>


                                                                                                            </div>
                                                                                                            <script type="text/javascript">
                                                                                                                jQuery
                                                                                                                    (
                                                                                                                        document)
                                                                                                                    .ready(
                                                                                                                        function(
                                                                                                                            $
                                                                                                                        ) {
                                                                                                                            jQuery
                                                                                                                                (
                                                                                                                                    '#ez933')
                                                                                                                                .show()
                                                                                                                                .revolution({
                                                                                                                                    "delay": 9000,
                                                                                                                                    "gridheight": 800,
                                                                                                                                    "gridwidth": 1170,
                                                                                                                                    "minHeight": 0,
                                                                                                                                    "autoHeight": "off",
                                                                                                                                    "sliderType": "standard",
                                                                                                                                    "sliderLayout": "auto",
                                                                                                                                    "fullScreenAutoWidth": "on",
                                                                                                                                    "fullScreenAlignForce": "off",
                                                                                                                                    "fullScreenOffsetContainer": "",
                                                                                                                                    "fullScreenOffset": "0",
                                                                                                                                    "hideCaptionAtLimit": 0,
                                                                                                                                    "hideAllCaptionAtLimit": 0,
                                                                                                                                    "hideSliderAtLimit": 0,
                                                                                                                                    "disableProgressBar": "off",
                                                                                                                                    "stopAtSlide":
                                                                                                                                        -
                                                                                                                                        1,
                                                                                                                                    "stopAfterLoops":
                                                                                                                                        -
                                                                                                                                        1,
                                                                                                                                    "shadow": "0",
                                                                                                                                    "dottedOverlay": "none",
                                                                                                                                    "startDelay": 0,
                                                                                                                                    "lazyType": "none",
                                                                                                                                    "spinner": "spinner0",
                                                                                                                                    "shuffle": "off",
                                                                                                                                    "debugMode": 0,
                                                                                                                                    "parallax": {
                                                                                                                                        "type": "mouse",
                                                                                                                                        "origo": "slidercenter",
                                                                                                                                        "speed": 2000,
                                                                                                                                        "levels": [
                                                                                                                                            4,
                                                                                                                                            5,
                                                                                                                                            6,
                                                                                                                                            7,
                                                                                                                                            12,
                                                                                                                                            16,
                                                                                                                                            10,
                                                                                                                                            50,
                                                                                                                                            46,
                                                                                                                                            47,
                                                                                                                                            48,
                                                                                                                                            49,
                                                                                                                                            50,
                                                                                                                                            55
                                                                                                                                        ]
                                                                                                                                    },
                                                                                                                                    "navigation": {
                                                                                                                                        "onHoverStop": "on",
                                                                                                                                        "touch": {
                                                                                                                                            "touchenabled": "on"
                                                                                                                                        },
                                                                                                                                        "arrows": {
                                                                                                                                            "enable": true,
                                                                                                                                            "left": {
                                                                                                                                                "h_align": "left",
                                                                                                                                                "v_align": "center",
                                                                                                                                                "h_offset": 20,
                                                                                                                                                "v_offset": 0

                                                                                                                                            },
                                                                                                                                            "right": {
                                                                                                                                                "h_align": "right",
                                                                                                                                                "v_align": "center",
                                                                                                                                                "h_offset": 20,
                                                                                                                                                "v_offset": 0
                                                                                                                                            }
                                                                                                                                        },
                                                                                                                                        "bullets": {
                                                                                                                                            "enable": true,
                                                                                                                                            "v_align": "bottom",
                                                                                                                                            "h_align": "center",
                                                                                                                                            "v_offset": 20,
                                                                                                                                            "space": 10,
                                                                                                                                            "tmp": ""
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                });
                                                                                                                        }
                                                                                                                    );
                                                                                                            </script>
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

                                                    <div class="gbb-row-wrapper">
                                                        <div class="">
                                                            <div class="bb-inner ">
                                                                <div class="bb-container container">
                                                                    <div class="row">
                                                                        <div class="row-wrapper clearfix">
                                                                            <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                                                <div class="column-inner  bg-size-cover  ">
                                                                                    <div class="column-content-inner">
                                                                                        <div class="widget gsc-heading  align-center style-1 text-dark " data-aos="fade-up">

                                                                                            <h2 class="title"><span>Events</span></h2>

                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @foreach($getallevent as $events)
                                                                            <div class="gsc-column col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                                                                <div class="column-inner  bg-size-cover  ">
                                                                                    <div class="column-content-inner">
                                                                                        <div class="widget gsc-box-color clearfix  text-white" style="background-color: #009247;" data-aos="fade-up" data-aos-delay="300">
                                                                                            <div class="box-content">
                                                                                                <div class="image"><img src="{{asset('backend/img/event/'.$events->image)}}" style="height:200px;width:100%" alt="Water Refine" /></div>
                                                                                                <div class="">
                                                                                                    <div class="box-title">
                                                                                                        <h4>{{$events->title}}</h4>
                                                                                                    </div>
                                                                                                    <div class="" style="justify-content: space-between;">
                                                                                                        <h6 class="font-weight-bold" style="margin-top:-19px">{{$events->vanue}}</h6>
                                                                                                        <h6 class="font-weight-bold" style="margin-top:-19px">{{\Carbon\Carbon::parse($events->date)->format('d-M-Y')}}</h6>
                                                                                                    </div>
                                                                                                    <div class="box-title">
                                                                                                        <p>{!!Str::limit($events->description,20)!!}</p>
                                                                                                    </div>
                                                                                                    <div class="action"><a class="link" href="{{route('view.eventdetails',$events->id)}}"><span class="text">Read More</span></a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
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
                                                <div class="gbb-row-wrapper">
                                                    <div class=" gbb-row  gva-parallax-background  bg-size-cover " style="background-image:url('../../frontend/image/gbb-uploads/bg-9.jpg'); background-repeat:no-repeat; background-position:center top">
                                                        <div class="bb-inner default">
                                                            <div class="bb-container container">
                                                                <div class="row">
                                                                    <div class="row-wrapper clearfix">
                                                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="column-inner  bg-size-cover  ">
                                                                                <div class="column-content-inner">
                                                                                    <div class="widget gsc-heading  align-center style-1 text-light ">

                                                                                        <h2 class="title"><span>Our Gallery</span></h2>
                                                                                    </div>
                                                                                    <div class="clearfix"></div>
                                                                                    <div>
                                                                                        <div class="widget block clearfix gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off">
                                                                                            <div class="views-element-container">
                                                                                                <div class="gva-view js-view-dom-id-47dbc5342c69a3f77cb7684ad59be261ae120d0523bccfc16c4f12104a7a81b6">

                                                                                                    <div class="width-700">
                                                                                                        <div id="gva-images-carousel" class="owl-carousel init-carousel-owl text-center" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_xs="1" data-loop="1" data-speed="200" data-auto_play="1" data-auto_play_speed="1000" data-auto_play_timeout="3000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="1" data-mouse_drag="1" data-touch_drag="1">
                                                                                                            @foreach($getallgallery as $galleries)
                                                                                                            <div class="gallery-large carousel-item">
                                                                                                                <div class="item content">
                                                                                                                    <!-- Start Display article for teaser page -->

                                                                                                                    <article data-history-node-id="50" role="article" about="/drupal/kunco/node/50">
                                                                                                                        <div class="gallery-post text-center">
                                                                                                                            <div class="images lightGallery">
                                                                                                                                <div>

                                                                                                                                    <div class="image-item">
                                                                                                                                        <a href="{{asset('backend/img/gallery/'.$galleries->image)}}" data-sub-html="Alternative text" class="zoomGallery" title="" data-rel="lightGallery" style="height:460px; width:10px">
                                                                                                                                            <span class="icon-expand"><i class="fa fa-expand"></i></span>
                                                                                                                                            <img src="{{asset('backend/img/gallery/'.$galleries->image)}}" alt="" class="hidden" />
                                                                                                                                        </a>

                                                                                                                                        <div class="item-image">
                                                                                                                                            <img src="{{asset('backend/img/gallery/'.$galleries->image)}}" style="height:467px; width:100%" alt="Alternative text" typeof="foaf:Image" class="mobile-view" />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </article>
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
                                                        <div style="background-repeat: no-repeat;background-position:center top;" class="gva-parallax-inner skrollable skrollable-between bg-size-cover" data-bottom-top="top: -60%;" data-top-bottom="top: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="gbb-row-wrapper">
                                                    <div class=" gbb-row  bg-size-cover " style="background-color:#f2f2f2">
                                                        <div class="bb-inner default">
                                                            <div class="bb-container container">
                                                                <div class="row">
                                                                    <div class="row-wrapper clearfix">
                                                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="column-inner  bg-size-cover  ">
                                                                                <div class="column-content-inner">
                                                                                    <div class="widget gsc-heading  align-center style-3 text-dark " data-aos="fade-up">

                                                                                        <h2 class="title" style="margin-top:20px;"><span>From Our Blog Posts</span></h2>
                                                                                    </div>
                                                                                    <div class="widget block clearfix gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off">
                                                                                        <div class="views-element-container">
                                                                                            <div class="post-style-grid gva-view js-view-dom-id-4eebdfc539b5a1724de0b085495c84a7c86420378df04674cb06379a42acfa7a">
                                                                                                <div class="owl-carousel init-carousel-owl" data-items="3" data-items_lg="3" data-items_md="3" data-items_sm="2" data-items_xs="2" data-loop="1" data-speed="200" data-auto_play="1" data-auto_play_speed="1000" data-auto_play_timeout="3000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">
                                                                                                    @foreach($getallblog as $blogs)
                                                                                                    <div class="item">
                                                                                                        <div class="post-block">
                                                                                                            <div class="post-image">
                                                                                                                <div class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                                                                                    <div class="item-image">
                                                                                                                        <a href="{{route('view.blog',$blogs->id)}}"><img property="schema:image" src="{{asset('backend/img/blog/'.$blogs->image)}}" style="height:300px" alt="alt" typeof="foaf:Image" class="mobile-view" />
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="post-content text-left">
                                                                                                                <div class="post-title"><a href="{{route('view.blog',$blogs->id)}}" rel="bookmark"><span property="schema:name">{{$blogs->title}}</span>
                                                                                                                    </a> </div>

                                                                                                                <div class="post-body">
                                                                                                                    <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">{!! Str::limit($blogs->description,80)!!}
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
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
                                                                                    
                                                                                    <div>
                                                                                        <div class="widget block clearfix gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off" data-aos="fade-up" data-aos-delay="300">
                                                                                            <div class="views-element-container">
                                                                                                <div class="gva-view js-view-dom-id-da5e370a75b640e31827b1130c9e4aa90a992f4bbb8e2fc896b61becf020b8e3">

                                                                                                    <div class="owl-carousel init-carousel-owl" data-items="4" data-items_lg="4" data-items_md="4" data-items_sm="3" data-items_xs="2" data-loop="1" data-speed="200" data-auto_play="1" data-auto_play_speed="1000" data-auto_play_timeout="3000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">
                                                                                                        @foreach($getallmember as $teams)
                                                                                                        <div class="item">
                                                                                                            <div>
                                                                                                                <div data-history-node-id="59" role="article" about="/drupal/kunco/node/59" class="node node--type-team node--promoted node--view-mode-teaser clearfix">
                                                                                                                    <div class="team-block">
                                                                                                                        <div class="team-image">
                                                                                                                            <div class="field field--name-field-team-image field--type-image field--label-hidden field__item">
                                                                                                                                <div class="item-image">
                                                                                                                                    <img src="{{asset('backend/img/members/'.$teams->picture)}}" alt="" typeof="foaf:Image" style="height:250px; width:100%; clip-path: rectangle();" class="mobile-view" />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="team-content">
                                                                                                                            <div class="team-name">
                                                                                                                                    {{$teams->name}}
                                                                                                                            </div>
                                                                                                                            <div class="team-job">
                                                                                                                                {{$teams->position}}
                                                                                                                            </div>

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
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
                                        </article>
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