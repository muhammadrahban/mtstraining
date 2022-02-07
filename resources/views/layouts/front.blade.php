<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="./favicon.png">

    <title>@yield('title') - MTS Training</title>
    <meta name="title" content="MTS Training">
    <meta name="description" content="MTS Training is a leading training provider based in Manchester. MTS is supporting and facilitating skills">
    <meta name="keywords" content="door supervisor,security,training,texi driver,first aid training">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mtstraining.co.uk/">
    <meta property="og:title" content="MTS Training">
    <meta property="og:description" content="MTS Training is a leading training provider based in Manchester. MTS is supporting and facilitating skills">
    <meta property="og:image" content="https://mtstraining.co.uk/mts-cover.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mtstraining.co.uk/">
    <meta property="twitter:title" content="MTS Training">
    <meta property="twitter:description" content="MTS Training is a leading training provider based in Manchester. MTS is supporting and facilitating skills">
    <meta property="twitter:image" content="https://mtstraining.co.uk/mts-cover.jpg">
    <meta name="theme-color" content="#002060">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Animation CSS -->
    <link href="{{asset('front/css/animate.css')}}" rel="stylesheet">
    <!-- Chosen CSS -->
    <link href="{{asset('front/css/chosen.min.css')}}" rel="stylesheet">
    <!-- Chosen CSS -->
    <link href="{{asset('front/css/login-register.css')}}" rel="stylesheet">
    <!-- Swiper Slider CSS -->
    <link href="{{asset('front/css/flexslider.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('front/css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Swiper Slider CSS -->
    <link href="{{asset('front/css/swiper.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <!-- Color CSS -->
    <link href="{{asset('front/css/color-2.css')}}" rel="stylesheet">
    <!-- Typography StyleSheet CSS -->
    <link href="{{asset('front/css/typography-02.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">

    <link href="{{asset('front/css/custom.css')}}" rel="stylesheet">

    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>

<body>
	<!--gt Wrapper Start-->
	<div class="gt_wrapper">
		<!--Header Wrap Start-->
		<header class="gt_hdr2_wrap main-menu-bg" style="z-index:10000;">
			<div class="default_width top-bar">
				<div class="container">
					<a href="tel:01618706633"><i class="fa fa-phone"></i> <b>0161 870 6633</b></a>
					<i>|</i>
					<a href="tel:02036171854"><i class="fa fa-phone"></i> <b>020 3617 1854</b></a>
					<i>|</i>
					<a href="mailto:info@mtstraining.co.uk"><i class="fa fa-envelope"></i> <b>info@mtstraining.co.uk</b></a>
					<a class="rating-link" target="_blank" href="https://www.google.com/search?hl=en-AU&gl=au&q=MTS+TRAINING,+817A+Stockport+Road,+Manchester&ludocid=12915897975219630715&#lrd=0x487bb3c4c7407999:0xb33e7cc6f027327b,1,,,">
						<b>Top 5</b>
						<i class="fa fa-star star-color"></i>
						<i class="fa fa-star star-color"></i>
						<i class="fa fa-star star-color"></i>
						<i class="fa fa-star star-color"></i>
						<i class="fa fa-star star-color"></i>
						<b>Google Reviews</b>
					</a>
				</div>
			</div>
			<div class="gt_menu_bg default_width nav-bar">
				<div class="container">
					<!--Logo Wrap Start-->
					<div class="gt_logo gt_logo_padding new-logo">
						<a href="/">
							<strong style="font-weight:bolder; color:inherit;">MTS</strong> Training
						</a>
						<button class="gt_mobile_menu main-menu-bg4">
							<span class="icon-bar main-menu-bg5"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--Logo Wrap End-->
					<!--Navigation Wrap Start-->
					<nav class="gt_navigation2 main-menu-bg3">
						<ul>
							<li class="amit"><a href="/">Home</a></li>
							<li class="amit"><a href="/about-us">About Us</a></li>
							<li class="amit">
								<a href="javascript:avoid(0);">Courses</a>
								<ul>
									<li class="amit"><a href="{{route('coursedetail', 1)}}">Course 1</a></li>
									<li class="amit"><a href="#">Course 2</a></li>
									<li class="amit"><a href="#">Course 3</a></li>
								</ul>
							</li>
							<li class="amit"><a href="/blog">Blog</a> </li>
							<li class="amit"><a href="/contact-us">Contact Us</a></li>
							<li class="amit">
								<a href="javascript:avoid(0);">Apply Online</a>
								<ul>
									<li class="amit"><a href="/admission-form">Admission Form</a></li>
									<li class="amit"><a href="/assessment-form">Assessment Form</a></li>
									<li class="amit"><a href="/upload-document">Upload Document</a></li>
								</ul>
							</li>
						</ul>
					</nav>

					<!--Navigation Wrap End-->
				</div>
			</div>
		</header>
		<!--Header Wrap End-->

		<!--Main Content Wrap Start-->
        @section('content')

        @show

		<!--Main Content Wrap End-->
		<!--Footer Wrap Start-->
		<div class="bg-white">
			<div class="container">
				<div class="row py-5 align-items-center justify-content-center">
					<div class="text-center col-lg-2 col-md-3 col-xs-6">
						<img class="img-fluid" src="Logos.png">
					</div>
					<div class="text-center col-lg-2 col-md-3 col-xs-6">
						<img class="img-fluid" src="Logos.png">
					</div>
					<div class="text-center col-lg-2 col-md-3 col-xs-6">
						<img class="img-fluid" src="Logos.png">
					</div>
				</div>
			</div>
		</div>

		<div style="position:relative; background:#df1441; z-index: 900; box-shadow: 1px 1px 10px rgba(0,0,0,0.5);">
			<div class="container py-5">
				<div class="row justify-content-center">
					<div class="col-12 text-center py-4">
						<a href="http://mtstraining.co.uk" style="text-decoration:none;"><h2 style="font-weight:normal; color:white;"><strong style="font-weight:bolder; color:inherit;">MTS</strong> Training</h2></a>
						<h6 class="col-lg-6 offset-lg-3 text-white">MTS Training is a leading training provider based in Manchester. MTS is supporting and facilitating skills </h6>
					</div>
					<div class="col-lg-5 py-5">
						<a href="tel:01618706633">
							<div class="footer-flex-info">
								<h6 class="text-white">0161 870 6633</h6>
								<i class="fa fa-phone"></i>
							</div>
						</a>
						<a href="mailto:info@mtstraining.co.uk">
							<div class="footer-flex-info">
								<h6 class="text-white">info@mtstraining.co.uk</h6>
								<i class="fa fa-envelope"></i>
							</div>
						</a>
						<div class="footer-flex-info">
							<h6 class="text-white">817A Stockport Road, Manchester, M19 3BS</h6>
							<i class="fa fa-map-marker"></i>
						</div>
					</div>
					<div class="col-lg-5 text-center text-lg-left py-5">
						<div class="gt_newslettr_hdg default_width">
							<i class="icon-tool"></i>
							<h6>Our</h6>
							<h3>Newsletter</h3>
						</div>
						<div class="gt_newsletter_form default_width">
							<form>
								<input type="text" class="p_sub" placeholder="Enter Your E-Mail Address">
								<button><i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
					<div class="col-12 text-center my-5">
						<a href="#"><i class="social-icon fa fa-facebook"></i></a>
						<a href="#"><i class="social-icon fa fa-twitter"></i></a>
						<a href="#"><i class="social-icon fa fa-instagram"></i></a>
						<a href="#"><i class="social-icon fa fa-youtube"></i></a>
					</div>
					<div class="col-12 text-center my-5 d-block d-md-flex flex-wrap justify-content-center">
						<h5 style="flex:none; width:100%" class="text-white mb-3"><b>Our Locations</b></h5>
						<a href="#location" class="location-item m-3 p-3">
							<h6 class="text-white"><b>Location 1</b></h6>
						</a>
						<a href="#location" class="location-item m-3 p-3">
							<h6 class="text-white"><b>Location 2</b></h6>
						</a>
						<a href="#location" class="location-item m-3 p-3">
							<h6 class="text-white"><b>Location 3</b></h6>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div style="position:relative; background:#002060; z-index: 900; box-shadow: 1px 1px 10px rgba(0,0,0,0.5);">
			<div class="container py-5">
				<div class="row py-4">
					<div class="col-lg-3 col-md-6">
						<div class="gt_foo2_link">
							<h5>Quick links</h5>
							<ul>
								<li><a href="#custome-link">Llink 1</a></li>
								<li><a href="#custome-link">Llink 2</a></li>
								<li><a href="#custome-link">Llink 3</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="gt_foo2_link">
							<h5>Courses</h5>
							<ul>
								<li><a href="#custome-link">Llink 1</a></li>
								<li><a href="#custome-link">Llink 2</a></li>
								<li><a href="#custome-link">Llink 3</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="gt_foo2_link">
							<h5>Apply For Job</h5>
							<ul>
								<li><a href="#custome-link">Llink 1</a></li>
								<li><a href="#custome-link">Llink 2</a></li>
								<li><a href="#custome-link">Llink 3</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="gt_foo2_link">
							<h5>Resources</h5>
							<ul>
								<li><a href="#custome-link">Llink 1</a></li>
								<li><a href="#custome-link">Llink 2</a></li>
								<li><a href="#custome-link">Llink 3</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<!--Copyright Wrap End-->
			<div class="bg-dark gt_copyright_wrap copyright2_bg">
				<div class="container">
					<div class="gt_copyright_des">
						<p>Copyright &copy; <a href="#">MTS Training </a> 2022. All rights reserved.</p>

					</div>
				</div>
			</div>
			<!--Copyright Wrap Start-->
		</footer>
		<!--Footer Wrap End-->
		<!--Back to Top Wrap Start-->
		<div class="back-to-top">
			<a href="#home"><i class="fa fa-angle-up"></i></a>
		</div>
		<!--Back to Top Wrap Start-->
	</div>
	<!--gt Wrapper End-->
	<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
	</script>
	<!--Jquery Library-->
	<script src="{{asset('front/js/jquery.js')}}"></script>
	<!--Bootstrap core JavaScript
	<script src="{{asset('front/js/bootstrap.min.js"')}}></script>-->
	<script src="/mts/assets/vendor/bootstrap.min.js"></script>

	<!--Flex Slider JavaScript-->
	<script src="{{asset('front/js/jquery.flexslider-min.js')}}"></script>
	<!--Swiper Slider JavaScript-->
	<script src="{{asset('front/js/swiper.jquery.min.js')}}"></script>
	<!--Owl Carousel JavaScript-->
	<script src="{{asset('front/js/owl.carousel.js')}}"></script>
	<!--Chosen JavaScript-->
	<script src="{{asset('front/js/chosen.jquery.min.js')}}"></script>
	<!--Chosen JavaScript-->
	<script src="{{asset('front/js/waypoints-min.js')}}"></script>
	<!--Pretty Photo Javascript-->
	<script src="{{asset('front/js/jquery.prettyPhoto.js')}}"></script>
	<!--Canvas JavaScript-->
	<script src="{{asset('front/js/html2canvas.js')}}"></script>
	<!--Custom JavaScript-->
	<script src="{{asset('front/js/custom.js')}}"></script>
	<script>
	$(window).on('scroll',function(){
		if($(window).scrollTop()>$('.top-bar').height()){
			$('.nav-bar').css({'position':'fixed'});
			$('.gt_wrapper').css({'padding-top':$('.nav-bar').height()+'px'});
		}else{
			$('.nav-bar').css({'position':'sticky'});
			$('.gt_wrapper').css({'padding-top':'0px'});
		}
	});
	</script>
</body>
</html>
