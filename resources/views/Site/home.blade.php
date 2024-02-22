@extends('Site.layouts.layout_home')

        
@section('content')
    <!--====== Start Hero Section ======-->
    <section class="hero-section">
        <!--=== Hero Wrapper ===-->
        <div class="hero-wrapper black-bg">
            <!--=== Hero Slider ===-->
            <div class="hero-slider-one">
                <!--=== Single Slider ===-->
                <div class="single-slider">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <!--=== Hero Content ===-->
                                <div class="hero-content text-white">
                                    <h1 data-animation="fadeInDown" data-delay=".4s">Sri Lankan Best Tour Agent</h1>
                                    <div class="text-button d-flex align-items-center">
                                        <p data-animation="fadeInLeft" data-delay=".5s">Sri Lanka's top tour agent, offering unmatched travel experiences with expert guidance and personalized service.</p>
                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s"> 
                                            <a href="{{ Route('contact') }}" class="main-btn primary-btn">Contact Us<i class="fas fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--=== Hero Image ===-->
                                <div class="hero-image" data-animation="fadeInRight">
                                    <img src="{{ asset('assets/Site/images/hero/1.png') }}" alt="Hero Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Single Slider ===-->
                <div class="single-slider">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <!--=== Hero Content ===-->
                                <div class="hero-content text-white">
                                    <h1 data-animation="fadeInDown" data-delay=".4s">CT Tours & Travels</h1>
                                    <div class="text-button d-flex align-items-center">
                                        <p data-animation="fadeInLeft" data-delay=".5s">Your Gateway to Unforgettable Journeys and Authentic Experiences in Sri Lanka.</p>
                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s"> 
                                            <a href="{{ Route('about') }}" class="main-btn primary-btn">See More<i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--=== Hero Image ===-->
                                <div class="hero-image" data-animation="fadeInRight">
                                    <img src="{{ asset('assets/Site/images/hero/2.png') }}" alt="Hero Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Section ======-->

    <!--====== Start About Section ======-->
    <section class="about-section pt-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <!--=== About Content Box ===-->
                    <div class="about-content-box text-center mb-55 wow fadeInDown">
                        <div class="section-title mb-30">
                            <span class="sub-title">About Company</span>
                            <h2>Your Ultimate Sri Lankan Travel Experts!</h2>
                        </div>
                        <p>
                            Discover the wonders of Sri Lanka with CT Tours, your trusted travel experts. 
                            From pristine beaches to ancient cultural sites, we specialize in crafting 
                            unforgettable experiences tailored to your interests and preferences. 
                            Let us guide you through the beauty and diversity of this tropical paradise.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slider-active-4-item wow fadeInUp">
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/features/1.png') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Cultural Tourism</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Ancient cities such as Anuradhapura and Polonnaruwa</p>
                        </div>
                    </div>
                </div>
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/features/2.png') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Natural & Wildlife Tourism</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Yala National Park for safaris, Udawalawe for elephant watching</p>
                        </div>
                    </div>
                </div>
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/features/3.png') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Adventure Tourism</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Exploring the Knuckles Mountain Range, Horton Plains National Park</p>
                        </div>
                    </div>
                </div>
                <!--=== Features Image Item ===-->
                <div class="single-features-item mb-40">
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/features/4.png') }}" alt="Features Image">
                        <div class="content">
                            <div class="text">
                                <h4 class="title">Culinary Tourism</h4>
                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <p>Learning to prepare Sri Lankan dishes like curry, hoppers, and sambal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Section ======-->

    <!--====== Start Booking Section ======-->
    <section class="booking-section pt-60 pb-50">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-lg-6">
                    <!--=== Booking Content Box ===-->
                    <div class="booking-content-box mb-50 wow fadeInLeft">
                        <div class="section-title mb-50">
                            <span class="sub-title">Availability</span>
                            <h2>Booking Your Best Tour & Travel Availability</h2>
                        </div>
                        <form class="booking-form" action="{{ route('booking') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <label><i class="far fa-calendar-alt"></i></label>
                                        <input type="text" class="form_control datepicker" placeholder="Check In" id="checkin">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <label><i class="far fa-calendar-alt"></i></label>
                                        <input type="text" class="form_control datepicker" placeholder="Check Out" id="checkout">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <label><i class="far fa-user-alt"></i></label>
                                        <input type="text" class="form_control" placeholder="Guest" name="text" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <select class="wide">
                                            <option data-display="Accommodations">Accommodations</option>
                                            <option value="01">Classic Tent</option>
                                            <option value="01">Forest Camping</option>
                                            <option value="01">Small Trailer</option>
                                            <option value="01">Tree House Tent</option>
                                            <option value="01">Tent Camping</option>
                                            <option value="01">Couple Tent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comments" placeholder="Comments" class="form_control" cols="8" rows="3" id="message"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_group">
                                        <button class="main-btn primary-btn">Send Message<i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--=== Booking Image Box ===-->
                    <div class="booking-image-box mb-50 ml-lg-45 wow fadeInRight">
                        <img src="{{ asset('assets/Site/images/contact/2.png') }}" class="radius-60" alt="Contact Image">
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Section ======-->

    <!--====== Start Activity Section ======-->
    <section class="activity-section">
        <div class="activity-wrapper-bgc  text-white black-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title">Popular Activity</span>
                            <h2>Immerse Yourself in Authentic Adventures, Close to Nature!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <!--=== Activity Nav Tab ===-->
                        <div class="activity-nav-tab mb-50 wow fadeInLeft">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#tab1" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1">Tea Plantation Tour</a>
                                </li>
                                <li>
                                <a href="#tab2" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2">Surfing</a>
                                </li> 
                                <li>
                                    <a href="#tab3" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3">Whale Watching</a>
                                </li>
                                <li>
                                    <a href="#tab4" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4">Hiking</a>
                                </li>
                                <!-- <li>
                                    <a href="#tab5" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab5">Mountain Hiking</a>
                                </li>
                                <li>
                                    <a href="#tab6" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab6">Mountain Hiking</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!--=== Tab Content ===-->
                        <div class="tab-content mb-50 wow fadeInRight">
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Tea Plantation Tour in Nuwara Eliya</h3>
                                            <p>Nuwara Eliya, nestled in the central highlands of Sri Lanka, is famous for its lush tea plantations.</p>
                                            <p>Visitors can embark on guided tours of tea estates to learn about the process of tea cultivation, plucking, and production.</p>
                                            <p>The cool climate and scenic landscapes make tea plantation tours a refreshing and educational experience for tourists exploring the hill country.</p>

                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Tea Factory Visits</li>
                                                <li><i class="fas fa-badge-check"></i>Tea Tasting Experiences</li>
                                                <li><i class="fas fa-badge-check"></i>Guided Tea Estate Walks</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Acctivity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('assets/Site/images/gallery/1.png') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab2">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Surfing in Arugam Bay</h3>

                                            <p>Arugam Bay on the east coast of Sri Lanka is renowned for its world-class surfing conditions.</p>
                                            <p>Foreigners flock to this picturesque beach town to catch waves ranging from beginner-friendly breaks to challenging reef breaks.</p> 
                                            <p>Surf schools and board rentals are readily available for visitors of all skill levels, making it an ideal destination for surfing enthusiasts</p>
                                            
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Beginner Surfing</li>
                                                <li><i class="fas fa-badge-check"></i>Surf Camps for Intermediate Surfers</li>
                                                <li><i class="fas fa-badge-check"></i>Advanced Surfing Excursions</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!--=== Activity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('assets/Site/images/gallery/3.png') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Whale Watching in Mirissa</h3>

                                            <p>Mirissa, located on the southern coast of Sri Lanka, is one of the best places in the world for whale watching.</p>
                                            <p>Foreign tourists often embark on boat tours to spot magnificent marine mammals such as blue whales, sperm whales, and dolphins.</p>
                                            <p>The thrill of witnessing these majestic creatures in their natural habitat amidst the stunning coastal scenery makes whale watching in Mirissa a memorable experience.</p>

                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Morning Boat Tours</li>
                                                <li><i class="fas fa-badge-check"></i>Sunset Cruises</li>
                                                <li><i class="fas fa-badge-check"></i>Exclusive Private Charter</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Activity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('assets/Site/images/gallery/2.png') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade" id="tab4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!--=== Activity Content Box ===-->
                                        <div class="activity-content-box pl-lg-40">
                                            <div class="icon">
                                                <i class="flaticon-camp"></i>
                                            </div>
                                            <h3 class="title">Hiking to Ella Rock</h3>
                                            
                                            <p>Ella, a charming hill station in the central highlands, offers excellent hiking opportunities, including the trek to Ella Rock.</p>
                                            <p>Foreign travelers can embark on a scenic hike through lush forests and tea plantations to reach the summit of Ella Rock, which offers breathtaking panoramic views of the surrounding valleys and mountains.</p>
                                            <p>The hike provides a rewarding outdoor adventure and a chance to immerse oneself in Sri Lanka's stunning natural beauty.</p>
                                                
                                            <ul class="check-list">
                                                <li><i class="fas fa-badge-check"></i>Day Hikes</li>
                                                <li><i class="fas fa-badge-check"></i>Multi-Day Treks</li>
                                                <li><i class="fas fa-badge-check"></i>Sunrise Summit Trails</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--=== Activity Image Box ===-->
                                        <div class="activity-image-box">
                                            <img src="{{ asset('assets/Site/images/gallery/4.png') }}" class="radius-12" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Activity Section ======-->

    <!--====== Start Services Section ======-->
    <section class="services-seciton pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <!--=== Section Title ===-->
                    <div class="section-title text-center mb-60 wow fadeInDown">
                        <span class="sub-title">Popular Services</span>
                        <h2>Amazing Adventure Camping
                            Services for Enjoyed</h2>
                    </div>
                </div>
            </div>
            <div class="slider-active-3-item wow fadeInUp">
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="tour-details.html">Accommodation</a></h3>
                        <p>Luxurious oceanfront accommodations with upscale amenities and stunning views for an unforgettable tropical getaway</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/service/1.png') }}" alt="Service Image">
                    </div>    
                </div>
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="tour-details.html">Foods</a></h3>
                        <p>Signature Sri Lankan dish featuring a flavorful combination of curries, rice, and accompaniments, providing an authentic culinary experience</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/service/3.png') }}" alt="Service Image">
                    </div>
                </div>
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="tour-details.html">Transportation</a></h3>
                        <p>Convenient and flexible chauffeur-driven cars for exploring Sri Lanka comfortably and independently</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/service/4.png') }}" alt="Service Image">
                    </div>
                </div>
                <!--=== Single Service Item ===-->
                <div class="single-service-item mb-40">
                    <div class="content">
                        <h3 class="title"><a href="tour-details.html">Activities</a></h3>
                        <p> Exciting tours in national parks and sanctuaries, offering opportunities to observe elephants, leopards, and exotic birds in their natural habitats</p>
                        <div class="meta">
                            <span class="icon"><i class="flaticon-blanket"></i></span>
                            <span class="icon"><i class="flaticon-cat"></i></span>
                            <span class="icon"><i class="flaticon-tent"></i></span>
                            <span class="icon"><i class="flaticon-fire"></i></span>
                        </div>
                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="img-holder">
                        <img src="{{ asset('assets/Site/images/service/2.png') }}" alt="Service Image">
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Services Section ======-->

    <!--====== Start Features Section ======-->
    <section class="features-section pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!--=== Fancy Icon Box ===-->
                    <div class="fancy-icon-box mb-30 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-rabbit"></i>
                        </div>
                        <div class="text">
                            <h4 class="title">Best Security</h4>
                            <p>Your safety is our priority. We provide top-notch security for a worry-free stay</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!--=== Fancy Icon Box ===-->
                    <div class="fancy-icon-box mb-30 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-wifi-router"></i>
                        </div>
                        <div class="text">
                            <h4 class="title">Free Internet</h4>
                            <p>Stay connected with complimentary high-speed internet throughout your stay</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!--=== Fancy Icon Box ===-->
                    <div class="fancy-icon-box mb-30 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-solar-energy"></i>
                        </div>
                        <div class="text">
                            <h4 class="title">Solar Energy</h4>
                            <p>Go green with solar-powered facilities for a sustainable stay experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!--=== Fancy Icon Box ===-->
                    <div class="fancy-icon-box mb-30 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-cycling"></i>
                        </div>
                        <div class="text">
                            <h4 class="title">Mountain Biking</h4>
                            <p>Thrilling mountain biking adventures with expert guides</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!--=== Fancy Icon Box ===-->
                    <div class="fancy-icon-box mb-30 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-fishing"></i>
                        </div>
                        <div class="text">
                            <h4 class="title">Swimming & Fishing </h4>
                            <p>Dive into our pool or enjoy fishing in tranquil waters for a relaxing retreat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <!--=== Fancy Icon Box ===-->
                    <div class="fancy-icon-box mb-30 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-gym"></i>
                        </div>
                        <div class="text">
                            <h4 class="title">GYM and Yoga</h4>
                            <p>Energize with our gym and find serenity with yoga classes for a balanced stay.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Features Section ======-->

    <!--====== Start CTA Section ======-->
    <section class="cta-bg overlay bg_cover pt-140 pb-150" style="background-image: url(assets/Site/images/bg/1.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--=== CTA Content Box ===-->
                    <div class="cta-content-box text-center text-white wow fadeInDown">
                        <h2 class="mb-35">Journey into the Heart of Sri Lanka's Natural Paradise</h2>
                        <a href="about.html" class="main-btn primary-btn">Contact Now<i class="far fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End CTA Section ======-->

    <!--====== Start Fact Section ======-->
    <section class="fact-section pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-journey"></i>
                        </div>
                        <h2 class="number"><span class="count">100</span>+</h2>
                        <p>Happy Travelers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInDown">
                        <div class="icon">
                            <i class="flaticon-tent-1"></i>
                        </div>
                        <h2 class="number"><span class="count">50</span>+</h2>
                        <p>Travels</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInUp">
                        <div class="icon">
                            <i class="flaticon-reviews"></i>
                        </div>
                        <h2 class="number"><span class="count">99.9</span>%</h2>
                        <p>Positive Reviews</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!--=== Counter Item ===-->
                    <div class="single-counter-item text-center mb-40 wow fadeInDown">
                        <div class="icon">
                            <i class="flaticon-award"></i>
                        </div>
                        <h2 class="number"><span class="count">5</h2>
                        <p>Awards Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Fact Section ======-->

    <!--====== Start Testimonial Section ======-->
    <section class="testimonial-section pt-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--=== Section Title ===-->
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title">Testimonials</span>
                        <h2>What Our Traveler Say About Our Tour Services</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-xl-center">
                <div class="col-xl-5 col-lg-12 order-2 order-xl-1">
                    <!--=== Testimonial Image ===-->
                    <div class="testimonial-one_image-box mb-40 wow fadeInLeft">
                        <img src="{{ asset('assets/Site/images/testimonial/3.png') }}" alt="Testimonial Image">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 order-1 order-xl-2">
                    <!--=== Testimonial Slider ===-->
                    <div class="testimonial-slider-one pl-lg-55 mb-40 wow fadeInRight">
                        <!--=== Testimonial Item ===-->
                        <div class="gw-testimonial-item">
                            <div class="testimonial-inner-content">
                                <div class="quote-rating-box">
                                    <div class="icon">
                                        <img src="{{ asset('assets/Site/images/testimonial/quote.png') }}" alt="quote icon">
                                    </div>
                                    <div class="ratings-box">
                                        <h4>Quality Services</h4>
                                        <ul class="ratings">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>My stay in Sri Lanka with CT Tours was absolutely amazing! From the lush tea plantations to the stunning beaches, every moment felt like a dream. The accommodations were top-notch, the food was delicious, and the staff was incredibly friendly and helpful. Can't wait to visit again!</p>
                                <div class="author-thumb-title">
                                    <div class="author-thumb">
                                        <img src="{{ asset('assets/Site/images/testimonial/author.png') }}" alt="Author Image">
                                    </div>
                                    <div class="author-title">
                                        <h3 class="title">Douglas D. Hall</h3>
                                        <p class="position">CEO & Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Testimonial Item ===-->
                        <div class="gw-testimonial-item">
                            <div class="testimonial-inner-content">
                                <div class="quote-rating-box">
                                    <div class="icon">
                                        <img src="{{ asset('assets/Site/images/testimonial/quote.png') }}" alt="quote icon">
                                    </div>
                                    <div class="ratings-box">
                                        <h4>Quality Services</h4>
                                        <ul class="ratings">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>I had the most incredible wildlife safari experience with CT Tours in Sri Lanka. Seeing elephants, leopards, and so many other amazing animals in their natural habitat was truly unforgettable. The attention to detail and safety measures taken by the team made me feel completely at ease. A must-do for any nature lover!</p>
                                <div class="author-thumb-title">
                                    <div class="author-thumb">
                                        <img src="{{ asset('assets/Site/images/testimonial/author.png') }}" alt="Author Image">
                                    </div>
                                    <div class="author-title">
                                        <h3 class="title">Douglas D. Hall</h3>
                                        <p class="position">CEO & Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Testimonial Item ===-->
                        <div class="gw-testimonial-item">
                            <div class="testimonial-inner-content">
                                <div class="quote-rating-box">
                                    <div class="icon">
                                        <img src="{{ asset('assets/Site/images/testimonial/quote.png') }}" alt="quote icon">
                                    </div>
                                    <div class="ratings-box">
                                        <h4>Quality Services</h4>
                                        <ul class="ratings">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>I can't praise CT Tours enough for the seamless and enjoyable trip they organized for us in Sri Lanka. The free internet access was a huge plus for staying connected with loved ones back home, and the eco-friendly initiatives, like using solar energy, resonated with my values. Thank you for a fantastic holiday!</p>
                                <div class="author-thumb-title">
                                    <div class="author-thumb">
                                        <img src="{{ asset('assets/Site/images/testimonial/author.png') }}" alt="Author Image">
                                    </div>
                                    <div class="author-title">
                                        <h3 class="title">Douglas D. Hall</h3>
                                        <p class="position">CEO & Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Testimonial Section ======-->    
@endsection
        