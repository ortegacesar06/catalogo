<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>@yield('title') | Eslyn</title>
            <meta name="keywords" content="HTML5 Template">
            <meta name="description" content="Lorem dolor sit amet, aprendendo in program.">
            <meta name="author" content="p-themes">
            <!-- Favicon -->
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
            <link rel="manifest" href="{{ asset('images/icons/site.html') }}">
            <link rel="mask-icon" href="{{ asset('images/icons/safari-pinned-tab.svg') }}" color="#666666">
            <link rel="shortcut icon" href="{{ asset('images/icons/favicon.ico') }}">
            <meta name="apple-mobile-web-app-title" content="Eslyn">
            <meta name="application-name" content="Eslyn">
            <meta name="msapplication-TileColor" content="#cc9966">
            <meta name="msapplication-config" content="{{ asset('images/icons/browserconfig.xml') }}">
            <meta name="theme-color" content="#ffffff">
            <link rel="stylesheet" href="{{ asset('vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
            <!-- Plugins CSS File -->
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/plugins/owl-carousel/owl.carousel.css') }}">
            <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('css/plugins/jquery.countdown.css') }}">
            <!-- Main CSS File -->
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/skins/skin-demo-4.css') }}">
            <link rel="stylesheet" href="{{ asset('css/demos/demo-4.css') }}">
            @yield('styles')
    </head>

    <body>
        <div class="page-wrapper">
            <header class="header header-intro-clearance header-4">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <a href="tel:#"><i class="icon-phone"></i>Contacto: +0123 456 789</a>
                        </div><!-- End .header-left -->

                        <div class="header-right">

                            <ul class="top-menu">
                                <li>
                                    <a href="#">Links</a>
                                    <ul>
                                        <li><a class="pt-1 pb-1" href="#signin-modal" data-toggle="modal">Ingresar / Registrarse</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .top-menu -->
                        </div><!-- End .header-right -->

                    </div><!-- End .container -->
                </div><!-- End .header-top -->

                <div class="header-middle">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Alternar menú móvil</span>
                                <i class="icon-bars"></i>
                            </button>
                            
                            <a href="index.html" class="logo">
                                <img src="{{ asset('images/demos/demo-4/logo.png') }}" alt="Molla Logo" width="105" height="25">
                            </a>
                        </div><!-- End .header-left -->

                        <div class="header-center">
                            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper search-wrapper-wide">
                                        <label for="q" class="sr-only">Buscar</label>
                                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Buscar producto..." required>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                        </div>

                        <div class="header-right">
                            <!--<div class="wishlist">
                                <a href="wishlist.html" title="Wishlist">
                                    <div class="icon">
                                        <i class="icon-heart-o"></i>
                                        <span class="wishlist-count badge">3</span>
                                    </div>
                                    <p>Lista de deseos</p>
                                </a>
                            </div>--><!-- End .compare-dropdown -->

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <div class="icon">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="cart-count">2</span>
                                    </div>
                                    <p>Carrito</p>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Beige knitted elastic runner shoes</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $84.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{ asset('images/products/cart/product-1.jpg') }}" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Blue utility pinafore denim dress</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $76.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{ asset('images/products/cart/product-2.jpg') }}" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$160.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-primary">Ver carrito</a>
                                        <a href="checkout.html" class="btn btn-outline-primary-2"><span>Comprar</span><i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->

                <div class="header-bottom sticky-header">
                    <div class="container">
                        <div class="header-left">
                            <div class="dropdown category-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                    Ver catálogos <i class="icon-angle-down"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <nav class="side-nav">
                                        <ul class="menu-vertical sf-arrows">
                                            <li class="item-lead"><a href="#">Catálogo 1</a></li>
                                            <li class="item-lead"><a href="#">Catálogo 2</a></li>
                                            <li><a href="#">Catálogo 3</a></li>
                                            <li><a href="#">Catálogo 4</a></li>
                                            <li><a href="#">Catálogo 5</a></li>
                                        </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .category-dropdown -->
                        </div><!-- End .header-left -->

                        <div class="header-center">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="megamenu-container active">
                                        <a href="#">Inicio</a>
                                    </li>
                                    <li>
                                        <a href="#">Catálogo</a>
                                    </li>
                                    <li>
                                        <a href="#">Pedidos</a>
                                    </li>
                                    <li>
                                        <a href="#">Contacto</a>
                                    </li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-center -->

                        <div class="header-right">
                            <i class="la la-lightbulb-o"></i><a href="#">Mis pedidos</a>
                        </div>
                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->

            <main class="main">
                @yield('content')
            </main><!-- End .main -->

            <footer class="footer">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget widget-about">
                                    <img src="{{ asset('images/demos/demo-4/logo-footer.png') }}" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                    <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                                    <div class="widget-call">
                                        <i class="icon-phone"></i>
                                        ¿Tienes preguntas? Llámanos 24/7
                                        <a href="tel:#">+0123 456 789</a>         
                                    </div><!-- End .widget-call -->
                                </div><!-- End .widget about-widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Redes sociales</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Youtube</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Menu</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Inicio</a></li>
                                        <li><a href="#">Catalogo</a></li>
                                        <li><a href="#">Contacto</a></li>
                                        <li><a href="#">Pedidos</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Ingresar</a></li>
                                        <li><a href="cart.html">Ver carrito</a></li>
                                        <li><a href="cart.html">Mis pedidos</a></li>
                                        <li><a href="cart.html">Mis compras</a></li>
                                        <li><a href="#">Ayuda</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .footer-middle -->

                <div class="footer-bottom">
                    <div class="container">
                        <p class="footer-copyright">Copyright © {{ date('Y') }} Eslyn. Todos los derechos reservados.</p><!-- End .footer-copyright -->
                        <figure class="footer-payments">
                            <img src="{{ asset('images/payments.png') }}" alt="Payment methods" width="272" height="20">
                        </figure><!-- End .footer-payments -->
                    </div><!-- End .container -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->
        </div><!-- End .page-wrapper -->

        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        <!-- Mobile Menu -->
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

        <div class="mobile-menu-container mobile-menu-light">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>
                
                <form action="#" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Buscar</label>
                    <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Buscar producto..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>

                <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Catálogos</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                        <nav class="mobile-nav">
                            <ul class="mobile-menu">
                                <li class="active">
                                    <a href="#">Inicio</a>
                                </li>
                                <li>
                                    <a href="#">Catalogo</a>
                                </li>
                                <li>
                                    <a href="#">Pedidos</a>
                                </li>
                                <li>
                                    <a href="#">Contacto</a>
                                </li>
                            </ul>
                        </nav><!-- End .mobile-nav -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                        <nav class="mobile-cats-nav">
                            <ul class="mobile-cats-menu">
                                <li><a class="mobile-cats-lead" href="#">Catalogo 1</a></li>
                                <li><a class="mobile-cats-lead" href="#">Catalogo 2</a></li>
                                <li><a href="#">Catalogo 3</a></li>
                                <li><a href="#">Catalogo 4</a></li>
                                <li><a href="#">Catalogo 5</a></li>
                            </ul><!-- End .mobile-cats-menu -->
                        </nav><!-- End .mobile-cats-nav -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->

                <div class="social-icons">
                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->

        <!-- Sign in / Register Modal -->
        <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="icon-close"></i></span>
                        </button>

                        <div class="form-box">
                            <div class="form-tab">
                                <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tab-content-5">
                                    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="singin-email">Username or email address *</label>
                                                <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="singin-password">Password *</label>
                                                <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>LOG IN</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                    <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                                </div><!-- End .custom-checkbox -->

                                                <a href="#" class="forgot-link">Forgot Your Password?</a>
                                            </div><!-- End .form-footer -->
                                        </form>
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="register-email">Your email address *</label>
                                                <input type="email" class="form-control" id="register-email" name="register-email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-password">Password *</label>
                                                <input type="password" class="form-control" id="register-password" name="register-password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>SIGN UP</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                    <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .form-footer -->
                                        </form>
                                    </div><!-- .End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .form-tab -->
                        </div><!-- End .form-box -->
                    </div><!-- End .modal-body -->
                </div><!-- End .modal-content -->
            </div><!-- End .modal-dialog -->
        </div><!-- End .modal -->

        <!-- Plugins JS File -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.hoverIntent.min.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/superfish.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-input-spinner.js') }}"></script>
        <script src="{{ asset('js/jquery.plugin.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <!-- Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/demos/demo-4.js') }}"></script>
        @yield('scripts')
    </body>
</html>