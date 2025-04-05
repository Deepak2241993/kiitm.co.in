@extends('layouts.master')
@section('title','RR Web Development || Privacy Policy')
@section('body')

<div class="page-banner-wrap text-center bg-cover" style="background-image: url('{{url('/')}}/rr_assets/img/page-banner.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Privacy Policy</h1>
        </div>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
            </ol>
        </nav>
    </div>
</div>
<iframe src="{{url('/images/Terms_&_Conditions_of_RR_Web.pdf')}}" title="Privacy Policy" width="1400" height="750"></iframe>
@endsection