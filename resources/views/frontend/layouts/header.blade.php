@php
use App\Models\Logo;
use App\Models\Socialmedia;
use App\Models\Contact;
$getlogo=Logo::first();
$getallmedia=Socialmedia::first();
$getallcontact=Contact::first();
@endphp
<header id="header" class="header-v1">

    <div class="topbar">
        <div class="topbar-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="topbar-content">
                            <div>
                                <div id="block-gavias-kunco-topbar" class="block block-block-content block-block-contenta87cb642-bb80-4bd8-9bb0-ed5e2d4da5e0 no-title">


                                    <div class="content block-content">

                                        <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                            <div class="pull-left text-left">
                                            @if(!empty($getallcontact->email))
                                                <ul class="inline">
                                                    <li><span><i class="fa fa-envelope"></i>{{$getallcontact->email}}</span>
                                                    </li>
                                                    
                                                </ul>
                                                @endif
                                            </div>
                                            <div class="pull-right text-right">
                                            @if(!empty($getallmedia->facebook))
                                                <ul class="inline">
                                                
                                                    <li><a target="_blank" href="{{$getallmedia->facebook}}"><i class="fa-brands fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="{{$getallmedia->instagram}}"> <i class="fa-brands fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="{{$getallmedia->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                                                    <li><a target="_blank" href="{{$getallmedia->skype}}"><i class="fa-brands fa-skype"></i></a></li>
                                                    <li><a target="_blank" href="{{$getallmedia->googleplus}}"><i class="fa-brands fa-google-plus"></i></a></li>
                                                    
                                                </ul>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="language-box"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="header-main gv-sticky-menu has-link-donate">
        <div class="container header-content-layout">
            <div class="header-main-inner p-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 content-inner">

                        <div class="branding">

                            <div>

                                <a href="index.html" title="Home" rel="home" class="site-branding-logo">
                                    @if(!empty($getlogo->image))
                                    <img class="logo-default" src="{{asset('backend/img/logo/'.$getlogo->image)}}" alt="Home" />
                                    <img class="logo-white hidden" src="{{asset('backend/img/logo/'.$getlogo->image)}}" alt="My Logo" />
                                    @endif

                                </a>

                            </div>


                        </div>

                        <div class="header-inner clearfix">
                            <div class="main-menu">
                                <div class="area-main-menu">
                                    <div class="area-inner">
                                        <div class="gva-offcanvas-mobile">
                                            <div class="close-offcanvas hidden"><i class="gv-icon-8"></i>
                                            </div>
                                            <div class="main-menu-inner">
                                                <div>
                                                    <nav aria-labelledby="block-gavias-kunco-mainnavigation-menu" id="block-gavias-kunco-mainnavigation" class="block block-menu navigation menu--main">


                                                        <h2 class="visually-hidden block-title block-title" id="block-gavias-kunco-mainnavigation-menu">
                                                            <span>Main navigation</span>
                                                        </h2>

                                                        <div class="block-content">

                                                            <div class="gva-navigation">

                                                                <ul class="clearfix gva_menu gva_menu_main">


                                                                    <li class="menu-item menu-item--expanded">
                                                                        <a href="{{url('/')}}"> Home

                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item menu-item--expanded ">
                                                                        <a href="{{route('all.news')}}"> News

                                                                        </a>


                                                                    </li>

                                                                    <li class="menu-item menu-item--expanded ">
                                                                        <a href="{{route('all.event')}}"> Events

                                                                        </a>


                                                                    </li>

                                                                    <li class="menu-item menu-item--expanded ">
                                                                        <a href="{{route('all.blog')}}"> Blog
                                                                        </a>


                                                                    </li>



                                                                    <li class="menu-item ">
                                                                        <a href="{{route('contact.create')}}"> Contact </a>

                                                                    </li>
                                                                    <li class="menu-item ">
                                                                        <a href="{{route('all.about')}}"> About Us </a>

                                                                    </li>
                                                                </ul>


                                                            </div>


                                                        </div>
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

</header>