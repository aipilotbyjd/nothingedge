@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> Our Services </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-subtitle-2  onovo-text-white">
                <span> Our values and vaulted us to the top of our industry. </span>
            </div>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home </a>
                    </li>
                    <li class="current">
                        <span>Services </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Services -->
    <section class="onovo-section gap-top-140 gap-bottom-140">
        <div class="container">

            <!-- Services items -->
            <div class="row gap-row">

                <!--service item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="onovo-service-item">
                        <div class="image">
                            <a href="{{ route('web-development-services-detail') }}">
                                <img src="{{ asset('assets/images/serv-icon4.png') }}" alt="Web Development" />
                            </a>
                        </div>
                        <div class="onovo-service-item-inner onovo-hover-3 onovo-hover-black">
                            <h5 class="title">
                                <a href="{{ route('web-development-services-detail') }}">
                                    <span data-splitting data-onovo-scroll> Web Development </span>
                                </a>
                            </h5>
                            <div class="list">
                                <ul>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('web-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> PHP Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('web-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Laravel Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('web-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> CodeIgniter Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('web-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> NodeJS Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('web-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> ReactJS Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('web-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Wordprees/Shopify Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('web-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Ecommerce Development </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--service item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="onovo-service-item">
                        <div class="image">
                            <a href="{{ route('app-development-services-detail') }}">
                                <img src="{{ asset('assets/images/serv-icon5.png') }}" alt="App Development" />
                            </a>
                        </div>
                        <div class="onovo-service-item-inner onovo-hover-3 onovo-hover-black">
                            <h5 class="title">
                                <a href="{{ route('app-development-services-detail') }}">
                                    <span data-splitting data-onovo-scroll> App Development </span>
                                </a>
                            </h5>
                            <div class="list">
                                <ul>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('app-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> iOS App Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('app-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Android App Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('app-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> React Native App Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('app-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Flutter App Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('app-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Kotlin App Development </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--service item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="onovo-service-item">
                        <div class="image">
                            <a href="{{ route('ui-ux-development-services-detail') }}">
                                <img src="assets/images/serv-icon6.png" alt="UX / UI Design" />
                            </a>
                        </div>
                        <div class="onovo-service-item-inner onovo-hover-3 onovo-hover-black">
                            <h5 class="title">
                                <a href="{{ route('ui-ux-development-services-detail') }}">
                                    <span data-splitting data-onovo-scroll> UX / UI Design </span>
                                </a>
                            </h5>
                            <div class="list">
                                <ul>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('ui-ux-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Figma Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('ui-ux-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Sketch Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('ui-ux-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Framer Development </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="onovo-lnk" href="{{ route('ui-ux-development-services-detail') }}">
                                            <span data-splitting data-onovo-scroll> Adobe XD Development </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Onovo Numbers -->
    {{-- <section class="onovo-section gap-bottom-140">
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
    </section> --}}

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
                    <div class="label onovo-text-black onovo-circle-text-label"> Play Video - Play Video - Play Video -
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Onovo Services -->

    @include('partials.services')



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
                        <a href="mailto:contact@nothingedge.com" target="_blank">contact@nothingedge.com</a>
                        <p>111, Sankalp Icon, Police station, Main Rd,
                            opp. Parikh Hospital Nikol, Ahmedabad, Gujarat 382350.</p>
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
                                        href="https://www.facebook.com/nothingedge.technology?mibextid=ZbWKwL"
                                        target="_blank">
                                        <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                        <span> Facebook </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn"
                                        href="https://www.instagram.com/nothingedge?igsh=bmF1M2lwa3Vqa2ow"
                                        target="_blank">
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
                                        href="https://www.linkedin.com/in/nothingedge-technology-29261b2a3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                        target="_blank">
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

    <!-- Onovo Brands -->
    {{-- <section class="onovo-section gap-top-140">
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
