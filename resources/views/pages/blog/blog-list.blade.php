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
                        <a href="index.html">Home </a>
                    </li>
                    <li class="current">
                        <span>Blog </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Blog List -->
    <div class="onovo-blog onovo-archive gap-top-140">
        <div class="container">
            <div class="row archive-row">
                <div class="col-lg-8">

                    <!--blog item-->
                    <div class="onovo-blog-item archive-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="blog-detail.html">
                                <img src="assets/images/posts3-1000x667.jpg" alt="Usability Secrets to Create Interfaces" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 25, 2023</div>Branding
                            </div>
                            <h3 class="title">
                                <a href="blog-detail.html"> Usability Secrets to Create Interfaces </a>
                            </h3>
                            <div class="onovo-text">
                                <p>Ambleton: Behind the Branding of High Calgary&#8217;s Community Most innovative and
                                    successful builders and real estate&#8230; <br />
                                    <a href="blog-detail.html" class="onovo-btn onovo-hover-btn">
                                        <span>Read more</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--blog item-->
                    <div class="onovo-blog-item archive-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="blog-detail.html">
                                <img src="assets/images/post1-1000x667.jpg" alt="The Main Thing For The Web Designer" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 18, 2023</div>Design
                            </div>
                            <h3 class="title">
                                <a href="blog-detail.html"> The Main Thing For The Web Designer </a>
                            </h3>
                            <div class="onovo-text">
                                <p>Ambleton: Behind the Branding of High Calgary&#8217;s Community Most innovative and
                                    successful builders and real estate&#8230; <br />
                                    <a href="blog-detail.html" class="onovo-btn onovo-hover-btn">
                                        <span>Read more</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--blog item-->
                    <div class="onovo-blog-item archive-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="blog-detail.html">
                                <img src="assets/images/post4-1000x667.jpg" alt="How to Do Your First Business Project" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">March 10, 2023</div>News
                            </div>
                            <h3 class="title">
                                <a href="blog-detail.html"> How to Do Your First Business Project </a>
                            </h3>
                            <div class="onovo-text">
                                <p>Ambleton: Behind the Branding of High Calgary&#8217;s Community Most innovative and
                                    successful builders and real estate&#8230; <br />
                                    <a href="blog-detail.html" class="onovo-btn onovo-hover-btn">
                                        <span>Read more</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--blog item-->
                    <div class="onovo-blog-item archive-item">
                        <div class="image" data-onovo-overlay data-onovo-scroll>
                            <a href="blog-detail.html">
                                <img src="assets/images/post5-1000x667.jpg" alt="3 Ways To Level Up Your Photography" />
                            </a>
                        </div>
                        <div class="desc">
                            <div class="info">
                                <div class="date">February 27, 2023</div>Design
                            </div>
                            <h3 class="title">
                                <a href="blog-detail.html"> 3 Ways To Level Up Your Photography </a>
                            </h3>
                            <div class="onovo-text">
                                <p>Ambleton: Behind the Branding of High Calgary&#8217;s Community Most innovative and
                                    successful builders and real estate&#8230; <br />
                                    <a href="blog-detail.html" class="onovo-btn onovo-hover-btn">
                                        <span>Read more</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- pager -->
                    <div class="pager">
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#"><i></i></a>
                    </div>

                </div>
                <div class="col-lg-4">

                    <!-- Sidebar -->
                    <div class="col-sidebar">
                        <div class="content-sidebar">

                            <!--widget-->
                            <div class="widget widget_search">
                                <form class="wp-block-search">
                                    <div class="wp-block-search__inside-wrapper">
                                        <input type="search" class="wp-block-search__input" placeholder="Search" />
                                        <button type="submit" class="wp-block-search__button">Search</button>
                                    </div>
                                </form>
                            </div>

                            <!--widget-->
                            <div class="widget">
                                <h2>Recent Posts</h2>
                                <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                                    <li>
                                        <div class="wp-block-latest-posts__featured-image">
                                            <img src="assets/images/posts3-150x150.jpg" alt="" />
                                        </div>
                                        <a class="wp-block-latest-posts__post-title" href="blog-detail.html">Usability
                                            Secrets to Create Interfaces</a>
                                        <span class="wp-block-latest-posts__post-date">March 25, 2023</span>
                                    </li>
                                    <li>
                                        <div class="wp-block-latest-posts__featured-image">
                                            <img src="assets/images/post1-150x150.jpg" alt="" />
                                        </div>
                                        <a class="wp-block-latest-posts__post-title" href="blog-detail.html">The Main Thing
                                            For The Web Designer</a>
                                        <span class="wp-block-latest-posts__post-date">March 18, 2023</span>
                                    </li>
                                    <li>
                                        <div class="wp-block-latest-posts__featured-image">
                                            <img src="assets/images/post4-150x150.jpg" alt="" />
                                        </div>
                                        <a class="wp-block-latest-posts__post-title" href="blog-detail.html">How to Do
                                            Your First Business Project</a>
                                        <span class="wp-block-latest-posts__post-date">March 10, 2023</span>
                                    </li>
                                </ul>
                            </div>

                            <!--widget-->
                            <div class="widget">
                                <h2>Recent Comments</h2>
                                <ol class="wp-block-latest-comments">
                                    <li class="wp-block-latest-comments__comment">
                                        <span class="wp-block-latest-comments__comment-author">Lisa Brown</span> on
                                        <a class="wp-block-latest-comments__comment-link" href="#">Strength to
                                            Strength within the Business Solutions</a>
                                    </li>
                                    <li class="wp-block-latest-comments__comment">
                                        <span class="wp-block-latest-comments__comment-author">Alex Ferguson</span> on
                                        <a class="wp-block-latest-comments__comment-link" href="#">Strength to
                                            Strength within the Business Solutions</a>
                                    </li>
                                    <li class="wp-block-latest-comments__comment">
                                        <span class="wp-block-latest-comments__comment-author">Sofia Morrison</span> on
                                        <a class="wp-block-latest-comments__comment-link" href="#">Usability Secrets
                                            to Create Interfaces</a>
                                    </li>
                                    <li class="wp-block-latest-comments__comment">
                                        <span class="wp-block-latest-comments__comment-author">Lisa Brown</span> on
                                        <a class="wp-block-latest-comments__comment-link" href="#">Usability Secrets
                                            to Create Interfaces</a>
                                    </li>
                                </ol>
                            </div>

                            <!--widget-->
                            <div class="widget">
                                <h2 class="wp-block-heading">Archives</h2>
                                <ul class="wp-block-archives-list wp-block-archives">
                                    <li>
                                        <a href="#">March 2023</a>&nbsp;(3)
                                    </li>
                                    <li>
                                        <a href="#">February 2023</a>&nbsp;(2)
                                    </li>
                                    <li>
                                        <a href="#">January 2023</a>&nbsp;(2)
                                    </li>
                                    <li>
                                        <a href="#">December 2022</a>&nbsp;(1)
                                    </li>
                                </ul>
                            </div>

                            <!--widget-->
                            <div class="widget">
                                <h2 class="wp-block-heading">Categories</h2>
                                <ul class="wp-block-categories-list wp-block-categories">
                                    <li class="cat-item">
                                        <a href="#">Branding</a> (2)
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Design</a> (3)
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">News</a> (3)
                                    </li>
                                </ul>
                            </div>

                            <!--widget-->
                            <div class="widget">
                                <h2>Tags</h2>
                                <p class="wp-block-tag-cloud">
                                    <a href="#" class="tag-cloud-link">branding</a>
                                    <a href="#" class="tag-cloud-link">design</a>
                                    <a href="#" class="tag-cloud-link">development</a>
                                    <a href="#" class="tag-cloud-link">it</a>
                                    <a href="#" class="tag-cloud-link">technology</a>
                                    <a href="#" class="tag-cloud-link">web</a>
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
