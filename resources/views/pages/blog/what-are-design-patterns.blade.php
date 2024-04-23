@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> What are Design Patterns and why you should know them? </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">Blog </a>
                    </li>
                    <li class="current">
                        <span>what-are-design-patterns </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Blog Detail -->
    <section class="onovo-section onovo-post gap-top-140">
        <div class="container">

            <!-- Image -->
            <div class="onovo-post-pic" data-onovo-overlay data-onovo-scroll>
                <img src="{{ asset('assets/images/post1.jpg') }}" alt="what-are-design-patterns" />
            </div>

            <!-- Post-->
            <div class="onovo-post-wrapper">
                <div class="onovo-post-content">

                    <!-- Date -->
                    <div class="onovo-post-date">
                        <span class="date">March 25, 2023</span> by <a href="#">Tejas Korat</a>
                    </div>

                    <!-- Content -->
                    <div class="onovo-post-text">
                        <div class="post-content">
                            <h2>What are design patterns?</h2>
                            <p>🤔 "You might be thinking, 'I am working on so many projects for these many years and I have
                                integrated all of those perfectly fine.' The truth is yes you did, but think of the below
                                statements first.</p>
                            <p>Before understanding what are design patterns, I first want to ask some questions</p>
                            <figure class="alignright">
                                <img src="assets/images/post3.jpg" alt="" />
                            </figure>
                                <p>🔍 After you have implemented a specific functionality in your project, did you ever
                                    have to refactor so many things in order to only add one functionality?</p>
                                <p>🤝 Have you ever worked on a team and spent a huge time only merging the code together
                                    and less time in feature development?</p>
                                <p>⏰ After you finish your project and after 2 to 3 weeks, your project manager asks you to
                                    add functionality and you spend lots of hours only to understand the code you have
                                    previously written.</p>
                                <p>🔗 Do you feel your code is coupled too much with each other and a small change in one
                                    class might end up refactoring all the other classes which do not even implement or use
                                    those methods?</p>
                                <p>🔄 Did you refactor the code of your teammate in order to understand it first?</p>
                            <blockquote>
                                <p>We are actively engaging with waste to energy operators, concrete manufacturers, and the
                                    wider construction industry. Our immediate goal is to complete the testing phase." 🏗️
                                </p>
                                <p>
                                    <cite>Tejas Korat</cite>
                                </p>
                            </blockquote>
                            <p>If any of the above was you then it’s perfectly fine, I was there once too. But now that we
                                know this, design patterns are nothing but the solution to most of the repeating problems
                                which occur in our day-to-day life as a programmer.
                            </p>
                            <p>Global demand for a Circular Economy solution is already high, with global concrete
                                manufacturers engaging with us to&nbsp; <strong>develop specific testing programms.</strong>
                            </p>
                            <div class="row gap-row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="assets/images/post1.jpg" class="mfp-image">
                                        <img src="{{ asset('assets/images/post1.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="assets/images/post6.jpg" class="mfp-image">
                                        <img src="{{ asset('assets/images/post6.jpg') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                            <p>Our immediate goal is to complete the testing phase and achieve the certification, which will
                                allow us to bring our product to market by the end of the year. We are actively engaging
                                with waste to energy operators, concrete manufacturers, and the wider construction industry
                            </p>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="onovo-post-bottom">
                        <div class="onovo-post-bottom-content">

                            <!-- Categories -->
                            <div class="onovo-post-categories onovo-lnk lnk--white">
                                <span>Posted in: </span>
                                <a href="#">Branding</a>
                            </div>

                            <!-- Tags -->
                            <div class="onovo-post-tags">
                                <span>Tags: </span>
                                <a href="#">branding</a>
                                <a href="#">design</a>
                                <a href="#">development</a>
                                <a href="#">web</a>
                            </div>

                            <!-- Social-->
                            <div class="social-share onovo-post-socials onovo-social-2">
                                <span>Share:</span>
                                <ul>
                                    <li>
                                        <a href="#" target="blank" class="onovo-social-link onovo-hover-2">
                                            <i class="icon fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="blank" class="onovo-social-link onovo-hover-2">
                                            <i class="icon fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="blank" class="onovo-social-link onovo-hover-2">
                                            <i class="icon fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="blank" class="onovo-social-link onovo-hover-2">
                                            <i class="icon fab fa-reddit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="blank" class="onovo-social-link onovo-hover-2">
                                            <i class="icon fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="onovo-page-navigation">
                        <div class="onovo-page-navigation-content">
                            <a href="{{route('blog-details')}}" class="page-navigation__prev">
                                <span class="onovo-prev onovo-hover-2">
                                    <i></i>
                                </span>
                            </a>
                            <a href="{{route('blog')}}" class="page-navigation__posts">
                                <i class="fas fa-th"></i>
                            </a>
                            <a href="{{route('blog-details')}}" class="page-navigation__next">
                                <span class="onovo-next onovo-hover-2">
                                    <i></i>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Post Comments -->
            {{-- <div class="onovo-post-comments">

                <!-- Comments -->
                <div id="comments" class="comment post-sb__comment">

                    <!-- Title -->
                    <div class="comment__title"> 2 Comments </div>

                    <!-- Comments items -->
                    <ul class="comments comment__wrapper">

                        <!--comment item-->
                        <li class="comment comment-item">
                            <div class="comment">
                                <div class="comment-item__photo">
                                    <img src="https://secure.gravatar.com/avatar/7255da11246c78e93500291c48c8f7a4?s=64&#038;d=mm&#038;r=g"
                                        class="avatar photo" height="64" width="64" alt="" />
                                </div>
                                <div class="comment-item__content">
                                    <div class="comment-item__top">
                                        <div class="comment-item__name">Lisa Brown</div>
                                        <div class="comment-item__sent">April 2, 2023</div>
                                    </div>
                                    <div class="comment-item__text">
                                        <p>We are actively engaging with waste to energy operators, concrete manufacturers,
                                            and the wider construction industry.</p>
                                    </div>
                                    <div class="comment-item__reply">
                                        <a class="comment-reply-link" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--comment item-->
                        <li class="comment comment-item">
                            <div class="comment">
                                <div class="comment-item__photo">
                                    <img src="https://secure.gravatar.com/avatar/7255da11246c78e93500291c48c8f7a4?s=64&#038;d=mm&#038;r=g"
                                        class="avatar photo" height="64" width="64" alt="" />
                                </div>
                                <div class="comment-item__content">
                                    <div class="comment-item__top">
                                        <div class="comment-item__name">Sofia Morrison</div>
                                        <div class="comment-item__sent">April 2, 2023</div>
                                    </div>
                                    <div class="comment-item__text">
                                        <p>Most innovative and successful builders and real estate enterprises in the
                                            country, has been selected for the design-build expansion of Airsides A and E at
                                            Tampa International Airport.</p>
                                    </div>
                                    <div class="comment-item__reply">
                                        <a class="comment-reply-link" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <!-- Comments Form -->
                <div class="post-sb__comment-form comment-form">
                    <div id="respond" class="comment-respond">
                        <div class="comment__title">Leave a comment</div>
                        <form id="commentform" class="comment-form">
                            <div class="field comment-form__field">
                                <textarea class="textarea" rows="3" placeholder="Comment" name="comment"></textarea>
                            </div>
                            <div class="comment-form__inputs-group">
                                <div class="comment-form__field-wrapper">
                                    <label class="field comment-form__field">
                                        <input name="author" type="text" placeholder="Name" class="input" />
                                    </label>
                                </div>
                                <div class="comment-form__field-wrapper">
                                    <label class="field comment-form__field">
                                        <input name="email" type="text" placeholder="Email" class="input" />
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="onovo-btn onovo-hover-btn">
                                <span>Submit</span>
                            </button>
                        </form>
                    </div>
                </div>

            </div> --}}

        </div>
    </section>
@endsection
