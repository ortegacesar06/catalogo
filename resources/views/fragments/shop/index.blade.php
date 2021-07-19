@extends('layouts.shop')
@section('title', 'Inicio')

@section('content')
    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
            data-owl-options='{
                "dots": true,
                "nav": false, 
                "responsive": {
                    "1200": {
                        "nav": true,
                        "dots": false
                    }
                }
            }'>
            @foreach ($catalogs as $catalog)
                <div class="intro-slide" style="background-image: url(/storage/{{ $catalog->image_path }});">
                    <div class="container intro-content">
                        <div class="row justify-content-center">
                            <div class="col-auto col-sm-7 col-md-6 col-lg-5 text-center">
                                <h3 class="intro-subtitle text-warning mb-1">Catálogo</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">{{ $catalog->name }}</h1><!-- End .intro-title -->

                                <a href="{{ route('shop.catalog', ['catalog' => $catalog->id_catalog]) }}" class="btn btn-primary btn-round mt-4">
                                    <span>Ver más</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-md-6 offset-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .intro-content -->
                </div><!-- End .intro-slide -->                
            @endforeach
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="mb-5"></div><!-- End .mb-4 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Nuevos Productos</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">Todos</a>
                    </li>
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'>
                    @foreach ($new_products as $product)
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="{{ route('shop.single', ['id' => $product->id_product]) }}">
                                    <img src="/storage/{{ $product->image_path }}" alt="Product image" class="product-image">
                                </a>
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="{{ route('shop.catalog', ['catalog' => $catalog->id_catalog, 'category' => $product->category->id_category]) }}">{{ $product->category->catalog->name }} - {{ $product->category->name }}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="{{ route('shop.single', ['id' => $product->id_product]) }}">{{ $product->name }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    ${{ number_format($product->price, 2) }}
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->                        
                    @endforeach
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- End .mb-6 -->
@endsection