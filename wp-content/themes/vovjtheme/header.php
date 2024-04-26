<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;family=Unbounded:wght@400;500;600;700&amp;display=swap" rel="stylesheet">



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Mobile Menu     ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="Ovation"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="">
                        <a href="#">Home</a>

                    </li>
                    <li class="">
                        <a href="#">Pages</a>

                    </li>
                    <li class="">
                        <a href="#">Portfolio</a>

                    </li>
                    <li class="">
                        <a href="#">Blog</a>

                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-wrap">
                <h6>27 Division St, New York,</h6>
                <h6>NY 10002, USA</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
            </div>
            <div class="social-btn style3">
                <a href="https://www.facebook.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    </span>
                </a>
                <a href="https://instagram.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    </span>
                </a>
                <a href="https://twitter.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    </span>
                </a>
                <a href="https://dribbble.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout3">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="/"><img src="assets/img/logo.svg" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="active ">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">HOME</span>
                                                <span class="effect-1">HOME</span>
                                            </span>
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PAGES</span>
                                                <span class="effect-1">PAGES</span>
                                            </span>
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PORTFOLIO</span>
                                                <span class="effect-1">PORTFOLIO</span>
                                            </span>
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">BLOG</span>
                                                <span class="effect-1">BLOG</span>
                                            </span>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="link-effect">
                                                <span class="effect-1">CONTACT</span>
                                                <span class="effect-1">CONTACT</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="project.html" class="btn">
                                    <span class="link-effect">
                                        <span class="effect-1">WORKS WITH US</span>
                                        <span class="effect-1">WORKS WITH US</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>