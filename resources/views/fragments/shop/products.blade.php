@extends('layouts.shop')
@section('title', $catalog->name)

@section('styles')    
    <link rel="stylesheet" href="{{ asset('css/plugins/nouislider/nouislider.css') }}">
@endsection

@section('content')
    <div class="page-header text-center" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        <div class="container">
            <h1 class="page-title">Listado de Productos <span>{{ $catalog->name }}</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $catalog->name }}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <div class="products mb-3">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-6 col-md-4 col-lg-4">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="{{ route('shop.single', ['id' => $product->id_product]) }}">
                                                <img src="/storage/{{ $product->image_path }}" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action">
                                                <a href="{{ route('cart.add', ['id' => $product->id_product]) }}" class="btn-product btn-cart"><span>Añadir al carrito</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="{{ route('shop.catalog', ['catalog' => $catalog->id_catalog, 'category' => $product->category->id_category]) }}">{{ $product->category->name }}</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="{{ route('shop.single', ['id' => $product->id_product]) }}">{{ $product->name }}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                ${{ number_format($product->price, 2)}}
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 -->                                
                            @endforeach
                            @if (count($products) === 0)
                                <div class="col-12 col-md-12 col-lg-12">
                                    <p class="text-center font-italic pt-4 pb-4" style="width: 100%;">No hay elementos para mostrar.</p>
                                </div>
                            @endif
                        </div><!-- End .row -->
                    </div><!-- End .products -->

                    {{ $products->links() }}
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filtros:</label>
                            <a href="{{ route('shop.catalog', ['catalog' => $catalog->id_catalog]) }}">Limpiar todo</a>
                        </div><!-- End .widget widget-clean -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    Categorías
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">
                                        @php
                                            $index = 0;
                                        @endphp
                                        @foreach ($catalog->categories as $category)
                                            <div class="filter-item">
                                                <a href="{{ route('shop.catalog', ['catalog' => $catalog->id_catalog, 'category' => $category->id_category]) }}" class="text-dark">- {{ $category->name }}</a>
                                            </div><!-- End .filter-item --> 
                                            @php
                                                $index += 1;
                                            @endphp                                           
                                        @endforeach
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection

@section('scripts')
    <script src="{{ asset('js/wNumb.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
@endsection