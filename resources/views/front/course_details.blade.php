@extends('layouts.master')
@section('title','KIITM | Course')
@section('body')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ url('/images/banners/' . $page->banner_image) }}); height: 400px; background-size: cover; background-position: center; position: relative;">
        <!-- Optional dark overlay -->
        <div style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; background: rgba(0,0,0,0.5);"></div>

        <!-- Content on top of image -->
        <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center;">
            <div class="page-header__inner text-white">
                <ul class="thm-breadcrumb list-unstyled d-flex align-items-center" style="gap: 10px; flex-wrap: wrap;">
                    <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    @if(Request::segment(1))
                        <li><span class="fa fa-angle-right"></span></li>
                        <li><a href="#" class="text-white">{{ ucfirst(Request::segment(1)) }}</a></li>
                    @endif
                    @if(Request::segment(2))
                        <li><span class="fa fa-angle-right"></span></li>
                        <li><a href="#" class="text-white">{{ ucfirst(Request::segment(2)) }}</a></li>
                    @endif
                    @if(Request::segment(3))
                        <li><span class="fa fa-angle-right"></span></li>
                        <li class="text-white">{{ strtoupper(Request::segment(3)) }}</li>
                    @endif
                </ul>
                <h2 class="mt-2 text-white">{{ $page->page_title }}</h2>
            </div>
        </div>
    </div>
</section>

<!--Page Header End-->

<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="services-details__sidebar">
                    <div class="services-details__services-list">
                        <div class="services-details__services-title">
                            <h3>All Services</h3>
                        </div>
                        <ul class="services-details__services list-unstyled">
                            <li class="active">
                                <a href="#">Online Coaching</a>
                            </li>
                            <li>
                                <a href="#">Classroom Coaching</a>
                            </li>
                            <li>
                                <a href="#">Test Series </a>
                            </li>
                            <li>
                                <a href="#">Books and Study Material</a>
                            </li>
                            <li>
                                <a href="#">Self Paced Courses</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="services-details__documents mb-4">
                        <div class="icon">
                            <span class="icon-pdf-file"></span>
                        </div>
                        <div class="content">
                            <h3><a href="{{$page->pdf}}" target="_blank">Important Info</a></h3>
                        </div>
                    </div>
                    <div class="banner-one">
                        <div class="row">
                           <center><h2 class="text-warning">Have a doubt?</h2>
                            <p>Speak to our {{Request::segment(3)}} expert</p></center> 
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="test"class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="test"class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="test"class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Year of appearing XII boards exam</label>
                                <select name="tey" class="form-control">
                                    @for($i=date('Y'); $i<date('Y')+3;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                    
                                  </select>
                            </div>
                            <div class="form-group mt-2">
                               <button type="submit" class="btn btn-warning">Submit</button>
                            </div>

                            
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="services-details__right">
                    <div class="services-details__img">
                        <img src="{{url('/front')}}/assets/images/services/services-details-img-6.jpg" alt="">
                    </div>
                    <h3 class="services-details__title-1">{{$page->page_title}}</h3>
                    <p class="services-details__text-1">{!! $page->short_desc!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Details End-->
@endsection