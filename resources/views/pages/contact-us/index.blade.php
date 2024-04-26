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
                        <a href="index.html">Home </a>
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
                                <a href="tel:+10204302973" class="onovo-lnk lnk--white" target="_blank">+ 1 (020) 430
                                    2973</a><br>
                                <a href="mailto:username@domain.com" class="onovo-lnk lnk--white"
                                    target="_blank">username@domain.com</a>
                                <div class="onovo-social-1 onovo-social-active" style="margin-top: 10px;">
                                    <ul>
                                        <li>
                                            <a href="#" class="onovo-social-link onovo-hover-2">
                                                <i class="icon fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="onovo-social-link onovo-hover-2">
                                                <i class="icon fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="onovo-social-link onovo-hover-2">
                                                <i class="icon fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <h5>Houston</h5>
                                <div>111,Sankalp Icon, Police station road, opp. Parikh Hospital, Nikol,
                                    Ahmedabad-382350, India.</div>
                            </li>
                            <li>
                                <h5>Los Angeles</h5>
                                <div>2001 N. Clybourn Avenue Suite 202</div>
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
                        <span> Secure Management and Workforce? </span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class
                                apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio
                                sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu
                                a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectet</li>
                                <li>Duis sed odio sit amet nibh vulputate cursus</li>
                                <li>Duis sed odio sit amet nibh vulputate</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> Logistics Workforce on Track? </span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class
                                apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio
                                sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu
                                a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectet</li>
                                <li>Duis sed odio sit amet nibh vulputate cursus</li>
                                <li>Duis sed odio sit amet nibh vulputate</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> Online Courses &amp; Certification? </span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class
                                apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio
                                sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu
                                a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectet</li>
                                <li>Duis sed odio sit amet nibh vulputate cursus</li>
                                <li>Duis sed odio sit amet nibh vulputate</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--faq item-->
                <div class="onovo-faq-item onovo-collapse-item">
                    <h5 class="title onovo-collapse-btn">
                        <span> Figures and data representative of an organization's? </span>
                        <i class="arrow"></i>
                    </h5>
                    <div class="onovo-text" style="display: none;">
                        <div>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class
                                apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio
                                sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu
                                a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectet</li>
                                <li>Duis sed odio sit amet nibh vulputate cursus</li>
                                <li>Duis sed odio sit amet nibh vulputate</li>
                            </ul>
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
                    var formData = $(form).serialize();
                    $.ajax({
                        url: $(form).attr('action'),
                        type: $(form).attr('method'),
                        data: formData,
                        success: function(response) {
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
