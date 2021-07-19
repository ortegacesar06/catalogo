@extends('layouts.shop')
@section('title', 'Carrito de compras')

@section('content')
    <div class="page-header text-center" style="background-image: url({{ asset('images/page-header-bg.jpg') }})">
        <div class="container">
            <h1 class="page-title">Carrito de compras</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                        <tr>
                                            <td class="product-col">
                                                <div class="product">
                                                    <figure class="product-media">
                                                        <a href="{{ route('shop.single', ['id' => $item->model->id_product]) }}">
                                                            <img src="/storage/{{ $item->model->image_path }}" alt="Product image">
                                                        </a>
                                                    </figure>
    
                                                    <h3 class="product-title">
                                                        <a href="{{ route('shop.single', ['id' => $item->model->id_product]) }}">{{ $item->name }}</a>
                                                    </h3><!-- End .product-title -->
                                                </div><!-- End .product -->
                                            </td>
                                            <td class="price-col">${{ $item->price }}</td>
                                            <td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input name="rows[]" type="hidden" value="{{ $item->rowId }}">
                                                    <input name="qty[]" type="number" class="form-control" value="{{ $item->qty }}" min="1" max="10" step="1" data-decimals="0" required>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
                                            <td class="total-col">${{ $item->qty * $item->price }}</td>
                                            <td class="remove-col"><a href="{{ route('cart.remove', ['row' => $item->rowId ]) }}" class="btn-remove"><i class="icon-close"></i></a></td>
                                        </tr>                                    
                                    @endforeach
                                </tbody>
                            </table><!-- End .table table-wishlist -->
    
                            <div class="cart-bottom">
                                <button type="submit" class="btn btn-outline-dark-2"><span>ACTUALIZAR CARRITO</span><i class="icon-refresh"></i></button>
                            </div><!-- End .cart-bottom -->

                        </form>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Total del carrito</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>${{ Cart::subtotal() }}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    
                                    <tr class="summary-subtotal">
                                        <td>Impuestos:</td>
                                        <td>${{ Cart::tax() }}</td>
                                    </tr><!-- End .summary-subtotal -->

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>${{ Cart::total() }}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="#" class="btn btn-outline-primary-2 btn-order btn-block">FINALIZAR COMPRA</a>
                        </div><!-- End .summary -->

                        <a href="/catalogo" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUAR COMPRANDO</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
@endsection