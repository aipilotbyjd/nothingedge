@extends('layouts.app')

@section('content')
    <!-- Onovo Hero -->
    <section class="onovo-section onovo-hero">
        <div class="image">
            <video autoplay muted loop playsinline id="heroVideo">
                <source src="assets/images/stvideo.mp4" type="video/mp4">
            </video>
            <div class="ovrl" style="opacity: 0.25;"></div>
        </div>
        <div class="container">
            <h1 class="title onovo-text-white">
                <span data-splitting data-onovo-scroll> We Make <br>Everything <span class="onovo-sep word">
                        <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                    </span>
                </span>
            </h1>
            <div class="text">
                <div class="subtitle onovo-text-white">
                    <div data-splitting data-onovo-scroll> Creative studio at the <br> intersection of art,
                        design <br> and technology. </div>
                </div>
            </div>
            <a href="#" class="onovo-play-btn">
                <span class="play-circles"></span>
                <span class="play-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
        </div>
    </section>

    <!-- Onovo Services -->
    <section class="onovo-section gap-top-140 gap-bottom-140">
        <div class="container-xl">

            <!-- Services items -->
            <div class="row onovo-services-grid-fw">

                <!--service item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                    <div class="onovo-service-grid-item onovo-hover-1">
                        <div class="image">
                            <a href="services.html">
                                <img decoding="async" src="assets/images/serv-icon1.png" alt="Creation" />
                            </a>
                        </div>
                        <h5 class="onovo-title-3">
                            <a href="services.html">
                                <span> Creation </span>
                            </a>
                        </h5>
                        <div class="onovo-text">
                            <div>
                                <p>Developing websites is about so much more than marketing. It’s also about
                                    aesthetics.</p>
                            </div>
                        </div>
                        <div class="onovo-bubble">
                            <div class="bubble-1"></div>
                            <div class="bubble-2"></div>
                            <div class="bubble-3"></div>
                        </div>
                    </div>
                </div>

                <!--service item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                    <div class="onovo-service-grid-item onovo-hover-1 active active--default">
                        <div class="image">
                            <a href="projects.html">
                                <img decoding="async" src="assets/images/serv-icon2.png" alt="Websites" />
                            </a>
                        </div>
                        <h5 class="onovo-title-3">
                            <a href="projects.html">
                                <span> Websites </span>
                            </a>
                        </h5>
                        <div class="onovo-text">
                            <div>
                                <p>Developing websites is about so much more than marketing. It’s also about
                                    aesthetics.</p>
                            </div>
                        </div>
                        <div class="onovo-bubble">
                            <div class="bubble-1"></div>
                            <div class="bubble-2"></div>
                            <div class="bubble-3"></div>
                        </div>
                    </div>
                </div>

                <!--service item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                    <div class="onovo-service-grid-item onovo-hover-1">
                        <div class="image">
                            <a href="about-us.html">
                                <img decoding="async" src="assets/images/serv-icon3.png" alt="Studio" />
                            </a>
                        </div>
                        <h5 class="onovo-title-3">
                            <a href="about-us.html">
                                <span> Studio </span>
                            </a>
                        </h5>
                        <div class="onovo-text">
                            <div>
                                <p>Developing websites is about so much more than marketing. It’s also about
                                    aesthetics.</p>
                            </div>
                        </div>
                        <div class="onovo-bubble">
                            <div class="bubble-1"></div>
                            <div class="bubble-2"></div>
                            <div class="bubble-3"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Onovo About -->
    <section class="onovo-section gap-bottom-140">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">

                            <!-- Heading -->
                            <div class="onovo-heading gap-bottom-40">
                                <div class="onovo-subtitle-1">
                                    <span> Welcome to Onovo </span>
                                </div>
                                <h2 class="onovo-title-2">
                                    <span> A Design Agency <br>Delivering Success by <br>Winning Hearts </span>
                                </h2>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12 hide-on-desktop gap-bottom-60">

                            <!-- Number -->
                            <div class="onovo-number onovo-circle-text mrg-left">
                                <div class="num onovo-text-white">
                                    <span> 14 </span>
                                </div>
                                <div class="label onovo-text-black onovo-circle-text-label"> Years of Digital
                                    Solutions Experience </div>
                            </div>

                        </div>
                    </div>

                    <!-- Description -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h5 class="text-uppercase">Our Mission</h5>
                            <p>From the moment our company was founded we have helped our clients find
                                <strong>exceptional solutions for their businesses</strong> memorable brands and
                                digital products. Our expertise grows with each year, and our accumulated
                                experience.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h5 class="text-uppercase">Our Goal</h5>
                            <p>Our goal is to deliver amazing experiences that make people talk, and build
                                strategic value for brands, tech, entertainment.</p>
                            <a class="onovo-btn onovo-hover-btn" href="about-us.html">
                                <i class="arrow"><span></span></i>
                                <span> More About Us </span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 hide-on-mobile">

                    <!-- Number -->
                    <div class="onovo-number onovo-circle-text mrg-right">
                        <div class="num onovo-text-white">
                            <span> 14 </span>
                        </div>
                        <div class="label onovo-text-black onovo-circle-text-label"> Years of Digital Solutions
                            Experience </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Onovo Ticker -->
    <section class="onovo-section gap-bottom-140">

        <!-- Ticker swiper -->
        <div class="onovo-ticker-slider gap-top-90 gap-bottom-100">
            <div class="swiper-container js-ticker-slider" data-autoplay="12000">
                <div class="swiper-wrapper">

                    <!--slide-->
                    <div class="swiper-slide">
                        <h5 class="title onovo-text-white">
                            <a href="service-detail.html">
                                <span> - Brand Strategy </span>
                            </a>
                        </h5>
                    </div>

                    <!--slide-->
                    <div class="swiper-slide">
                        <h5 class="title onovo-text-white">
                            <a href="service-detail.html">
                                <span> - Creative Direction </span>
                            </a>
                        </h5>
                    </div>

                    <!--slide-->
                    <div class="swiper-slide">
                        <h5 class="title onovo-text-white">
                            <a href="service-detail.html">
                                <span> - Native and Web Apps </span>
                            </a>
                        </h5>
                    </div>

                    <!--slide-->
                    <div class="swiper-slide">
                        <h5 class="title onovo-text-white">
                            <a href="service-detail.html">
                                <span> - Machine Learning / AI </span>
                            </a>
                        </h5>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Onovo Showcase -->
    <section class="onovo-section gap-bottom-140" style="border-bottom: 1px solid #555;">
        <div class="container">

            <!-- Heading -->
            <div class="onovo-heading gap-bottom-40">
                <div class="onovo-subtitle-1">
                    <span> Featured Projects </span>
                </div>
                <h2 class="onovo-title-2">
                    <span> Studio Showcase </span>
                </h2>
            </div>

            <!-- Showcase -->
            <div class="onovo-showcase gap-bottom-40">
                <div class="img-circle onovo-circle-move"></div>

                <!-- Showcase items -->
                <div class="onovo-showcase-items">

                    <!--showcase item-->
                    <div class="onovo-showcase-item">
                        <div class="category">
                            <a href="project-detail.html">
                                <span data-splitting data-onovo-scroll>
                                    <span>Branding</span>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="project-detail.html">
                                <span class="onovo-lnk" data-splitting data-onovo-scroll> Museums Art Concept
                                </span>
                            </a>
                        </h3>
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <span class="img"
                                style="background-image: url(assets/images/project-n01-3-1200x900.jpg);"></span>
                        </div>
                    </div>

                    <!--showcase item-->
                    <div class="onovo-showcase-item">
                        <div class="category">
                            <a href="project-detail.html">
                                <span data-splitting data-onovo-scroll>
                                    <span>Marketing</span>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="project-detail.html">
                                <span class="onovo-lnk" data-splitting data-onovo-scroll> Market Economy
                                    Graphics </span>
                            </a>
                        </h3>
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <span class="img"
                                style="background-image: url(assets/images/project-2-2-1200x982.jpg);"></span>
                        </div>
                    </div>

                    <!--showcase item-->
                    <div class="onovo-showcase-item">
                        <div class="category">
                            <a href="project-detail.html">
                                <span data-splitting data-onovo-scroll>
                                    <span>Design</span>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="project-detail.html">
                                <span class="onovo-lnk" data-splitting data-onovo-scroll> Headphones 3D
                                    Rendering </span>
                            </a>
                        </h3>
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <span class="img"
                                style="background-image: url(assets/images/project-2-1200x988.jpg);"></span>
                        </div>
                    </div>

                    <!--showcase item-->
                    <div class="onovo-showcase-item">
                        <div class="category">
                            <a href="project-detail.html">
                                <span data-splitting data-onovo-scroll>
                                    <span>Design</span>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="project-detail.html">
                                <span class="onovo-lnk" data-splitting data-onovo-scroll> Business Card Logo
                                </span>
                            </a>
                        </h3>
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <span class="img" style="background-image: url(assets/images/project-4.jpg);"></span>
                        </div>
                    </div>

                    <!--showcase item-->
                    <div class="onovo-showcase-item">
                        <div class="category">
                            <a href="project-detail.html">
                                <span data-splitting data-onovo-scroll>
                                    <span>Interactive</span>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="project-detail.html">
                                <span class="onovo-lnk" data-splitting data-onovo-scroll> Flower Store Mobile
                                    App </span>
                            </a>
                        </h3>
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <span class="img"
                                style="background-image: url(assets/images/project-3-1200x750.jpg);"></span>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Button -->
            <a class="onovo-btn onovo-hover-btn" href="projects.html">
                <i class="arrow">
                    <span></span>
                </i>
                <span> All Projects </span>
            </a>

        </div>
    </section>

    <!-- Onovo Team -->
    <section class="onovo-section gap-top-140 gap-bottom-140">
        <div class="container">

            <!-- Heading -->
            <div class="onovo-heading align-center gap-bottom-40">
                <div class="onovo-subtitle-1">
                    <span> Experts Team Members </span>
                </div>
                <h2 class="onovo-title-2">
                    <span> We do awesome Services <br>for our clients. </span>
                </h2>
            </div>

            <!-- Team items -->
            <div class="row gap-row">

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team" data-onovo-overlay data-onovo-scroll>
                        <div class="onovo-team-item onovo-hover-3">
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Thomas Jackki </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> UI &amp; UX Designer </span>
                                </div>
                                <div class="onovo-social-1">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com" title="Fa"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com" title="In"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image">
                                <a href="team-detail.html">
                                    <img decoding="async" src="assets/images/team-2-t-min.png" width="350"
                                        height="530" alt="Thomas Jackki" />
                                </a>
                            </div>
                            <div class="num onovo-text-white">
                                <span> T </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team" data-onovo-overlay data-onovo-scroll>
                        <div class="onovo-team-item onovo-hover-3">
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Melanie Robinson </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Seo &amp; Marketing </span>
                                </div>
                                <div class="onovo-social-1">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com" title="Fa"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com" title="In"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image">
                                <a href="team-detail.html">
                                    <img decoding="async" src="assets/images/team-6-t-min.png" width="350"
                                        height="530" alt="Melanie Robinson" />
                                </a>
                            </div>
                            <div class="num onovo-text-white">
                                <span> M </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team" data-onovo-overlay data-onovo-scroll>
                        <div class="onovo-team-item onovo-hover-3">
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Steven Morrison </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Full-stack Developer </span>
                                </div>
                                <div class="onovo-social-1">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com" title="Fa"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com" title="In"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image">
                                <a href="team-detail.html">
                                    <img decoding="async" src="assets/images/team-1-t-min.png" width="350"
                                        height="530" alt="Steven Morrison" />
                                </a>
                            </div>
                            <div class="num onovo-text-white">
                                <span> S </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--team item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="onovo-team" data-onovo-overlay data-onovo-scroll>
                        <div class="onovo-team-item onovo-hover-3">
                            <div class="desc">
                                <h5 class="title">
                                    <a href="team-detail.html" class="onovo-lnk">
                                        <span data-splitting data-onovo-scroll> Charlotte Johnson </span>
                                    </a>
                                </h5>
                                <div class="onovo-subtitle-1">
                                    <span data-splitting data-onovo-scroll> Seo &amp; Copywriter </span>
                                </div>
                                <div class="onovo-social-1">
                                    <ul>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="facebook.com" title="Fa"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-social-link onovo-hover-2" href="linkedin.com" title="In"
                                                target="_blank">
                                                <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image">
                                <a href="team-detail.html">
                                    <img decoding="async" src="assets/images/team-7-t-min.png" width="350"
                                        height="530" alt="Charlotte Johnson" />
                                </a>
                            </div>
                            <div class="num onovo-text-white">
                                <span> E </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Onovo Reviews -->
    <section class="onovo-section gap-bottom-140">
        <div class="container">

            <!-- Reviews -->
            <div class="onovo-reviews">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                        <!-- Heading -->
                        <div class="onovo-reviews-titles">
                            <h2 class="onovo-title-2">
                                <span data-splitting data-onovo-scroll> Testimonials </span>
                            </h2>
                            <div class="onovo-reviews-summary">
                                <span class="label onovo-text-black">
                                    <span data-splitting data-onovo-scroll> 4.0 </span>
                                </span>
                                <span class="onovo-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                                <span class="label">
                                    <span data-splitting data-onovo-scroll> Rating from all Client's </span>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                        <!-- Reviews swiper -->
                        <div class="onovo-reviews-carousel">
                            <div class="swiper-container js-reviews-carousel" data-loop="false">
                                <div class="swiper-wrapper">

                                    <!--slide-->
                                    <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                        <div class="text">
                                            <div data-splitting>
                                                <p>“ Their high level of customer service <br />complemented
                                                    their technical expertise. <br />They were responsive,
                                                    supportive, and <br />communicative. Their dedication to
                                                    <br />the project was impressive. ”
                                                </p>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <span data-splitting> Thomas Smith </span>
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
                                                <p>“ Their high level of customer service <br />complemented
                                                    their technical expertise. <br />They were responsive,
                                                    supportive, and <br />communicative. Their dedication to
                                                    <br />the project was impressive. ”
                                                </p>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <span data-splitting> Mike Cameron </span>
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
                                                <p>“ Their high level of customer service <br />complemented
                                                    their technical expertise. <br />They were responsive,
                                                    supportive, and <br />communicative. Their dedication to
                                                    <br />the project was impressive. ”
                                                </p>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <span data-splitting> Jessica Brown </span>
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
                                <div class="onovo-prev js-reviews-carousel-prev onovo-hover-2">
                                    <i></i>
                                </div>
                                <div class="onovo-next js-reviews-carousel-next onovo-hover-2">
                                    <i></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Onovo Video -->
    <section class="onovo-section">
        <div class="container">

            <!--video-->
            <div class="onovo-video" data-onovo-overlay data-onovo-scroll>
                <div class="image" style="background-image: url(assets/images/posts1.jpg);"></div>
                <iframe class="js-video-iframe"
                    data-src="https://www.youtube.com/embed/Gu6z6kIukgg?showinfo=0&rel=0&autoplay=1"></iframe>
                <div class="play onovo-circle-text">
                    <div class="arrow"></div>
                    <div class="label onovo-text-black onovo-circle-text-label"> Play Video - Play Video - Play
                        Video - </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Onovo Numbers -->
    <section class="onovo-section gap-top-140 gap-bottom-140">
        <div class="container">

            <!-- Numbers items -->
            <div class="row">

                <!--number item-->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center">
                    <div class="onovo-counter">
                        <div class="num onovo-text-white js-counter" data-end-value="23">0</div>
                        <div class="label"> Team members </div>
                    </div>
                </div>

                <!--number item-->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center">
                    <div class="onovo-counter">
                        <div class="num onovo-text-white js-counter" data-end-value="99">0</div>
                        <div class="num-after onovo-text-white"> + </div>
                        <div class="label"> Completed projects </div>
                    </div>
                </div>

                <!--number item-->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center">
                    <div class="onovo-counter">
                        <div class="num onovo-text-white js-counter" data-end-value="12">0</div>
                        <div class="num-after onovo-text-white"> M </div>
                        <div class="label"> Lines of code </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Onovo CTA -->
    <section class="onovo-section gap-top-140 gap-bottom-140"
        style="background-image: url(assets/images/cta-bg-1.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <!-- Heading -->
                    <div class="onovo-heading gap-bottom-40 onovo-text-white">
                        <div class="onovo-subtitle-1">
                            <span> Get in Touch </span>
                        </div>
                        <h2 class="onovo-title-2">
                            <span> Send Us Your <br>
                                <strong>Bright Ideas</strong>
                            </span>
                        </h2>
                    </div>

                    <!-- Text -->
                    <div class="onovo-cta-text">
                        <a href="mailto:infoname@domain.com" target="_blank">infoname@domain.com</a>
                        <p>36 East 8th Street, New York, <br />NY 10003, United States. </p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <!-- Social -->
                    <div class="onovo-cta-social">
                        <div class="image" style="background-image: url(assets/images/cta-circle2.png);">
                            <div class="cta-img-circle img-circle--1"></div>
                            <div class="cta-img-circle img-circle--2"></div>
                            <div class="cta-img-circle img-circle--3"></div>
                        </div>
                        <div class="desc">
                            <ul>
                                <li>
                                    <a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn"
                                        href="http://facebook.com" target="_blank">
                                        <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                        <span> Facebook </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn"
                                        href="http://instagram.com" target="_blank">
                                        <i aria-hidden="true" class="fab fa-instagram"></i>
                                        <span> Instagram </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn"
                                        href="http://twitter.com" target="_blank">
                                        <i aria-hidden="true" class="fab fa-twitter"></i>
                                        <span> Twitter </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn"
                                        href="http://linkedin.com" target="_blank">
                                        <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                        <span> LinkedIn </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Onovo Blog -->
    <section class="onovo-section gap-top-140 gap-bottom-140">
        <div class="container">

            <!-- Heading -->
            <div class="onovo-heading align-center gap-bottom-40">
                <div class="onovo-subtitle-1">
                    <span> News &amp; Blog </span>
                </div>
                <h2 class="onovo-title-2">
                    <span> Insights, Thoughts, Industry <br>Trends, Marketing Tips </span>
                </h2>
            </div>

            <!-- Blog items -->
            <div class="row">

                <!--blog item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="onovo-blog-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="blog-detail.html">
                                <img decoding="async" src="assets/images/posts3-1000x667.jpg" width="400"
                                    height="240" alt="Usability Secrets to Create Interfaces" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 25, 2023</div>Branding
                            </div>
                            <h5 class="title">
                                <a href="blog-detail.html">
                                    <span>Usability Secrets to Create Interfaces</span>
                                </a>
                            </h5>
                            <div class="onovo-text">
                                <div>
                                    <p>Ambleton: Behind the Branding of High Calgary&#8217;s Community Most
                                        innovative and successful builders and real estate&#8230; <br />
                                        <a href="blog-detail.html" class="onovo-btn onovo-hover-btn">
                                            <span>Read more</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--blog item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="onovo-blog-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="blog-detail.html">
                                <img decoding="async" src="assets/images/post1-1000x667.jpg" width="400"
                                    height="240" alt="The Main Thing For The Web Designer" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 18, 2023</div>Design
                            </div>
                            <h5 class="title">
                                <a href="blog-detail.html">
                                    <span>The Main Thing For The Web Designer</span>
                                </a>
                            </h5>
                            <div class="onovo-text">
                                <div>
                                    <p>Ambleton: Behind the Branding of High Calgary&#8217;s Community Most
                                        innovative and successful builders and real estate&#8230; <br />
                                        <a href="blog-detail.html" class="onovo-btn onovo-hover-btn">
                                            <span>Read more</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--blog item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="onovo-blog-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="blog-detail.html">
                                <img decoding="async" src="assets/images/post4-1000x667.jpg" width="400"
                                    height="240" alt="How to Do Your First Business Project" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 10, 2023</div>News
                            </div>
                            <h5 class="title">
                                <a href="blog-detail.html">
                                    <span>How to Do Your First Business Project</span>
                                </a>
                            </h5>
                            <div class="onovo-text">
                                <div>
                                    <p>Ambleton: Behind the Branding of High Calgary&#8217;s Community Most
                                        innovative and successful builders and real estate&#8230; <br />
                                        <a href="blog-detail.html" class="onovo-btn onovo-hover-btn">
                                            <span>Read more</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Button -->
            <div class="align-center">
                <a class="onovo-btn onovo-hover-btn" href="blog.html">
                    <i class="arrow">
                        <span></span>
                    </i>
                    <span> View All Posts </span>
                </a>
            </div>

        </div>
    </section>

    <!-- Onovo Brands -->
    <section class="onovo-section">
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
    </section>
@endsection
