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
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
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
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{ asset('images/products/table/product-1.jpg') }}" alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">Beige knitted elastic runner shoes</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">$84.00</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">$84.00</td>
                                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{ asset('images/products/table/product-2.jpg') }}" alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#">Blue utility pinafore denim dress</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">$76.00</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->                                 
                                    </td>
                                    <td class="total-col">$76.00</td>
                                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                                </tr>
                            </tbody>
                        </table><!-- End .table table-wishlist -->

                        <div class="cart-bottom">
                            <a href="#" class="btn btn-outline-dark-2"><span>ACTUALIZAR CARRITO</span><i class="icon-refresh"></i></a>
                        </div><!-- End .cart-bottom -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Total del carrito</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>$160.00</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-shipping">
                                        <td>Envío:</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="free-shipping">Gratuito</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$0.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="standart-shipping">Estándar:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$10.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                                <label class="custom-control-label" for="express-shipping">Express:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$20.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-estimate">
                                        <td>Estimación para tu país<br> <a href="dashboard.html">Cambiar dirección</a></td>
                                        <td>&nbsp;</td>
                                    </tr><!-- End .summary-shipping-estimate -->

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>$160.00</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">FINALIZAR COMPRA</a>
                        </div><!-- End .summary -->

                        <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUAR COMPRANDO</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
@endsection