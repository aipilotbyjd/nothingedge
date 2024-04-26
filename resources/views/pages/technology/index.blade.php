@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> Technologies </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-subtitle-2  onovo-text-white">
                <span> Backed by passionate technology lovers & contributors, our culture is the reason we're vibing so high
                    and ensuring innovation worldwide. </span>
            </div>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="index.html">Home </a>
                    </li>
                    <li class="current">
                        <span>Technologies </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Projects -->
    <section class="onovo-section gap-top-140">
        <div class="container">

            <!-- Projects Grid -->
            <div class="onovo-portfolio">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <!-- Filter projects-->
                        <div class="onovo-filter-container">
                            <div class="onovo-filter js-onovo-filter filter--default">
                                <div class="onovo-filter-nav-active"></div>
                                <ul>
                                    <li>
                                        <button class="onovo-filter-item item--active" type="button" data-filter="*">
                                            <span>All Technologies</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".design">
                                            <span>Design</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".frontend">
                                            <span>Frontend</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".backend">
                                            <span>Backend</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".mobile">
                                            <span>Mobile</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".e-commerce">
                                            <span>E-commerce</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".cms">
                                            <span>CMS</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".database">
                                            <span>Database</span>
                                        </button>
                                    </li>
                                    {{-- <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".plugins">
                                            <span>Plugins</span>
                                        </button>
                                    </li> --}}
                                    {{-- <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".cloud">
                                            <span>Cloud</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".deployment">
                                            <span>Deployment</span>
                                        </button>
                                    </li> --}}
                                    {{-- <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".erp">
                                            <span>ERP</span>
                                        </button>
                                    </li>
                                    {{-- <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".qa">
                                            <span>QA</span>
                                        </button>
                                    </li> --}}
                                    {{-- <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".framework-libraries">
                                            <span>Frameworks & Libraries</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".no-code-apps">
                                            <span>No Code Apps</span>
                                        </button>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <!-- Projects items -->
                        <div class="row onovo-portfolio-items">

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="project-detail.html" class="onovo-hover-3">
                                            <img src="assets/images/project-n01-3-1080x800.jpg" alt="Museums Art Concept" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Museums Art Concept</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>branding <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="project-detail.html" class="onovo-hover-3">
                                            <img src="assets/images/project-2-2-1080x800.jpg"
                                                alt="Market Economy Graphics" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Market Economy Graphics</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>frontend <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col backend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="project-detail.html" class="onovo-hover-3">
                                            <img src="assets/images/project-3-1080x800.jpg" alt="Flower Store Mobile App" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Flower Store Mobile App</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>interactive <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col mobile ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="project-detail.html" class="onovo-hover-3">
                                            <img src="assets/images/project-4-1080x800.jpg" alt="Business Card Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Business Card Logo</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>design <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col e-commerce ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="project-detail.html" class="onovo-hover-3">
                                            <img src="assets/images/project-2-1080x800.jpg" alt="Headphones 3D Rendering" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Headphones 3D Rendering</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>design <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col cms ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="project-detail.html" class="onovo-hover-3">
                                            <img src="assets/images/project-1-1080x800.jpg"
                                                alt="Circle Cardboard Concept" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Circle Cardboard Concept</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>branding <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col database ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="project-detail.html" class="onovo-hover-3">
                                            <img src="assets/images/project-1-1080x800.jpg"
                                                alt="Circle Cardboard Concept" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Circle Cardboard Concept</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>branding <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Load More -->

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
