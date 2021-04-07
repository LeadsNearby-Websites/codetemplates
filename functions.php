<?php
function child_theme_enqueue_styles() {
  wp_enqueue_style('hypercore-child', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array('hypercore'), null, true);
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

/* Enqueue Critical Stylesheet above all others */
function enqueue_critical_styles() {
  wp_enqueue_style('hypercore-critical-styles', get_stylesheet_directory_uri() . '/dist/css/critical.css', '', null);
}
add_action('wp_enqueue_scripts', 'enqueue_critical_styles', 1);

/* Include Custom Site Component Files */
if (file_exists(get_stylesheet_directory() . '/inc/custom-header.php')) {include_once get_stylesheet_directory() . '/inc/custom-header.php';}
if (file_exists(get_stylesheet_directory() . '/inc/custom-sidebar.php')) {include_once get_stylesheet_directory() . '/inc/custom-sidebar.php';}
if (file_exists(get_stylesheet_directory() . '/inc/prefooter.php')) {include_once get_stylesheet_directory() . '/inc/prefooter.php';}
if (file_exists(get_stylesheet_directory() . '/inc/shortcodes.php')) {include_once get_stylesheet_directory() . '/inc/shortcodes.php';}

/* Adds Hypercore Toggle for Mobile Nav */
add_action('hypercore_before_header', function () {
  echo do_shortcode('[hyper-toggle]');
});

/* All other misc code that does not fall into one of the component files can be added below */
