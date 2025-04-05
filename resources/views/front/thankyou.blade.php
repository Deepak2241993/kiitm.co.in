@extends('layouts.master')
@section('title','Thank you')
@section('body')

<div class="page-banner-wrap text-center bg-cover" style="background-image: url('{{url('/')}}/rr_assets/img/page-banner.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Thank you</h1>
        </div>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Thank you</li>
            </ol>
        </nav>
    </div>
</div>

<section class="error-404-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="error-content">
                    <img class="mb-5" src="{{url('/images/rr_thankyou.jpg')}}" alt="rr-web-development-thankyou">
                    <h2>Thankyou For Connecting us..</h2>
                    @if(Session::get('message'))
                    <p class="text-success" style="font-weight: 700;">{{Session::get('message')}}</p>
                    @endif
                    <p>You're welcome! It was my pleasure to assist you. If you have any further questions or concerns, please don't hesitate to ask. Have a great day!</p>
                    <a href="{{url('/')}}" class="theme-btn mt-30"><i class="fal fa-long-arrow-left me-1"></i> Go Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection