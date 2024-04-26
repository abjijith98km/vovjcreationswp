<?php
if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theme_setup' ) ) :
  function theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
  }
endif;
add_action( 'after_setup_theme', 'theme_setup' );

/* Register menu */
    function register_my_menu() {
      register_nav_menu('desktop-header-menu',__( 'Desktop Header Menu' ));
      register_nav_menu('mobile-header-menu',__( 'Mobile Header Menu' ));
      register_nav_menu('footer-menu',__( 'Footer menu' ));
    }
    add_action( 'init', 'register_my_menu' );
/* Register menu end */

//Disable Gutenburg Editor
    add_filter('use_block_editor_for_post', '__return_false', 10);
//Disable Gutenburg Editor end

// support SVG
    function cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');
// support SVG end

/* Convert to WEBP URL*/
    function webpUrl($url) {
      if($url && strpos($url, 'uploads') !== false){
        $url = str_replace("uploads","uploads-webpc/uploads", $url);
        $url = $url . '.webp';
      }
      return $url;
    }
/* Convert to WEBP URL end*/

/* custom option page with ACF */
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Header Settings',
            'menu_title'    => 'Header',
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Footer Settings',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => '404 page Settings',
            'menu_title'    => '404 page',
            'parent_slug'   => 'theme-general-settings',
        )); 
    }
/* custom option page with ACF end */

/* Enqueue scripts and styles.*/
function theme_scripts() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('app-min', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('imageRevealHover', get_template_directory_uri() . '/assets/css/imageRevealHover.css');
    wp_enqueue_style('stylesmin', get_template_directory_uri() . '/assets/css/style.css');
    wp_style_add_data( 'theme-style', 'rtl', 'replace' );

    wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.6.0.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-isotops', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-twinmax', get_template_directory_uri() . '/assets/js/twinmax.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-jarallaax', get_template_directory_uri() . '/assets/js/jarallax.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-marquee', get_template_directory_uri() . '/assets/js/jquery.marquee.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-wow', get_template_directory_uri() . '/assets/js/wow.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// custom functions
    require get_template_directory() . '/includes/custom.php';
    require get_template_directory() . '/includes/image-sizes.php';
// custom functions end

// CPT
    // require get_template_directory() . '/includes/cpt/faq.php';
// CPT end

?>