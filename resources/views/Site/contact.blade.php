@extends('Site.layouts.layout_page')

@section('content')
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url(assets/Site/images/bg/contact_cover.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">Contact Us</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
    <!--====== Start Info Section ======-->
    <section class="contact-info-section pt-100 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--=== Section Title ===-->
                    <div class="section-title text-center mb-45 wow fadeInDown">
                        <span class="sub-title">Contact Us</span>
                        <h2>Discover Excellence in Service!
                            Contact Us Today for Unforgettable Travel Experiences!</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Contact Info Item ===-->
                    <div class="contact-info-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <img src="{{ asset('assets/Site/images/icon/icon-1.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Office Location</span>
                            <p>No 252, Koggala, Habaraduwa 80000 Galle, Sri Lanka
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Contact Info Item ===-->
                    <div class="contact-info-item text-center mb-40 wow fadeInDown">
                        <div class="icon">
                            <img src="{{ asset('assets/Site/images/icon/icon-2.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Email Address</span>
                            <p><a href="mailto:info@cttravelsandtours.com">info@cttravelsandtours.com</a></p>
                            <p><a href="http://cttravelsandtours.com">cttravelsandtours.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Contact Info Item ===-->
                    <div class="contact-info-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <img src="{{ asset('assets/Site/images/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Hotline</span>
                            <p><a href="tel:+9477 871 5645">+9477 871 5645</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Info Section ======-->

    <!--====== Start Contact Section ======-->
    <section class="contact-section pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title">Get In Touch</span>
                        <h2>Send Us Message</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-area contact-form wow fadeInUp">
                        <form id="contactForm" class="contactForm" action="{{ route('sendmessage') }}" name="contactForm" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form_group form-group">
                                        <input type="text" placeholder="Name" class="form_control" name="name" id="name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form_group form-group">
                                        <input type="text" placeholder="Phone Number" class="form_control" id="phone_number" name="phone_number" required data-error="Please enter your number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form_group form-group">
                                        <input type="email" placeholder="Email Address" class="form_control" name="email" id="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group form-group">
                                        <textarea name="message" id="message" placeholder="Write Message" class="form_control" rows="6" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group form-group text-center">
                                        <button class="main-btn primary-btn">Send Us Message<i class="fas fa-paper-plane"></i></button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Contact Section ======-->        
@endsection

