@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> Our Projects </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-subtitle-2  onovo-text-white">
                <span> Creative studio at the intersection of art, designed technology. </span>
            </div>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="{{route('home')}}">Home </a>
                    </li>
                    <li class="current">
                        <span>Projects </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Projects -->
    <section class="onovo-section gap-top-140">
        <div class="container">

            <!-- Projects List -->
            <div class="onovo-portfolio">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <!-- Filter projects -->
                        <div class="onovo-filter-container">
                            <div class="onovo-filter js-onovo-filter filter--default">
                                <div class="onovo-filter-nav-active"></div>
                                <ul>
                                    <li>
                                        <button class="onovo-filter-item item--active" type="button" data-filter="*">
                                            <span>All Projects</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".marketing">
                                            <span>Marketing</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".ecommerce">
                                            <span>Ecommerce</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".design">
                                            <span>Design</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".branding">
                                            <span>Branding</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <!-- Projects items -->
                        <div class="row onovo-portfolio-items">

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col marketing ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/go4marketing.png') }}"
                                                alt="Go4Marketing" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Laravel <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Go4Marketing</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Marketing
                                                    </li>
                                                    {{-- <li>
                                                        <strong>Team</strong>
                                                        <br /> Thomas Jackki
                                                    </li>
                                                    <li>
                                                        <strong>Date</strong>
                                                        <br /> 2021-2023
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col ecommerce ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/furniture.png') }}"
                                                alt="Furniture Rental" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>wordpress <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Furniture Rental</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Furniture
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/jivandhara.png') }}"
                                                alt="Jivandhara Ginning ERP" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Core PHP</span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Jivandhara Ginning ERP</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br />Ginning ERP
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col marketing ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/football-score.png') }}" alt="Football Live Score" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Laravel <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Football Live Score</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Sport
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/love-song.png') }}"
                                                alt="Love N Song" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>MVC PHP <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Love N Song</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Song
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col branding ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/dilocation.png') }}"
                                                alt="Dilocation" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>PHP <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Dilocation</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Dilocation
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col branding ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/baazigar-news.png') }}"
                                                alt="Baazigar News" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>CodeIgniter <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Baazigar News</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> News
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col branding ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/all-fix-home.png') }}"
                                                alt="All fix home" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Laravel <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>All fix home</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Home
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col ecommerce ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/cyanique.png') }}" alt="Cyanique" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Wordpress <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Cyanique</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Furniture
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col ecommerce ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/e-shop.png') }}" alt="e-shop" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Wordpress <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Shop</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Shop
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col ecommerce ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/loggisticss.png') }}"
                                                alt="loggisticss" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Wordpress <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Kotak loggisticss</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Loggisticss
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!--project item-->
                            {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onovo-portfolio-col ecommerce ">
                                <div class="onovo-portfolio-item onovo-portfolio-item-list">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="{{ asset('assets/images/project/nirvah-consulting.png') }}"
                                                alt="loggisticss" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Wordpress <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Nirvah consulting</span>
                                            </a>
                                        </h5>
                                        <div class="onovo-text">
                                            <div>
                                                <ul data-splitting="" data-onovo-scroll="">
                                                    <li>
                                                        <strong>Project Type</strong>
                                                        <br /> Consulting
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
