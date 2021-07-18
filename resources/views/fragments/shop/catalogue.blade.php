@extends('layouts.shop')
@section('title', 'Catalogo de Productos')

@section('content')
    <div class="page-header text-center" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        <div class="container">
            <h1 class="page-title">Catálogos de productos</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-with-filter">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Catálogo</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="categories-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner banner-cat banner-badge">
                            <a href="#">
                                <img src="{{ asset('images/category/boxed/banner-1.jpg') }}" alt="Banner">
                            </a>

                            <a class="banner-link" href="#">
                                <h3 class="banner-title">Dresses</h3><!-- End .banner-title -->
                                <span class="banner-link-text">Ver más</span>
                            </a><!-- End .banner-link -->
                        </div><!-- End .banner -->

                        <div class="banner banner-cat banner-badge">
                            <a href="#">
                                <img src="{{ asset('images/category/boxed/banner-2.jpg') }}" alt="Banner">
                            </a>

                            <a class="banner-link" href="#">
                                <h3 class="banner-title">Jackets</h3><!-- End .banner-title -->
                                <span class="banner-link-text">Ver más</span>
                            </a><!-- End .banner-link -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="banner banner-cat banner-badge">
                                    <a href="#">
                                        <img src="{{ asset('images/category/boxed/banner-3.jpg') }}" alt="Banner">
                                    </a>

                                    <a class="banner-link" href="#">
                                        <h3 class="banner-title">T-shirts</h3><!-- End .banner-title -->
                                        <span class="banner-link-text">Ver más</span>
                                    </a><!-- End .banner-link -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <div class="banner banner-cat banner-badge">
                                    <a href="#">
                                        <img src="{{ asset('images/category/boxed/banner-4.jpg') }}" alt="Banner">
                                    </a>

                                    <a class="banner-link" href="#">
                                        <h3 class="banner-title">Jeans</h3><!-- End .banner-title -->
                                        <span class="banner-link-text">Ver más</span>
                                    </a><!-- End .banner-link -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <div class="banner banner-cat banner-badge">
                            <a href="#">
                                <img src="{{ asset('images/category/boxed/banner-5.jpg') }}" alt="Banner">
                            </a>

                            <a class="banner-link" href="#">
                                <h3 class="banner-title">Bags</h3><!-- End .banner-title -->
                                <span class="banner-link-text">Ver más</span>
                            </a><!-- End .banner-link -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-sm-6 col-md-3">
                        <div class="banner banner-cat banner-badge">
                            <a href="#">
                                <img src="{{ asset('images/category/boxed/banner-6.jpg') }}" alt="Banner">
                            </a>

                            <a class="banner-link" href="#">
                                <h3 class="banner-title">Sportwear</h3><!-- End .banner-title -->
                                <span class="banner-link-text">Ver más</span>
                            </a><!-- End .banner-link -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-3 -->

                    <div class="col-sm-6 col-md-3 order-md-last">
                        <div class="banner banner-cat banner-badge">
                            <a href="#">
                                <img src="{{ asset('images/category/boxed/banner-8.jpg') }}" alt="Banner">
                            </a>

                            <a class="banner-link" href="#">
                                <h3 class="banner-title">Jumpers</h3><!-- End .banner-title -->
                                <span class="banner-link-text">Ver más</span>
                            </a><!-- End .banner-link -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-3 -->

                    <div class="col-md-6">
                        <div class="banner banner-cat banner-badge">
                            <a href="#">
                                <img src="{{ asset('images/category/boxed/banner-7.jpg') }}" alt="Banner">
                            </a>

                            <a class="banner-link" href="#">
                                <h3 class="banner-title">Shoes</h3><!-- End .banner-title -->
                                <span class="banner-link-text">Ver más</span>
                            </a><!-- End .banner-link -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .categories-page -->
    </div><!-- End .page-content -->
@endsection