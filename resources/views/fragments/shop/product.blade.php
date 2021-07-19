@extends('layouts.shop')
@section('title', 'Producto')

@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop.catalog', ['catalog' => $product->category->catalog->id_catalog]) }}">{{ $product->category->catalog->name }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop.catalog', ['catalog' => $product->category->catalog->id_catalog, 'category' => $product->category->id_category]) }}">{{ $product->category->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-separated">
                            <figure class="product-separated-item">
                                <img src="/storage/{{ $product->image_path }}" data-zoom-image="{{ asset('images/products/single/sticky/1-big.jpg') }}" alt="product image">

                                <a href="#" id="btn-separated-gallery" class="btn-product-gallery">
                                    <i class="icon-arrows"></i>
                                </a>
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details sticky-content">
                            <h1 class="product-title">{{ $product->name }}</h1><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">${{ number_format($product->price, 2) }}</span>
                            </div><!-- End .product-price -->

                            <div class="product-content">
                                <p>{{ $product->description }}</p>
                            </div><!-- End .product-content -->

                            <div class="product-details-action">
                                <a href="#" class="btn-product btn-cart"><span>Añadir al carrito</span></a>
                            </div><!-- End .product-details-action -->

                            <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Categoría:</span>
                                    <a href="{{ route('shop.catalog', ['catalog' => $product->category->catalog->id_catalog, 'category' => $product->category->id_category]) }}">{{ $product->category->name }}</a>,
                                </div><!-- End .product-cat -->

                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Compartir:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->

                            <div class="accordion accordion-plus product-details-accordion" id="product-accordion">
                                <div class="card card-box card-sm">
                                    <div class="card-header" id="product-desc-heading">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#product-accordion-desc" aria-expanded="false" aria-controls="product-accordion-desc">
                                                Descripción
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="product-accordion-desc" class="collapse show" aria-labelledby="product-desc-heading" data-parent="#product-accordion">
                                        <div class="card-body">
                                            <div class="product-desc-content">
                                                <p>{{ $product->description }}</p>
                                            </div><!-- End .product-desc-content -->
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->

                                <div class="card card-box card-sm">
                                    <div class="card-header" id="product-info-heading">
                                        <h2 class="card-title">
                                            <a role="button" data-toggle="collapse" href="#product-accordion-info" aria-expanded="true" aria-controls="product-accordion-info">
                                                Información adicional
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="product-accordion-info" class="collapse" aria-labelledby="product-info-heading" data-parent="#product-accordion">
                                        <div class="card-body">
                                            <div class="product-desc-content">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                                                <h3>Fabric & care</h3>
                                                <ul>
                                                    <li>100% Polyester</li>
                                                    <li>Do not iron</li>
                                                    <li>Do not wash</li>
                                                    <li>Do not bleach</li>
                                                    <li>Do not tumble dry</li>
                                                    <li>Professional dry clean only</li>
                                                </ul>

                                                <h3>Size</h3>
                                                <p>S, M, L, XL</p>
                                            </div><!-- End .product-desc-content -->
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->
                            </div><!-- End .accordion -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <hr class="mt-3 mb-5">
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection

@section('scripts') 
    <script src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/jquery.elevateZoom.min.js') }}"></script>
@endsection