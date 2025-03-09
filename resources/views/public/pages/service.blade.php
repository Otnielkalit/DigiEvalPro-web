@extends('public.layouts.master')

@section('content')
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See our services</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row product-lists">
                <div class="col-lg-4 col-md-6 text-center strawberry">
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
                <div class="col-lg-4 col-md-6 text-center berry">
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
                <div class="col-lg-4 col-md-6 text-center lemon">
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
                <div class="col-lg-4 col-md-6 text-center">
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
@endsection