@php
use App\Models\Socialmedia;
use App\Models\Contact;
use App\Models\Logo;
$getlogo=Logo::first();
$getallmedia=Socialmedia::first();
$getallcontact=Contact::first();
@endphp
<footer id="footer" class="footer">
    <div class="footer-inner">
        <div class="footer-center">
            <div class="container">
                <div class="row">
                    <div class="footer-second col-lg-4 col-md-4 col-sm-12 col-xs-12 column">
                        <div>
                            <div id="block-gavias-kunco-linkfooter" class="block block-block-content block-block-contentf68ff84d-6af0-4c49-8b85-ae338addc541">
                                <div class="content block-content">
                                    @if(!empty($getlogo->image))
                                    <img class="logo-default img-circle" src="{{asset('backend/img/logo/'.$getlogo->image)}}" alt="Home" style="height:167px; width:184px" />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-second col-lg-4 col-md-4 col-sm-12 col-xs-12 column">
                        <div>
                            <div id="block-gavias-kunco-linkfooter" class="block block-block-content block-block-contentf68ff84d-6af0-4c49-8b85-ae338addc541">

                                <h2 class="block-title"><span>Link Footer</span></h2>

                                <div class="content block-content">

                                    <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                        <div class="clearfix">
                                            <ul class="menu">
                                                <li><a href="{{route('all.about')}}">हाम्रोबारे</a></li>
                                                <li><a href="{{route('contact.create')}}">सम्पर्क</a></li>
                                                <li><a href="{{route('all.blog')}}">लेखहरू</a></li>
                                                <li><a href="{{route('all.event')}}">सूचना र कार्यक्रम</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-first col-lg-4 col-md-4 col-sm-12 col-xs-12 column">
                        <div>
                            <div id="block-gavias-kunco-contactinfo" class="block block-block-content block-block-content7da38301-272f-4979-8de1-06b564010f17">
                                @if(!empty($getallcontact->address))

                                <h2 class="block-title"><span>Contact info</span></h2>

                                <div class="content block-content">


                                    <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">

                                        <div class="contact-info">

                                            <span class="description">{{$getallcontact->address}}</span>
                                            <ul class="contact-info">

                                                <li><span><a href="{{$getallcontact->facebook}}"><i class="fa-brands fa-facebook"></i> {!! Str::limit($getallcontact->facebook,20)!!}</span> </a></li>
                                                <li><span><i class="fa fa-mobile-phone"></i>{{$getallcontact->phone}}</span></li>
                                                <li><i class="fa fa-envelope-o"></i>{{$getallcontact->email}}</li>



                                            </ul>
                                        </div>


                                    </div>


                                </div>
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-inner">
                <div>
                    <div id="block-gavias-kunco-socialscopyright" class="block block-block-content block-block-content76c2a6c0-9cc3-4d4e-b6ca-c9d1ea59ce70 no-title">
                        <div class="content block-content">

                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                <div class="social-border">

                                    <div class="socials">
                                        @if(!empty($getallmedia->facebook))
                                        <a href="{{$getallmedia->facebook}}"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="{{$getallmedia->instagram}}"><i class="fa-brands fa-instagram"></i></i></a>
                                        <a href="{{$getallmedia->twitter}}"><i class="fa-brands fa-twitter"></i></i></a>
                                        @endif
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div id="block-gavias-kunco-copyright" class="block block-block-content block-block-content61f17841-749f-436d-9799-1dfeefd7ad43 no-title">


                        <div class="content block-content">

                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">

                                <div class="text-center">
                                    © Copyright <a href="">Dhoreli Sewa Samaj</a> 2022. All Rights Reserved.<br>
                                    <span>Developed By <a href="https://dristicode.com/" style="color:#18ACD7;">Dristicode</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>