@extends('layouts.master')
@section('title','RR Web Development ||')
@section('body')
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
                <li>Our Course</li>
            </ul>
            <h2>Course</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Projects Page Start-->
<section class="projects-page">
    <div class="container">
        <h2 style="margin-bottom: 20px"><b>{{ucFirst(str_replace("-"," ",request()->segment(2)));}}</b></h2>
        <div class="row">
            <!--Project One Single Start-->
            @if($page)
            @foreach($page as $key=>$value)
            
            <div class="col-xs-6 col-sm-3 col-md-3"style="margin-bottom: 10px; ">
                <div class="card" >
                    <div class="card-body">
                      <a href="{{url('/programs/'.$category->slug."/".$value->slug)}}"><h5 class="card-title">{{$value->page_title}}</h5></a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            {{"<center><h1>No Date Found</h1></center>"}}
            @endif
           
        </div>
    </div>
</section>
<!--Projects Page End-->
@endsection