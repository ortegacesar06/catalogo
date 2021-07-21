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
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
            <div class="alert alert-success border-0 rounded-0 bg-success text-white text-center alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="page-wrapper">
            <main>
                @yield('content')
            </main><!-- End .main -->
        </div><!-- End .page-wrapper -->

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