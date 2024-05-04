@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> Contact Us </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-subtitle-2  onovo-text-white">
                <span> Have ideas for your business? Let’s build something awesome together. </span>
            </div>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="{{route('home')}}">Home </a>
                    </li>
                    <li class="current">
                        <span>Contact Us</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Contact Info -->
    <section class="onovo-section gap-top-140">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

                    <!-- Heading -->
                    <div class="onovo-text gap-bottom-40">
                        <h4>Send Us A Message</h4>
                        Then let us know about it and we can see what we can do to help
                    </div>

                    <!-- Form -->
{{--                    <div class="loader"></div>--}}

                    <div class="onovo-form">
                        <form id="cform" class="cform" method="post" action="{{ route('contactUs.form') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input placeholder="Full Name" type="text" name="name" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input placeholder="Email Address" type="email" name="email" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input placeholder="Phone Number" type="tel" name="tel" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <textarea placeholder="Message" name="message"></textarea>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <button type="submit" class="onovo-btn onovo-hover-btn">
                                            <span>Send Message</span>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                        <div class="alert-success" style="display: none;">
                            <h5>Thanks, your message is sent successfully.</h5>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

                    <!-- Contact Info -->
                    <div class="onovo-contact-info onovo-text-white">
                        <ul>
                            <li>
                                <h5>Contact Info</h5>
                                <a href="tel:+918200737927" class="onovo-lnk lnk--white" target="_blank">+91
                                    8200737927</a><br>
                                <a href="mailto:contact@nothonedge.com" class="onovo-lnk lnk--white"
                                    target="_blank">contact@nothonedge.com</a>
                                <div class="onovo-social-1 onovo-social-active" style="margin-top: 10px;">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" class="onovo-social-link onovo-hover-2">
                                                <i class="icon fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/NothingEdge_07" target="_blank"
                                                class="onovo-social-link onovo-hover-2">
                                                <i class="icon fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/nothingedge-technology"
                                                target="_blank" class="onovo-social-link onovo-hover-2">
                                                <i class="icon fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <h5>Houston</h5>
                                <div>111,Sankalp Icon, Police station road, opp. Parikh Hospital, Nikol,
                                    Ahmedabad-382350,Gujarat,India.</div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Onovo Faq -->
    <section class="onovo-section gap-top-140">
        <div class="container">

            <!-- Heading -->
            <div class="onovo-heading align-center gap-bottom-40">
                <div class="onovo-subtitle-1">
                    <span> Client’s FAQ </span>
                </div>
                <h2 class="onovo-title-2">
                    <span> Solving Business Problems <br>is An Everyday </span>
                </h2>
            </div>

            <!-- Faq items -->
            <div class="onovo-faq-items">

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> How long does it take to build a website? </span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>The timeline varies based on the project scope, but a basic website can take 4-8 weeks while
                                more complex sites with custom functionality can take 2-6 months..</p>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> What is your design process? </span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>We start with an in-depth discovery phase to understand your goals, target audience, and
                                branding. Then we create wireframes, design mockups, and develop your custom website.</p>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> Do you offer website maintenance and updates? </span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Yes, we provide ongoing maintenance plans to keep your site updated with the latest security
                                patches, plugin updates, and content additions.</p>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> How much does web design/development cost?</span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Pricing depends on project requirements but typically ranges from $1,000 to $25,000+ for a
                                custom website. We provide detailed quotes after the discovery phase.</p>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> What platforms and technologies do you use?</span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>We develop on WordPress, Shopify, and custom coding frameworks like React.js. We use HTML,
                                CSS, JavaScript, PHP and build with SEO and mobile responsiveness in mind.</p>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> Will my new website be mobile-friendly?</span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Absolutely. We build all websites with a mobile-first, responsive approach to ensure an
                                optimal experience across devices.</p>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> Do you offer ecommerce website development?</span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Yes, we have experience building secure, user-friendly ecommerce sites on platforms like
                                WooCommerce, Shopify, and custom solutions.</p>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> How does the hosting and domain process work?</span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p> We can handle purchasing a new domain and setting up hosting for your site, or transfer an
                                existing one.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cform').validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 50
                    },
                    email: {
                        required: true,
                        email: true,
                        maxlength: 50
                    },
                    tel: {
                        required: true
                    }
                },
                s: {
                    name: 'Please enter your full name',
                    email: {
                        required: 'Please enter your email address',
                        email: 'Please enter a valid email address'
                    },
                    tel: 'Please enter your phone number',
                },
                submitHandler: function(form) {
                    $('.loader').show();

                    var formData = $(form).serialize();
                    $.ajax({
                        url: $(form).attr('action'),
                        type: $(form).attr('method'),
                        data: formData,
                        success: function(response) {
                            $('.loader').hide();
                            $(form).hide();
                            $('.alert-success').show();
                        },
                        error: function(xhr, status, error) {
                            alert(
                                'An error occurred while processing your request. Please try again later.'
                            );
                        }
                    });
                }
            });
        });
    </script>
@endsection
