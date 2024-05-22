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

    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><img src="assets/img/icon/close.svg" alt="img"></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><img src="assets/img/icon/search-white.svg" alt="img"></button>
        </form>
    </div>

    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><img src="assets/img/icon/close.svg" alt="icon"></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logo-white.svg" alt="Ovation"></a>
                    </div>
                    <p class="about-text">We are digital agency that helps businesses develop immersive and engaging</p>
                    <div class="sidebar-wrap">
                        <h6>27 Division St, New York,</h6>
                        <h6>NY 10002, USA</h6>
                    </div>
                    <div class="sidebar-wrap">
                        <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                        <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
                    </div>
                    <div class="social-btn style2">
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
            <div class="d-flex justify-content-end">
                <a href="contact.html" class="chat-btn gsap-magnetic">Let’s Talk with us</a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu     ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="/"><img src="<?php $header_logo = get_field("header_logo", 'option');
                                        echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>"></a>
            </div>
            <div class="mobile-menu">
                <?php if (have_rows('header_navigation', 'option')) : ?>
                    <ul>
                        <?php while (have_rows('header_navigation', 'option')) : the_row();
                            $link = get_sub_field('link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            endif;
                        ?>
                            <li class="">
                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_html($link_title); ?>
                                </a>

                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
            <?php
            $contact_address = get_field('contact_address', 'option');
            $contact_number = get_field('contact_number', 'option');
            $contact_email = get_field('contact_email', 'option');

            ?>
            <?php if ($contact_address) : ?>
                <div class="sidebar-wrap">
                    <?php echo $contact_address; ?>
                </div>
            <?php endif; ?>
            <div class="sidebar-wrap">
                <h6><a href="tel:<?php echo $contact_number; ?>"><?php echo $contact_number; ?> </a></h6>
                <h6><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></h6>
            </div>
            <div class="social-btn style3">

                <?php if (have_rows('header_social_media', 'option')) : ?>
                    <?php while (have_rows('header_social_media', 'option')) : the_row();
                        $type = get_sub_field('type');
                        $link = get_sub_field('link');

                    ?>
                        <a href="<?php echo esc_url($link); ?>" target="_blank">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-<?php echo $type; ?>"></i></span>
                                <span class="effect-1"><i class="fab fa-<?php echo $type; ?>"></i></span>
                            </span>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>


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
                                <a href="/"><img src="<?php $header_logo = get_field("header_logo", 'option');
                                                        echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <?php if (have_rows('header_navigation', 'option')) : ?>
                                    <ul>
                                        <?php while (have_rows('header_navigation', 'option')) : the_row();
                                            $link = get_sub_field('link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            endif;
                                        ?>
                                            <li class="">
                                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                                    <span class="link-effect">
                                                        <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                                        <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                                    </span>
                                                </a>

                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>

                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>

                        <?php
                        $header_cta = get_field('header_cta', 'option');
                        if ($header_cta) :
                            $link_url = $header_cta['url'];
                            $link_title = $header_cta['title'];
                            $link_target = $header_cta['target'] ? $header_cta['target'] : '_self';
                        ?>
                            <div class="col-auto d-none d-lg-block">
                                <div class="header-button">
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn">
                                        <span class="link-effect">
                                            <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                            <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>