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
                                                    <li><a target="_blank" href="{{$getallmedia->facebook}}" style="color:white;"><i class="fa-brands fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="{{$getallmedia->instagram}}" style="color:white;"> <i class="fa-brands fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="{{$getallmedia->twitter}}" style="color:white;"><i class="fa-brands fa-twitter"></i></a></li>
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
                    <div class="col-md-12 col-sm-12 col-xs-12" style="height: 60px;">
                        <div class="branding">
                            <div>
                                <a href="" title="Home" rel="home" class="site-branding-logo">
                                    @if(!empty($getlogo->image))
                                    <img class="logo-default img-circle" src="{{asset('backend/img/logo/'.$getlogo->image)}}" alt="Home" />
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="header-inner clearfix" style="padding-right:44px">
                            <div class="main-menu">
                                <div class="area-main-menu">
                                    <div class="area-inner">
                                        <div id="menu-bar" class="menu-bar hidden-lg hidden-md">
                                            <span class="one"></span>
                                            <span class="two"></span>
                                            <span class="three"></span>
                                        </div>
                                        <div class="gva-offcanvas-mobile" style="padding-top:0px">
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
                                                                        <a href="{{url('/')}}"> गृहपृष्ठ

                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item ">
                                                                        <a href="{{route('all.about')}}"> हाम्रोबारे </a>
                                                                    </li>
                                                                    <li class="menu-item menu-item--expanded ">
                                                                        <a href="">हाम्रोबारे थप<span class="icaret nav-plus fa fa-angle-down"></span> </a>
                                                                        <ul class="menu sub-menu">
                                                                            <li class="menu-item">
                                                                                <a href="{{route('get.team')}}">हाम्रो समूह</a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a href="{{route('get.gallery')}}">तस्वीरहरु</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="menu-item menu-item--expanded ">
                                                                        <a href=""> प्रकाशन<span class="icaret nav-plus fa fa-angle-down"></span> </a>
                                                                        <ul class="menu sub-menu">
                                                                            <li class="menu-item">
                                                                                <a href="{{route('view.ourpublication')}}">हाम्रो प्रकाशन</a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a href="{{route('view.refrencepublication')}}">सन्दर्भ</a>
                                                                            </li>
                                                                            <li class="menu-item">
                                                                                <a href="{{route('view.reportspublication')}}">Reports publication</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>

                                                                    <li class="menu-item menu-item--expanded ">
                                                                        <a href="{{route('all.event')}}"> सूचना र कार्यक्रम
                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item menu-item--expanded ">
                                                                        <a href="{{route('all.blog')}}"> लेखहरू
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item ">
                                                                        <a href="{{route('contact.create')}}"> सम्पर्क</a>
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