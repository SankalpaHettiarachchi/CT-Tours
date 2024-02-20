@extends('Site.layouts.layout_page')

@section('content')

    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url(assets/Site/images/bg/gallary_cover.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">Gallery</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->

    <!--====== Start Gallery Section ======-->
    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                @for($i = 1; $i <= 23; $i++)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item mb-30 wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/Site/images/gallery/gallary/' . $i . '.png') }}" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="{{ asset('assets/Site/images/gallery/gallary/' . $i . '.png') }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section><!--====== End Gallery Section ======-->
@endsection
        
