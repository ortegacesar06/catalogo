@extends('layouts.shop')
@section('title', 'Catalogo de Productos')

@section('content')
    <div class="page-header text-center" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        <div class="container">
            <h1 class="page-title">Catálogo</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-with-filter">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="categories-page">
            <div class="container">
                <div class="row">
                    @foreach ($catalogs as $item)
                        <div class="col-sm-4">
                            <div class="banner banner-cat banner-badge">
                                <a href="{{ route('shop.catalog', ['catalog' => $item->id_catalog]) }}">
                                    <div class="dummy_image_catalog" style="height: 250px; background-image: url(/storage/{{ $item->image_path }})"></div>
                                </a>

                                <a class="banner-link" href="{{ route('shop.catalog', ['catalog' => $item->id_catalog]) }}">
                                    <h3 class="banner-title">{{ $item->name }}</h3><!-- End .banner-title -->
                                    <span class="banner-link-text">Ver más</span>
                                </a><!-- End .banner-link -->
                            </div><!-- End .banner -->                       
                        </div><!-- End .col-sm-4 -->
                    @endforeach 
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .categories-page -->
    </div><!-- End .page-content -->
@endsection