<?php
function child_theme_enqueue_styles() {
  wp_enqueue_style('hypercore-child', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array('hypercore'), null, false);
  wp_enqueue_style('glide', get_stylesheet_directory_uri() . '/dist/glide/css/glide.core.min.css', array('hypercore'), null);
  hypercore\ScriptLoader::load_script('glide', get_stylesheet_directory_uri() . '/dist/glide/glide.min.js', array(), '3.4.1');
  hypercore\ScriptLoader::load_script('badge-rotator', get_stylesheet_directory_uri() . '/dist/js/badge-rotator.js', array('glide'), '1.0.0');
  hypercore\ScriptLoader::load_script('image-slider', get_stylesheet_directory_uri() . '/dist/js/image-slider.js', array('glide'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

/* Enqueue Critical Stylesheet above all others */
function enqueue_critical_styles() {
  wp_enqueue_style('hypercore-critical-styles', get_stylesheet_directory_uri() . '/dist/css/critical.css', '', null);
}
add_action('wp_enqueue_scripts', 'enqueue_critical_styles', 1);

/* Enqueue your custom JS files in the callback below.  See: https: //developer.wordpress.org/reference/functions/wp_enqueue_script/ */
function enqueue_custom_js() {
  wp_enqueue_style('lite-youtube-embed', get_stylesheet_directory_uri() . '/dist/lite-youtube/lite-yt-embed.css', array(), null);
  hypercore\ScriptLoader::load_script('lite-youtube-embed', get_stylesheet_directory_uri() . '/dist/lite-youtube/lite-yt-embed.js', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js', 2);

/* Include Custom Site Component Files */
if (file_exists(get_stylesheet_directory() . '/inc/custom-header.php')) {include_once get_stylesheet_directory() . '/inc/custom-header.php';}
if (file_exists(get_stylesheet_directory() . '/inc/custom-sidebar.php')) {include_once get_stylesheet_directory() . '/inc/custom-sidebar.php';}
if (file_exists(get_stylesheet_directory() . '/inc/custom-footer.php')) {include_once get_stylesheet_directory() . '/inc/custom-footer.php';}
if (file_exists(get_stylesheet_directory() . '/inc/shortcodes.php')) {include_once get_stylesheet_directory() . '/inc/shortcodes.php';}

// All other misc code that does not fall into one of the included files can be added below
function register_secondary_menu() {
  register_nav_menu('secondary', __('Secondary Menu', 'upper-header-navigation'));
}
add_action('after_setup_theme', 'register_secondary_menu');

// Fallback Blog Image
add_filter('post_thumbnail_html', function ($html, $post_id, $thumb_id, $size, $attr) {
  if (empty($html) && get_post_type($post_id) === 'post') {
    return wp_get_attachment_image(187, $size, false, $attr);
  }
  return $html;
}, 10, 5);

//Before & After Function


// Add this function to functions.php (replace is_front_page() with is_page('page-id') if element is not occuring on homepage
function enqueue_jquery() {
  if (is_page('372')) {
    wp_enqueue_script('jquery');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');