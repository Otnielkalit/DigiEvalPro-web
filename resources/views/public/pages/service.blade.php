@extends('public.layouts.master')

@section('content')
    <!-- Enhanced Page Header Section with Background Image and Overlay -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-140" style="background-image: url('assets/images/services-bg.jpg'); background-position: center; background-size: cover; position: relative;">
        <div class="overlay-header" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.5));"></div>
        <div class="position-relative" style="z-index: 2;">
            <h2 class="ltext-105 cl0 txt-center animated fadeInDown" style="font-size: 4rem; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                {{ $title }}
            </h2>
            <p class="cl0 txt-center m-t-10 m-b-15 animated fadeIn" style="max-width: 700px; margin-left: auto; margin-right: auto; font-size: 1.2rem;">
                Solusi digital terbaik untuk kebutuhan bisnis Anda
            </p>
            <div class="breadcrumb-custom txt-center m-t-15 animated fadeInUp">
                <a href="{{ route('home') }}" class="cl0 hov-cl1">Beranda</a>
                <span class="cl0 m-l-9 m-r-9">›</span>
                <span class="cl0">{{ $title }}</span>
            </div>
        </div>
    </section>

    <!-- Enhanced Services Card Layout Section -->
    <section class="bg0 p-t-70 p-b-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-b-30">
                    <h3 class="ltext-104 cl2 text-center">Semua Layanan Digital</h3>
                    <div class="section-divider m-b-40"></div>
                </div>

                <!-- Services Cards -->
                <div class="col-lg-12">
                    @if(count($jasas) > 0)
                        <div class="row">
                            @foreach($jasas as $jasa)
                                <div class="col-md-4 p-b-40">
                                    <div class="card-service shadow hover-shadow transition-all rounded overflow-hidden h-100">
                                        <!-- Card Image with Zoom Effect -->
                                        <div class="position-relative overflow-hidden card-img-container">
                                            <a href="{{ route('detail-service', $jasa->id) }}" class="d-block">
                                                <img src="{{ asset('storage/' . $jasa->gambar) }}" alt="{{ $jasa->nama }}" class="w-100 transition-all hover-zoom" style="height: 240px; object-fit: cover;">
                                            </a>
                                            <!-- Category Badge -->
                                            <div class="category-badge">
                                                <span class="bg1 cl0 p-lr-10 p-tb-5" style="border-radius: 20px; font-weight: 500;">Digital Solution</span>
                                            </div>
                                            <!-- Price Badge -->
                                            <div class="price-badge">
                                                <span class="bg-dark cl0 p-lr-10 p-tb-5" style="border-radius: 20px; font-weight: 500;">Rp{{ number_format($jasa->harga, 0, ',', '.') }}</span>
                                            </div>
                                        </div>

                                        <!-- Card Content -->
                                        <div class="p-4">
                                            <h4 class="ltext-108 cl2 m-b-15 hover-cl1 transition-all" style="min-height: 60px; font-weight: 600;">
                                                <a href="{{ route('detail-service', $jasa->id) }}" class="cl2 hov-cl1 trans-04">
                                                    {{ $jasa->nama }}
                                                </a>
                                            </h4>

                                            <p class="stext-117 cl6 m-b-20">
                                                Solusi digital profesional dengan pendekatan modern untuk kebutuhan bisnis Anda. Tingkatkan performa bisnis dengan layanan kami.
                                            </p>

                                            <!-- Card Footer -->
                                            <div class="d-flex justify-content-between align-items-center p-t-15 border-top">
                                                <span class="stext-111 cl6">
                                                    <i class="fa fa-calendar-alt m-r-5"></i> Update: 22 Maret 2025
                                                </span>
                                                <a href="{{ route('detail-service', $jasa->id) }}" class="btn-link flex-c-m cl1 size-sm bg-none hov-btn2 p-lr-0 trans-04 m-tb-10">
                                                    Lihat Detail
                                                    <i class="fa fa-long-arrow-right m-l-9"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Enhanced Pagination -->
                        <div class="row">
                            <div class="col-12">
                                <div class="flex-c-m w-full p-t-45">
                                    <div class="pagination-container">
                                        <!-- Previous Page Button -->
                                        <a href="{{ $jasas->previousPageUrl() }}" class="pagination-btn prev-btn {{ $jasas->onFirstPage() ? 'disabled' : '' }}">
                                            <i class="fa fa-angle-left"></i>
                                        </a>

                                        <!-- Page Numbers -->
                                        <div class="flex-w flex-c-m pagination-numbers">
                                            @for ($i = 1; $i <= $jasas->lastPage(); $i++)
                                                <a href="{{ $jasas->url($i) }}"
                                                   class="flex-c-m pagination-item trans-04 m-all-7 {{ $i == $jasas->currentPage() ? 'active-pagination' : '' }}">
                                                    {{ $i }}
                                                </a>
                                            @endfor
                                        </div>

                                        <!-- Next Page Button -->
                                        <a href="{{ $jasas->nextPageUrl() }}" class="pagination-btn next-btn {{ !$jasas->hasMorePages() ? 'disabled' : '' }}">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Improved Empty State -->
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="empty-state text-center p-5 shadow-sm rounded">
                                    <img src="assets/images/empty-state.svg" alt="Empty State" class="m-b-30" style="max-width: 200px;">
                                    <h3 class="m-b-20">Tidak ada layanan tersedia saat ini</h3>
                                    <p class="m-b-30 stext-117 cl6">Kami sedang mempersiapkan layanan-layanan terbaik untuk kebutuhan digital Anda. Silakan kunjungi kembali dalam beberapa waktu.</p>
                                    <a href="{{ route('home') }}" class="flex-c-m stext-101 cl0 size-107 bg1 bor2 hov-btn1 p-lr-15 trans-04 m-auto">
                                        Kembali ke Beranda
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="p-t-60 p-b-60" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 p-b-30">
                    <h3 class="mtext-105 cl2" style="font-weight: 600;">Butuh layanan digital yang disesuaikan dengan kebutuhan Anda?</h3>
                    <p class="stext-106 cl6 p-t-15">
                        Tim kami siap membantu mewujudkan kebutuhan digital perusahaan Anda dengan solusi yang tepat dan efisien.
                        Konsultasikan kebutuhan Anda dengan ahli kami sekarang!
                    </p>
                </div>
                <div class="col-lg-5 p-b-30">
                    <div class="cta-button text-lg-right text-center">
                        <a href="#" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 d-inline-flex">
                            <i class="fa fa-comments m-r-10"></i> Hubungi Konsultan Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom stylesheet for enhanced styling -->
    <style>
        /* General Transitions */
        .transition-all {
            transition: all 0.3s ease;
        }

        /* Card Hover Effects */
        .hover-shadow:hover {
            box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1)!important;
            transform: translateY(-5px);
        }

        .hover-zoom {
            transition: transform 0.5s ease;
        }

        .hover-zoom:hover {
            transform: scale(1.08);
        }

        .hover-cl1:hover {
            color: #717fe0 !important;
        }

        /* Card Image Container */
        .card-img-container {
            position: relative;
        }

        /* Category Badge */
        .category-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 2;
        }

        /* Price Badge */
        .price-badge {
            position: absolute;
            bottom: 15px;
            right: 15px;
            z-index: 2;
        }

        /* Improved Pagination */
        .pagination-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pagination-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 5px;
            background-color: #f1f1f1;
            color: #333;
            transition: all 0.3s ease;
        }

        .pagination-btn:hover:not(.disabled) {
            background-color: #717fe0;
            color: #fff;
        }

        .pagination-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .pagination-numbers {
            margin: 0 10px;
        }

        .pagination-item {
            width: 40px;
            height: 40px;
            border-radius: 5px;
            background-color: #f1f1f1;
            color: #333;
            font-weight: 500;
        }

        .pagination-item:hover {
            background-color: #e6e6e6;
        }

        .active-pagination {
            background-color: #717fe0 !important;
            color: #fff !important;
        }

        /* Button Link Style */
        .btn-link {
            color: #717fe0;
            font-weight: 500;
        }

        .btn-link:hover {
            color: #5965b2;
        }

        /* Enhanced Header Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .fadeInDown {
            animation-name: fadeInDown;
        }

        .fadeIn {
            animation-name: fadeIn;
            animation-delay: 0.3s;
        }

        .fadeInUp {
            animation-name: fadeInUp;
            animation-delay: 0.6s;
        }

        /* Section Divider */
        .section-divider {
            width: 80px;
            height: 3px;
            background-color: #717fe0;
            margin: 15px auto;
        }
    </style>
@endsection
