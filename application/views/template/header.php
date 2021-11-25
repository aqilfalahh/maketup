<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MaketUP</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="<?= base_url('assets'); ?>/img/icon/search.png" alt=""></a>
            <a href="#"><img src="<?= base_url('assets'); ?>/img/icon/heart.png" alt=""></a>
            <a href="#"><img src="<?= base_url('assets'); ?>/img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);" class="header">
        <div style="background-color: #06475b" class="header__top">
        </div>
        <div  class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url('assets'); ?>/img/Logo1.png" alt=""></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3">
                    <div style="margin-top: 10px;"class="header__nav__option">
                        <a href="#" class="search-switch"><img src="<?= base_url('assets'); ?>/img/icon/search.png" alt=""></a>
                        
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul style="margin-left: 50px ;">
                            <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                            <li><a href="<?= base_url('explore'); ?>">Explore</a></li>
                            <li><a href="#">Mockup</a>
                            <li style="margin-left: 90px ;"><a style="font-size: 25px; "href="#">SIGN IN</a>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->