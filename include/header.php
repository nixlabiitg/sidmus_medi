<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- title -->
    <title>Sidmus Medi Corporation</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="home-2">
    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->
    <!-- header area -->
    <header class="header">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                            <div class="header-top-left">
                                <ul class="header-top-list">
                                    <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#abc2c5cdc4ebced3cac6dbc7ce85c8c4c6"><i class="far fa-envelopes"></i>
                                            <span class="__cf_email__" data-cfemail="523b3c343d12372a333f223e377c313d3f">[email&#160;protected]</span></a></li>
                                    <li><a href="tel:+911236547898"><i class="far fa-headset"></i> +91 123 654 7898</a></li>
                                    <li class="help"><a href=""><i class="far fa-comment-question"></i> Need Help?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
                            <div class="header-top-right">
                                <ul class="header-top-list">
                                    <li class="social">
                                        <div class="header-top-social">
                                            <span>Follow Us: </span>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- navbar -->
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="index">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="mobile-menu-btn">
                            <a href="#" class="nav-right-link search-box-outer"><i class="far fa-search"></i></a>
                            <a href="wishlist" class="nav-right-link"><i
                                    class="far fa-heart"></i><span>2</span></a>
                            <a href="shop-cart" class="nav-right-link"><i
                                    class="far fa-shopping-bag"></i><span>5</span></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a href="index" class="offcanvas-brand" id="offcanvasNavbarLabel">
                                <img src="assets/img/logo/logo.png" alt="">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 'home') echo 'active';?>" href="index">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == 'about') echo 'active';?>" href="about">About</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="dropdown-item" href="">About</li>
                                        <li class="dropdown-item" href="">Mission</li>
                                        <li class="dropdown-item" href="">Vision</li>
                                        <li class="dropdown-item" href="">FAQ</li>
                                    </ul> -->
                                </li>
                                <li class="nav-item"><a class="nav-link <?php if($page == 'product') echo 'active';?>" href="product">Products</a></li>
                                <li class="nav-item"><a class="nav-link <?php if($page == 'blog') echo 'active';?>" href="blog">Blog</a></li>
                                <li class="nav-item"><a class="nav-link <?php if($page == 'gallery') echo 'active';?>" href="gallery">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link <?php if($page == 'faq') echo 'active';?>" href="faq">FAQ</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?php if(in_array($page, ['privacy','terms'])) echo 'active'; ?>" href="#" data-bs-toggle="dropdown">Support</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item <?php if($page == 'privacy') echo 'active';?>" href="privacy">Privacy & Policy</a></li>
                                        <li><a class="dropdown-item <?php if($page == 'terms') echo 'active';?>" href="terms">Terms & Condition</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link <?php if($page == 'contact') echo 'active';?>" href="contact">Contact</a></li>
                            </ul>
                            <!-- nav-right -->
                            <div class="nav-right">
                                <a href="https://wa.me/919876543210?text=Hello%2C%20I%20have%20a%20query%20regarding%20your%20services." 
                                    target="_blank" 
                                    class="nav-right-link theme-btn text-white">
                                    Get in Touch
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end -->
    </header>
    <!-- header area end -->
    <main class="main">