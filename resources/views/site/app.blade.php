<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>Boat FMC | @yield("seo_title")</title>

    <!--favicon icon-->
    <link rel="icon" href="/img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="/css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->

    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="/img/fmc_white.png" alt="logo" style="width: 200px;" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li><a href="/">HOME</a></li>
                        <li><a href="/services">SERVICES</a></li>
                        <li><a href="/products">PRODUCTS</a></li>
                        <li><a href="/about">ABOUT US</a></li>
                        <li><a href="/contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay" style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            @yield("page_title")
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        @yield("page_content")

    </div>
    <!--body content wrap end-->


     <!--footer section start-->
     <footer class="footer-section">
        <!--footer top start-->
        <div class="footer-top gradient-bg">
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row footer-top-wrap">
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">LEADING SERVICES</h4>
                                    <ul class="nav flex-column">
                                    @foreach($lser as $lse)
                                        <li class="nav-item">
                                         <a class="nav-link" href="service/{{$lse->id}}">{{$lse->service_name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">TOP PRODUCTS</h4>
                                    <ul class="nav flex-column">
                                        @foreach($product as $pro)
                                        <li class="nav-item">
                                            <a class="nav-link" href="product/{{$pro->id}}">{{$pro->product_name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                          
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">Account</h4>
                                    <a href="/signin" class="btn secondary-solid-btn">Login</a>
                                </div>
                            </div>
<div class="col-md-3">
                        <div class="row footer-top-wrap">
                            <div class="col-12">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">GET IN TOUCH</h4>
                                    <ul class="get-in-touch-list">
                                        <li class="d-flex align-items-center py-2"><span class="fas fa-map-marker-alt mr-2"></span><a href="{{$siteinfo->mapdirection}}">{{$siteinfo->address1}}</a></li>
                                        <li class="d-flex align-items-center py-2"><span class="fas fa-envelope mr-2"></span><a href="mailto:{{$siteinfo->email}}">{{$siteinfo->email}}</a></li>
                                        <li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span><a href="tel:{{$siteinfo->phone}}">{{$siteinfo->phone}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg py-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2020 FMC Boat. Developed by
                            <a href="https://datacubeinfo.com/" target="_blank">Datacube Software Solutions</a></p>
                    </div>
                    <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                        <div class="social-nav text-right">
                            <ul class="list-unstyled social-list mb-0">
                                <li class="list-inline-item tooltip-hover">
                                    <a href="{{$siteinfo->facebook}}" class="rounded"><span class="ti-facebook"></span></a>
                                    <div class="tooltip-item">Facebook</div>
                                </li>
                                <li class="list-inline-item tooltip-hover">
                                    <a href="{{$siteinfo->twitter}}" class="rounded"><span class="ti-twitter"></span></a>
                                    <div class="tooltip-item">Twitter</div>
                                </li>
                                <li class="list-inline-item tooltip-hover">
                                    <a href="{{$siteinfo->linkedin}}" class="rounded"><span class="ti-linkedin"></span></a>
                                    <div class="tooltip-item">Linkedin</div>
                                </li>
                                <li class="list-inline-item tooltip-hover">
                                    <a href="{{$siteinfo->instagram}}" class="rounded"><span class="ti-instagram"></span></a>
                                    <div class="tooltip-item">Instagram</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->

    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"></span>
    </button>
    <!--bottom to top button end-->

    <!--jQuery-->
    <script src="/js/jquery-3.4.1.min.js"></script>
    <!--Popper js-->
    <script src="/js/popper.min.js"></script>
    <!--Bootstrap js-->
    <script src="/js/bootstrap.min.js"></script>
    <!--Magnific popup js-->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!--jquery easing js-->
    <script src="/js/jquery.easing.min.js"></script>
    <!--jquery ytplayer js-->
    <script src="/js/jquery.mb.YTPlayer.min.js"></script>
    <!--Isotope filter js-->
    <script src="/js/mixitup.min.js"></script>
    <!--wow js-->
    <script src="/js/wow.min.js"></script>
    <!--owl carousel js-->
    <script src="/js/owl.carousel.min.js"></script>
    <!--countdown js-->
    <script src="/js/jquery.countdown.min.js"></script>
    <!--custom js-->
    <script src="/js/scripts.js"></script>
</body>

</html>