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
                                    <a class="page-scroll" href="#o-nas">O NÁS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#sluzby">SLUŽBY</a>
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
                            Chcete nový web, eshop, blog, interní aplikaci nebo něco extra? Neváhejte a ozvěte se
                            nám.</p>
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
