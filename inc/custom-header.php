<?php

/* Custom Header Code */

function output_custom_header() {
  ob_start();?>
<div class="ctHeader">
  <a class="ctHeader__text source-font" href="<?php echo site_url() ?>">LNB Code Templates</a>
  <a is="hypercore-button" class="ctHeader__btn hypercore-button lnbArrowHover" href="https://github.com/LeadsNearby/code-templates">
    Go To Repo
    <fa-icon class="lnbArrowHover__arrow" icon="arrow-right"></fa-icon>
  </a>
</div>
<?php echo ob_get_clean();
}
add_action('hypercore_custom_header', 'output_custom_header');