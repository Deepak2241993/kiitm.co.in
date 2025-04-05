@php 
$client=App\Models\Client::all(); 
$blog=App\Models\Blog::where('status',1)->take(5)->orderBy('id','DESC')->get(); 
$setting=App\Models\Websitesetting::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">



<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title','KIITM || Home')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
	 <meta name="keywords" content="@if(!empty($meta['keywords'])){{$meta['keywords']}} @else {{'kiitm.co.in'}} @endif">
	<meta name="description" content="@if(!empty($meta['description'])) {{$meta['description']}} @else {{'kiitm.co.in'}} @endif"> 
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>


    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">




    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/pitoon-icons/style.css">
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="{{url('/front')}}/assets/css/pitoon.css" />
    <link rel="stylesheet" href="{{url('/front')}}/assets/css/pitoon-responsive.css" />
</head>

<body class="custom-cursor">

    <!-- <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div> -->
    <!-- /.preloader -->


    <div class="page-wrapper">
		<x-front.header/>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
		@yield('body')
        

        <!--Site Footer Start-->
		<x-front.footer/>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


	<x-front.mobileheader/>    
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>

    <!-- /.search-popup -->

    <!--<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>-->
    
    <script src="{{url('/front')}}/assets/vendors/jquery/jquery-3.6.4.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/odometer/odometer.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/swiper/swiper.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/wow/wow.js"></script>
    <script src="{{url('/front')}}/assets/vendors/isotope/isotope.js"></script>
    <script src="{{url('/front')}}/assets/vendors/countdown/countdown.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/vegas/vegas.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="{{url('/front')}}/assets/vendors/timepicker/timePicker.js"></script>
    <script src="{{url('/front')}}/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="{{url('/front')}}/assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="{{url('/front')}}/assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64a84808cc26a871b02700f3/1h4olip93';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


    <!-- template js -->
    <script src="{{url('/front')}}/assets/js/pitoon.js"></script>
</body>
</html>

