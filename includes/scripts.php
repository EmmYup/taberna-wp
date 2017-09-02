<?php
function mytheme_scripts() {

    wp_enqueue_style( 'style-beer', get_template_directory_uri().'/css/beer.css' );
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'style-hamburguers', get_template_directory_uri().'/css/hamburgers.min.css' );
    wp_enqueue_style( 'style-settings', get_template_directory_uri().'/css/settings.css' );
    wp_enqueue_style( 'style-masterslider', get_template_directory_uri().'/css//masterslider/style/masterslider.css' );
    wp_enqueue_style( 'style-skins', get_template_directory_uri().'/css/masterslider/skins/default/style.css' );
    wp_enqueue_style( 'style-font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
    wp_enqueue_style( 'style-ms-tabs', get_template_directory_uri().'/css/ms-tabs-style.css' );
    wp_enqueue_style( 'style-carousel', get_template_directory_uri().'/css/owl.carousel.css' );
    wp_enqueue_style( 'style-tema-carousel', get_template_directory_uri().'/css/owl.theme.default.css' );
    wp_enqueue_style( 'style-aos', get_template_directory_uri().'/css/aos.css' );
    wp_enqueue_style( 'style-datepicker', get_template_directory_uri().'/css/bootstrap-datepicker.css' );
    wp_enqueue_style( 'style-main', get_template_directory_uri().'/css/main.css' );

    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    
    wp_enqueue_script( 'scripts-jquery', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scripts-masterslider', get_template_directory_uri() . '/js/masterslider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scripts-owl', get_template_directory_uri() . '/js/owl.carousel.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scripts-aos', get_template_directory_uri() . '/js/aos.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scripts-slimscroll', get_template_directory_uri() . '/js/jquery.slimscroll.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-datepicker-es', get_template_directory_uri() . '/js/bootstrap-datepicker.es.min.js', array(), '1.0.0', true );       
}
 
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );
?>