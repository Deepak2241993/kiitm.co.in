@extends('layouts.master')
@section('title','kiitm || Home')
@section('body')
$clients

@php 
$pages=App\Models\Page::where('status',1)->get();
@endphp
{{-- Body Section --}}
<style>
/* Force 1600x600 aspect ratio */
.slider-img {
    width: 100%;
    aspect-ratio: 1600 / 600;   /* ⭐ KEY LINE */
    height: auto;
    object-fit: cover;          /* Crop overflow */
}

/* Optional: limit height on large screens */
#carouselExampleIndicators {
    max-height: 600px;
    overflow: hidden;
}
</style>
        <!-- Main Sllider Start -->
        <section class="main-slider-two">
            
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    @foreach($slider as $key=>$value)
      <button type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="{{ $key }}"
              class="{{ $key == 0 ? 'active' : '' }}">
      </button>
    @endforeach
  </div>

  <div class="carousel-inner">
    @foreach($slider as $key=>$value)
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
       <img 
  src="{{ url('images/sliders/'.$value->image) }}" 
  class="d-block w-100 slider-img"
  alt="slider image">
      </div>
    @endforeach
  </div>

</div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            
  
        </section>
        <!--Main Sllider Start -->

        <!--Sliding Text Start -->
        <section class="sliding-text">
            <div class="sliding-text__wrap">
                <ul class="sliding-text__list list-unstyled">
                    @if(count($services)>0)
                        @foreach($services as $key=>$value)

                        <li>{{$value->page_title}} <span>*</span></li>
                        @endforeach
                    @endif
                    
                   
                </ul>
            </div>
        </section>
        <!--Sliding Text Start -->

        <!--About Two Start -->
        <section class="about-two">
            <div class="about-two__shape-1">
                <img src="{{url('front')}}/assets/images/shapes/about-two-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="about-two__left">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="{{url('front')}}/assets/images/resources/about-two-img-1.jpg" alt="">
                                </div>
                                <div class="about-two__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="about-two__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__middle">
                            <div class="section-title text-center">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">get to know us</span>
                                    <div class="section-title__icon-box-1">
                                        <i class="fa fa-angle-left"></i>
                                        <i class="fa fa-angle-left"></i>
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="section-title__icon-box-2">
                                        <i class="fa fa-angle-right"></i>
                                        <i class="fa fa-angle-right"></i>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <h2 class="section-title__title">We Happy to Please
                                    Our Clients with the
                                    Great Customer
                                    Services</h2>
                            </div>
                            <div class="about-two__icon">
                                <img src="{{url('front')}}/assets/images/icon/about-two-icon.png" alt="">
                            </div>
                            <p class="about-two__text-1">We’re committed to delivering the best <br> digital marketing
                                for
                                businesses</p>
                            <p class="about-two__text-2">There are many variations of passages of Lorem Ipsum <br>
                                available,
                                but the majority have suffered alteration in some <br> form, simply free text by
                                injected
                                humour, or randomised.</p>
                            <div class="about-two__btn-box">
                                <a href="about.html" class="about-two__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="about-two__right">
                            <div class="about-two__img-box-2">
                                <div class="about-two__img-2">
                                    <img src="{{url('front')}}/assets/images/resources/about-two-img-2.jpg" alt="">
                                </div>
                                <div class="about-two__satisfied-box">
                                    <div class="about-two__satisfied-icon-and-count">
                                        <div class="about-two__satisfied-icon">
                                            <span class="icon-good"></span>
                                        </div>
                                        <div class="about-two__satisfied-count">
                                            <h3 class="odometer" data-count="37800">00</h3>
                                        </div>
                                    </div>
                                    <p class="about-two__satisfied-text">Satisfied Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End -->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__title">
                    <p>Our partners & suppoters</p>
                </div>
                <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 3,
                    "margin": 0,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":3
                        },
                        "992":{
                            "items": 5
                        }
                    }
                }'>
                    <!--Brand One Single-->
                    @if(count($clients)>0)
                    @foreach($clients as $key=>$value)
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{url('images/clients/'.$value->image)}}" alt="{{$value->image}}">
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- If we need navigation buttons -->
            </div>
        </section>
        <!--Brand One End-->

        <!--Services Two Start-->
        {{-- <section class="services-two">
            <div class="services-two__bg-box">
                <div class="services-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url({{url('front')}}/assets/images/backgrounds/servicess-two-bg.jpg);"></div>
            </div>
            <div class="services-two__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="servicess-two__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">Services we’re offering</span>
                                        <div class="section-title__icon-box-1">
                                            <i class="fa fa-angle-left"></i>
                                            <i class="fa fa-angle-left"></i>
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="section-title__icon-box-2">
                                            <i class="fa fa-angle-right"></i>
                                            <i class="fa fa-angle-right"></i>
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">We’re Commited to Deliver <br>
                                        the Top High Quality
                                        <br> Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="servicess-two__right">
                                <div class="servicess-two__btn-box">
                                    <a href="services.html" class="servicess-two__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-two__bottom">
                <div class="container">
                    <ul class="services-two__single-list list-unstyled">
                        <li>
                            <div class="services-two__single">
                                <div class="services-two__icon">
                                    <img src="{{url('front')}}/assets/images/icon/services-two-icon-1.png" alt="">
                                </div>
                                <h3 class="services-two__title"><a href="mobile-applications.html">Mobile
                                        <br> Applications</a></h3>
                                <p class="services-two__text">There are many variations of passages of Lorem Ipsum
                                    available.</p>
                                <div class="services-two__plus-box">
                                    <a href="mobile-applications.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="services-two__single">
                                <div class="services-two__icon">
                                    <img src="{{url('front')}}/assets/images/icon/services-two-icon-2.png" alt="">
                                </div>
                                <h3 class="services-two__title"><a href="digital-marketing.html">Digital
                                        <br> Marketing</a></h3>
                                <p class="services-two__text">There are many variations of passages of Lorem Ipsum
                                    available.</p>
                                <div class="services-two__plus-box">
                                    <a href="digital-marketing.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="services-two__single">
                                <div class="services-two__icon">
                                    <img src="{{url('front')}}/assets/images/icon/services-two-icon-3.png" alt="">
                                </div>
                                <h3 class="services-two__title"><a href="graphic-designing.html">Graphic
                                        <br> Designing</a></h3>
                                <p class="services-two__text">There are many variations of passages of Lorem Ipsum
                                    available.</p>
                                <div class="services-two__plus-box">
                                    <a href="graphic-designing.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="services-two__single">
                                <div class="services-two__icon">
                                    <img src="{{url('front')}}/assets/images/icon/services-two-icon-4.png" alt="">
                                </div>
                                <h3 class="services-two__title"><a href="web-development.html">Web
                                        <br> Development</a></h3>
                                <p class="services-two__text">There are many variations of passages of Lorem Ipsum
                                    available.</p>
                                <div class="services-two__plus-box">
                                    <a href="web-development.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="services-two__single">
                                <div class="services-two__icon">
                                    <img src="{{url('front')}}/assets/images/icon/services-two-icon-5.png" alt="">
                                </div>
                                <h3 class="services-two__title"><a href="social-marketing.html">Social
                                        <br> Marketing</a></h3>
                                <p class="services-two__text">There are many variations of passages of Lorem Ipsum
                                    available.</p>
                                <div class="services-two__plus-box">
                                    <a href="social-marketing.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <!--Services Two End-->

        <!--Project Two Start-->
        {{-- <section class="project-two">
            <div class="project-two__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="project-two__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline"> Recent work</span>
                                        <div class="section-title__icon-box-1">
                                            <i class="fa fa-angle-left"></i>
                                            <i class="fa fa-angle-left"></i>
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="section-title__icon-box-2">
                                            <i class="fa fa-angle-right"></i>
                                            <i class="fa fa-angle-right"></i>
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">Explore Our Recently
                                        <br> Completed Work</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="project-two__right">
                                <div class="project-two__text">
                                    <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed
                                        eros tincidunt luctus sit amet eu nibh egestas tempus turpis, sit amet mattis
                                        magna varius non.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-two__bottom">
                <div class="container">
                    <div class="project-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 3,
                        "margin": 60,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": true,
                        "nav":false,
                        "dots":false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 3
                            },
                            "1200":{
                                "items":3
                            }
                        }
                    }'>
                        <!--Project Two Single Start-->
                        <div class="item">
                            <div class="project-two__single">
                                <div class="project-two__img-box">
                                    <div class="project-two__img">
                                        <img src="{{url('front')}}/assets/images/project/project-2-1.jpg" alt="">
                                    </div>
                                    <div class="project-two__content">
                                        <p class="project-two__sub-title">Markeitng</p>
                                        <h4 class="project-two__title"><a href="project-details.html">Krown Agency</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Two Single End-->
                        <!--Project Two Single Start-->
                        <div class="item">
                            <div class="project-two__single mar-top">
                                <div class="project-two__img-box">
                                    <div class="project-two__img">
                                        <img src="{{url('front')}}/assets/images/project/project-2-2.jpg" alt="">
                                    </div>
                                    <div class="project-two__content">
                                        <p class="project-two__sub-title">Markeitng</p>
                                        <h4 class="project-two__title"><a href="project-details.html">Krown Agency</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Two Single End-->
                        <!--Project Two Single Start-->
                        <div class="item">
                            <div class="project-two__single">
                                <div class="project-two__img-box">
                                    <div class="project-two__img">
                                        <img src="{{url('front')}}/assets/images/project/project-2-3.jpg" alt="">
                                    </div>
                                    <div class="project-two__content">
                                        <p class="project-two__sub-title">Markeitng</p>
                                        <h4 class="project-two__title"><a href="project-details.html">Krown Agency</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Two Single End-->
                        <!--Project Two Single Start-->
                        <div class="item">
                            <div class="project-two__single mar-top">
                                <div class="project-two__img-box">
                                    <div class="project-two__img">
                                        <img src="{{url('front')}}/assets/images/project/project-2-4.jpg" alt="">
                                    </div>
                                    <div class="project-two__content">
                                        <p class="project-two__sub-title">Markeitng</p>
                                        <h4 class="project-two__title"><a href="project-details.html">Krown Agency</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Two Single End-->
                        <!--Project Two Single Start-->
                        <div class="item">
                            <div class="project-two__single">
                                <div class="project-two__img-box">
                                    <div class="project-two__img">
                                        <img src="{{url('front')}}/assets/images/project/project-2-5.jpg" alt="">
                                    </div>
                                    <div class="project-two__content">
                                        <p class="project-two__sub-title">Markeitng</p>
                                        <h4 class="project-two__title"><a href="project-details.html">Krown Agency</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Two Single End-->
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Project Two End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg" style="background-image: url({{url('front')}}/assets/images/backgrounds/counter-one-bg.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="list-unstyled counter-one__list">
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="counter-one__icon">
                                    <span class="icon-checking"></span>
                                </div>
                                <h3 class="odometer" data-count="886">00</h3>
                                <p class="counter-one__text">Projects Completed</p>
                            </li>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="counter-one__icon">
                                    <span class="icon-recommend"></span>
                                </div>
                                <h3 class="odometer" data-count="601">00</h3>
                                <p class="counter-one__text">Satisfied Customers</p>
                            </li>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="counter-one__icon">
                                    <span class="icon-increment"></span>
                                </div>
                                <h3 class="odometer" data-count="960">00</h3>
                                <p class="counter-one__text">Repeat Customers</p>
                            </li>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="counter-one__icon">
                                    <span class="icon-consulting"></span>
                                </div>
                                <h3 class="odometer" data-count="240">00</h3>
                                <p class="counter-one__text">Professional Team</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--FAQ Two Start-->
        <section class="faq-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="faq-two__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline"> frequently asked questions</span>
                                    <div class="section-title__icon-box-1">
                                        <i class="fa fa-angle-left"></i>
                                        <i class="fa fa-angle-left"></i>
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="section-title__icon-box-2">
                                        <i class="fa fa-angle-right"></i>
                                        <i class="fa fa-angle-right"></i>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <h2 class="section-title__title">Questions & Answers</h2>
                            </div>
                            <div class="faq-two__faq-box">
                                <div class="accrodion-grp" data-grp-name="faq-two-accrodion">
                                    @if(count($faq)>0)
                                    @foreach($faq as $key=>$value)
                                    <div class="accrodion @if($key==1){{'active'}}@endif">
                                        <div class="accrodion-title">
                                            <h4>{{$value->question}}</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>{{$value->answer}}</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="faq-two__right">
                            <div class="faq-two__img-box">
                                <div class="faq-two__img">
                                    <img src="{{url('front')}}/assets/images/resources/faq-two-img-1.jpg" alt="">
                                </div>
                                <div class="faq-two__trusted">
                                    <div class="faq-two__trusted-shape-1">
                                        <img src="{{url('front')}}/assets/images/shapes/faq-two-trusted-shape-1.png" alt="">
                                    </div>
                                    <div class="faq-two__trusted-icon">
                                        <span class="icon-recommend-1"></span>
                                    </div>
                                    <h3 class="faq-two__trusted-text">It’s Trusted
                                        <br> & Top Digital
                                        Websites
                                        Agency</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ Two End-->

        <!--Team Two Start-->
        <x-front.team />
        <!--Team Two End-->

        <!--Testimonial Two Start-->
       <x-front.testimonial />
        <!--Testimonial Two End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-one__left">
                            <div class="contact-one__shape-1 float-bob-x">
                                <img src="{{url('front')}}/assets/images/shapes/contact-one-shape-1.png" alt="">
                            </div>
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Contact us</span>
                                    <div class="section-title__icon-box-1">
                                        <i class="fa fa-angle-left"></i>
                                        <i class="fa fa-angle-left"></i>
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="section-title__icon-box-2">
                                        <i class="fa fa-angle-right"></i>
                                        <i class="fa fa-angle-right"></i>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get in Touch Now</h2>
                            </div>
                            <p class="contact-one__text">We're in Marketing Since 2012 and We provide the Best Powerful
                                & Quality Services.</p>
                            <div class="contact-one__points-and-signature-box">
                                <ul class="contact-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Refresing to get such a personal touch.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Duis aute irure dolor in voluptate.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Velit esse cillum dolore eu.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="contact-one__signature-box">
                                    <div class="contact-one__signature-img">
                                        <img src="{{url('front')}}/assets/images/resources/contact-one-signature.png" alt="">
                                    </div>
                                    <p>CEO & Co Founder</p>
                                </div>
                            </div>
                  
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-one__right">
                            <div class="contact-one__form-box">
                                <form action="{{url('/contactform')}}" method="post" class="contact-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-one__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="contact-one__input-box">
                                                <select class="selectpicker" aria-label="Default select example" name="course">
                                                    @foreach($pages as $value)
                                                <option value="{{$value->page_title}}">{{$value->page_title}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-one__input-box text-message-box">
                                                <textarea name="message" placeholder="Write Comment"></textarea>
                                            </div>
                                             <button type="submit" class="thm-btn contact-one__btn">Send a
                                                    Message</button>
                                            
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Blog Two Start-->
        <section class="blog-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">From the Blog</span>
                        <div class="section-title__icon-box-1">
                            <i class="fa fa-angle-left"></i>
                            <i class="fa fa-angle-left"></i>
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="section-title__icon-box-2">
                            <i class="fa fa-angle-right"></i>
                            <i class="fa fa-angle-right"></i>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                    <h2 class="section-title__title">Latest News &
                        <br> Articles from the Blog</h2>
                </div>
                <div class="owl-carousel thm-owl__carousel owl-with-shadow" data-owl-options='{
                    "items": 1,
                    "dots": false,
                    "nav": false,
                    "loop": true,
                    "autoplay": 5000,
                    "smartSpeed": 700,
                    "margin": 30,
                    "autoplayHoverPause": true,
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                    <!--Blog One Single Start-->
                      @if(count($blog)>0)
                    @foreach($blog as $key=>$value)
                    <div class="item wow fadeInUp" data-wow-delay="{{$key}}00ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="{{url('front')}}/assets/images/blog/{{$value->image}}" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-two__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-two__date-box">
                                    <span>{{date('d',strtotime($value->created_at))}}</span>
                                    <p>{{date('M Y',strtotime($value->created_at))}}</p>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <div class="blog-two__user">
                                    <div class="blog-two__user-img">
                                        <img src="{{url('front')}}/assets/images/blog/blog-two-user-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-two__user-text">
                                        <p>by
                                            <br> {{$value->written_by}}</p>
                                    </div>
                                </div>
                                <h3 class="blog-two__title"><a href="{{url('/blog/'.$value->slug)}}">{{$value->name}}</a></h3>
                                <p class="blog-two__text">{!!substr($value->description,0,150)!!}</p>
                                <div class="blog-two__comment-and-btn-box">
                                    <div class="blog-two__comment">
                                        <p><span class="fas fa-calendar"></span>{{date('d-M-Y',strtotime($value->created_at))}}</p>
                                    </div>
                                    <div class="blog-two__btn-box">
                                        <a href="{{url('/blog/'.$value->slug)}}" class="blog-two__btn">More<span
                                                class="fa fa-play"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      @endforeach
                    @else
                    {!!'<span class="text-danger">No Data Found</span>'!!}
                    @endif
                    <!--Blog One Single End-->
        
                    
                </div>
            </div>
        </section>
        <!--Blog Two End-->

        <!--Why Choose Two start-->
        <!--<section class="why-choose-two">-->
        <!--    <div class="container">-->
        <!--        <div class="why-choose-two__top">-->
        <!--            <div class="why-choose-two__top-bg"-->
        <!--                style="background-image: url({{url('front')}}/assets/images/backgrounds/why-choose-two-bg-top.png);"></div>-->
        <!--            <div class="why-choose-two__shape-2"-->
        <!--                style="background-image: url({{url('front')}}/assets/images/shapes/why-choose-two-shape-2.png);"></div>-->
        <!--            <div class="why-choose-two__title-box">-->
        <!--                <div class="why-choose-two__shape-1">-->
        <!--                    <img src="{{url('front')}}/assets/images/shapes/why-choose-two-shape-1.png" alt="">-->
        <!--                </div>-->
        <!--                <h3 class="why-choose-two__title">Hire Us</h3>-->
        <!--                <div class="why-choose-two__sub-title">-->
        <!--                    <p>Why You Should</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="why-choose-two__bottom">-->
        <!--            <div class="row">-->
                        <!--Why Choose Two Points Single Start-->
        <!--                <div class="col-xl-4 col-lg-6 col-md-6">-->
        <!--                    <div class="why-choose-two__points-single">-->
        <!--                        <div class="icon">-->
        <!--                            <span class="icon-draw-check-mark"></span>-->
        <!--                        </div>-->
        <!--                        <div class="text">-->
        <!--                            <p>Good Quality Marketing</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!--Why Choose Two Points Single End-->
                        <!--Why Choose Two Points Single Start-->
        <!--                <div class="col-xl-4 col-lg-6 col-md-6">-->
        <!--                    <div class="why-choose-two__points-single">-->
        <!--                        <div class="icon">-->
        <!--                            <span class="icon-draw-check-mark"></span>-->
        <!--                        </div>-->
        <!--                        <div class="text">-->
        <!--                            <p>No Coding Required</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!--Why Choose Two Points Single End-->
                        <!--Why Choose Two Points Single Start-->
        <!--                <div class="col-xl-4 col-lg-6 col-md-6">-->
        <!--                    <div class="why-choose-two__points-single">-->
        <!--                        <div class="icon">-->
        <!--                            <span class="icon-draw-check-mark"></span>-->
        <!--                        </div>-->
        <!--                        <div class="text">-->
        <!--                            <p>Search Engine Optimization</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!--Why Choose Two Points Single End-->
                        <!--Why Choose Two Points Single Start-->
        <!--                <div class="col-xl-4 col-lg-6 col-md-6">-->
        <!--                    <div class="why-choose-two__points-single">-->
        <!--                        <div class="icon">-->
        <!--                            <span class="icon-draw-check-mark"></span>-->
        <!--                        </div>-->
        <!--                        <div class="text">-->
        <!--                            <p>Best Design Interfaces</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!--Why Choose Two Points Single End-->
                        <!--Why Choose Two Points Single Start-->
        <!--                <div class="col-xl-4 col-lg-6 col-md-6">-->
        <!--                    <div class="why-choose-two__points-single">-->
        <!--                        <div class="icon">-->
        <!--                            <span class="icon-draw-check-mark"></span>-->
        <!--                        </div>-->
        <!--                        <div class="text">-->
        <!--                            <p>We Grow Businesses</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!--Why Choose Two Points Single End-->
                        <!--Why Choose Two Points Single Start-->
        <!--                <div class="col-xl-4 col-lg-6 col-md-6">-->
        <!--                    <div class="why-choose-two__points-single">-->
        <!--                        <div class="icon">-->
        <!--                            <span class="icon-draw-check-mark"></span>-->
        <!--                        </div>-->
        <!--                        <div class="text">-->
        <!--                            <p>Highest Success Rates</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        <!--Why Choose Two Points Single End-->
        <!--            </div>-->
        <!--            <div class="why-choose-two__btn-box">-->
        <!--                <a href="about.html" class="why-choose-two__btn thm-btn">Discover More</a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--Why Choose Two End-->
{{-- Body Section End --}}

@endsection