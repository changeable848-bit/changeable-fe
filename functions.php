<?php
function changeable_enqueue_styles() {
    wp_enqueue_style(
        'changeable-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'changeable_enqueue_styles');
