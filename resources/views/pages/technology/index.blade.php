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
                        <a href="#">Home </a>
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
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".cloud">
                                            <span>Cloud</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="onovo-filter-item" type="button" data-filter=".deployment">
                                            <span>Deployment</span>
                                        </button>
                                    </li>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Figma.png" alt="Figma" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Figma</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Sketch.png" alt="Sketch" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Sketch</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Adobe XD.png" alt="Adobe XD" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Adobe XD</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Creative Cloud.png"
                                                alt="Adobe Creative Cloud" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Adobe Creative Cloud</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Photoshop.png" alt="Adobe Photoshop" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Adobe Photoshop</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Illustrator.png" alt="Illustrator" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Illustrator</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/After Effects.png" alt="After Effects" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>After Effects</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Premiere Pro.png" alt="Premiere Pro" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Premiere Pro</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Blender.png" alt="Blender" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Blender</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Framer.png" alt="Framer" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Framer</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Vue.js.png" alt="Vue.js banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Vue.js</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/React.js.png" alt="React banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>React</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Angular.js.png" alt="Angular banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Angular</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/JavaScript.png" alt="JavaScript banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>JavaScript</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/TypeScript.png" alt="TypeScript banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>TypeScript</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Nuxt.js.png" alt="Nuxt.js banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Nuxt.js</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Next.js.png" alt="Next.js banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Next.js</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Tailwind.png" alt="Tailwind banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Tailwind</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Vite.png" alt="Vite banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Vite</span>
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col frontend ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Bootstrap.png" alt="Bootstrap banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Bootstrap</span>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Laravel.png" alt="Laravel banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Laravel</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/NodeJs.png" alt="NodeJs banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>NodeJs</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Java.png" alt="Java banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Java</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/NetCore.png" alt=".NET Core banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>.NET Core</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Express.js.png" alt="ExpressJS banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>ExpressJS</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/TypeScript.png" alt="TypeScript banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>TypeScript</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/NestJs.png" alt="Nest.js banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>NestJs</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/PHP.png" alt="PHP banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>PHP</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>backend <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Flutter.png" alt="Flutter Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Flutter</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>mobile <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Kotlin.png" alt="Kotlin Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Kotlin</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>mobile <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Swift.png" alt="Swift Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>Swift</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>mobile <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/React Native.png"
                                                alt="React Native Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="project-detail.html">
                                                <span data-splitting data-onovo-scroll>React Native</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>mobile <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Magneto.png" alt="Magneto Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Magneto</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>eccommerce <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Shopify.png" alt="Shopify Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Shopify</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>eccommerce <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Webflow.png" alt="Webflow Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Webflow</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>eccommerce <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/WooCommerce.png" alt="WooCommerce Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>WooCommerce</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>eccommerce <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Webflow.png" alt="Webflow Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Webflow</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/WordPress.png" alt="WordPress Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>WordPress</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Joomla.png" alt="Joomla Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Joomla</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Drupal.png" alt="Drupal Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Drupal</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Strapi.png" alt="Strapi Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Strapi</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Contentful.png" alt="Contentful Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Contentful</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Sanity.png" alt="Sanity Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Sanity</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Directus.png" alt="Directus Logo" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Directus</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cms <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Mysql.png" alt="MySQL icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>MySQL</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
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
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/MariaDB.png" alt="MariaDB icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>MariaDB</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
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
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/PostgreSQL.png" alt="PostgreSQL icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>PostgreSQL</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
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
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/MongoDB.png" alt="MongoDB icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>MongoDB</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col database ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/DynamoDB.png" alt="DynamoDB icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>DynamoDB</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col database ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/SQLite.png" alt="SQLite icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>SQLite</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col database ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/MS SQL.png" alt="MS SQL icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>MS SQL</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- project item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col database ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/Redis.png" alt="Redis icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Redis</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col database ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/Cassandra.png" alt="Cassandra icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Cassandra</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>database <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col cloud ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/AWS.png" alt="AWS icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>AWS</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cloud <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col cloud ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Azure.png" alt="Azure icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Azure</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cloud <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col cloud ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Google Cloud.png"
                                                alt="Google Cloud icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Google Cloud</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cloud <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col cloud ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Heroku.png" alt="Heroku icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Heroku</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cloud <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col cloud ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Digital Ocean.png"
                                                alt="Digital Ocean icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Digital Ocean</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>cloud <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Docker.png" alt="Docker icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Docker</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Docker Swarm.png"
                                                alt="Docker Swarm icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Docker Swarm</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Terraform.png" alt="Terraform icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Terraform</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Kubernetes.png" alt="Kubernetes icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Kubernetes</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/PM2.png" alt="PM2 icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>PM2</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/NGINX.png" alt="NGINX icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>NGINX</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Caddy.png" alt="Caddy icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Caddy</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Apache.png" alt="Apache icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Apache</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/AWS Lambda.png" alt="AWS Lambda icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>AWS Lambda</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/AWS Elastic Beanstalk.png"
                                                alt="AWS Elastic Beanstalk icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>AWS Elastic Beanstalk</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col deployment ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Amazon ECS.png" alt="Amazon ECS icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Amazon ECS</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>deployment <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/Express.js.png" alt="ExpressJs icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>ExpressJs</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/GraphQL.png" alt="GraphQL icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>GraphQL</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/Socket.IO.png" alt="Soket.io icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Soket.io</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/Babel.png" alt="Babel icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Babel</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/WebSocket.png" alt="WebSocket icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>WebSocket</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a class="onovo-hover-3">
                                            <img src="assets/images/technology/Webpack.png" alt="Webpack icon" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Webpack</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Item -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/NestJs.png" alt="Nest.js banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>NestJs</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Axios.png" alt="Axios banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>Axios</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col framework-libraries ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/AdonisJS.png" alt="AdonisJS banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a class="onovo-lnk" href="#">
                                                <span data-splitting data-onovo-scroll>AdonisJS</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>Frameworks & Libraries <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col no-code-apps ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Bubble.png" alt="Bubble banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Bubble</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>No-Code Apps <em>,</em>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--project item-->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col no-code-apps ">
                                <div class="onovo-portfolio-item">
                                    <div class="image" data-onovo-overlay data-onovo-scroll>
                                        <a href="#" class="onovo-hover-3">
                                            <img src="assets/images/technology/Webflow.png" alt="Webflow banner" />
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <h5 class="title">
                                            <a href="#">
                                                <span data-splitting data-onovo-scroll>Webflow</span>
                                            </a>
                                        </h5>
                                        <div class="text">
                                            <div data-splitting data-onovo-scroll>
                                                <span>No-Code Apps <em>,</em>
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
