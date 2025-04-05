@php 
$teams=App\Models\Team::where('status',1)->get();
@endphp
 <!--Team One Start-->
 <section class="team-page">
    <div class="container">
        <div class="row">
            <!--Team One Single Start-->
            @if(count($teams)>0)
            @foreach($teams as $key=>$value)
            <div class="col-xl-4 col-lg-4">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{url('/images/teams/'.$value->image)}}" alt="{{$value->image}}">
                        </div>
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__name"><a href="#">{{$value->name}}</a></h3>
                        <p class="team-one__sub-title">{{$value->designation}}</p>
                        <div class="team-one__social">
                            <a href="{{$value->social_link_1}}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{$value->social_link_2}}"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-one__hover-content">
                            <div class="team-one__shape-1">
                                <img src="{{url('/front')}}/assets/images/shapes/team-one-shape-1.png" alt="">
                            </div>
                            <h3 class="team-one__hover-name"><a href="#">{{$value->name}}</a>
                            </h3>
                            <p class="team-one__hover-sub-title">{{$value->designation}}</p>
                            <p class="team-one__hover-text">{{$value->description}}</p>
                            <div class="team-one__hover-social">
                                <a href="{{$value->social_link_1}}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{$value->social_link_2}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <!--Team One Single End-->
        </div>
    </div>
</section>
<!--Team One End-->