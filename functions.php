<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/scss/style.css');
    wp_enqueue_style('mobile', get_template_directory_uri() . '/assets/scss/mobile.css');
});

add_action('wp_footer', function () {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', 'null', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 'null', true);
})

?>