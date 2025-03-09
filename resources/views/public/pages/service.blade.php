@extends('public.layouts.master')

@section('content')
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See Our Service</p>
                        <h1>List Service</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('detail-service') }}">
                            <img src="assets/img/products/testing-SUS-untuk-UI-UX.jpg" alt="News Image"
                                class="latest-news-img">
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('detail-service') }}">Usability</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 20 Februari, 2025</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('detail-service') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('detail-service') }}">
                            <img src="assets/img/products/2023-06-19_165219_36146_carousel_portofolio_2.png"
                                alt="News Image" class="latest-news-img">
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('detail-service') }}">Sentiment Analyze</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 20 Februari, 2025</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('detail-service') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('detail-service') }}">
                            <img src="assets/img/products/650cd2d624d8e04fe4b9a23e_LinkedIn_Aug_2.png" alt="News Image"
                                class="latest-news-img">
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('detail-service') }}">Code Refactoring</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 20 Februari, 2025</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('detail-service') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('detail-service') }}">
                            <div class="latest-news-bg news-bg-4"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('detail-service') }}">Fall in love with the fresh orange</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('detail-service') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('detail-service') }}">
                            <div class="latest-news-bg news-bg-5"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('detail-service') }}">Why the berries always look delecious</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('detail-service') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('detail-service') }}">
                            <div class="latest-news-bg news-bg-6"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('detail-service') }}">Love for fruits are genuine of John Doe</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2018</span>
                            </p>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                laborum autem, dolores inventore, beatae nam.</p>
                            <a href="{{ route('detail-service') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a class="active" href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
