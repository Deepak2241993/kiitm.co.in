
@extends('layouts.master')
@section('title',$blog->meta_title)
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
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span class="fa fa-angle-right"></span></li>
                <li>Blog</li>
            </ul>
            <h2>Blog Details</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img-box">
                        <img src="{{url('/front')}}/assets/images/blog/blog-details-img-1.jpg" alt="">
                        <div class="blog-details__date-box">
                            <span>{{date('d',strtotime($blog->created_at))}}</span>
                            <p>{{date(' M Y',strtotime($blog->created_at))}}</p>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="blog-details__meta list-unstyled">
                            <li>
                                <i class="fas fa-user-circle"></i> By {{$blog->written_by}}
                            </li>
                            <li>
                                <i class="fas fa-calendar"></i> {{date('d-M-Y',strtotime($blog->created_at))}}
                            </li>
                        </ul>
                        <h3 class="blog-details__title">{{$blog->title}}</h3>
                        {!!$blog->description!!}
                    </div>
                    {{-- <div class="blog-details__bottom">
                        <p class="blog-details__tags">
                            <span>Tags</span>
                            <a href="#">Marketing</a>
                            <a href="#">Digital</a>
                        </p>
                        <div class="blog-details__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}
                    {{-- <div class="blog-details__pagenation">
                        <div class="blog-details__pagenation-left">
                            <div class="blog-details__pagenation-left-img">
                                <img src="{{url('/front')}}/assets/images/blog/blog-details-pagenation-img-1.jpg" alt="">
                            </div>
                            <div class="blog-details__pagenation-left-content">
                                <p class="blog-details__pagenation-left-date"> <i class="fas fa-clock"></i>20
                                    Mar, 2023</p>
                                <h4 class="blog-details__pagenation-left-title"><a href="#">Get deep knowledge
                                        <br> of your audience</a></h4>
                            </div>
                        </div>
                        <div class="blog-details__pagenation-right">
                            <div class="blog-details__pagenation-right-content">
                                <p class="blog-details__pagenation-right-date"> <i class="fas fa-clock"></i>20
                                    Mar, 2023</p>
                                <h4 class="blog-details__pagenation-right-title"><a href="#">How to ensure
                                        direct <br> designing hassle</a></h4>
                            </div>
                            <div class="blog-details__pagenation-right-img">
                                <img src="{{url('/front')}}/assets/images/blog/blog-details-pagenation-img-2.jpg" alt="">
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="comment-one">
                        <h3 class="comment-one__title">2 Comments</h3>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="{{url('/front')}}/assets/images/blog/comment-1-1.jpg" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Kevin Martin</h3>
                                <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                    Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                    sollicitudin at euismod.</p>
                                <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                            </div>
                        </div>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="{{url('/front')}}/assets/images/blog/comment-1-2.jpg" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Sarah Albert</h3>
                                <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                    Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                    sollicitudin at euismod.</p>
                                <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="comment-form">
                        <h3 class="comment-form__title">Leave a Comment</h3>
                        <form action="{{url('blog-comment')}}" class="comment-one__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name...." name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea placeholder="Type your comments...." name="comments"></textarea>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-md-3 col-sm-12">
                                            <input type="form-control"value="{{rand(0,10)}}" name="first_value"> 
                                        </div> +
                                        <div class="col-md-3 col-sm-12">
                                            <input type="form-control" value="{{rand(0,100)}}"name="second_value"> 
                                        </div> =
                                        <div class="col-md-3 col-sm-12">
                                            <input type="form-control" name="captch">
                                        </div>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Submit
                                            Comment</button>
                                    </div>
                                </div>
                            </div>
                           
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Keywrord...">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach($recent as $value)
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{url('/images/blogs/'.$value->image)}}" alt="" style="height:100px;width:100px">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-clock"></i>{{date('d M,Y'),strtotime($value->created_at)}}</span>
                                        <a href="{{url('/blog/'.$value->slug)}}">{{$value->title}}<span
                                        class="fas fa-caret-right"></span></a>
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                       
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            @foreach($category as $value)
                            <li><a href="{{url('/blog-list/'.$value->id)}}">{{$value->name}}<span
                                        class="fas fa-caret-right"></span></a>
                            </li>
                            @endforeach
                           
                        </ul>
                    </div>
                    
                   
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            @foreach($comments as $value)
                            @if(!empty($value))
                            {
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>{{\Illuminate\Support\Str::limit($value->comments,50,'...')}}</p>
                                </div>
                            </li>
                            }
                            @else
                            {{"No Comments"}}
                            @endif
                            @endforeach
                            
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
@endsection