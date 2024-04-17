@extends('layouts.app')

@section('content')
    <!-- Onovo Intro -->
    <section class="onovo-section onovo-intro intro--black">
        <div class="container">
            <h1 class="onovo-title-1  onovo-text-white">
                <span> App Development </span>
                <span class="onovo-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="onovo-subtitle-2  onovo-text-white">
                <span> Activating Super Apps With Mobile Mavens! </span>
            </div>
            <div class="onovo-breadcrums">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home </a>
                    </li>
                    <li class="current">
                        <a href="{{ route('services') }}">Services </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Onovo Service Detail -->
    <section class="onovo-section gap-top-140">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

                    <!-- Image -->
                    <div class="gap-bottom-50">
                        <img src="{{ asset('assets/images/post3.jpg') }}" alt="img" />
                    </div>

                    <!-- Description -->
                    <div class="onovo-text">
                        <h3>Stay on ‘Top-Of-The-League’ with Our Mobile App Development Services</h3>
                        <p>Be the industry king and create your aura by crafting intricate mobile applications that reflect
                            your business vision. Our leading mobile app development company offers premium mobile
                            application development services.
                        </p>
                    </div>
                    <div class="onovo-text">
                        <h3>Elevating Digital Experiences: Our Top-Grade Mobile App Development Services</h3>
                        <p>Innovating experiences & leading ahead in this mobile-first world! We scale the digital maturity
                            curve by delivering high-end, fully-fledged, integrated, transformative & top-grade Mobile App
                            Development Services.
                        </p>
                    </div>
                    <!-- Faq items -->
                    {{-- <div class="onovo-faq-items">

                        <!--faq item-->
                        <div class="onovo-faq-item onovo-collapse-item">
                            <h5 class="title onovo-collapse-btn">
                                <span> Secure Management and Workforce? </span>
                                <i class="arrow"></i>
                            </h5>
                            <div class="onovo-text" style="display: none;">
                                <div>
                                    <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi.
                                        Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine
                                        odi.</p>
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
                                    <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi.
                                        Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine
                                        odi.</p>
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
                                    <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi.
                                        Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine
                                        odi.</p>
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
                                    <p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi.
                                        Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor
                                        Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine
                                        odi.</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectet</li>
                                        <li>Duis sed odio sit amet nibh vulputate cursus</li>
                                        <li>Duis sed odio sit amet nibh vulputate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div> --}}

                    <div class="onovo-text gap-top-50">
                        <h3>Sleek iOS App Development</h3>
                        <p>Portray the finest version of an iOS application with the expertise of our mobile app development
                            team. We craft sleek & interactive designs that portray your brand identity and lock the
                            audience’s attention. Integrate modern and trendy features that enhance the functionality of
                            your iOS app.
                        </p>
                        <ul>
                            <li>
                                iPhone App Development
                            </li>
                            <li>
                                iPad App Development
                            </li>
                            <li>
                                iOS App with SiriKit
                            </li>
                            <li>
                                iOS App with ARKit
                            </li>
                        </ul>
                    </div>

                    <div class="onovo-text gap-top-50">
                        <h3>Trendy Android App Development</h3>
                        <p>Want to develop an Android app that stands apart from the competition? With our custom mobile app
                            development services, you can integrate all the features and design aspects on your mind. Get
                            your customer engagement ticking by updating your app to the latest trends.
                        </p>
                        <ul>
                            <li>
                                Android Mobile App Development
                            </li>
                            <li>
                                Interactive Android App Design
                            </li>
                            <li>
                                Deployment of the Latest Android Technologies
                            </li>
                            <li>
                                Wearable App Development
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">

                    <!-- Service menu -->
                    <div class="onovo-service-item onovo-service-no-icon gap-bottom-40">
                        <div class="onovo-service-item-inner onovo-hover-3 onovo-hover-black">
                            <h5 class="title">
                                <span data-splitting data-onovo-scroll> Services List </span>
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

                    <!-- Onovo Form -->
                    <div class="onovo-form-box onovo-text-white">
                        <h5>Send Us A Message</h5>
                        <p>Feel some love, to see what we can do...t!</p>
                        <form id="cform" class="cform" method="post" action="{{ route('contactUs.form') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input size="40" placeholder="Full Name" type="text" name="name" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input size="40" placeholder="Email Address" type="email" name="email" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input size="40" placeholder="Phone" type="tel" name="tel" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <textarea cols="40" rows="10" placeholder="Message" name="message"></textarea>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <button type="submit" class="onovo-btn onovo-hover-btn btn--active">
                                            <span>Send Message</span>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Onovo Navs -->
    <section class="onovo-section">
        <div class="container">

            <!-- Navigation -->
            <div class="onovo-page-navigation">
                <div class="onovo-page-navigation-content">
                    <a href="{{ route('app-development-services-detail') }}" class="page-navigation__prev">
                        <span class="onovo-prev onovo-hover-2">
                            <i></i>
                        </span>
                    </a>
                    <a href="{{ route('services') }}" class="page-navigation__posts">
                        <i class="fas fa-th"></i>
                    </a>
                    <a href="{{ route('app-development-services-detail') }}" class="page-navigation__next">
                        <span class="onovo-next onovo-hover-2">
                            <i></i>
                        </span>
                    </a>
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
