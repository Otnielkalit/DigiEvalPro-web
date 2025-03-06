@extends('public.layouts.master')

@section('content')
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Want to Analyze?</p>
                            <h1>DigiEval is solution</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">Services</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3>Analyze</h3>
                            <p>Give best to your products</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Support</h3>
                            <p>Get support all day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3>Recommendation</h3>
                            <p>Get best recomendations for your products</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/product-img-1.png"
                                    alt=""></a>
                        </div>
                        <h3>Usability</h3>
                        <p class="product-price"><span>Around</span> Rp. 500.000,00 </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/product-img-1.png"
                                    alt=""></a>
                        </div>
                        <h3>Sentiment Analyze</h3>
                        <p class="product-price"><span>Around</span> Rp. 500.000,00 </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/product-img-1.png"
                                    alt=""></a>
                        </div>
                        <h3>Code Refactoring</h3>
                        <p class="product-price"><span>Around</span> Rp. 500.000,00 </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/product-img-1.png"
                                    alt=""></a>
                        </div>
                        <h3>Cloud Integration Recommendations</h3>
                        <p class="product-price"><span>Around</span> Rp. 500.000,00 </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end product section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar1.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Wati <span>CEO of PT.xxx</span></h3>
                                <p class="testimonial-body">
                                    "Platform ini membantu kami memahami sentimen pelanggan terhadap produk baru kami.
                                    Analisisnya akurat dan sangat mudah digunakan!"
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar2.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Budi <span>CEO of PT.xxx</span></h3>
                                <p class="testimonial-body">
                                    "Kami menggunakan analisis produk ini untuk mengevaluasi fitur baru. Data yang
                                    dihasilkan sangat membantu dalam pengambilan keputusan!"
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar3.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Dodo <span>CEO of PT.xxx</span></h3>
                                <p class="testimonial-body">
                                    "Dulu saya kesulitan mengetahui produk mana yang paling diminati pelanggan.
                                    Sekarang, saya bisa melihat data analitik yang jelas dan akurat!"
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->

    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="https://youtu.be/iRuvHVWDpGk?si=u1ZgLkVs4eJHHdBd" class="video-play-btn popup-youtube"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Since Year 2023</p>
                        <h2>We are <span class="orange-text">DigiEval</span></h2>
                        <p> Ketahui bagaimana pelanggan merespons produk Anda dan ambil langkah strategis yang tepat.
                        </p>
                        <p>Keputusan Lebih Cerdas, Bisnis Lebih Maju!</p>
                        <a href="about.html" class="boxed-btn mt-4">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->
@endsection
