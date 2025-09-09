<?php
function michtheme_enqueue_styles() {
    wp_enqueue_style(
        'michtheme-style',
        get_stylesheet_uri(),
        array( 'twentytwentyfive-style' )
    );
}
add_action( 'wp_enqueue_scripts', 'michtheme_enqueue_styles' );