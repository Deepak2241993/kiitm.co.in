@extends('layouts.master')
@section('title','Contact')
@php 
$category=App\Models\Page::where('status',1)->get();
@endphp
@section('body')
@push('header_css')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
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
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span class="fa fa-angle-right"></span></li>
                <li>Contact</li>
            </ul>
            <h2>Contact</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
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
                        <h2 class="section-title__title">Get into Touch</h2>
                    </div>
                    <p class="contact-page__text">Send us a message, we will get back to you via email within 24
                        hours, thanks for trusting us.</p>
                    <ul class="contact-page__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="content">
                                <p>Have any question?</p>
                                @php $web_mobile=explode(',',$setting->web_mobile); @endphp
                                @foreach($web_mobile as $value)
                                <h4><a href="tel:{{$value}}">{{$value}}</a></h4>
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-envelope"></span>
                            </div>
                            <div class="content">
                                <p>Have any question?</p>
                                @php $email=explode(',',$setting->web_email); @endphp
                                @foreach($email as $key=>$value)
                                <h4><a href="mailto:{{$value}}">{{$value}}</a></h4>
                                @endforeach
                                
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="content">
                                <p>Visit office</p>
                                <h4>{!!$setting->address!!}</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__form-box">
                        <form action="{{url('/contactform')}}"
                            class="contact-page__form contact-form-validated" method="post" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <div class="contact-page__showing-sort">
                                            <select class="selectpicker" aria-label="Default select example" name="course">
                                                <option selected>Sort by popular</option>
                                                @foreach($category as $value)
                                                <option value="{{$value->page_title}}">{{$value->page_title}}</option>
                                                @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Write Comment"></textarea>
                                    </div>
                                     <button type="submit" class="thm-btn contact-page__btn">Send a
                                            Message</button>
                                   
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
       
    </div>
         
   
</section>
<div class="row">
    <h2 class="text-center"> For Any Types of Payment </h2>
    <div class="col-md-4 offset-md-4 text-center">
        <img src="{{ url('/') }}/images/payment_qr.jpg" class="img-fluid" alt="Payment QR">
    </div>
</div>

<!--Contact Page End-->
  <!--Google Map Start-->
  <section class="google-map">
      <div class="row">
      <div class="col-md-12">
     {!!$setting->web_google_map!!}
    </div>
    </div>

</section>
<!--Google Map End-->
@endsection