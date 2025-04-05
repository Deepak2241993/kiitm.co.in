@php 
$setting = App\Models\Websitesetting::find(1);
$page=App\Models\Page::where('status',1)->where('fetured_service',1)->get();
$category=App\Models\Category::where('status',1)->get();
 @endphp
{{-- kiitm foote6r start --}}

<!-- Main Footer -->
<footer class="site-footer">
    <div class="site-footer__bg" style="background-image: url({{url('/front')}}/assets/images/backgrounds/site-footer-bg.png);">
    </div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="{{url('/')}}"><img src="{{url('/images/settings/'.$setting->web_logo)}}" alt="" style="heigh:40%; width:50%"></a>
                        </div>
                        <p class="footer-widget__about-text">Welcome to our best digital agency, because it is
                            pain, but occasionally circumstances.</p>
                        <div class="site-footer__social">
                               @php 
                                $social_name=explode(',',$setting->web_social_tink_title);
                                $social_link=explode(',',$setting->web_social_link);
                                @endphp
                            @foreach($social_name as $key=>$value)
                            <a href="{{$social_link[$key]}}" class="{{$value}}"></a>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                
                @if(count($category)>0)
                           @foreach($category as $key=>$cat_value)
                           @if($key<3)
                
                <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">{{$cat_value->name}}</h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled">
                            @php
                            $service=App\Models\Page::where('status',1)->where('cat_id',$cat_value->id)->get();
                            @endphp
                            @foreach ($service as $key=>$value )
                            @if($key<=5)
                            <li><a href="{{url('/programs/'.$cat_value->slug."/".$value->slug)}}">{{$value->page_title}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                 @endif
                @endforeach
                @endif
                
                
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__Contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Contact</h3>
                        </div>
                        <p class="footer-widget__Contact-text">{{$setting->address}}</p>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                <div class="text">
                                    <a href="mailto:{{$setting->web_email}}">{{$setting->web_email}}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone-square"></span>
                                </div>
                                <div class="text">
                                    <a href="tel:{{$setting->web_mobile}}">{{$setting->web_mobile}}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
               
            </div>
        </div>
        <div id="gb-widget-2335" style="bottom: 50px;left: 16px;opacity: 1;transition: opacity 0.5s ease 0s;box-sizing: border-box;direction: ltr;/* text-align: right; */position: fixed !important;z-index: 16000160 !important;"><div class="q8c6tt-2 eiGYSu"><a href="https://wa.me/918860454496?text=Hello I went through the website of Krishna institute of Information Technology and management ( KIITM).
May I know the service you are offering..." target="_blank" color="#4dc247" id="getbutton-whatsapp" class="q8c6tt-0 jWcIXO"><img src="{{url('/images/rr_whatsapp.png')}}" style="height: 15%;width: 15%;}"></a></div></div>

    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© Copyright KIITM {{date('Y')}} Develop by <a href="https://rrwebdevelopment.in">RR Web Development</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{{--  kiitm footer end --}}
