@php 
$category=App\Models\Category::where('status',1)->get();

$setting=App\Models\Websitesetting::find(1);
@endphp
{{-- kiitm header start --}}
<header class="main-header-two">
    @php $url = Request::url(); @endphp
    @if($url != url('/'))
    <div class="main-header__top">
        <div class="main-header__top-inner">
            <div class="main-header__top-left">
                <ul class="list-unstyled main-header__contact-list">
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:{{$setting->web_email}}">{{$setting->web_email}}</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <p>{{$setting->address}}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="main-header__top-right">
                <ul class="list-unstyled main-header__top-menu">
                    <li><a href="{{url('/about')}}">About</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
                <div class="main-header__social-box">
                    <h4 class="main-header__social-title">Follow on:</h4>
                    <div class="main-header__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper" style="background-color: black;">
            <div class="main-menu-two__wrapper-inner">
                 <div class="main-logo">
                    <div class="main-menu-two__logo">
                        <div class="mobile_logo">
                        <a href="{{url('/')}}"><img src="{{url('/images/settings/'.$setting->web_logo)}}" alt="{{$setting->web_logo}}" style="height:100px;"></a>
                        </div>
                       
                    </div>
                    
                     <!--<div class="position">-->
                     <!--       <span>{!!$setting->web_name!!}-->
                     <!--       </span>-->
                     <!--   </div>-->
                        </div>
                    
                <div class="main-menu-two__left">
                   
                    
                    <div class="main-menu-two__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="{{url('/')}}">Home </a>
                               
                            </li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            @if(count($category)>0)
                           @foreach($category as $key=>$cat_value)
                           @if($key<4)
                            <li class="dropdown">
                                <a href="#">{{$cat_value->name}}</a>
                                @php
                                      $service=App\Models\Page::where('status',1)->where('cat_id',$cat_value->id)->get();
                                  @endphp
                                 @if(count($service)>0)
                                <ul class="sub-menu">
                                  
                                  @foreach ($service as $key=>$value )
                                    @if($key<=5)
                                    <li><a href="{{url('/programs/'.$cat_value->slug."/".$value->slug)}}">{{$value->page_title}}</a></li>
                                    @endif
                                    @endforeach
                                   
                                    <li><a href="{{url('/programs/'.$cat_value->slug)}}">View All</a></li>
                                    
                                </ul>
                                @endif
                            </li>
                            @endif
                            @endforeach
                            @endif
                          
                            <li>
                                <a href="{{url('/blog-list')}}">Blog</a>
                               
                            </li>

                            <li>
                                <a href="{{url('/contact')}}">Contact</a>
                            </li>
                            <li>
                                <a href="https://codeabhyas.com/"class="btn btn-primary">Student Login</a>
                            </li>
                        </ul>
                    </div>
                    
                     <div class="main-menu-two__right">
                    <div class="main-menu-two__call">
                        <div class="main-menu-two__call-icon">
                            <img src="{{url('/front')}}/assets/images/icon/main-menu-call-icon-1.png" alt="">
                        </div>
                        <div class="main-menu-two__call-content">
                            <p class="main-menu-two__call-sub-title">Call Helpline</p>
                            <h5 class="main-menu-two__call-number"><a href="tel:{{$setting->web_mobile}}">{{$setting->web_mobile}}</a></h5>
                        </div>
                    </div>
                    {{-- <div class="main-menu-two__search-cart-box">
                        <div class="main-menu-two__search-box">
                            <a href="#" class="main-menu-two__search search-toggler icon-magnifying-glass"></a>
                        </div>
                        <div class="main-menu-two__cart-box">
                            <a href="cart.html" class="main-menu-two__cart icon-shopping-cart"></a>
                        </div>
                    </div> --}}
                </div>
                
                </div>
               
            </div>
        </div>
    </nav>
</header>

{{-- kiitm header end --}}