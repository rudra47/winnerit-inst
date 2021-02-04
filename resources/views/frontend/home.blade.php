@extends('frontend.layouts.main')

@section('title','Home')

@push('css_or_js')
	<style>
        .owl-carousel.dots-title.dots-title-pos-2 .owl-dots {
            left: 267px!important;
        }
        .rev_slider li.slide-overlay .slotholder:after{
            opacity: 0.8;
        }
        .rev_slider li.slide-overlay .slotholder:after {
            background: #007766 !important;
        }
        .social-icons li a{
            color: white!important;
        }
        /* .thumb-info-social-icons {
            padding: 5px;
            text-align: center;
        } */
        @media screen and (max-width: 600px) {
            .btn-reg{
                font-size:10px;
                background: white;
                font-size: 11px!important;
            }
        }
    </style>
@endpush

@section('content')
	
    <div class="body">
        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
                <div class="header-top header-top-default border-bottom-0 bg-color-primary">
                    <div class="container">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <span class="text-light opacity-7 pl-0" style="font-size: 18px;">Call Us Today! 800-123-4567</span>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            {{-- <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="header-nav-features order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-social-icons d-inline-flex">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="{{ route('home') }}">
                                        <img alt="Porto" width="210" height="70" data-sticky-width="195" data-sticky-height="58" src="{{asset
                                        ("frontend/img/logo.png")}}" width="20">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="">
                                                    <a class=" active" href="{{ route('home') }}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a class="active" href="#aboutUs">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a class="active" href="#ourCourse">
                                                        Our Course
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a class="active" href="#ourStaff">
                                                        Our Staff
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="active" href="#studentReview">
                                                        Student Reviews
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="active" href="#contactUs">
                                                        Contact Us
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">
            <div class="slider-with-overlay">
                <div class="rev_slider_wrapper" style="height: 670px;">
                    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                        <ul>
                            <li class="slide-overlay slide-overlay-primary" data-transition="fade" style="text-align: center!important;">
                                <img src="{{asset("frontend/img/banner-1.jpg")}}"  
                                    alt=""
                                    data-bgposition="center center" 
                                    data-bgfit="cover" 
                                    data-bgrepeat="no-repeat" 
                                    class="rev-slidebg">
                
                                <div class="tp-caption font-weight-extra-bold text-color-light"
                                    data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center"
                                    data-y="center" style="font-size: 60px; margin-top: -160px;">
                                    WELCOME TO <span style="color: #cc0000;">WINNER IT</span>
                                </div>
                                {{-- <div class="tp-caption text-color-light"
                                data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-x="center"
                                data-y="center" style="font-size: 20px; margin-top: 37px;">
                                    We provides always our best services for our clients <br> and Students 
                                    try to achieve our client's & Student <br> trust and satisfaction. <br>
                                    
                                </div> --}}
                                <div class="tp-caption text-color-light"
                                data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-x="center"
                                data-y="center" style="font-size: 20px; margin-top: 100px;">
                                    <a href="{{ route('registration') }}" class="btn btn-success btn-reg" target="_blank" style="background: #cc0000; font-size: 20px;">Registration Now</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                

            </div>
            {{-- <div class="" style="margin-top:-60px;">
                
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-12">
                            <div class="row justify-content-center pb-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                                <div class="col-sm-9 col-md-8 col-lg-4 mb-4 mb-lg-0">
                                    <div class="card border-0" style="background: #007766 !important; text-align: center;">
                                        <div class="card-body p-3">
                                            <i class="fa fa-user text-white font-64" style="font-size: 60px;"></i>
                                            <h4 class="font-weight-semibold text-5 p-2 line-height-3 ls-0 mb-3"><a href="#" class="text-white text-decoration-none">18 HOURS SERVICE</a></h4>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-md-8 col-lg-4 mb-4 mb-lg-0">
                                    <div class="card border-0" style="background: #007766 !important; text-align: center;">
                                        <div class="card-body p-3">
                                            <i class="fa fa-comments text-white font-64" style="font-size: 60px;"></i>
                                            <h4 class="font-weight-semibold text-5 p-2 line-height-3 ls-0 mb-3"><a href="#" class="text-white text-decoration-none">ONLINE HELP</a></h4>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-md-8 col-lg-4">
                                    <div class="card border-0" style="background: #007766 !important; text-align: center;">
                                        <div class="card-body p-3">
                                            <i class="fa fa-mobile text-white font-64" style="font-size: 60px;"></i>
                                            <h4 class="font-weight-semibold text-5 p-2 line-height-3 ls-0 mb-3"><a href="#" class="text-white text-decoration-none">LIFETIME SUPPORT</a></h4>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
            {{-- Why Choose us --}}
            {{-- <div class="container py-4 my-5" id="aboutUs">
				<div class="row justify-content-center text-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
					<div class="col text-center">
                        <h2 class="font-weight-normal mb-5">Why <strong class="font-weight-extra-bold">Choose Us</strong></h2>
                    </div>
				</div>
				<div class="row featured-boxes featured-boxes-style-4">
					<div class="col-md-6 col-lg-4">
						<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							<div class="box-content px-4">
                                <img src="{{ asset('frontend/img/qualified-teachers.png') }}" width="37" alt="">
								<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Qualified Teachers</h4>
								<p class="mb-0">A qualified teacher is commonly defined as a teacher who has at least the minimum academic qualifications required for.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
							<div class="box-content px-4">
                                <img src="{{ asset('frontend/img/premium-quality.png') }}" width="50" alt="">
								<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Premium Quality</h4>
								<p class="mb-0">Whatever your company is in need of, rest assured that The Top Quality Services will do it perfectly!, we are ready for work.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
							<div class="box-content px-4">
                                <img src="{{ asset('frontend/img/lifetime-support.png') }}" width="50" alt="">
                                
								<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Lifetime Support</h4>
								<p class="mb-0">Get FREE support for the life of your home. We will give you support through Facebook, Skype and over the call.</p>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
            {{-- Our Course --}}
            <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0" id="ourCourse">
                <div class="container container-xl py-3">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="font-weight-normal mb-5">Our <strong class="font-weight-extra-bold">Courses</strong></h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            
                            <div class="owl-carousel owl-theme nav-style-1 stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}}, 'margin': 3, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                                <div class="col-sm-8 col-md-12 mb-4 mb-md-0">
                                    <article>
                                        <div class="row">
                                            <div class="col" style="height: 190px;">
                                                <a href="blog-post.html" class="text-decoration-none">
                                                    <img src="{{asset("frontend/img/course/course-1.png")}}" width="20" class="img-fluid hover-effect-2 mb-3" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                {{-- <p class="text-color-primary text-2 mb-1">WEB DESIGN</p> --}}
                                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Web Designing</a></h4>
                                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                                                <a href="#" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fa fa-chevron-right text-3 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-8 col-md-12 mb-4 mb-md-0">
                                    <article>
                                        <div class="row">
                                            <div class="col" style="height: 190px;">
                                                <a href="blog-post.html" class="text-decoration-none">
                                                    <img src="{{asset("frontend/img/course/course-2.jpg")}}" class="img-fluid hover-effect-2 mb-3" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                {{-- <p class="text-color-primary text-2 mb-1">WEB DESIGN</p> --}}
                                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Data Entry</a></h4>
                                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                                                <a href="/" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fa fa-chevron-right text-3 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-8 col-md-12 mb-4 mb-md-0">
                                    <article>
                                        <div class="row">
                                            <div class="col" style="height: 190px;">
                                                <a href="blog-post.html" class="text-decoration-none">
                                                    <img src="{{asset("frontend/img/course/course-3.jpg")}}" class="img-fluid hover-effect-2 mb-3" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                {{-- <p class="text-color-primary text-2 mb-1">WEB DESIGN</p> --}}
                                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Digital Marketing</a></h4>
                                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                                                <a href="/" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fa fa-chevron-right text-3 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-8 col-md-12 mb-4 mb-md-0">
                                    <article>
                                        <div class="row">
                                            <div class="col" style="height: 190px;">
                                                <a href="blog-post.html" class="text-decoration-none">
                                                    <img src="{{asset("frontend/img/course/course-4.jpg")}}" class="img-fluid hover-effect-2 mb-3" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                {{-- <p class="text-color-primary text-2 mb-1">WEB DESIGN</p> --}}
                                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Facebook Marketing</a></h4>
                                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                                                <a href="/" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fa fa-chevron-right text-3 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-8 col-md-12 mb-4 mb-md-0">
                                    <article>
                                        <div class="row">
                                            <div class="col" style="height: 190px;">
                                                <a href="blog-post.html" class="text-decoration-none">
                                                    <img src="{{asset("frontend/img/course/course-5.jpg")}}" class="img-fluid hover-effect-2 mb-3" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                {{-- <p class="text-color-primary text-2 mb-1">WEB DESIGN</p> --}}
                                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Graphics Design</a></h4>
                                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                                                <a href="/" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fa fa-chevron-right text-3 ml-2"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="#" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Measurement --}}
            <section class="section section-no-border section-height-3 bg-color-primary my-0">
                <div class="container">
                    <div class="row counters counters-sm text-light">
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                            <div class="counter">
                                <strong data-to="1200" data-append="+">0</strong>
                                <label class="text-light opacity-6 font-weight-normal pt-1">HAPPY STUDENT</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInDownShorter">
                            <div class="counter">
                                <strong data-to="7" data-append="+">0</strong>
                                <label class="text-light opacity-6 font-weight-normal pt-1">OUR COURSE</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInUpShorter">
                            <div class="counter">
                                <strong data-to="11">0</strong>
                                <label class="text-light opacity-6 font-weight-normal pt-1">OUR STAFF</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter">
                            <div class="counter">
                                <strong data-to="970" data-append="+">0</strong>
                                <label class="text-light opacity-6 font-weight-normal pt-1">SUCCESS STUDENTS</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Our Staff --}}
            <div class="container" id="ourStaff">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="font-weight-normal mb-5 mt-4">Our <strong class="font-weight-extra-bold">Staff</strong></h2>
                    </div>
                </div>
                <div class="row team-list sort-destination" data-sort-id="team">
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="{{asset("frontend/img/team/staff-1.png")}}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">John Doe</span>
                                        <span class="thumb-info-type">CEO</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item design">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="{{asset("frontend/img/team/staff-1.png")}}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Melinda Doe</span>
                                        <span class="thumb-info-type">Design</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption" >
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="{{asset("frontend/img/team/staff-1.png")}}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Robert Doe</span>
                                        <span class="thumb-info-type">Design</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook-f"></i><span>Facebook</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="{{asset("frontend/img/team/staff-1.png")}}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Melissa Doe</span>
                                        <span class="thumb-info-type">Marketing</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    
                </div>

            </div>
            {{-- Testimonial --}}
            <div class="container py-4" id="studentReview">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="font-weight-normal mb-5">Student <strong class="font-weight-extra-bold">Reviews</strong></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col appear-animation offset-md-2 col-md-8" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}" style="height: 510px;">
                            <div>
                                <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                    <img src="{{asset("frontend/img/studentReview/review.JPG")}}" width="20" class="img-fluid border-radius-0" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                    <img src="{{asset("frontend/img/studentReview/review.JPG")}}" width="20" class="img-fluid border-radius-0" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                    <img src="{{asset("frontend/img/studentReview/review.JPG")}}" width="20" class="img-fluid border-radius-0" alt="">
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>
            {{-- Testimonial --}}
            <section id="contact" id="contactUs" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Google Maps - Settings on footer -->
                            <div id="googlemaps" class="google-ma h-100 mb-0" >
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.8401637301628!2d90.3821885291996!3d23.770168226374732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c750c3a84739%3A0xa5daac5319feff6f!2sBijoy%20Sarani%20Begum%20Rokeya%20Sarani%20Link%20Road%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1611765898863!5m2!1sen!2sbd" width="800" height="500" frameborder="0" style="border:0; margin-top: 25px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
            
                        </div>
                        <div class="col-md-6 p-5 my-5">
                            <div class="px-4">
                                <h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>
                                <p class="text-3 mb-4">Contact with us for any query.</p>
                                <form id="contactForm" class="contact-form form-style-2 pr-xl-5" action="{{ route('contactUs') }}" method="POST">
                                    @csrf
                                    <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                                        <strong>Success!</strong> Your message has been sent to us.
                                    </div>
            
                                    <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                        <strong>Error!</strong> There was an error sending your message.
                                        <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-xl-4">
                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
                                        </div>
                                        <div class="form-group col-xl-8">
                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <input type="submit" value="SUBMIT" class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>
            
                        </div>
                    </div>
                </div>
            </section>
            
        </div>

        <footer id="footer" class="border-0" style="">
            <div class="container py-4">
                <div class="row justify-content-md-center py-2 mt-3">
                    <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                            <h2 style="margin-bottom: 0px!important; font-weight: 400; line-height: 32px;"><span style="color: #cc0000;">WINNER IT</span> INSTITUTE</h2>
                            <h4>LEARN. EXPLORE. ENRICH</h4>
                            <span>
                                220 (3rd floor), Begum Rokeya Sarani,
                                West Kufrul Taltola, mirpur,dhaka 1207                             
                            </span> <br>
                            <span>mobile: 017465858++8++</span> <br>
                            <span>gmail:  winneritinst@gmail.com</span> <br>
                            <span>web: www.winneritinst.com</span>
                    </div>
                    <div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
                        <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
                        <ul class="list list-unstyled">
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> Home</a></li>
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> About Us</a></li>
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> Our Course</a></li>
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> Our Staff</a></li>
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> Student Review</a></li>
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
                        <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Panel</h5>
                        <ul class="list list-unstyled">
                            <li class="mb-1"><a href="{{ route('admin.login') }}" target="_blank" class="link-hover-style-1"> Admin</a></li>
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> Staff</a></li>
                            <li class="mb-1"><a href="#" class="link-hover-style-1"> Supporter</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-5 text-center text-lg-left">
                        <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
                        <div class="alert alert-success d-none" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>
                        <div class="alert alert-danger d-none" id="newsletterError"></div>
                        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mb-3 mb-md-0">
                            <div class="input-group input-group-rounded">
                                <input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                <span class="input-group-append">
                                    <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                                </span>
                            </div>
                        </form>
                        <p class="mt-3 mb-0 text-center text-lg-left">
                            <i class="fa fa-whatsapp text-color-primary"></i><span class="text-color-light opacity-7 pl-2">800-123-4567</span>
                            <i class="fa fa-envelope text-color-primary ml-4"></i><a href="mailto:admin@6amtech.com" class="opacity-7 pl-2 text-color-light">winneritinst@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
                <div class="container py-2">
                    <div class="row py-1">
                        <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                            <p>© Copyright 2021. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
        
@endsection

@push('script')
<script>
    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }
</script>
@endpush
