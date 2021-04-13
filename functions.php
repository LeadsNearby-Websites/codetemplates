<?php
function child_theme_enqueue_styles() {
  wp_enqueue_style('hypercore-child', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array('hypercore'), null, false);
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

/* Enqueue Critical Stylesheet above all others */
function enqueue_critical_styles() {
  wp_enqueue_style('hypercore-critical-styles', get_stylesheet_directory_uri() . '/dist/css/critical.css', '', null);
}
add_action('wp_enqueue_scripts', 'enqueue_critical_styles', 1);

/* Enqueue your custom JS files in the callback below.  See: https: //developer.wordpress.org/reference/functions/wp_enqueue_script/ */
function enqueue_custom_js() {
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js', 2);

/* Include Custom Site Component Files */
if (file_exists(get_stylesheet_directory() . '/inc/custom-header.php')) {include_once get_stylesheet_directory() . '/inc/custom-header.php';}
if (file_exists(get_stylesheet_directory() . '/inc/custom-sidebar.php')) {include_once get_stylesheet_directory() . '/inc/custom-sidebar.php';}
if (file_exists(get_stylesheet_directory() . '/inc/custom-footer.php')) {include_once get_stylesheet_directory() . '/inc/custom-footer.php';}
if (file_exists(get_stylesheet_directory() . '/inc/shortcodes.php')) {include_once get_stylesheet_directory() . '/inc/shortcodes.php';}

/* All other misc code that does not fall into one of the included files can be added below */
