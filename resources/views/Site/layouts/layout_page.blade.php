<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Adventure, Tours, Travel">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>CT Tours</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/Site/images/favicon.ico') }}" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/fonts/flaticon/flaticon_gowilds.css') }}">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/fonts/fontawesome/css/all.min.css') }}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/vendor/magnific-popup/dist/magnific-popup.css') }}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/vendor/slick/slick.css') }}">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/vendor/jquery-ui/jquery-ui.min.css') }}">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/vendor/nice-select/css/nice-select.css') }}">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/vendor/animate.css') }}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/css/default.css') }}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('assets/Site/css/style.css') }}">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div><!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="search" class="form_control" placeholder="Search here" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        
        <!--====== Start Header ======-->
        <header class="header-area header-three">
            <!--====== Header Top Bar ======-->
            <div class="header-top-bar pt-30 pb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 d-none d-xl-block">
                            <!--====== Site Branding ======-->
                            <div class="site-brading">
                                <a href="index-3.html" class="brand-logo"><img src="{{ asset('assets/Site/images/logo/CT_Logo_white.png') }}" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-12">
                            <!--====== Information Wrapper ======-->
                            <div class="information-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-map-marker-alt"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Office Address</span>
                                                    <h5>583 Main Street, USA</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Email Address</span>
                                                    <h5><a href="mailto:support@gmail.com">support@gmail.com</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-info-item-two">
                                            <div class="inner-info">
                                                <div class="icon">
                                                    <i class="far fa-phone-plus"></i>
                                                </div>
                                                <div class="info">
                                                    <span class="title">Drop a Line</span>
                                                    <h5><a href="tel:+000(123)45688">+000 (123) 456 88</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Header Navigation ======-->
            <div class="header-navigation">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <div class="primary-menu gray-bg">
                        <!--====== Site Branding ======-->
                        <div class="site-brading d-block d-xl-none">
                            <a href="index-3.html" class="brand-logo"><img src="{{ asset('assets/Site/images/logo/logo-black.png') }}" alt="Logo"></a>
                        </div>
                        <!--====== Nav Menu ======-->
                        <div class="nav-menu">
                            <!--====== Site Branding ======-->
                            <div class="mobile-logo mb-30 d-block d-xl-none">
                                <a href="index.html" class="brand-logo"><img src="{{ asset('assets/Site/images/logo/logo-black.png') }}" alt="Site Logo"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--====== main Menu ======-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item"><a href="{{ Route('home') }}">Home</a></li>
                                    <li class="menu-item"><a href="{{ Route('about') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ Route('gallary') }}">Gallary</a></li>
                                    <li class="menu-item"><a href="{{ Route('contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="contact.html" class="main-btn secondary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                        <!--====== Nav Right Item ======-->
                        <div class="nav-right-item">
                            <div class="menu-button d-xl-block d-none">
                                <a href="contact.html" class="main-btn primary-btn">Book Now<i class="fas fa-paper-plane"></i></a>
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--====== End Header ======-->

        @yield('content')

        <!--====== Start Gallery Section ======-->
        <section class="gallery-section mbm-150">
            <div class="container-fluid">
                <div class="slider-active-5-item wow fadeInUp">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/Site/images/gallery/footer/1.png') }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('assets/Site/images/gallery/footer/1.png') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/Site/images/gallery/footer/2.png') }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('assets/Site/images/gallery/footer/2.png') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/Site/images/gallery/footer/3.png') }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('assets/Site/images/gallery/footer/3.png') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/Site/images/gallery/footer/4.png') }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('assets/Site/images/gallery/footer/4.png') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/Site/images/gallery/footer/5.png') }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('assets/Site/images/gallery/footer/5.png') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/Site/images/gallery/footer/6.png') }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('assets/Site/images/gallery/footer/6.png') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Gallery Section ======-->

        <!--====== Start Footer ======-->
        <footer class="main-footer black-bg pt-230">
            <div class="container">
                <!--=== Footer Top ===-->
                <div class="footer-top pt-40 wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Location</span>
                                    <p>No 252, Koggala, Habaraduwa 80000 Galle, Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Email</span>
                                    <p><a href="mailto:info@CTTours.com">info@CTTours.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Single Info Item ===-->
                            <div class="single-info-item mb-40">
                                <div class="icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span class="title">Hotline</span>
                                    <p><a href="tel:+9477 871 5645">+9477 871 5645</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Social Box ===-->
                            <div class="social-box mb-40 float-lg-end">
                                <ul class="social-link">
                                    <li><a href="https://www.facebook.com/profile.php?id=100063650349840&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100063650349840&mibextid=ZbWKwL"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100063650349840&mibextid=ZbWKwL"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100063650349840&mibextid=ZbWKwL"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Widget ===-->
                <div class="footer-widget-area pt-75 pb-30">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget about-company-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">About</h4>
                                <div class="footer-content">
                                    <p>Celebrate Travel and Unforgettable Experiences with CT Tours. Explore Sri Lanka's Beauty, Culture, and Adventure. Let's Create Memories Together!</p>
                                    <a href="#" class="footer-logo"><img src="{{ asset('assets/Site/images/logo/CT_Logo.png') }}" alt="Site Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget service-nav-widget mb-40 pl-lg-70 wow fadeInDown">
                                <h4 class="widget-title">Services</h4>
                                <div class="footer-content">
                                    <ul class="footer-widget-nav">
                                        <li><a href="#">Transportation</a></li>
                                        <li><a href="#">Foods</a></li>
                                        <li><a href="#">Accommodation</a></li>
                                        <li><a href="#">Activities</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget service-nav-widget mb-40 pl-lg-70 wow fadeInDown">
                                <h4 class="widget-title">Pages</h4>
                                <div class="footer-content">
                                    <ul class="footer-widget-nav">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Page3</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!--=== Footer Widget ===-->
                            <div class="footer-widget footer-newsletter-widget mb-40 pl-lg-100 wow fadeInUp">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="footer-content">
                                    <p>Get the latest updates. Subscribe to our newsletter!</p>
                                    <form>
                                        <div class="form_group">
                                            <label><i class="far fa-paper-plane"></i></label>
                                            <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Footer Copyright ===-->
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Footer Text ===-->
                            <div class="footer-text">
                                <p>Copy@ 2023 <span style="color: #F7921E;">CT Tours & Travels</span>, All Right Reserved</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--=== Footer Nav ===-->
                            <div class="footer-nav float-lg-end">
                                <ul>
                                    <li><a href="#">Design & Developed By <span style="color: #F7921E;">DevCada</span> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->

        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{ asset('assets/Site/vendor/jquery-3.6.0.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/Site/vendor/popper/popper.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/Site/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('assets/Site/vendor/slick/slick.min.js') }}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('assets/Site/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Isotope js ======-->
        <script src="{{ asset('assets/Site/vendor/isotope.min.js') }}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{ asset('assets/Site/vendor/imagesloaded.min.js') }}"></script>
        <!--====== Counterup js ======-->
        <script src="{{ asset('assets/Site/vendor/jquery.counterup.min.js') }}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{ asset('assets/Site/vendor/jquery.waypoints.js') }}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{ asset('assets/Site/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <!--====== jquery UI js ======-->
        <script src="{{ asset('assets/Site/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <!--====== WOW js ======-->
        <script src="{{ asset('assets/Site/vendor/wow.min.js') }}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('assets/Site/js/theme.js') }}"></script>
    </body>
</html>