@extends('Site.layouts.layout_page')

@section('content')
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url(assets/Site/images/bg/about_cover.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">About Us</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->

    <!--====== Start Features Section ======-->
    <section class="features-section pt-100 pb-50">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-xl-5">
                    <!--=== Features Content Box ===-->
                    <div class="features-content-box pr-lg-70 mb-50 wow fadeInLeft">
                        <!--=== Section Title ===-->
                        <div class="section-title mb-30">
                            <span class="sub-title">Availability</span>
                            <h2>Explore the Best of Sri Lanka with CT Tours and Travels</h2>
                        </div>
                        <p class="mb-30">Experience the wonders of Sri Lanka with CT Tours and Travels. From thrilling wildlife safaris to immersive cultural tours, relaxing beach escapes, and rejuvenating wellness retreats, we offer unforgettable experiences for every traveler.</p>
                        <a href="#" class="main-btn filled-btn">Learn More<i class="far fa-paper-plane"></i></a>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="features-item-area mb-20 pl-lg-70">
                        <div class="row">
                            <div class="col-md-6">
                                <!--=== Fancy Icon Box ===-->
                                <div class="fancy-icon-box-two mb-30 wow fadeInUp">
                                    <div class="icon">
                                        <i class="flaticon-camping"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title">Wildlife Safaris</h3>
                                        <p>Experience thrilling encounters with exotic wildlife in their natural habitats</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--=== Fancy Icon Box ===-->
                                <div class="fancy-icon-box-two mb-30 wow fadeInUp">
                                    <div class="icon">
                                        <i class="flaticon-biking-mountain"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title">Cultural Tours</h3>
                                        <p>Delve deep into the fascinating history and diverse cultural heritage of Sri Lanka</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--=== Fancy Icon Box ===-->
                                <div class="fancy-icon-box-two mb-30 wow fadeInUp">
                                    <div class="icon">
                                        <i class="flaticon-fishing-2"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title">Beach Escapes</h3>
                                        <p>Unwind and soak up the sun on stunning tropical coastlines.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--=== Fancy Icon Box ===-->
                                <div class="fancy-icon-box-two mb-30 wow fadeInUp">
                                    <div class="icon">
                                        <i class="flaticon-caravan"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title">Wellness Retreats</h3>
                                        <p>Reconnect with your inner self amidst serene natural surroundings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Features Section ======-->

    <!--====== Start We Section ======-->
    <section class="who-we-section">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <!--=== We Image Box ===-->
                    <div class="we-image-box text-center text-lg-left wow fadeInDown">
                        <img src="{{ asset('assets/Site/images/gallery/about/intro.png') }}" class="radius-top-left-right-288" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <!--=== We Content Box ===-->
                    <div class="we-one_content-box">
                        <div class="section-title mb-30 wow fadeInUp">
                            <span class="sub-title">Who We Are</span>
                            <h2>Cultural, Natural, and Wildlife Expeditions Await!</h2>
                        </div>
                        <p class="wow fadeInDown">We are your gateway to unforgettable experiences in Sri Lanka. Specializing in cultural immersions, natural wonders, and thrilling wildlife expeditions, we offer curated tours that capture the essence of our vibrant island nation. With our expertise and passion for exploration, we invite you to discover the beauty and diversity of Sri Lanka with us.</p>
                        <div class="skill-wrapper wow fadeInUp">
                            <div class="single-skill-circle text-center">
                                <div class="inner-circle">
                                    <div class="line"></div>
                                    <span class="number">90%</span>
                                </div>
                                <h5>Saticfied Clients</h5>
                            </div>
                            <div class="single-skill-circle text-center">
                                <div class="inner-circle">
                                    <div class="line"></div>
                                    <span class="number">99%</span>
                                </div>
                                <h5>Success Rate</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End We Section ======-->    

    <!--====== Start What We Section ======-->
    <section class="we-section pt-100 pb-50">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-xl-6">
                    <div class="we-content-box mb-10 wow fadeInLeft">
                        <div class="section-title mb-30">
                            <span class="sub-title">Who We Are</span>
                            <h2>Why Choose Us for Your Travel Experiences?</h2>
                        </div>
                        <div class="features-list_one">
                            <div class="single-features-list mb-40">
                                <div class="icon-inner d-flex align-items-center">
                                    <div class="icon-check">
                                        <i class="fas fa-badge-check"></i>
                                    </div>
                                    <div class="icon">
                                        <i class="flaticon-helmet"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Safety First Always</h4>
                                    <p>Ensuring your well-being with rigorous safety measures and expert guidance on all our travel adventures.
                                    </p>
                                </div>
                            </div>
                            <div class="single-features-list mb-40">
                                <div class="icon-inner d-flex align-items-center">
                                    <div class="icon-check">
                                        <i class="fas fa-badge-check"></i>
                                    </div>
                                    <div class="icon">
                                        <i class="flaticon-best-price"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Low Price & Friendly</h4>
                                    <p>Offering budget-friendly options without compromising quality, alongside warm and welcoming service from our team.</p>
                                </div>
                            </div>
                            <div class="single-features-list mb-40">
                                <div class="icon-inner d-flex align-items-center">
                                    <div class="icon-check">
                                        <i class="fas fa-badge-check"></i>
                                    </div>
                                    <div class="icon">
                                        <i class="flaticon-travel"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Trusted Travel Guide</h4>
                                    <p>Providing reliable expertise and insider knowledge to guide you through unforgettable travel experiences with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="we-two_image-box mb-20">
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="we-image mb-30 wow fadeInLeft">
                                    <img src="{{ asset('assets/Site/images/gallery/about/1.png') }}" alt="we Image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="we-image mb-30 wow fadeInRight">
                                    <img src="{{ asset('assets/Site/images/gallery/about/2.png') }}" alt="we Image">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="we-image mb-30 pr-lg-30 text-md-end wow fadeInDown">
                                    <img src="{{ asset('assets/Site/images/gallery/about/3.png') }}" alt="we Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End What We Section ======-->    

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

        
        
