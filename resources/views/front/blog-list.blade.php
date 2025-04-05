@extends('layouts.master')
@section('title','Kiitm || Blogs')
@section('body')
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
                <li>Blog</li>
            </ul>
            <h2>Blog Posts</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            <!--Blog One Single Start-->
            @if(count($blog)>0)
            @foreach($blog as $value)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog-one__single">
                    <div class="blog-one__img-box">
                        <div class="blog-one__img">
                            <img src="{{url('/front')}}/assets/images/blog/{{$value->image}}" alt="">
                            <a href="{{url('/blog/'.$value->slug)}}">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="blog-one__date-box">
                            <span>{{date('d',strtotime($value->created_at))}}</span>
                            <p>{{date('M Y',strtotime($value->created_at))}}</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <div class="blog-one__user">
                            
                            <div class="blog-one__user-text">
                               <span class="text-warning">By {{$value->written_by}}</span>
                            </div>
                        </div>
                        <h3 class="blog-one__title"><a href="{{url('/blog/'.$value->slug)}}">{{$value->name}}</a></h3>
                        <p class="blog-one__text">{!!substr($value->description,0,150)!!}</p>
                        <div class="blog-one__comment-and-btn-box">
                            <div class="blog-one__comment">
                                <p><span class="fas fa-calendar"></span>{{date('d-M-Y',strtotime($value->created_at))}}</p>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{url('/blog/'.$value->slug)}}" class="blog-one__btn">More<span
                                        class="fa fa-play"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog One Single End-->
                @endforeach
                    @else
                    {!!'<span class="text-danger">No Data Found</span>'!!}
                    @endif
            <!--Blog One Single End-->
        </div>
    </div>
</section>



@endsection