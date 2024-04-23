@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> About Us </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-subtitle-2  onovo-text-white">
                <span>Welcome to Nothingedge Technology, your trusted partner in software development solutions. </span>
            </div>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home </a>
                    </li>
                    <li class="current">
                        <span>About Us</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo About -->
    <section class="onovo-section gap-top-140 gap-bottom-140">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

                    <!-- Heading -->
                    <div class="onovo-heading gap-bottom-60">
                        <div class="onovo-subtitle-1">
                            <span> Welcome to About us </span>
                        </div>
                        <h2 class="onovo-title-3">
                            <span>Welcome to Nothingedge Technology, your trusted partner in software development solutions
                            </span>
                        </h2>
                        <div class="onovo-text">
                            <p>From the moment our company was founded, we have helped our clients find <strong>exceptional
                                    solutions for their businesses</strong>, creating memorable brands and digital products.
                                Our expertise grows with each year, and our accumulated experience. </p>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 offset-lg-1 hide-on-mobile">

                    <!-- Image -->
                    <img src="assets/images/onovo-about-logo.png" alt="" />

                </div>
            </div>

            <!-- Numbers items -->
            <div class="row gap-row gap-bottom-100">

                <!--number-item-->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="onovo-counter">
                        <div class="num onovo-text-white js-counter" data-end-value="10">0</div>
                        <div class="num-after onovo-text-white"> + </div>
                        <div class="label"> Team members </div>
                    </div>
                </div>

                <!--number-item-->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="onovo-counter">
                        <div class="num onovo-text-white js-counter" data-end-value="10">0</div>
                        <div class="num-after onovo-text-white"> + </div>
                        <div class="label"> Completed projects </div>
                    </div>
                </div>

                <!--number-item-->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="onovo-counter">
                        <div class="num onovo-text-white js-counter" data-end-value="12">0</div>
                        <div class="num-after onovo-text-white"> M </div>
                        <div class="label"> Lines of code </div>
                    </div>
                </div>

            </div>

            <!-- Video -->
            <div class="onovo-video" data-onovo-overlay data-onovo-scroll>
                <div class="image" style="background-image: url(assets/images/hero-digital-1.jpg);"></div>
                <iframe class="js-video-iframe"
                    data-src="https://www.youtube.com/embed/Gu6z6kIukgg?showinfo=0&rel=0&autoplay=1"></iframe>
                <div class="play onovo-circle-text">
                    <div class="arrow"></div>
                    <div class="label onovo-text-black onovo-circle-text-label"> Play Video - Play Video - Play Video -
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="row gap-top-100">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <h5 class="text-uppercase">Our Mission</h5>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                    We believe that technology has the power to revolutionize businesses, and we are committed to harnessing
                    this power to propel our clients to new heights of success. Through our innovative software solutions,
                    we enable businesses to streamline their operations, optimize their processes, and unlock their full
                    potential.
                </div>
            </div>

            <!-- Description -->
            <div class="row gap-top-60">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <h5 class="text-uppercase">Our Goal</h5>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                    At Nothingedge Technology, our goal is to become a trusted partner for businesses seeking reliable and
                    innovative software solutions. We are committed to delivering exceptional value to our clients through
                    our expertise, professionalism, and dedication to excellence. Our goal is to exceed our clients'
                    expectations and establish long-term relationships built on trust, integrity, and mutual success.
                </div>
            </div>

            <!-- Gallery -->
            <div class="row gap-top-100">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <a href="{{ asset('assets/images/posts1.jpg') }}" class="mfp-image">
                        <img src="{{ asset('assets/images/posts1.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 gap-top-60">
                    <a href="{{ asset('assets/images/posts2.jpg') }}" class="mfp-image">
                        <img src="{{ asset('assets/images/posts2.jpg') }}" alt="" />
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Onovo Services -->
    @include('partials.services')


    <!-- Onovo History -->
    <section class="onovo-section onovo-section-bg gap-top-140 gap-bottom-140">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

                    <!-- Heading -->
                    <div class="onovo-heading gap-bottom-80">
                        <div class="onovo-subtitle-1">
                            <span> Our History </span>
                        </div>
                        <h2 class="onovo-title-2">
                            <span> Brands Through Innovation in <br>Digital Transformation. </span>
                        </h2>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 align-right hide-on-mobile">

                    <!-- Button -->
                    <a class="onovo-btn onovo-hover-btn" href="{{ route('about-us') }}">
                        <i class="arrow">
                            <span></span>
                        </i>
                        <span> Learn More </span>
                    </a>

                </div>
            </div>

            <!-- History swiper -->
            <div class="onovo-history-slider">
                <div class="swiper-container js-history-slider">
                    <div class="swiper-wrapper">

                        <!--slide-->
                        <div class="swiper-slide" data-swiper-autoplay>
                            <div class="onovo-history-item">
                                <div class="image" style="background-image: url(assets/images/post1-1000x667.jpg);"
                                    data-onovo-overlay></div>
                                <div class="desc">
                                    <div class="subtitle onovo-text-white">
                                        <div data-splitting> 2023 </div>
                                    </div>
                                    <h5 class="title">
                                        <span data-splitting> Small Startups to Large Corporations </span>
                                    </h5>
                                    <div class="text">
                                        <div data-splitting>
                                            <p>Nothingedge Technology began its journey in 2023 with a vision to
                                                revolutionize the digital landscape through innovation and transformative
                                                solutions. From our humble beginnings, we embarked on a mission to empower
                                                brands and businesses by leveraging cutting-edge technologies and pioneering
                                                strategies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--slide-->
                        <div class="swiper-slide" data-swiper-autoplay>
                            <div class="onovo-history-item">
                                <div class="image" style="background-image: url(assets/images/post1-1000x667.jpg);"
                                    data-onovo-overlay></div>
                                <div class="desc">
                                    <div class="subtitle onovo-text-white">
                                        <div data-splitting> Present </div>
                                    </div>
                                    <h5 class="title">
                                        <span data-splitting> Continues to Push Boundaries &amp; Inspire </span>
                                    </h5>
                                    <div class="text">
                                        <div data-splitting>
                                            <p> Today, Nothingedge Technology is at the forefront of digital
                                                evolution, driving innovation and shaping the future with unparalleled
                                                creativity and expertise.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--navs-->
                    <div class="onovo-navs js-history-navs">
                        <div class="onovo-prev js-history-prev onovo-hover-2">
                            <i></i>
                        </div>
                        <div class="onovo-paginations-container">
                            <div class="onovo-paginations js-history-pagination"></div>
                        </div>
                        <div class="onovo-next js-history-next onovo-hover-2">
                            <i></i>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Button -->
            <div class="hide-on-desktop align-center">
                <a class="onovo-btn onovo-hover-btn" href="about-us.html">
                    <i class="arrow">
                        <span></span>
                    </i>
                    <span> Learn More </span>
                </a>
            </div>

        </div>
    </section>

    <!-- Onovo Team -->
    <section class="onovo-section gap-top-140 gap-bottom-140">
        <div class="container">

            <!-- Team items -->
            <div class="row gap-row align-center">

                <!-- Heading -->
                <div class="col-xs-12 col-sm-12 col-md-11 col-lg-5">
                    <div class="onovo-heading align-left">
                        <div class="onovo-subtitle-1">
                            <span> Meet Our Company Family </span>
                        </div>
                        <h4 class="title">
                            <span> Raw, Real & Rockstars of our techno-creative clubhouse. Trust us, they legit made
                                clubbing legal with NothingEdge Technology. </span>
                        </h4>
                    </div>
                </div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team-two">
                        <div class="onovo-team-two-item">
                            <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                <a href="team-detail.html">
                                    <img src="{{ asset('assets/images/tejas.jpg') }}" alt="Tejas Korat" />
                                </a>
                                <div class="onovo-social-2">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2"
                                                href="https://www.facebook.com/korat.tejas?mibextid=ZbWKwL"
                                                title="Facebook" target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2"
                                                href="https://www.linkedin.com/in/tejas-korat-113430187?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                                title="LinkedIn" target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Tejas Korat </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Chief Executive Officer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team-two">
                        <div class="onovo-team-two-item">
                            <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                <a href="team-detail.html">
                                    <img src="assets/images/team-1-1000x1357.jpg" alt="Jaydeep Dhrangiya" />
                                </a>
                                <div class="onovo-social-2">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                title="Facebook" target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                title="LinkedIn" target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Jaydeep Dhrangiya </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Chief Executive Officer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team-two">
                        <div class="onovo-team-two-item">
                            <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                <a href="team-detail.html">
                                    <img src="assets/images/team-1-1000x1357.jpg" alt="Steven Morrison" />
                                </a>
                                <div class="onovo-social-2">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                title="Facebook" target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                title="LinkedIn" target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Steven Morrison </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Web Designer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team-two">
                        <div class="onovo-team-two-item">
                            <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                <a href="team-detail.html">
                                    <img src="assets/images/team-4-1000x1357.jpg" alt="Alexander Bravo" />
                                </a>
                                <div class="onovo-social-2">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                title="Facebook" target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                title="LinkedIn" target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Alexander Bravo </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Full-Stack Developer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team-two">
                        <div class="onovo-team-two-item">
                            <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                <a href="team-detail.html">
                                    <img src="assets/images/team-7-1-1000x1357.jpg" alt="Charlotte Johnson" />
                                </a>
                                <div class="onovo-social-2">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                title="Facebook" target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                title="LinkedIn" target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Charlotte Johnson </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Seo &amp; Copywriter </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 align-center align-self-center">
                    <a class="onovo-btn-circle onovo-hover-2" href="team.html">
                        <i class="arrow">
                            <span></span>
                        </i>
                    </a>
                </div> --}}

            </div>

        </div>
    </section>

    <!-- Onovo Reviews -->
    <section class="onovo-section gap-bottom-140">
        <div class="container">

            <!-- Reviews -->
            <div class="onovo-reviews gap-140" style="background-color: #000;">
                <div
                    style="background-image: url(assets/images/testi-bg.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover; position: absolute; left: 0; top: 0; width: 100%; height: 100%; opacity: 0.24;">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <!-- Reviews swiper -->
                        <div class="onovo-reviews-carousel reviews--full onovo-text-white align-center">
                            <div class="swiper-container js-reviews-carousel" data-loop="false" data-autoplay="6000">
                                <div class="swiper-wrapper">

                                    <!--slide-->
                                    <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                        <div class="text">
                                            <div data-splitting>
                                                <p>“Working with Nothingedge Technology has been a game-changer for our
                                                    business. Their team's expertise and dedication to excellence have
                                                    helped us develop innovative software solutions that have significantly
                                                    improved our efficiency and productivity. I highly recommend Nothingedge
                                                    Technology to any business looking for top-notch software development
                                                    services.”
                                                </p>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <span data-splitting> Tejas Korat </span>
                                        </h5>
                                        <div class="subtitle">
                                            <span data-splitting> Customer Support </span>
                                        </div>
                                        <div class="onovo-stars stars--small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <!--slide-->
                                    <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                        <div class="text">
                                            <div data-splitting>
                                                <p>“ Working with NothingEdge Technology has been an absolute pleasure.
                                                    Their team's expertise and dedication to excellence are unmatched. They
                                                    delivered our project on time and exceeded our expectations in every
                                                    way. Highly recommended! ”
                                                </p>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <span data-splitting> Jaydeep Dhrangiya </span>
                                        </h5>
                                        <div class="subtitle">
                                            <span data-splitting> Code Quality </span>
                                        </div>
                                        <div class="onovo-stars stars--small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>

                                    <!--slide-->
                                    <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                        <div class="text">
                                            <div data-splitting>
                                                <p>“ I can't thank NothingEdge Technology enough for the incredible work
                                                    they did on our software project. From start to finish, they
                                                    demonstrated professionalism, creativity, and a deep understanding of
                                                    our needs. The end result speaks for itself – a high-quality solution
                                                    that has transformed our business. ”
                                                </p>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <span data-splitting> Tejas Korat </span>
                                        </h5>
                                        <div class="subtitle">
                                            <span data-splitting> Design Quality </span>
                                        </div>
                                        <div class="onovo-stars stars--small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <!--slide-->
                                    <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                        <div class="text">
                                            <div data-splitting>
                                                <p>“ Choosing NothingEdge Technology for our software development needs was
                                                    one of the best decisions we made. Their team's attention to detail and
                                                    commitment to delivering top-notch solutions is commendable. We're
                                                    thrilled with the results and look forward to future collaborations! ”
                                                </p>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <span data-splitting> Jaydeep Dhrangiya </span>
                                        </h5>
                                        <div class="subtitle">
                                            <span data-splitting> Design Quality </span>
                                        </div>
                                        <div class="onovo-stars stars--small">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--navs-->
                            <div class="js-reviews-carousel-navs">
                                <div class="onovo-prev js-reviews-carousel-prev onovo-hover-2 nav--white">
                                    <i></i>
                                </div>
                                <div class="onovo-next js-reviews-carousel-next onovo-hover-2 nav--white">
                                    <i></i>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Onovo Brands -->
    {{-- <section class="onovo-section">
        <div class="container">

            <!-- Heading -->
            <div class="onovo-heading gap-bottom-40">
                <div class="onovo-subtitle-1">
                    <span> Fantastic and Premium Clients </span>
                </div>
                <h2 class="onovo-title-2">
                    <span> We Have Had the Pleasure of <br>Working with Some Clients </span>
                </h2>
            </div>

            <!-- Brands items -->
            <div class="row gap-row">

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand1.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand2.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand3.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand4.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand5.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand6.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand7.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

                <!--brand item-->
                <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
                        <a target="_blank" href="http://google.com">
                            <span class="image">
                                <img decoding="async" src="assets/images/brand2.png" width="285" height="200"
                                    alt="Visit Website" />
                            </span>
                            <span class="label onovo-white-black"> Visit Website </span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
@endsection
