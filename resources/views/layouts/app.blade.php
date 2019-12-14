<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

<header class="header-area">
    <div class="navgition navgition-transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand page-scroll" href="#home">
                            <img src="assets/images/logo-inline-shadow-min.png" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne"
                                aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#home">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#sluzby">SLUŽBY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#o-nas">O NÁS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#kontakt">KONTAKT</a>
                                </li>
                            </ul>
                        </div>

                        <div class="navbar-social d-none d-sm-flex align-items-center">
                            <span>SLEDUJTE NÁS</span>
                            <ul>
                                <li><a href="http://www.facebook.com/resyst.cz" target="_blank"><i
                                            class="lni-facebook-filled"></i></a></li>
                                <li><a href="http://www.linkedin.com/company/resyst-cz" target="_blank"><i
                                            class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/header-bg.jpg)">
        @include('flash-message')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="header-content text-center">
                        <h3 class="header-title">{{ $siteSlogan }}</h3>
                        <p class="text">
                            Vytváříme unikátní webové stránky na míru vašim potřebám podle nejnovějších trendů.</p>
                        <ul class="header-btn">
                            <li><a class="main-btn btn-one page-scroll" href="#kontakt">KONTAKTUJTE NÁS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-shape">
            <img src="assets/images/header-shape.svg" alt="shape">
        </div>
    </div>
</header>

@yield('content')

<footer id="footer" class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-link">
                                <h6 class="footer-title">Firma</h6>
                                <ul>
                                    <li>Peter Holop</li>
                                    <li>IČ: 76199801</li>
                                    <li>Syrovická 968, Rajhrad 66461</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-link">
                                <h6 class="footer-title">Právní ustanovení</h6>
                                <ul>
                                    <li>Nejsem plátcem DPH.</li>
                                    <li>Zapsán dne 3.9.2010 v živnostenském rejstříku vedeném Městským úřadem
                                        Židlochovice
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p class="text">&copy; 2010 - {{ date('Y') }} <a
                                href="http://www.resyst.cz">{{ $siteName }}</a> - všechna práva vyhrazena.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
