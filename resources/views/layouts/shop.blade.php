@php
    $menu_catalogs = App\Models\Catalog::orderByDesc('id_catalog')->limit(7)->get();
@endphp

<!DOCTYPE html>
<html lang="es">
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
            <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
            @yield('styles')
    </head>

    <body>
        @if (session('success'))
            <div class="alert alert-success border-0 rounded-0 bg-success text-white text-center alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger border-0 rounded-0 bg-danger text-white text-center alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
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
                                        <li>
                                            @guest
                                                <a class="pt-1 pb-1" href="#signin-modal" data-toggle="modal">Ingresar / Registrarse</a>                                                
                                            @endguest
                                            @auth
                                                @if (Auth::user()->role->name === "admin")
                                                    <a class="pt-1 pb-1" href="/admin">Ir al administrador</a>  
                                                @else
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" style="padding: 5px; margin: 8px 0;">Cerrar sesión</button>
                                                    </form>
                                                @endif                                                
                                            @endauth
                                        </li>
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
                            
                            <a href="/" class="logo">
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
                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <div class="icon">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="cart-count">{{ Cart::count() }}</span>
                                    </div>
                                    <p>Carrito</p>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                        @if (count(Cart::content()) === 0)
                                            <p class="text-center" style="font-size: 15px; font-style: italic; padding: 10px 0;">Carrito vacío</p>
                                        @endif
                                        @foreach (Cart::content() as $item)
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="{{ route('shop.single', ['id' => $item->model->id_product]) }}">{{ $item->name }}</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">{{ $item->qty }}</span>
                                                        x ${{ $item->price }}
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="{{ route('shop.single', ['id' => $item->model->id_product]) }}" class="product-image">
                                                        <img src="/storage/{{ $item->model->image_path }}" alt="product">
                                                    </a>
                                                </figure>
                                                <a href="{{ route('cart.remove', ['row' => $item->rowId ]) }}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            </div><!-- End .product -->                                            
                                        @endforeach
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">${{ Cart::total() }}</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="/carrito" class="btn btn-primary">Ver carrito</a>
                                        <a href="#" class="btn btn-outline-primary-2"><span>Comprar</span><i class="icon-long-arrow-right"></i></a>
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
                                            @foreach ($menu_catalogs as $item)
                                                <li><a href="{{ route('shop.catalog', ['catalog' => $item->id_catalog]) }}">{{ $item->name }}</a></li>                                                
                                            @endforeach
                                        </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .category-dropdown -->
                        </div><!-- End .header-left -->

                        <div class="header-center">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="{{ request()->is('/') ? 'active':'' }}">
                                        <a href="/">Inicio</a>
                                    </li>
                                    <li class="{{ request()->is('catalogo') ? 'active':'' }}">
                                        <a href="/catalogo">Catálogo</a>
                                    </li>
                                    <li class="{{ request()->is('contacto') ? 'active':'' }}">
                                        <a href="/contacto">Contacto</a>
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
                                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                                        <li><a href="https://twitter.com/">Twitter</a></li>
                                        <li><a href="https://www.instagram.com/">Instagram</a></li>
                                        <li><a href="https://www.youtube.com/">Youtube</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Menu</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="/">Inicio</a></li>
                                        <li><a href="/catalogo">Catalogo</a></li>
                                        <li><a href="/contacto">Contacto</a></li>
                                        <li><a href="#">Pedidos</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Mi cuenta</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="/login">Ingresar</a></li>
                                        <li><a href="/carrito">Ver carrito</a></li>
                                        <li><a href="#">Mis pedidos</a></li>
                                        <li><a href="#">Mis compras</a></li>
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
                                <li class="{{ request()->is('/') ? 'active':'' }}">
                                    <a href="/">Inicio</a>
                                </li>
                                <li class="{{ request()->is('/catalogo') ? 'active':'' }}">
                                    <a href="/catalogo">Catalogo</a>
                                </li>
                                <li class="{{ request()->is('/contacto') ? 'active':'' }}">
                                    <a href="/contacto">Contacto</a>
                                </li>
                            </ul>
                        </nav><!-- End .mobile-nav -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                        <nav class="mobile-cats-nav">
                            <ul class="mobile-cats-menu">
                                @foreach ($menu_catalogs as $item)
                                    <li><a href="{{ route('shop.catalog', ['catalog' => $item->id_catalog]) }}">{{ $item->name }}</a></li>                                    
                                @endforeach
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
                                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Ingresar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Registrarse</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tab-content-5">
                                    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="singin-email">Correo electrónico *</label>
                                                <input type="text" class="form-control" id="singin-email" name="email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="singin-password">Contraseña *</label>
                                                <input type="password" class="form-control" id="singin-password" name="password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>INGRESAR</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>
                                            </div><!-- End .form-footer -->
                                        </form>
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                        <form action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="register-dni">Cédula *</label>
                                                <input type="text" class="form-control" id="register-dni" name="dni" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-firstname">Nombres *</label>
                                                <input type="text" class="form-control" id="register-firstname" name="firstname" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-lastname">Apellidos *</label>
                                                <input type="text" class="form-control" id="register-lastname" name="lastname" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-address">Dirección *</label>
                                                <input type="text" class="form-control" id="register-address" name="address" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-phone">Teléfono *</label>
                                                <input type="text" class="form-control" id="register-phone" name="phone" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-email">Correo electrónico *</label>
                                                <input type="email" class="form-control" id="register-email" name="email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-password">Contraseña *</label>
                                                <input type="password" class="form-control" id="register-password" name="password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="register-c-password">Confirmar contraseña *</label>
                                                <input type="password" class="form-control" id="register-c-password" name="confirm_password" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>REGISTRARSE</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>
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