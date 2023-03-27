<?php
if(!function_exists('nt_enqueue')){
    $version = time();
    function nt_enqueue(){

        //css
        wp_register_style( 'nt_googlefont', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800');
        wp_register_style( 'nt_googlefont2', 'https://fonts.googleapis.com/css?family=Poppins:300,400');
        wp_register_style( 'nt_bootstrap', THEME_URI.'/assets/css/bootstrap.min.css');
        wp_register_style( 'nt_material_design_iconic_font', THEME_URI.'/assets/css/material-design-iconic-font.min.css');
        wp_register_style( 'nt_custom_animate', THEME_URI.'/assets/css/custom-animate.css');
        wp_register_style( 'nt_slick', THEME_URI.'/assets/css/slick.min.css');
        wp_register_style( 'nt_swiper', THEME_URI.'/assets/css/swiper.min.css');
        wp_register_style( 'nt_venobox', THEME_URI.'/assets/css/venobox.css');
        wp_register_style( 'nt_progressbar', THEME_URI.'/assets/css/progressbar.css');
        wp_register_style( 'nt_style', THEME_URI.'/assets/css/style.css');
        wp_register_style( 'nt_responsive', THEME_URI.'/assets/css/responsive.css');

        wp_enqueue_style('nt_googlefont');
        wp_enqueue_style('nt_googlefont2');
        wp_enqueue_style('nt_bootstrap');
        wp_enqueue_style('nt_material_design_iconic_font');
        wp_enqueue_style('nt_custom_animate');
        wp_enqueue_style('nt_slick');
        wp_enqueue_style('nt_swiper');
        wp_enqueue_style('nt_venobox');
        wp_enqueue_style('nt_progressbar');
        wp_enqueue_style('nt_style');
        wp_enqueue_style('nt_responsive');

        //js
        wp_register_script('nt_modernizr_js', THEME_URI.'/assets/js/vendor/modernizr-2.8.3.min.js', array(), $version);
        wp_register_script('nt_jquery_js', THEME_URI.'/assets/js/vendor/jquery-1.12.4.min.js', array(), $version);
        wp_register_script('nt_bootstrap_js', THEME_URI.'/assets/js/bootstrap.min.js', array(), $version);
        wp_register_script('nt_jquery_validate_js', THEME_URI.'/assets/js/jquery.validate.min.js', array(), $version);
        wp_register_script('nt_slick_js', THEME_URI.'/assets/js/slick.min.js', array(), $version);
        wp_register_script('nt_swiper_js', THEME_URI.'/assets/js/swiper.min.js', array(), $version);
        wp_register_script('nt_isotope_js', THEME_URI.'/assets/js/isotope.pkgd.min.js', array(), $version);
        wp_register_script('nt_plugins_js', THEME_URI.'/assets/js/plugins.js', array(), $version);
        wp_register_script('nt_main_js', THEME_URI.'/assets/js/main.js', array(), $version);


        wp_enqueue_script( 'nt_modernizr_js' );
        wp_enqueue_script( 'nt_jquery_js');
        wp_enqueue_script( 'nt_bootstrap_js' );
        wp_enqueue_script( 'nt_jquery_validate_js' );
        wp_enqueue_script( 'nt_slick_js' );
        wp_enqueue_script( 'nt_swiper_js' );
        wp_enqueue_script( 'nt_isotope_js' );
        wp_enqueue_script( 'nt_plugins_js' );
        wp_enqueue_script( 'nt_main_js' );
    }
}
