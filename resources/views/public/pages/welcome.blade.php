@extends('public.layouts.master')

@section('content')
    <!-- Hero Slider Section - IMPROVED WITH LARGER TEXT AND BETTER SPACING -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <!-- Slide 1 -->
                <div class="item-slick1" style="background-image: url(assets/images/slide-01.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-120 p-b-50 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-101 cl0 respon2" style="font-size: 2.5rem;">
                                    Solusi Digital Modern
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-201 cl0 p-t-25 p-b-45 respon1" style="font-size: 4rem; font-weight: 700;">
                                    TRANSFORMASI DIGITAL
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="{{ route('service') }}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-25 p-tb-10 trans-04"
                                    style="font-size: 1.1rem;">
                                    Lihat Layanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="item-slick1" style="background-image: url(assets/images/slide-02.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-120 p-b-50 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="ltext-101 cl0 respon2" style="font-size: 2.5rem;">
                                    Teknologi Terdepan
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                <h2 class="ltext-201 cl0 p-t-25 p-b-45 respon1" style="font-size: 4rem; font-weight: 700;">
                                    CLOUD & AI SOLUTION
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="{{ route('service') }}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-25 p-tb-10 trans-04"
                                    style="font-size: 1.1rem;">
                                    Lihat Layanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="item-slick1" style="background-image: url(assets/images/slide-03.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-120 p-b-50 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                                <span class="ltext-101 cl0 respon2" style="font-size: 2.5rem;">
                                    User Experience
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                <h2 class="ltext-201 cl0 p-t-25 p-b-45 respon1" style="font-size: 4rem; font-weight: 700;">
                                    UI/UX DESIGN
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                <a href="{{ route('service') }}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-25 p-tb-10 trans-04"
                                    style="font-size: 1.1rem;">
                                    Lihat Layanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Slider Navigation -->
            <div class="wrap-slick1-dots"></div>
        </div>
    </section>

    <!-- Service Categories - Improved -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="p-b-35">
                <h3 class="ltext-103 cl5 txt-center">
                    Layanan Utama Kami
                </h3>
                <p class="txt-center p-t-10 stext-113 cl6 p-b-15">
                    Solusi digital terbaik untuk membantu bisnis Anda berkembang di era digital
                </p>
            </div>

            <div class="row">
                <!-- Category 1 -->
                <div class="col-md-6 col-lg-4 p-b-30">
                    <div
                        class="block1 wrap-pic-w position-relative rounded overflow-hidden shadow-sm transition-all hover-shadow">
                        <img src="assets/images/ui.jpg" alt="UI/UX Design" class="img-fluid transition-all hover-zoom"
                            style="height: 280px; object-fit: cover; width: 100%;">

                        <a href="{{ route('service') }}"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 bg-overlay-50">
                            <div class="block1-txt-child1 flex-col-l p-b-50">
                                <span class="block1-name ltext-102 trans-04 p-b-8 text-white">
                                    UI/UX DESIGN
                                </span>
                                <span class="stext-110 cl0">
                                    Desain antarmuka yang intuitif dan menarik
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0">
                                    Lihat Detail <i class="fa fa-long-arrow-right ml-2"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-6 col-lg-4 p-b-30">
                    <div
                        class="block1 wrap-pic-w position-relative rounded overflow-hidden shadow-sm transition-all hover-shadow">
                        <img src="assets/images/googlecloud.jpg" alt="Google Cloud"
                            class="img-fluid transition-all hover-zoom"
                            style="height: 280px; object-fit: cover; width: 100%;">

                        <a href="{{ route('service') }}"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 bg-overlay-50">
                            <div class="block1-txt-child1 flex-col-l p-b-50">
                                <span class="block1-name ltext-102 trans-04 p-b-8 text-white">
                                    GOOGLE CLOUD
                                </span>
                                <span class="stext-110 cl0">
                                    Solusi cloud computing terdepan untuk bisnis Anda
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0">
                                    Lihat Detail <i class="fa fa-long-arrow-right ml-2"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-6 col-lg-4 p-b-30">
                    <div
                        class="block1 wrap-pic-w position-relative rounded overflow-hidden shadow-sm transition-all hover-shadow">
                        <img src="assets/images/sentimen.jpg" alt="Analisis Sentimen"
                            class="img-fluid transition-all hover-zoom"
                            style="height: 280px; object-fit: cover; width: 100%;">

                        <a href="{{ route('service') }}"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 bg-overlay-50">
                            <div class="block1-txt-child1 flex-col-l p-b-50">
                                <span class="block1-name ltext-102 trans-04 p-b-8 text-white">
                                    ANALISIS SENTIMEN
                                </span>
                                <span class="stext-110 cl0">
                                    Dapatkan wawasan dari data pelanggan Anda
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0">
                                    Lihat Detail <i class="fa fa-long-arrow-right ml-2"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Services Section - REMOVED RATINGS -->
    <section class="bg0 p-t-60 p-b-90">
        <div class="container">
            <!-- Section Header -->
            <div class="p-b-35">
                <h3 class="ltext-103 cl5 txt-center">
                    Layanan Unggulan
                </h3>
                <p class="txt-center p-t-10 stext-113 cl6 p-b-15">
                    Layanan digital terbaik untuk kebutuhan bisnis modern
                </p>
            </div>

            <!-- Service Cards - RATINGS REMOVED -->
            <div class="row">
                @forelse ($jasas as $jasa)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35">
                        <div class="block2 shadow-sm rounded overflow-hidden hover-shadow transition-all h-100">
                            <div class="block2-pic hov-img0 position-relative">
                                <img src="{{ asset('storage/' . $jasa->gambar) }}" alt="{{ $jasa->nama }}"
                                    class="img-fluid w-100" style="height: 220px; object-fit: cover;">

                                <div class="price-tag position-absolute"
                                    style="top: 10px; right: 10px; background-color: rgba(0,0,0,0.7); padding: 5px 10px; border-radius: 20px;">
                                    <span class="stext-105 cl0">
                                        Rp{{ number_format($jasa->harga, 0, ',', '.') }}
                                    </span>
                                </div>

                                <a href="{{ route('detail-service', $jasa->id) }}"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    Selengkapnya
                                </a>
                            </div>

                            <div class="block2-txt p-4">
                                <div class="block2-txt-child1 mb-2">
                                    <a href="{{ route('detail-service', $jasa->id) }}"
                                        class="text-dark text-decoration-none">
                                        <h5 class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 font-weight-bold">
                                            {{ $jasa->nama }}
                                        </h5>
                                    </a>

                                    <p class="stext-105 cl3" style="min-height: 60px;">
                                        Solusi digital profesional untuk kebutuhan perusahaan Anda
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center p-5">
                            <i class="fa fa-info-circle fa-3x mb-3"></i>
                            <h4>Tidak ada layanan tersedia</h4>
                            <p class="mb-0">Silakan kunjungi kembali nanti untuk melihat layanan kami.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- View More Button -->
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="{{ route('service') }}"
                    class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Lihat Semua Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="p-t-60 p-b-60" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 p-b-30">
                    <h3 class="mtext-105 cl2">Siap untuk memulai proyek digital Anda?</h3>
                    <p class="stext-106 cl6 p-t-15">
                        Konsultasikan kebutuhan bisnis digital Anda dengan tim ahli kami.
                        Kami siap memberikan solusi terbaik sesuai dengan kebutuhan Anda.
                    </p>
                </div>
                <div class="col-lg-4 p-b-30">
                    <a href="#" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                        Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Custom stylesheet for additional features -->
    <style>
        .transition-all {
            transition: all 0.3s ease;
        }

        .hover-shadow:hover {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }

        .bg-overlay-50 {
            background: rgba(0, 0, 0, 0.5);
        }

        .hover-zoom {
            transition: transform 0.3s ease;
        }

        .hover-zoom:hover {
            transform: scale(1.05);
        }

        .text-white {
            color: #fff !important;
        }

        /* Improved header styles */
        .section-slide {
            min-height: 600px;
        }

        .slick1 .item-slick1:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .slick1 .container {
            position: relative;
            z-index: 2;
        }
    </style>
@endsection
