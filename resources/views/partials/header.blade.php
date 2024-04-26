<header class="onovo-header header--white">
    <div class="header--builder">
        <div class="container">
            <div class="row">
                <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-3 align-self-center">

                    <!-- Logo -->
                    <div class="onovo-logo-image" style="max-width: 200px">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/main_logo.png') }}" alt="Onovo" />
                            <img class="logo--white" src="{{ asset('assets/images/main_logo.png') }}" alt="Onovo" />
                        </a>
                    </div>

                </div>
                <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-6 align-self-center align-center">

                    <!-- Menu Hamburger -->
                    <a href="#" class="onovo-menu-btn"><span></span></a>
                    <div class="onovo-menu-popup align-left">
                        <div class="onovo-menu-overlay"></div>
                        <div class="onovo-menu-overlay-after"></div>
                        <div class="onovo-menu-container onovo--noscroll">
                            <div class="container">
                                <div class="onovo-menu">
                                    <ul class="onovo-menu-nav">
                                        {{-- <li>
                                            <a class="onovo-lnk lnk--active onovo-dropdown-toggle"
                                                href="{{ route('home') }}">Home</a>
                                            <i class="icon fas fa-chevron-down"></i>
                                            <ul class="sub-menu">
                                                <li class="current-menu-item">
                                                    <a class="onovo-lnk lnk--active" href="index.html">Creative
                                                        Agency</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="home-digital-agency.html">Digital Agency</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="home-showcase.html">Creative
                                                        Portfolio</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="home-parallax.html">Fullscreen Parallax</a>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        <li>
                                            <a class="onovo-lnk lnk--active onovo-dropdown-toggle"
                                                href="{{ route('about-us') }}">About Us</a>
                                            {{-- <i class="icon fas fa-chevron-down"></i>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="{{ route('about-us') }}">About
                                                        Us</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="{{ route('team') }}">Team</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="team-detail.html">Team
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="{{ route('services') }}">Services</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="service-detail.html">Service
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="pricing-plans.html">Pricing
                                                        Plans</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="faq.html">FAQ</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a class="onovo-lnk lnk--active onovo-dropdown-toggle"
                                                href="{{ route('technology') }}">Technologies</a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk lnk--active onovo-dropdown-toggle"
                                                href="{{ route('projects') }}">Portfolio</a>
                                            {{-- <i class="icon fas fa-chevron-down"></i> --}}
                                            {{-- <ul class="sub-menu">
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="{{ route('projects') }}">Projects
                                                        Grid</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="projects-list.html">Projects
                                                        List</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="projects-side.html">Projects
                                                        Side</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="projects-masonry.html">Projects Masonry</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="projects-3-column.html">Projects 3 Column</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="gallery.html">Gallery</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active"
                                                        href="{{ route('projects') }}">Project
                                                        Detail</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a class="onovo-lnk lnk--active onovo-dropdown-toggle"
                                                href="{{ route('blog') }}">Blog</a>
                                            {{-- <i class="icon fas fa-chevron-down"></i>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="blog.html">Blog
                                                        Grid</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="blog-list.html">Blog List</a>
                                                </li>
                                                <li>
                                                    <a class="onovo-lnk lnk--active" href="{{ route('blog') }}">Blog
                                                        Detail</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a class="onovo-lnk lnk--active" href="{{ route('contact-us') }}">Contact
                                                Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-3 align-self-center align-right">

                    <!-- Button -->
                    <a class="onovo-head-btn onovo-hover-btn" href="projects.html">
                        <span>
                            <span class="onovo-lnk lnk--active">Showcase</span>
                        </span>
                        <i class="arrow">
                            <span></span>
                        </i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</header>
