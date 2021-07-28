<?php

/* Stack shortcode callbacks with comments here */

// Adds shortcode to print current site_url for easier link management
function add_site_url() {
  return site_url();
}
add_shortcode('site_url', 'add_site_url');

// About Icons
function output_about_icons($attr) {
  $args = shortcode_atts(array(
    'modifier' => '',
    'heading' => 'Heading Using Shortcode Parameter',
  ), $attr);
  ob_start();
  ?>
<section class="lnbAboutIcons
 <?php if (strlen($args['modifier']) > 0) {
    echo 'lnbAboutIcons--' . $args['modifier'];
  }
  ?>">
    <span class="lnbAboutIcons__heading"><?php echo $args['heading'] ?></span>
    <div class="lnbAboutIcons__grid">
        <div class="lnbAboutIcons__item">
            <fa-icon icon="phone" family="solid"></fa-icon>
            <div>
                <span class="lnbAboutIcons__item-heading">Short Heading</span>
                <span>About 120 characters or 20 words lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam henderit sit amet gravida.</span>
            </div>
        </div>
        <div class="lnbAboutIcons__item">
            <fa-icon icon="phone" family="solid"></fa-icon>
            <div>
                <span class="lnbAboutIcons__item-heading">Short Heading</span>
                <span>About 120 characters or 20 words lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam henderit sit amet gravida.</span>
            </div>
        </div>
        <div class="lnbAboutIcons__item">
            <fa-icon icon="phone" family="solid"></fa-icon>
            <div>
                <span class="lnbAboutIcons__item-heading">Short Heading</span>
                <span>About 120 characters or 20 words lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam henderit sit amet gravida.</span>
            </div>
        </div>
        <div class="lnbAboutIcons__item">
            <fa-icon icon="phone" family="solid"></fa-icon>
            <div>
                <span class="lnbAboutIcons__item-heading">Short Heading</span>
                <span>About 120 characters or 20 words lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam henderit sit amet gravida.</span>
            </div>
        </div>
        <div class="lnbAboutIcons__item">
            <fa-icon icon="phone" family="solid"></fa-icon>
            <div>
                <span class="lnbAboutIcons__item-heading">Short Heading</span>
                <span>About 120 characters or 20 words lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam henderit sit amet gravida.</span>
            </div>
        </div>
        <div class="lnbAboutIcons__item">
            <fa-icon icon="phone" family="solid"></fa-icon>
            <div>
                <span class="lnbAboutIcons__item-heading">Short Heading</span>
                <span>About 120 characters or 20 words lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam henderit sit amet gravida.</span>
            </div>
        </div>
    </div>
</section>
  <?php echo ob_get_clean();
}
add_shortcode('about-icons', 'output_about_icons');

// Badge Rotator
// Add this function to custom-footer.php
function output_badge_rotator() {
  if (!is_front_page()) {
    ob_start(); ?>
<section class="lnbBadgeRotator">
  <div class="lnbBadgeRotator__grid glide">
    <div class="lnbBadgeRotator__content">
      <?php hypercore_get_logo();?>
    </div>
    <div class="lnbBadgeRotator__carousel glide__track" data-glide-el="track">
      <ul class="glide__slides">
          <li class="glide__slide"><img class="hyper-lazyload"
            data-lazy-src="<?php echo content_url('uploads/lnb-logo-300x97.jpeg'); ?>">
          </li>
          <li class="glide__slide"><img class="hyper-lazyload"
            data-lazy-src="<?php echo content_url('uploads/lnb-logo-300x97.jpeg'); ?>">
          </li>
          <li class="glide__slide"><img class="hyper-lazyload"
            data-lazy-src="<?php echo content_url('uploads/lnb-logo-300x97.jpeg'); ?>">
          </li>
          <li class="glide__slide"><img class="hyper-lazyload"
            data-lazy-src="<?php echo content_url('uploads/lnb-logo-300x97.jpeg'); ?>">
          </li>
          <li class="glide__slide"><img class="hyper-lazyload"
            data-lazy-src="<?php echo content_url('uploads/lnb-logo-300x97.jpeg'); ?>">
          </li>
          <li class="glide__slide"><img class="hyper-lazyload"
            data-lazy-src="<?php echo content_url('uploads/lnb-logo-300x97.jpeg'); ?>">
          </li>
          <li class="glide__slide"><img class="hyper-lazyload"
            data-lazy-src="<?php echo content_url('uploads/lnb-logo-300x97.jpeg'); ?>">
          </li>
      </ul>
    </div>
  </div>
</section>
<?php echo ob_get_clean();
  }
}
add_shortcode('badge-rotator', 'output_badge_rotator');

// Small Cards
function output_small_cards() {
  ob_start(); ?>
<section class="lnbSmallCard">
    <div class="lnbSmallCard__grid">
        <div class="lnbSmallCard__item">
            <div class="hyper-lazyload-bg lnbSmallCard__item-img"
                data-bg-image="https://www.leadsnearby.com/wp-content/uploads/img-indy-car-racing-53237632729.jpg"></div>
            <div class="lnbSmallCard__item-content">
                <fa-icon class="lnbSmallCard__item-icon" icon="home" family="solid"></fa-icon>
                <span class="lnbSmallCard__item-heading">Card Heading</span>
                <span class="lnbSmallCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere
                    faucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risus
                    ut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</span>
                <a href="<?php echo site_url('/#/') ?>">Link Styled However</a>
            </div>
        </div>
        <div class="lnbSmallCard__item">
            <div class="hyper-lazyload-bg lnbSmallCard__item-img"
                data-bg-image="https://www.leadsnearby.com/wp-content/uploads/img-indy-car-racing-53237632729.jpg"></div>
            <div class="lnbSmallCard__item-content">
                <fa-icon class="lnbSmallCard__item-icon" icon="home" family="solid"></fa-icon>
                <span class="lnbSmallCard__item-heading">Card Heading</span>
                <span class="lnbSmallCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere
                    faucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risus
                    ut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</span>
                <a href="<?php echo site_url('/#/') ?>">Link Styled However</a>
            </div>
        </div>
        <div class="lnbSmallCard__item">
            <div class="hyper-lazyload-bg lnbSmallCard__item-img"
                data-bg-image="https://www.leadsnearby.com/wp-content/uploads/img-indy-car-racing-53237632729.jpg"></div>
            <div class="lnbSmallCard__item-content">
                <fa-icon class="lnbSmallCard__item-icon" icon="home" family="solid"></fa-icon>
                <span class="lnbSmallCard__item-heading">Card Heading</span>
                <span class="lnbSmallCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere
                    faucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risus
                    ut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</span>
                <a href="<?php echo site_url('/#/') ?>">Link Styled However</a>
            </div>
        </div>
        <div class="lnbSmallCard__item">
            <div class="hyper-lazyload-bg lnbSmallCard__item-img"
                data-bg-image="https://www.leadsnearby.com/wp-content/uploads/img-indy-car-racing-53237632729.jpg"></div>
            <div class="lnbSmallCard__item-content">
                <fa-icon class="lnbSmallCard__item-icon" icon="home" family="solid"></fa-icon>
                <span class="lnbSmallCard__item-heading">Card Heading</span>
                <span class="lnbSmallCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere
                    faucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risus
                    ut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</span>
                <a href="<?php echo site_url('/#/') ?>">Link Styled However</a>
            </div>
        </div>
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('small-cards', 'output_small_cards');

// Large Cards
function output_large_cards() {
  ob_start(); ?>
<section class="lnbLargeCard">
    <div class="lnbLargeCard__wrap">
        <div class="lnbLargeCard__item">
            <img class="hyper-lazyload lnbLargeCard__item-img" data-lazy-src="<?php echo content_url('/uploads/mian-thermostat-on-wall-with-digital-display.jpeg'); ?>">
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>" class="hypercore-button" is="hypercore-button">Button</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <img class="hyper-lazyload lnbLargeCard__item-img" data-lazy-src="<?php echo content_url('/uploads/mian-thermostat-on-wall-with-digital-display.jpeg'); ?>">
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>" class="hypercore-button" is="hypercore-button">Button</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <img class="hyper-lazyload lnbLargeCard__item-img" data-lazy-src="<?php echo content_url('/uploads/mian-thermostat-on-wall-with-digital-display.jpeg'); ?>">
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>" class="hypercore-button" is="hypercore-button">Button</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <img class="hyper-lazyload lnbLargeCard__item-img" data-lazy-src="<?php echo content_url('/uploads/mian-thermostat-on-wall-with-digital-display.jpeg'); ?>">
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>" class="hypercore-button" is="hypercore-button">Button</a>
            </div>
        </div>
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('large-cards', 'output_large_cards');