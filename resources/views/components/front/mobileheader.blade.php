@php 
$category=App\Models\Category::where('status',1)->get();
$service=App\Models\Page::where('status',1)->get();
$setting=App\Models\Websitesetting::find(1);
@endphp
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{url('/')}}" aria-label="logo image"><img src="{{url('/images/settings/'.$setting->web_logo)}}" width="135"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{$setting->web_email}}">{{$setting->web_email}}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{$setting->web_mobile}}">{{$setting->web_mobile}}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                @php 
                    $social_name=explode(',',$setting->web_social_tink_title);
                    $social_link=explode(',',$setting->web_social_link);
                @endphp
                @foreach($social_name as $key=>$value)
                
                <a href="{{$social_link[$key]}}" class="{{$value}}"></a>

                @endforeach
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>