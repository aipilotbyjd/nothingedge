@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> News & Blog </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-subtitle-2  onovo-text-white">
                <span> Insights, thoughts, industry trends, marketing tips. </span>
            </div>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home </a>
                    </li>
                    <li class="current">
                        <span>Blog </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Blog -->
    <div class="onovo-blog gap-top-140">
        <div class="container">

            <!-- Blog items -->
            <div class="row">

                <!--blog item-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="onovo-blog-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="{{ route('what-are-design-patterns') }}">
                                <img decoding="async" src="{{ asset('assets/images/post1.jpg') }}" width="400"
                                    height="240" alt="What are Design Patterns and why you should know them?" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 25, 2023</div>Design
                            </div>
                            <h5 class="title">
                                <a href="{{ route('what-are-design-patterns') }}">
                                    <span>What are Design Patterns and why you should know them?</span>
                                </a>
                            </h5>
                            <div class="onovo-text">
                                <div>
                                    <p>Design patterns are essential tools in the arsenal of any software developer. They
                                        represent proven solutions to common problems encountered during software design and
                                        development. &#8230; <br />
                                        <a href="{{ route('what-are-design-patterns') }}"
                                            class="onovo-btn onovo-hover-btn">
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
                            <a href="{{ route('web-development-life-cycle') }}">
                                <img decoding="async" src="{{ asset('assets/images/post3.jpg') }}" width="400"
                                    height="240" alt="Web Development Life Cycle: Everything You need to Know" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 18, 2023</div>Web Development

                            </div>
                            <h5 class="title">
                                <a href="{{ route('web-development-life-cycle') }}">
                                    <span>Web Development Life Cycle: Everything You need to Know</span>
                                </a>
                            </h5>
                            <div class="onovo-text">
                                <div>
                                    <p> In this blog, we outline the web development life cycle step by step. From initial
                                        research to final maintenance, we cover key phases, technologies, and costs. This
                                        guide provides a clear understanding of the process.&#8230; <br />
                                        <a href="{{ route('web-development-life-cycle') }}"
                                            class="onovo-btn onovo-hover-btn">
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
                            <a href="{{ route('web-application-architecture') }}">
                                <img decoding="async" src="{{ asset('assets/images/post4.jpg') }}" width="400"
                                    height="240" alt="Web Application Architecture" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">April 21, 2024</div>Web Application
                            </div>
                            <h5 class="title">
                                <a href="{{ route('web-application-architecture') }}">
                                    <span>Web Application Architecture</span>
                                </a>
                            </h5>
                            <div class="onovo-text">
                                <div>
                                    <p>This blog provides an ultimate guide to web application architecture, exploring its
                                        components, layers, types, and best practices. It delves into the intricate
                                        structures that power modern web applications, ensuring efficiency, scalability, and
                                        security.&#8230; <br />
                                        <a href="{{ route('web-application-architecture') }}"
                                            class="onovo-btn onovo-hover-btn">
                                            <span>Read more</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- pager -->
            {{-- <div class="pager">
                <span class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="next page-numbers" href="#">
                    <i class="icon-arrow"></i>
                </a>
            </div> --}}

        </div>
    </div>
@endsection
