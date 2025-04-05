@extends('layouts.master')
@section('title','About')
@section('body')
@php 
$clients=App\Models\Client::all();
@endphp
<!DOCTYPE html>
<html lang="en">
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{url('/front')}}/assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="page-header__bg-two-outer">
        <div class="page-header__bg-two"
            style="background-image: url({{url('/front')}}/assets/images/backgrounds/page-header-bg.jpg);">
        </div>
    </div><!-- /.page-header__bg-two-outer -->

    <div class="page-header__shape-1 float-bob-x">
        <img src="{{url('/front')}}/assets/images/shapes/page-header-shape-1.png" alt="">
    </div>
    <div class="page-header__shape-2 float-bob-x">
        <img src="{{url('/front')}}/assets/images/shapes/page-header-shape-2.png" alt="">
    </div>
    <div class="page-header__shape-3 float-bob-y">
        <img src="{{url('/front')}}/assets/images/shapes/page-header-shape-3.png" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span class="fa fa-angle-right"></span></li>
                <li>About</li>
            </ul>
            <h2>About</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Four Start-->
<section class="about-four">
    <div class="about-four__shape-3 float-bob-x">
        <img src="{{url('/front')}}/assets/images/shapes/about-four-shape-3.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-four__left">
                    <div class="about-four__shape-1 float-bob-x">
                        <img src="{{url('/front')}}/assets/images/shapes/about-four-shape-1.png" alt="">
                    </div>
                    <div class="about-four__shape-2 float-bob-y">
                        <img src="{{url('/front')}}/assets/images/shapes/about-four-shape-2.png" alt="">
                    </div>
                    <div class="about-four__img">
                        <img src="{{url('/front')}}/assets/images/resources/about-four-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-four__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">About Kiitm Educate</span>
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
                        <h2 class="section-title__title">Always Providing the
                            Best Services</h2>
                    </div>
                    <ul class="about-four__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-down-right"></span>
                            </div>
                            <div class="text">
                                <p>We’re Going Above
                                    <br> and Beyond</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-down-right"></span>
                            </div>
                            <div class="text">
                                <p>We’re Committed to
                                    <br> People First</p>
                            </div>
                        </li>
                    </ul>
                    <p class="about-four__text">Aliquam viverra arcu. Donec aliquet blandit enim. Suspendisse id
                        quam sed eros tincidunt luctus sit amet eu simply free text available in the lorem ipsum
                        market today use now nibh egestas tempus turpis, sit amet mattis magna varius non.</p>
                    <div class="about-four__btn-box">
                        <a href="about.html" class="about-four__btn thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Four End-->

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

<!--Why Choose Three Start-->
<section class="why-choose-three">
    <div class="why-choose-three__bg"
        style="background-image: url({{url('/front')}}/assets/images/backgrounds/why-choose-three-bg.jpg);"></div>
    <div class="container">
        <div class="why-choose-three__top">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="why-choose-three__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Agency benefits</span>
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
                            <h2 class="section-title__title">Why You Should Choose
                                Our Agency?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="why-choose-three__right">
                        <p class="why-choose-three__text">Lorem Ipsum. Proin gravida nibh vel velit auctor
                            aliquet. Aenean sollicitudin, lorem is simply free text quis bibendum. There are
                            many variations of passages of available.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-choose-three__bottom">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="why-choose-three__single">
                        <div class="why-choose-three__single-bg-1"
                            style="background-image: url({{url('/front')}}/assets/images/backgrounds/why-choose-three-single-bg-1.jpg);">
                        </div>
                        <div class="why-choose-three__icon">
                            <span class="icon-assurance"></span>
                        </div>
                        <div class="why-choose-three__title">
                            <h3><a href="services.html">Quality Services</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="why-choose-three__single">
                        <div class="why-choose-three__single-bg-1"
                            style="background-image: url({{url('/front')}}/assets/images/backgrounds/why-choose-three-single-bg-2.jpg);">
                        </div>
                        <div class="why-choose-three__icon">
                            <span class="icon-brainstorm"></span>
                        </div>
                        <div class="why-choose-three__title">
                            <h3><a href="team.html">Professional Team</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="why-choose-three__single">
                        <div class="why-choose-three__single-bg-1"
                            style="background-image: url({{url('/front')}}/assets/images/backgrounds/why-choose-three-single-bg-3.jpg);">
                        </div>
                        <div class="why-choose-three__icon">
                            <span class="icon-crm"></span>
                        </div>
                        <div class="why-choose-three__title">
                            <h3><a href="about.html">Trusted by Clients</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="why-choose-three__single">
                        <div class="why-choose-three__single-bg-1"
                            style="background-image: url({{url('/front')}}/assets/images/backgrounds/why-choose-three-single-bg-4.jpg);">
                        </div>
                        <div class="why-choose-three__icon">
                            <span class="icon-agreement"></span>
                        </div>
                        <div class="why-choose-three__title">
                            <h3><a href="about.html">Commited to Deliver</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Why Choose Three End-->

<!--Team Two Start-->
<section class="team-two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Our expert Teams</span>
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
            <h2 class="section-title__title">Meet the Team Behind
                <br> the Success</h2>
        </div>
        <div class="row">
            @if($team)
            @foreach($team as $key=>$value)
            <!--Team Two single start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{$key}}00ms">
                <div class="team-two__single">
                    <div class="team-two__img-box">
                        <div class="team-two__img">
                            <img src="{{url('/images/teams/'.$value->image)}}" alt="{{$value->name}}">
                        </div>
                        <div class="team-two__social">
                            <a href="{{$value->social_link_1}}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{$value->social_link_2}}"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-two__hover-content">
                            <h3 class="team-two__hover-name"><a href="#">{{$value->name}}</a></h3>
                            <p class="team-two__hover-sub-title">{{$value->designation}}</p>
                        </div>
                    </div>
                    <div class="team-two__content">
                        <h3 class="team-two__name"><a href="#">{{$value->name}}</a></h3>
                        <p class="team-two__sub-title">{{$value->designation}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            
            
        </div>
    </div>
</section>
<!--Team Two End-->

<!--Testimonial One Start-->
<section class="testimonial-one about-page__testimonial">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">our testimonials</span>
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
            <h2 class="section-title__title">What They’re Saying?</h2>
        </div>
        <div class="testimonial-one__bottom">
            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 30,
                "nav": false,
                "dots": true,
                "smartSpeed": 500,
                "autoplayTimeout": 10000,
                "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 1
                    },
                    "992": {
                        "items": 2
                    },
                    "1200": {
                        "items": 2
                    }
                }
            }'>
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__shape-1">
                            <img src="{{url('/front')}}/assets/images/shapes/testimonial-one-shape-1.png" alt="">
                        </div>
                        <div class="testimonial-one__shape-2"></div>
                        <div class="testimonial-one__shape-3">
                            <img src="{{url('/front')}}/assets/images/shapes/testimonial-one-shape-3.png" alt="">
                        </div>
                        <div class="testimonial-one__img">
                            <img src="{{url('/front')}}/assets/images/testimonial/testimonial-1-1.jpg" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h4 class="testimonial-one__client-name">Donald Hardson</h4>
                            <div class="testimonial-one__client-rate">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Leverage agile frameworks to provide a robust synopsis
                            for high level overviews. Iterative approaches to corporate strategy data foster to
                            collaborative thinking.</p>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__shape-1">
                            <img src="{{url('/front')}}/assets/images/shapes/testimonial-one-shape-1.png" alt="">
                        </div>
                        <div class="testimonial-one__shape-2"></div>
                        <div class="testimonial-one__shape-3">
                            <img src="{{url('/front')}}/assets/images/shapes/testimonial-one-shape-3.png" alt="">
                        </div>
                        <div class="testimonial-one__img">
                            <img src="{{url('/front')}}/assets/images/testimonial/testimonial-1-2.jpg" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                            <div class="testimonial-one__client-rate">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="testimonial-one__text">Leverage agile frameworks to provide a robust synopsis
                            for high level overviews. Iterative approaches to corporate strategy data foster to
                            collaborative thinking.</p>
                    </div>
                </div>
                <!--Testimonial One Single End-->
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->

<!--Counter Two Start-->
<section class="counter-two">
    <div class="container">
        <ul class="counter-two__inner list-unstyled">
            <li class="counter-two__single">
                <div class="counter-two__icon">
                    <i class="icon-checking"></i>
                </div>
                <div class="counter-two__content">
                    <h3 class="odometer" data-count="886">00</h3>
                    <p class="counter-two__text">work Completed</p>
                </div>
            </li>
            <li class="counter-two__single">
                <div class="counter-two__icon">
                    <i class="icon-recommend"></i>
                </div>
                <div class="counter-two__content">
                    <h3 class="odometer" data-count="601">00</h3>
                    <p class="counter-two__text">happy customers</p>
                </div>
            </li>
            <li class="counter-two__single">
                <div class="counter-two__icon">
                    <i class="icon-increment"></i>
                </div>
                <div class="counter-two__content">
                    <h3 class="odometer" data-count="960">00</h3>
                    <p class="counter-two__text">Repeat customers</p>
                </div>
            </li>
            <li class="counter-two__single">
                <div class="counter-two__icon">
                    <i class="icon-consulting"></i>
                </div>
                <div class="counter-two__content">
                    <h3 class="odometer" data-count="240">00</h3>
                    <p class="counter-two__text">smartest team</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--Counter two End-->
@endsection