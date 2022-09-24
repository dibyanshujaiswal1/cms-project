@extends('frontend.layouts.master')
@section('content')
<div class="breadcrumbs">
    <div>
        <div class="breadcrumb-content-inner">
            <div class="gva-breadcrumb-content">
                <div id="block-gavias-kunco-breadcrumbs" class="text-light block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                    <div class="breadcrumb-style gva-parallax-background" style="background-repeat: no-repeat; height:9px">
                        <div class="container">
                            <div class="breadcrumb-content-main">
                                <h2 class="page-title">{{$blogsdetails->title}} </h2>
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


                                                        </li>
                                                        <li>
                                                        लेखहरू

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
                    <div id="page-main-content" class="main-content col-xs-12 col-md-9 sb-r ">
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
                                                                <img property="schema:image" src="{{asset('backend/img/blog/'.$blogsdetails->image)}}" alt="alt" typeof="foaf:Image" style="height:500px; width:700px" class="mobile-view"/>

                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="post-content">

                                                        <h1 class="post-title"><span property="schema:name">{{$blogsdetails->title}}</span>
                                                        </h1>
                                                        <span property="schema:name" content="Close-up shot of blue and cream coloured" class="hidden"></span>
                                                        <span property="schema:interactionCount" content="UserComments:0" class="hidden"></span>

                                                        <div class="node__meta">
                                                            <article typeof="schema:Person" about="/drupal/kunco/user/1">
                                                            </article>

                                                            <span>
                                                                Submitted by <span rel="schema:author"><span lang="" about="/drupal/kunco/user/1" typeof="schema:Person" property="schema:name" datatype="">{{$blogsdetails->author_name}}</span></span>
                                                                </span>
                                                            <span property="schema:dateCreated" content="2016-12-21T04:03:55+00:00" class="hidden"></span>

                                                        </div>

                                                        <div class="node__content clearfix">

                                                            <div property="schema:text" class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                <p>{!!$blogsdetails->description!!}</p>

                                                                                                                  </div>
                                                            <ul class="links inline">
                                                                <li class="comment-forbidden"><a href="user/login6ac1.html?destination=/drupal/kunco/close-shot-blue-and-cream-coloured%23comment-form">Log in</a> or <a href="user/register6ac1.html?destination=/drupal/kunco/close-shot-blue-and-cream-coloured%23comment-form">register</a> to post comments</li>
                                                            </ul>
                                                        </div>
                                                        <div id="node-single-comment">
                                                            <section rel="schema:comment">




                                                            </section>

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

                    <!-- Sidebar Left -->
                    <!-- End Sidebar Left -->

                    <!-- Sidebar Right -->


                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar sidebar-right theiaStickySidebar">
                        <div class="sidebar-inner">
                            <div>
                               
                                <div class="views-element-container block block-views block-views-blockpost-other-block-1" id="block-gavias-kunco-views-block-post-other-block-1">
                                    <h2 class="block-title"><span>Recent Posts</span></h2>

                                    <div class="content block-content">
                                        <div>
                                            <div class="post-style-list small gva-view js-view-dom-id-67d29666627901db50b94b7d5825966ad05cb08547f4d38ace9034bc87bb714c">
                                                <div class="item-list">
                                                    <ul>

                                                    @foreach($allblogs as $blogs)
                                                        <li class="view-list-item">
                                                            <div class="views-field views-field-nothing">
                                                                <div class="field-content">
                                                                    <div class="post-block">
                                                                        <div class="post-image">
                                                                            <div class="item-image">
                                                                                <a href="{{route('view.blog',$blogs->id)}}"><img src="{{asset('backend/img/blog/'.$blogs->image)}}" alt="alt" typeof="Image" style="height:100px; width:200px"/>

                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-title" style="margin-top:7px;"> <a href="{{route('view.blog',$blogs->id)}}" hreflang="en" >{{$blogs->title}}</a> {{$blogsdetails->author_name}}</div>
                                                                            
                                                                                
                                                                            
                                                                            <div class="post-title"> <a href="{{route('view.blog',$blogs->id)}}" hreflang="en">{!!Str::limit($blogs->description,50)!!}</a> </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                                

                            </div>

                        </div>
                    </div>
                    <!-- End Sidebar Right -->

                </div>
            </div>
        </div>
    </div>



</div>

@endsection