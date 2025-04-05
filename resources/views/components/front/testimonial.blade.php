@php 
$testimonial = App\Models\Testimonial::where('status',1)->orderBy('id','DESC')->get();
 @endphp

 <!--Testimonial Two Start-->
 <section class="testimonial-two">
    <div class="testimonial-two__bg-1"
        style="background-image: url({{url('/front')}}/assets/images/backgrounds/testimonial-two-bg-1.jpg);"></div>
    <div class="testimonial-two__bg-2"
        style="background-image: url({{url('/front')}}/assets/images/backgrounds/testimonial-two-bg-2.png);"></div>
    <div class="container">
        <div class="testimonial-two__slider">

            <div class="testimonial-two__thumb-outer-box">
                <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">
                    
                    @if(count($testimonial)>0)
                    @foreach($testimonial as $key=>$value)
                    @if($key<3)
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img src="{{url('/images/testimonials/'.$value->image)}}" alt="{{$value->image}}">
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="testimonial-two__main-content">
                <div class="testimonial-two__carousel owl-carousel owl-theme">
                    @if(count($testimonial)>0)
                    @foreach($testimonial as $key=>$value)
                    
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="{{url('/images/testimonials/'.$value->image)}}" alt="{{$value->image}}">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">{{$value->description}}</p>
                                <h3 class="testimonial-two__client-name">{{$value->name}} <span>.{{$value->designation}}</span> </h3>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    @endif
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="{{url('/front')}}/assets/images/testimonial/testimonial-two-content-img-1-2.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Christine Eve <span>. Our
                                        Customer</span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="{{url('/front')}}/assets/images/testimonial/testimonial-two-content-img-1-3.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Kevin Copper <span>. Our
                                        Customer</span> </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--Testimonial Two End-->

