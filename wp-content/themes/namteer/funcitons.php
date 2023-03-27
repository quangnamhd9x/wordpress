<?php

// DEFINE
define('THEME_URI',get_theme_file_uri( ));
define('THEME_PATH',get_theme_file_path());



// INCLUDES
include('includes/enqueue.php');




// HOOK
add_action( 'wp_enqueue_scripts', 'nt_enqueue' );




// SHORTCODE