<?php

/* Stack shortcode callbacks with comments here */

// Adds shortcode to print current site-url for easier link management
add_shortcode('site_url', function () {
  echo site_url();
});
