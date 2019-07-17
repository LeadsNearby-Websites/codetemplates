<?php
function child_theme_enqueue_styles() {
    wp_enqueue_style('hypercore-child', get_stylesheet_directory_uri() . '/style.css', array('hypercore'), null);
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
