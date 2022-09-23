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
          <li class="glide__slide">
              <?php echo wp_get_attachment_image(76, 'full', false); ?>
          </li>
          <li class="glide__slide">
              <?php echo wp_get_attachment_image(76, 'full', false); ?>
          </li>
          <li class="glide__slide">
              <?php echo wp_get_attachment_image(76, 'full', false); ?>
          </li>
          <li class="glide__slide">
              <?php echo wp_get_attachment_image(76, 'full', false); ?>
          </li>
          <li class="glide__slide">
              <?php echo wp_get_attachment_image(76, 'full', false); ?>
          </li>
          <li class="glide__slide">
              <?php echo wp_get_attachment_image(76, 'full', false); ?>
          </li>
          <li class="glide__slide">
              <?php echo wp_get_attachment_image(76, 'full', false); ?>
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
            <?php echo wp_get_attachment_image(200, 'full', false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(200, 'full', false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(200, 'full', false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(200, 'full', false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(202, 'full', false, ['class' => 'lnbLargeCard__item-img']); ?>
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>">Link</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <?php echo wp_get_attachment_image(202, 'full', false, ['class' => 'lnbLargeCard__item-img']); ?>
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>">Link</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <?php echo wp_get_attachment_image(202, 'full', false, ['class' => 'lnbLargeCard__item-img']); ?>
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>">Link</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <?php echo wp_get_attachment_image(202, 'full', false, ['class' => 'lnbLargeCard__item-img']); ?>
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>">Link</a>
            </div>
        </div>
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('large-cards', 'output_large_cards');

// Slide Up Boxes
function output_slide_up() {
  ob_start(); ?>
<div class="lnbSlideUp">
    <div class="lnbSlideUp__box hyper-lazyload-bg" data-bg-image="">
        <div class="lnbSlideUp__box-overlay">
            Testing 1
        </div>
    </div>
    <div class="lnbSlideUp__box hyper-lazyload-bg" data-bg-image="">
        <div class="lnbSlideUp__box-overlay">
            Testing 2
        </div>
    </div>
    <div class="lnbSlideUp__box hyper-lazyload-bg" data-bg-image="">
        <div class="lnbSlideUp__box-overlay">
            Testing 3
        </div>
    </div>
    <div class="lnbSlideUp__box hyper-lazyload-bg" data-bg-image="">
        <div class="lnbSlideUp__box-overlay">
            Testing 4
        </div>
    </div>
    <div class="lnbSlideUp__box hyper-lazyload-bg" data-bg-image="">
        <div class="lnbSlideUp__box-overlay">
            Testing 5
        </div>
    </div>
    <div class="lnbSlideUp__box hyper-lazyload-bg" data-bg-image="">
        <div class="lnbSlideUp__box-overlay">
            Testing 6
        </div>
    </div>
</div>

<?php echo ob_get_clean();
}
add_shortcode('slide-up-box', 'output_slide_up');

function output_dual_nav_header() {
  ob_start(); ?>
  <div class="lnbHeaderDualNav">
      <div class="lnbHeaderDualNav__grid">
          <div class="lnbHeaderDualNav__logo">
               <?php echo hypercore_get_logo() ?>
          </div>
          <div class="lnbHeaderDualNav__navBlocks">
              <div class="lnbHeaderDualNav__topNav">
                  <nav class="nav" aria-label="Main Navigation" role="navigation">
                  <?php wp_nav_menu(array(
      'theme_location' => 'secondary',
      'menu_class' => 'nav__menu',
      'menu_id' => false,
      'container' => false,
      'fallback_cb' => false,
      'depth' => 1));?>
                  </nav>
                  <div class="lnbHeaderDualNav__afterTopNav">
                      <a class="lnbHeaderDualNav__phone phone-num" href="tel:<?php echo do_shortcode('[phone_number]'); ?>">
                          <span class="lnbHeaderDualNav__phone-text lnbHeaderDualNav__phone-text--hours">24/7</span>
                          <fa-icon class="lnbHeaderDualNav__phone-icon lnbRadiate" icon="phone" family="solid"></fa-icon>
                          <span class="lnbHeaderDualNav__phone-text lnbHeaderDualNav__phone-text--num"><?php echo do_shortcode('[phone_number]'); ?></span>
                      </a>
                  </div>
              </div>
              <div class="lnbHeaderDualNav__bottomNav">
                  <nav class="nav nav--main" aria-label="Main Navigation" role="navigation">
                  <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_class' => 'nav__menu',
      'menu_id' => false,
      'container' => false,
      'fallback_cb' => false));?>
                  </nav>
                  <a is="hypercore-button" class="hypercore-button lnb-radiate lnb-hover-wobble" href="<?php echo site_url('');?>">
                    <fa-icon icon="arrow-right"></fa-icon>
                    <span></span>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <?php echo ob_get_clean();
}
add_shortcode('dual-nav-header', 'output_dual_nav_header');

function output_header_left_align() {
  ob_start(); ?>
  <section class="lnbHeaderLeftAlign">
    <div class="lnbHeaderLeftAlign__logo">
      <?php echo hypercore_get_logo('large', true, 'header'); ?>
    </div>
    <div class="lnbHeaderLeftAlign__content">
      <div class="lnbHeaderLeftAlign__content-left">
        <div class="lnbHeaderLeftAlign__content-left-message">
          <span> Header Short Message Optional </span>
        </div>
        <div class="lnbHeaderLeftAlign__content-left-phone">
          <fa-icon icon="phone" family="solid"></fa-icon>
          <a href="tel:555-555-555">555-555-5555</a>
        </div>
      </div>
      <div class="lnbHeaderLeftAlign__content-btns">
        <a title="Button CTA" class="hypercore-button lnb-radiate" is="hypercore-button" href="" target="_blank">
          <fa-icon icon="arrow-right" class="" family="solid"></fa-icon>
          <span>Button CTA</span>
        </a>
        <a title="Button CTA" class="hypercore-button lnb-radiate" is="hypercore-button" href="" target="_blank">
          <fa-icon icon="arrow-right" family="solid"></fa-icon>
          <span>Button CTA</span>

        </a>
      </div>
    </div>
  </section>
  <?php echo ob_get_clean();
}
add_shortcode('header-left-align', 'output_header_left_align');

function output_header_two_block() {
  ob_start(); ?>
    <div class="lnbHeaderTwoBlock">
        <div class="lnbHeaderTwoBlock__grid">
            <?php echo hypercore_get_logo(); ?>
            <div class="lnbHeaderTwoBlock__content">
                <div class="lnbHeaderTwoBlock__content-blocks">
                    <div class="lnbHeaderTwoBlock__block lnbHeaderTwoBlock__block--phone">
                        <?php echo do_shortcode('[phone_link]'); ?>
                        <span class="lnbHeaderTwoBlock__block-text">Header Short Message</span>
                    </div>
                    <div class="lnbHeaderTwoBlock__block lnbHeaderTwoBlock__block--about">
                        <?php echo hypercore_get_lazyload_image(1, 'lnbHeaderTwoBlock__block-img');?>
                        <div class="unflex">
                            <span class="lnbHeaderTwoBlock__block-text  lnbHeaderTwoBlock__block-text--bold">Since 1970</span>
                            <span class="lnbHeaderTwoBlock__block-text">Veteran Owned Business Family Owned & Operated</span>
                        </div>
                    </div>
                </div>
                <nav class="nav nav--main" aria-label="Main Navigation" role="navigation">
                  <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_class' => 'nav__menu',
      'menu_id' => false,
      'container' => false,
      'fallback_cb' => false));?>
                </nav>
            </div>
        </div>
    </div>
  <?php echo ob_get_clean();
}
add_shortcode('header-two-block', 'output_header_two_block');

// Header 3 Block
//************************************************************ */
function output_header_three_block() {
  ob_start(); ?>
  <section class="lnbHeaderThreeBlock">
    <div class="lnbHeaderThreeBlock__logo">
      <?php echo hypercore_get_logo('large', true, 'header'); ?>
    </div>
    <div class="lnbHeaderThreeBlock__content">
      <div class="lnbHeaderThreeBlock__content-left">
        <fa-icon icon="users" family="solid"></fa-icon>
        <p>
          <span>Promotional Message</span>
          <a title="Apply Online" href="<?php echo site_url(''); ?>">Promotional Link
            &gt;&gt;</a>
        </p>
      </div>
      <div class="phoneBlock">
        <div class="phoneBlock__grid">
          <fa-icon icon="phone" family="solid"></fa-icon>
          <?php echo do_shortcode('[phone_link]'); ?>
        </div>
        <span>Message Goes Here</span>
      </div>
      <div class="lnbHeaderThreeBlock__content-btns">
        <a title="Make A Payment" class="hypercore-button" is="hypercore-button" href=""
          style="margin: 0.25em 0!important" target="_blank">
          <span>Call to Action</span>
          <fa-icon icon="caret-right" family="solid"></fa-icon>
        </a>
        <?php echo do_shortcode('[v8_schedule_button form-id="" heading="Schedule Your Next Service, Repair or Install" text="Schedule Now"]'); ?>
      </div>
    </div>
  </section>
  <?php echo ob_get_clean();
}
add_shortcode('header-three-block', 'output_header_three_block');

function output_header_three_column() {
  ob_start(); ?>
  <section class="lnbHeaderThreeCol">
    <div class="lnbHeaderThreeCol__logo">
      <?php echo hypercore_get_logo('large', true, 'header'); ?>
     </div>
     <div class="lnbHeaderThreeCol__content">
       <div class="lnbHeaderThreeCol__content-num">
         <span>Call or Text 24/7</span>
         <a class="lnbHeaderThreeCol__content-num link phone-num" href=" tel:<?php echo do_shortcode('[phone_number]'); ?>">
           <div>
             <fa-icon icon="phone" family="solid"></fa-icon>
             <?php echo do_shortcode('[phone_number]'); ?>
           </div>
         </a>
         </div>
         <div class="lnbHeaderThreeCol__content-btns">
           <a is="hypercore-button" href="<?php echo site_url('/'); ?>" class="hypercore-button"><fa-icon icon="arrow-right" family="solid"></fa-icon>CTA Button</a>
           <a is="hypercore-button" href="<?php echo site_url('/'); ?>" class="hypercore-button"><fa-icon icon="arrow-right" family="solid"></fa-icon>CTA Button</a>
         </div>
      </div>
    </div>
  </section>
  <?php echo ob_get_clean();
}
add_shortcode('header-three-column', 'output_header_three_column');

//**************************************** */
// MAIN STAGES //
//**************************************** */

// LNBMS6040 //
//**************************************** */
function output_lnb_ms_6040() {
  ob_start(); ?>
<section class="lnbMainstage6040">
    <div class="lnbMainstage6040__img hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing.jpef_.jpeg'); ?>">
    </div>
    <div class="lnbMainstage6040__content">
        <div class="unflex">
            <span class="lnbMainstage6040__cta">Main CTA Text Goes Here</span>
            <span class="lnbMainstage6040__text">Additional Sub CTA Text Goes Here</span>
            <a is="hypercore-button" class="hypercore-button lnb-radiate lnb-hover-wobble" href="<?php echo site_url('/'); ?>">
                <fa-icon icon="arrow-right"></fa-icon>
                <span>CTA Button Text Here</span>
            </a>

            <!-- NearbyNow Stynamic Widget -->
            <?php echo do_shortcode('[static-nn-widget name="false" type="inline" stars="#FBB040"]'); ?>

            <div class="lnbMainstage6040__badges">
                <!-- NearbyNow Badge -->
                <?php echo do_shortcode('[static-nn-badge]');?>
            </div>
        </div>
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('ms-lnb-6040', 'output_lnb_ms_6040');

// LNBMSBullet //
//**************************************** */
function output_lnb_ms_bullet() {
  ob_start(); ?>
<section class="lnbMSBullet hyper-lazyload-bg"
  data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing.jpef_.jpeg'); ?>">
  <div class="lnbMSBullet__content">
    <div class="lnbMSBullet__content--wrap">
      <span class="lnbMSBullet__content--cta">CTA Message or Asset SVG</span>
      <h2>H2 Heading Title Lorem Ipsum Dolor Sit Amet, Consetutur Sadipscing</h2>
      <span class="lnbMSBullet__content--call"><strong>24/7 Call</strong>
        <?php echo do_shortcode('[phone_number]'); ?>
      </span>
      <span class="lnbMSBullet__widgets">
        <?php echo do_shortcode('[static-nn-widget name="false" type="inline" stars="#fbb040" accent="#fff"]'); ?></span>
      </span>
      <span class="lnbMSBullet__badges">

        <!-- Put Review Badgets Here -->
        <?php echo do_shortcode('[static-nn-badge]'); ?>
      </span>
    </div>
  </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('ms-lnb-bullet', 'output_lnb_ms_bullet');

// LNBMSCenterBox //
//**************************************** */
function output_lnb_ms_center_box() {
  ob_start(); ?>
<section class="lnbMSCenterBox hyper-lazyload-bg"
  data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing.jpef_.jpeg'); ?>">
  <div class="lnbMSCenterBox__wrap">
    <div class="lnbMSCenterBox__box">
      <img src="<?php echo site_url() . '/wp-content/uploads/101057512_svg.svg'; ?>" />
      <h2>Really Strong Branded Message</h2>
      <a is="hypercore-button" class="hypercore-button" href="<?php echo site_url(); ?>">
        <fa icon icon="arrow-right">
          </fa-icon>
          Request Service
      </a>
    </div>
  </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('ms-lnb-center-box', 'output_lnb_ms_center_box');

// LNBMSLeftBox //
//**************************************** */
function output_lnb_ms_left_box() {
  ob_start(); ?>
  <section class="lnbMSLeftBox">
      <div class="lnbMSLeftBox__wrapper">
          <div class="lnbMSLeftBox__left">
          <div class="lnbMSLeftBox__left-container">
              <div class="lnbMSLeftBox__left-content">
                  <?php echo do_shortcode('[static-nn-widget name="false" type="inline" stars="#FBB040"]'); ?>
                  <span class="lnbMSLeftBox__left-content--header">CTA Message or Asset SVG</span>
                  <p>Optional text — Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                      sed diam nonumy eirmod. WCT 15/CC 96
                  </p>
                  <a href="<?php echo site_url('/'); ?>" class="hypercore-button"><fa-icon icon="arrow-right" family="solid"></fa-icon>Request Service</a>
              </div>
          </div>
        </div>
          <div class="lnbMSLeftBox__right">
              <img alt="" class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/img-indy-car-racing.jpef_.jpeg'); ?>">
          </div>
      </div>
  </section>  
<?php echo ob_get_clean();
}
add_shortcode('ms-lnb-left-box', 'output_lnb_ms_left_box');

// LNBMSTwoCol //
//**************************************** */
function output_lnb_ms_two_col() {
  ob_start(); ?>
<section class="lnbMainstageTwoCol">
    <div class="lnbMainstageTwoCol__content">
        <div class="unflex">
            <span class="lnbMainstageTwoCol__cta">CTA Message or Asset SVG</span>
            <h2>H2 Heading Title Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing</h2>
            <span class="lnbMainstageTwoCol__phone">24/7 Call <?php echo do_shortcode('[phone_link]'); ?></span>

            <!-- NearbyNow Stynamic Widget -->
            <?php echo do_shortcode('[static-nn-widget name="false" type="inline" stars="#FBB040"]'); ?>

            <div class="lnbMainstageTwoCol__badges">
                <!-- NearbyNow Badge -->
                <?php echo do_shortcode('[static-nn-badge]');?>
            </div>
        </div>
    </div>
    <div class="lnbMainstageTwoCol__img hyper-lazyload-bg"
  data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing.jpef_.jpeg'); ?>">
    </div>
</section>  
<?php echo ob_get_clean();
}
add_shortcode('ms-lnb-two-col', 'output_lnb_ms_two_col');


//**************************************** */
// FOOTERS //
//**************************************** */

// Three Column Footer //
//**************************************** */
function output_threecol_footer() {
    ob_start(); ?>
<section class="lnb3ColFooter">
  <div class="lnb3ColFooter__logo">
    <?php echo hypercore_get_logo() ?>
  </div>
  <div class="lnb3ColFooter__wrap">
    <div class="lnb3ColFooter__col">
      <div class="lnb3ColFooter__colHeading">
        Serving You
      </div>
      <p>
        License Numbers(s): <br />
        XXXXXXXXXXXXXXXXXXXXX
      </p>
      <p>Serving XXX Community Since 1980</p>
      <p>(Exceptional Main Services)</p>
      <p><strong>Business Hours</strong><br />
        Monday-Friday Xam-Xpm<br />
        Saturday Xam - Xpm<br />
        Service Line: 24 Hours<br />
      </p>
    </div>
    <div class="lnb3ColFooter__col">
      <div class="lnb3ColFooter__colHeading">
        Helpful Links
      </div>
      <div class="lnb3ColFooter__menu">
        <?php echo wp_nav_menu(array(
          'menu'       => 4,
          'menu_class' => "lnb3ColFooter__menuInner",
        )); ?>
      </div>
      <div class="lnb3ColFooter__colHeading">
        Connect
      </div>
      <div class="lnb3ColFooter__socialIcons">
        <a href="" target="_blank">
          <fa-icon icon="instagram" family="brands"></fa-icon>
        </a>
        <a href="" target="_blank">
          <fa-icon icon="youtube" family="brands"></fa-icon>
        </a>
        <a href="" target="_blank">
          <fa-icon icon="facebook-f" family="brands"></fa-icon>
        </a>
        <a href="" target="_blank">
          <fa-icon icon="linkedin" family="brands"></fa-icon>
        </a>
        <a href="" target="_blank">
          <fa-icon icon="google" family="brands"></fa-icon>
        </a>
        <a href="" target="_blank"><img src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/icon-bbb.svg">
        </a>
      </div>
    </div>
    <div class="lnb3ColFooter__col">
      <div class="lnb3ColFooter__colHeading">
        Get In Touch
      </div>
      <div class="lnb3ColFooter__contact">
        <section>
          <fa-icon family="solid" icon="phone"></fa-icon>
          <aside class="lnb3ColFooter__contactContent">
            <span>
              <strong><?php echo do_shortcode('[phone_link]'); ?></strong> -- Call Now
            </span>
          </aside>
        </section>
        <section>
          <fa-icon family="solid" icon="mobile"></fa-icon>
          <aside class="lnb3ColFooter__contactContent">
            <span>
              <strong><a href="tel:555-555-555">555-555-555</a></strong> -- Text Us
            </span>
          </aside>
        </section>
        <section>
          <fa-icon family="solid" icon="envelope"></fa-icon>
          <aside class="lnb3ColFooter__contactContent" class="lnb3ColFooter__contactContent">
            <span>
              <strong><a href="mailto:questions@url.com">questions@url.com</a></strong>
            </span>
          </aside>
        </section>
        <section>
          <fa-icon family="solid" icon="calendar"></fa-icon>
          <aside class="lnb3ColFooter__contactContent">
            <span><strong>Schedule</strong> -- Easy Scheduling</span>
          </aside>
        </section>
        <section>
          <fa-icon family="solid" icon="map-marker">
          </fa-icon>
          <aside class="lnb3ColFooter__contactContent">
            <strong>Our Location</strong>
            <span>Street Address</span>
            <span>City, State, Zipcode</span>
          </aside>
        </section>
      </div>
    </div>
  </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('three-col-footer', 'output_threecol_footer');

//**************************************** */
// COPYRIGHT //
//**************************************** */

// Copyright //
//**************************************** */
function output_copyright() {
  ob_start();
  $bi_type = get_theme_mod('hypercore_bi_type', true);
  switch ($bi_type) {
    case "Electrician":
      $bi_type_name = "Electrician";
      $bi_type_industry = "electricians";
      break;
    case "General Contractor":
      $bi_type_name = "General Contractor";
      $bi_type_industry = "general-contractor";
      break;
    case "Home & Construction Business":
      $bi_type_name = "Home & Construction";
      $bi_type_industry = "home-construction";
      break;
    case "House Painter":
      $bi_type_name = "Painter";
      $bi_type_industry = "painters";
      break;
    case "HVAC":
      $bi_type_name = "HVAC";
      $bi_type_industry = "hvac-companies";
      break;
    case "Local Business":
      $bi_type_name = "Local Business";
      $bi_type_industry = "local-business";
      break;
    case "Locksmith":
      $bi_type_name = "Locksmith";
      $bi_type_industry = "locksmith";
      break;
    case "Moving Company":
      $bi_type_name = "Moving Company";
      $bi_type_industry = "moving-companies";
      break;
    case "Plumber":
      $bi_type_name = "Plumber";
      $bi_type_industry = "plumbers";
      break;
    case "Roofing Contractor":
      $bi_type_name = "Roofing Contractor";
      $bi_type_industry = "roofing-companies";
      break;    
  }
  ?>
  <section class="lnbCopyright">
    <div class="lnbCopyright--wrap">
      <div class="lnbCopyright__info">
        <?php echo do_shortcode('[site_copyright]');?>
        <div class="lnbCopyright__info-links">
          <a href="<?php echo site_url('/terms-conditions/');?>">Terms & Conditions</a> | <a href="<?php echo site_url('/privacy-policy/');?>">Privacy Policy</a> | <a href="<?php echo site_url('/sitemap/');?>">Sitemap</a>
        </div> 
      </div>
      <div class="lnbCopyright__lnb">
        <a href="https://www.leadsnearby.com/"><img class="hyper-lazyload" data-lazy-src="https://site-template-files.s3.amazonaws.com/LNB-logo-footer.svg"/></a>
        <span><a href="https://leadsnearby.com/who-we-serve/<?php echo $bi_type_industry ?>" title="<?php echo $bi_type_name ?> Marketing and SEO"><?php echo $bi_type_name ?> Marketing and SEO</a> by <a href="https://www.leadsnearby.com/">LeadsNearby</a></span>
      </div>
    </div>
  </section>
  <?php echo ob_get_clean();
}
add_shortcode('copyright', 'output_copyright');

// Tabs
function output_tabs() {
  ob_start(); ?>
<section class="lnbTabs">
  <img class="lnbTabs__img hyper-lazyload " data-lazy-src="<?php echo content_url('/uploads/tabs.jpg'); ?>"/>
    <div class="lnbTabs__content">
          <div>
            <div class="toggleBox">
            <div class="toggleBox__topRow">
                <div class="toggleBox__tab toggleBox__tab--selected">Tab 1</div>
                <div class="toggleBox__tab">Tab 2</div>
                <div class="toggleBox__tab">Tab 3</div>
            </div>
            <div class="toggleBox__content toggleBox__content--active">
              <div>
                <span class="toggleBox__content-head">Heading 1</span>
                <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class="hypercore-button" is="hypercore-button" href="<?php echo site_url('/#/'); ?>">Learn More</a>
              </div>
            </div>
            <div class="toggleBox__content">
              <div>
                <span class="toggleBox__content-head">Heading 2</span>
                <p>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class="hypercore-button" is="hypercore-button" href="<?php echo site_url('/#/'); ?>">Learn More</a>
              </div>
            </div>
            <div class="toggleBox__content">
              <div>
                <span class="toggleBox__content-head">Heading 3</span>
                <p>3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class="hypercore-button" is="hypercore-button" href="<?php echo site_url('/#/'); ?>">Learn More</a>
              </div>
            </div>
        </div>
        <script>
            (function () {
                const tabs = document.getElementsByClassName('toggleBox__tab');

                function toggleTabs(event, key) {

                    // Change Toggle Tab Classes
                    let currentActive = document.querySelector('.toggleBox__tab--selected')
                    currentActive.classList.remove('toggleBox__tab--selected')
                    event.target.classList.add('toggleBox__tab--selected')

                    // Change Content Classes
                    let currentActiveContent = document.querySelector('.toggleBox__content--active')
                    const tabToggleBoxes = document.querySelectorAll('.toggleBox__content')
                    currentActiveContent.classList.remove('toggleBox__content--active')
                    tabToggleBoxes[key].classList.add('toggleBox__content--active')
                }

                Object.values(tabs).forEach((tab, key) => {
                    tab.addEventListener('click', (event) => {
                        toggleTabs(event, key)
                    });
                });

            })();
        </script>
        </div>
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('tabs', 'output_tabs');

// Tables
function output_tables() {
  ob_start(); ?>
  <section class="lnbTable">
    <div class="lnbTable__wrap">
        <div class="lnbTable__row">
            <span class="lnbTable__row-column--1">Subject</span>
            <span class="lnbTable__row-column--2">Lorem ipsum dolor sit amet.</span>
        </div>
        <div class="lnbTable__row">
            <span class="lnbTable__row-column--1">Subject</span>
            <span class="lnbTable__row-column--2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
        </div>
        <div class="lnbTable__row">
            <span class="lnbTable__row-column--1">Subject</span>
            <span class="lnbTable__row-column--2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</span>
        </div>
        <div class="lnbTable__row">
            <span class="lnbTable__row-column--1">Subject</span>
            <span class="lnbTable__row-column--2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        </div>
    </div>
    <div class="lnbTable__details">
        <span>Rebate Amount</span>
        <span>$XXX.XX</span>
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('lnb-tables', 'output_tables');

// Enhanced Tables
function output_enhanced_tables() {
  ob_start(); ?>
    <section class="lnbEnhancedTable">
        <div class="lnbEnhancedTable__head">Table Heading</div>
        <div class="lnbEnhancedTable__price">$XX.XX Monthly</div>
        <div class="lnbEnhancedTable__benefit">
        <fa-icon family="solid" icon="check"></fa-icon>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="lnbEnhancedTable__benefit">
        <fa-icon family="solid" icon="check"></fa-icon>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="lnbEnhancedTable__benefit">
        <fa-icon family="solid" icon="check"></fa-icon>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="lnbEnhancedTable__benefit">
        <fa-icon family="solid" icon="check"></fa-icon>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="lnbEnhancedTable__head">Add On Options</div>
        <div class="lnbEnhancedTable__accordions">
            <div class="lnbEnhancedTable__accordion close">
                <span class="lnbEnhancedTable__accordion-heading">
                    <span>Accordion Heading</span>
                    <fa-icon family="solid" icon="chevron-down"></fa-icon>
                </span>
                <div class="lnbEnhancedTable__accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                </div>
            </div>
            <div class="lnbEnhancedTable__accordion close">
                <span class="lnbEnhancedTable__accordion-heading">
                    <span>Accordion Heading</span>
                    <fa-icon family="solid" icon="chevron-down"></fa-icon>
                </span>
                <div class="lnbEnhancedTable__accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                </div>
            </div>
        </div>
    </section>
    <script>
        var accItem = document.getElementsByClassName('lnbEnhancedTable__accordion');
        var accHD = document.getElementsByClassName('lnbEnhancedTable__accordion-heading');
        for (i = 0; i < accHD.length; i++) {
            accHD[i].addEventListener('click', toggleItem, false);
        }
        function toggleItem() {
            var itemClass = this.parentNode.className;
            for (i = 0; i < accItem.length; i++) {
                accItem[i].className = 'lnbEnhancedTable__accordion close';
            }
            if (itemClass == 'lnbEnhancedTable__accordion close') {
                this.parentNode.className = 'lnbEnhancedTable__accordion open';
            }
        }
    </script>
<?php echo ob_get_clean();
}
add_shortcode('lnb-enhanced-tables', 'output_enhanced_tables');

// Video Facade
function output_video_facade() {
  ob_start(); ?>
<div class="lnbVidFacade">
  <div class="lnbVidFacade__container">
    <lite-youtube videoid="HSsqzzuGTPo" params="autoplay=1&controls=1&start=3&&modestbranding=1&rel=0&enablejsapi=" style="background-color: black;">
        <div class="lnbVidFacade__background hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing.jpef_.jpeg'); ?>">
            <div class="lnbVidFacade__content">
                <div class="lnbVidFacade__button" style="cursor: pointer;">
                    <fa-icon icon="youtube" family="brands"></fa-icon>
                    <div class="lnbVidFacade__button-white"></div>
                </div>
            </div>.
        </div>
		</lite-youtube>
		<span class="lnbVidFacade__close hypercore-button" onclick="mainstageStopPlaying()" style="cursor: pointer">Close Video</span>
	</div>
</div>
<script>
// Start Playing the Video When You Click On the Button
var button = document.querySelector('.lnbVidFacade__button');
var section = document.querySelector('.lnbVidFacade');
var video = document.querySelector('.lnbVidFacade lite-youtube');

// // Function for stopping the video
function mainstageStopPlaying() {
    var videoPlayer = document.querySelector('.lnbVidFacade iframe');
    section.classList.remove('playing');
    videoPlayer.remove();
}

</script>
<?php echo ob_get_clean();
}
add_shortcode('lnb-video-facade', 'output_video_facade');

// Video Facade
function output_image_slider() {
  ob_start(); ?>
<div class="lnbImageSlider glide">
	<div class="lnbImageSlider__carousel glide__track" data-glide-el="track">
		<ul class="glide__slides">
			<li class="glide__slide">
				<img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/blog.png'); ?>"/>
			</li>
            <li class="glide__slide">
				<img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/blog.png'); ?>"/>
			</li>
            <li class="glide__slide">
				<img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/blog.png'); ?>"/>
			</li>
            <li class="glide__slide">
				<img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/blog.png'); ?>"/>
			</li>
            <li class="glide__slide">
				<img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/blog.png'); ?>"/>
			</li>
		</ul>
        <div class="glide__arrows" data-glide-el="controls">
			<button class="glide__arrow glide__arrow--left" data-glide-dir="<">
				<fa-icon icon="chevron-left"></fa-icon>
			</button>
			<button class="glide__arrow glide__arrow--right" data-glide-dir=">">
				<fa-icon icon="chevron-right"></fa-icon>
			</button>
		</div>
	</div>
</div>
<?php echo ob_get_clean();
}
add_shortcode('lnb-image-slider', 'output_image_slider');

// Hover Shifter
function output_hover_shifter() {
  ob_start(); ?>
<div class="lnbContentSwitcher">
  <div class="lnbContentSwitcher__nav">
    <span class="lnbContentSwitcher__button lnbContentSwitcher__button--active arvo" data-switcher-button="plumbing"><fa-icon icon="chevron-right"></fa-icon> Plumbing Repairs</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="heaters"><fa-icon icon="chevron-right"></fa-icon> Water Heaters</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="construction"><fa-icon icon="chevron-right"></fa-icon> New Construction</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="gas"><fa-icon icon="chevron-right"></fa-icon> Gas Lines</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="water"><fa-icon icon="chevron-right"></fa-icon> Water Lines</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="sewer"><fa-icon icon="chevron-right"></fa-icon> Sewers</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="drains"><fa-icon icon="chevron-right"></fa-icon> Drains</span>
  </div>
  <div class="lnbContentSwitcher__contentWrapper">
    <div class="lnbContentSwitcher__content lnbContentSwitcher__content--active" data-switcher-content="plumbing">
      <p>With things like plumbing leaks and repairs, we know that timing is important. These are issues that you should have fixed right away to prevent future damages. We work with efficiency to ensure that whatever may be happening in your home gets fixed in quick fashion. Our full repair services include but are not limited to:</p>
      <ul>
        <li>Leaky Pipes</li>
        <li>Clogged Drains</li>
        <li>Sewer Lines</li>
        <li>Broken Fixtures</li>
      </ul>
      <p>Don’t delay - you can make the call today and one of our technicians will be at your property soon to take care of your plumbing emergency with pride.</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/plumbing-repairs/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="heaters">
      <p>When it comes to your water heater, many times they can be easily repaired. Sometimes, however, the best way to move forward is installing a new water heater with great care to make a tight fit work for your space. Whatever comes up with your project – you can be sure that we will tackle your issue head on to give you the quality that you deserve.</p>
      <p>We offer repair and installation services on:</p>
      <ul>
        <li>Standard Tank Water Heaters</li>
        <li>Tankless Water Heaters</li>
        <li>Commercial Water Heaters</li>
      </ul>
      <p>Don’t let a broken water heater disrupt your routine — connect with Double L for fast, affordable water heater services now!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-heater-repair-replacements/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="construction">
      <p>If you are building a new home or business, let Double L handle your plumbing from start to finish! We stand by our quality work that will help you prevent any potential plumbing issues into the future, and you can have confidence as a business owner that the work you paid for is work that is worth every cent.</p>
      <p>Our renovation and new construction services include:</p>
      <ul>
        <li>Water Heaters</li>
        <li>Pipes</li>
        <li>Gas, Sewer & Water Main Line</li>
        <li>Appliances</li>
        <li>And More!</li>
      </ul>
      <p>Consult with our team for expert plumbing planning now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/remodels-new-construction/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="gas">
      <p>We are proud to provide full plumbing solutions in Azle, including those having to deal with your gas lines. We are a locally owned and operated business here in the community and are completely licensed and insured so that you have confidence in us working on your gas line project.</p>
      <p>We provide:</p>
      <ul>
        <li>New Gas Line Installation</li>
        <li>Gas Line Leak Detection</li>
        <li>Gas Line Repairs</li>
      </ul>
      <p>Don’t let a gas line problem sit — call Double L right away for prompt affordable services now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/gas-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="water">
      <p>Clean water is essential to your home or business. Double L offers water main line services to ensure your water is able to come into your building easily and effectively. On top of that, our technicians are trained to give some of the best customer service that you will see in any industry.</p>
      <p>Our water line services include:</p>
      <ul>
        <li>Repairs</li>
        <li>Full Replacements</li>
      </ul>
      <p>Clean water is important to your health. With the help of Double L Plumbing, your water line will function properly to bring you the water you need for years to come. </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="sewer">
      <p>Sewer systems and lines can suffer a number of issues, including clogs and cracks from tree roots. Our services will help determine what is going on with your line and best next steps. Sometimes that will mean making a recommendation that will put you in a better situation to avoid costly repairs down the road.</p>
      <p>We provide: </p>
      <ul>
        <li>Sewer Line Cleaning</li>
        <li>Sewer Line Repairs</li>
        <li>Full Sewer Line Replacements</li>
      </ul>
      <p>We offer appointment times that will work for you, regardless of the job size or what kind of work you need done. Call us today for your sewer needs!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/sewer-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="drains">
      <p>Most plumbing jobs need to be taken care of right away, including those concerning your drains. A drain that is clogged for a long time could suffer cracks and breaks in the pipe, leading to larger damage and higher costs.  </p>
      <p>If you are thinking about hesitating – don’t! We can help you with an evaluation of your drains and plumbing system so that you know what may be going on behind the scenes with your pipes. We also use video camera technology if necessary to really determine what next steps need to be taken. </p>
      <p>Our customer service sets us apart from the other businesses in the area because we truly care about you and your project – your situation isn’t just another job for us, it’s a real problem that you deserve quality help with. Call us for help with your drains today! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/drain-cleaning/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
  </div>
</div>
<script>
class switcher {
    constructor() {
        // Get the switcher
        this.switcher = document.querySelector('.lnbContentSwitcher')
        // Get buttons
        this.buttons = document.querySelectorAll('.lnbContentSwitcher__button')
        this.setButtonEvents()
    }

    setButtonEvents() {
        // Hover event
        this.buttons.forEach(button => {
            button.addEventListener('mouseover', () => {
                this.toggleActive(button)
            })
        })
    }

    // Get currently active button
    getActive() {
        const activeButton = document.querySelector('.lnbContentSwitcher__button--active')
        return activeButton || false
    }


    toggleActive(button) {
        const active = this.getActive();
        console.log(active);
        if (active && active.dataset.switcherButton == button.dataset.switcherButton) {
            return
        }
        active.classList.remove('lnbContentSwitcher__button--active')
        const activeContent = document.querySelector(`.lnbContentSwitcher__content[data-switcher-content="${active.dataset.switcherButton}"]`)
        activeContent.classList.remove('lnbContentSwitcher__content--active')

        button.classList.add('lnbContentSwitcher__button--active')
        const content = document.querySelector(`.lnbContentSwitcher__content[data-switcher-content="${button.dataset.switcherButton}"]`)
        content.classList.add('lnbContentSwitcher__content--active')
    }


    // If is the same as button being hovered on, do nothing
    // If not, remove active class from current active button and content
    // Add active class to hovered on button and associated content
}

document.addEventListener("DOMContentLoaded", function () {
    new switcher()
});
</script>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Plumbing Repairs</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
        <p>With things like plumbing leaks and repairs, we know that timing is important. These are issues that you should have fixed right away to prevent future damages. We work with efficiency to ensure that whatever may be happening in your home gets fixed in quick fashion. Our full repair services include but are not limited to:</p>
      <ul>
        <li>Leaky Pipes</li>
        <li>Clogged Drains</li>
        <li>Sewer Lines</li>
        <li>Broken Fixtures</li>
      </ul>
      <p>Don’t delay - you can make the call today and one of our technicians will be at your property soon to take care of your plumbing emergency with pride.</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/plumbing-repairs/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Water Heaters</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
      <p>When it comes to your water heater, many times they can be easily repaired. Sometimes, however, the best way to move forward is installing a new water heater with great care to make a tight fit work for your space. Whatever comes up with your project – you can be sure that we will tackle your issue head on to give you the quality that you deserve.</p>
      <p>We offer repair and installation services on:</p>
      <ul>
        <li>Standard Tank Water Heaters</li>
        <li>Tankless Water Heaters</li>
        <li>Commercial Water Heaters</li>
      </ul>
      <p>Don’t let a broken water heater disrupt your routine — connect with Double L for fast, affordable water heater services now!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-heater-repair-replacements/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
  </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">New Construction</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
       <p>If you are building a new home or business, let Double L handle your plumbing from start to finish! We stand by our quality work that will help you prevent any potential plumbing issues into the future, and you can have confidence as a business owner that the work you paid for is work that is worth every cent.</p>
      <p>Our renovation and new construction services include:</p>
      <ul>
        <li>Water Heaters</li>
        <li>Pipes</li>
        <li>Gas, Sewer & Water Main Line</li>
        <li>Appliances</li>
        <li>And More!</li>
      </ul>
      <p>Consult with our team for expert plumbing planning now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/remodels-new-construction/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Gas Lines</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
      <p>We are proud to provide full plumbing solutions in Azle, including those having to deal with your gas lines. We are a locally owned and operated business here in the community and are completely licensed and insured so that you have confidence in us working on your gas line project.</p>
      <p>We provide:</p>
      <ul>
        <li>New Gas Line Installation</li>
        <li>Gas Line Leak Detection</li>
        <li>Gas Line Repairs</li>
      </ul>
      <p>Don’t let a gas line problem sit — call Double L right away for prompt affordable services now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/gas-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Water Lines</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
    <p>Clean water is essential to your home or business. Double L offers water main line services to ensure your water is able to come into your building easily and effectively. On top of that, our technicians are trained to give some of the best customer service that you will see in any industry.</p>
      <p>Our water line services include:</p>
      <ul>
        <li>Repairs</li>
        <li>Full Replacements</li>
      </ul>
      <p>Clean water is important to your health. With the help of Double L Plumbing, your water line will function properly to bring you the water you need for years to come. </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
  </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Sewers</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
      <p>Sewer systems and lines can suffer a number of issues, including clogs and cracks from tree roots. Our services will help determine what is going on with your line and best next steps. Sometimes that will mean making a recommendation that will put you in a better situation to avoid costly repairs down the road.</p>
      <p>We provide: </p>
      <ul>
        <li>Sewer Line Cleaning</li>
        <li>Sewer Line Repairs</li>
        <li>Full Sewer Line Replacements</li>
      </ul>
      <p>We offer appointment times that will work for you, regardless of the job size or what kind of work you need done. Call us today for your sewer needs!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/sewer-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Drains</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
       <p>Most plumbing jobs need to be taken care of right away, including those concerning your drains. A drain that is clogged for a long time could suffer cracks and breaks in the pipe, leading to larger damage and higher costs.  </p>
      <p>If you are thinking about hesitating – don’t! We can help you with an evaluation of your drains and plumbing system so that you know what may be going on behind the scenes with your pipes. We also use video camera technology if necessary to really determine what next steps need to be taken. </p>
      <p>Our customer service sets us apart from the other businesses in the area because we truly care about you and your project – your situation isn’t just another job for us, it’s a real problem that you deserve quality help with. Call us for help with your drains today! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/drain-cleaning/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<script>
    var acc = document.getElementsByClassName("lnbCollapsible__button");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var icon = this.getElementsByTagName('fa-icon')[0];
            // var btnText = this.getElementsByClassName('changing-text')[0];
            var panel = this.nextElementSibling;

            if (this.classList.contains("active")) {
                icon.setAttribute("icon", "minus");
                // btnText.innerHTML = "Hide";
                panel.style.maxHeight = panel.scrollHeight + "px";
            } else {
                icon.setAttribute("icon", "plus");
                // btnText.innerHTML = "View";
                panel.style.maxHeight = null;
            }
        });
    }
</script>
<?php echo ob_get_clean();
}
add_shortcode('lnb-hover-shifter', 'output_hover_shifter');

//**************************************** */
// HOME PAGE ELEMENTS //
//**************************************** */

// Before and After //
//**************************************** */
function output_before_after() {
  ob_start(); ?>
<section class="lnbBeforeAfter">
    <figure class="lnbBeforeAfter__container">
        <!-- After Image -->
        <img src="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg');?>">
        <div class="lnbBeforeAfter__resize">
            <!-- Before Image -->
            <img src="<?php echo content_url('/uploads/img-indy-car-racing.jpef_-1536x696.jpeg');?>">
            <span class="lnbBeforeAfter__label lnbBeforeAfter__label--before" data-type="modified">Before</span>
        </div>
        <span class="lnbBeforeAfter__label lnbBeforeAfter__label--after" data-type="original">After</span>
        <span class="lnbBeforeAfter__handle">
            <svg enable-background="new 0 0 32 32" height="32" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg"><g fill="#000"><path d="m13 21-5-5 5-5z"/><path d="m19 11 5 5-5 5z"/></g></svg>
        </span>
    </figure>
    <script>
    jQuery(function($) {
    /******************** Before/After Comparission Slider ********************/
    var dragging = false,
    scrolling = false,
    resizing = false;
    var imageComparisonContainers = $('.lnbBeforeAfter__container');
    checkPosition(imageComparisonContainers);
    $(window).on('scroll', function() {
    if (!scrolling) {
        scrolling = true;
        !window.requestAnimationFrame
        ? setTimeout(function() {
            checkPosition(imageComparisonContainers);
            }, 100)
        : requestAnimationFrame(function() {
            checkPosition(imageComparisonContainers);
            });
    }
    });
    imageComparisonContainers.each(function() {
    var actual = $(this);
    drags(
        actual.find('.lnbBeforeAfter__handle'),
        actual.find('.lnbBeforeAfter__resize'),
        actual,
        actual.find('.lnbBeforeAfter__label[data-type="original"]'),
        actual.find('.lnbBeforeAfter__label[data-type="modified"]')
    );
    });
    $(window).on('resize', function() {
    if (!resizing) {
        resizing = true;
        !window.requestAnimationFrame
        ? setTimeout(function() {
            checkLabel(imageComparisonContainers);
            }, 100)
        : requestAnimationFrame(function() {
            checkLabel(imageComparisonContainers);
            });
    }
    });

    function checkPosition(container) {
    container.each(function() {
        var actualContainer = $(this);
        if (
        $(window).scrollTop() + $(window).height() * 0.5 >
        actualContainer.offset().top
        ) {
        actualContainer.addClass('is-visible');
        }
    });
    scrolling = false;
    }

    function drags(
    dragElement,
    resizeElement,
    container,
    labelContainer,
    labelResizeElement
    ) {
    dragElement
        .on('mousedown vmousedown', function(e) {
        dragElement.addClass('draggable');
        resizeElement.addClass('resizable');
        var dragWidth = dragElement.outerWidth(),
            xPosition = dragElement.offset().left + dragWidth - e.pageX,
            containerOffset = container.offset().left,
            containerWidth = container.outerWidth(),
            minLeft = containerOffset + 10,
            maxLeft = containerOffset + containerWidth - dragWidth - 10;
        dragElement
            .parents()
            .on('mousemove vmousemove', function(e) {
            if (!dragging) {
                dragging = true;
                !window.requestAnimationFrame
                ? setTimeout(function() {
                    animateDraggedHandle(
                        e,
                        xPosition,
                        dragWidth,
                        minLeft,
                        maxLeft,
                        containerOffset,
                        containerWidth,
                        resizeElement,
                        labelContainer,
                        labelResizeElement
                    );
                    }, 100)
                : requestAnimationFrame(function() {
                    animateDraggedHandle(
                        e,
                        xPosition,
                        dragWidth,
                        minLeft,
                        maxLeft,
                        containerOffset,
                        containerWidth,
                        resizeElement,
                        labelContainer,
                        labelResizeElement
                    );
                    });
            }
            })
            .on('mouseup vmouseup', function(e) {
            dragElement.removeClass('draggable');
            resizeElement.removeClass('resizable');
            });
        e.preventDefault();
        })
        .on('mouseup vmouseup', function(e) {
        dragElement.removeClass('draggable');
        resizeElement.removeClass('resizable');
        });
    }

    function animateDraggedHandle(
    e,
    xPosition,
    dragWidth,
    minLeft,
    maxLeft,
    containerOffset,
    containerWidth,
    resizeElement,
    labelContainer,
    labelResizeElement
    ) {
    var leftValue = e.pageX + xPosition - dragWidth;
    if (leftValue < minLeft) {
        leftValue = minLeft;
    } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
    }
    var widthValue =
        ((leftValue + dragWidth / 2 - containerOffset) * 100) / containerWidth +
        '%';
    $('.draggable')
        .css('left', widthValue)
        .on('mouseup vmouseup', function() {
        $(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
        });
    $('.resizable').css('width', widthValue);
    dragging = false;
    }
    /******************** End Before/After Comparission Slider ********************/
    });
    </script>
</section>
  <?php echo ob_get_clean();
}
add_shortcode('before-after', 'output_before_after');

// Block H2 //
//**************************************** */
function output_block_h2() {
  ob_start(); ?>
  <h2 class="lnbBlockH2">H2 Heading Title Length Flexible</h2>
  <?php echo ob_get_clean();
}
add_shortcode('block-h2', 'output_block_h2');

// Block H3 //
//**************************************** */
function output_block_h3() {
  ob_start(); ?>
  <section class="lnbBlockH3">
    <h3>H3 Heading Title Length Flexible</h3>
    <span class="lnbBlockH3__sub">Compelling Word or Phrase</span>
  </section>
  <?php echo ob_get_clean();
}
add_shortcode('block-h3', 'output_block_h3');

// Block P //
//**************************************** */
function output_block_p() {
  ob_start(); ?>
  <section class="lnbBlockParagraph">
    <span class="lnbBlockParagraph__title">1-5 Word Compelling</span>
    <h3>H3 Heading Title Length Flexible</h3>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
  </section>
  <?php echo ob_get_clean();
}
add_shortcode('block-p', 'output_block_p');

// CTA Center Box //
//**************************************** */
function output_center_box() {
  ob_start(); ?>
<section class="lnbCTACenterBox hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>">
    <div class="lnbCTACenterBox__container hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing.jpef_-1536x696.jpeg'); ?>">
        <div class="lnbCTACenterBox__container-content">
            <h3>H3 Heading Title Length Flexible Lorem Ipsum 5-7 WCC</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. WCT 18/CC 120</p>
            <div class="lnbCTACenterBox__container-contacts">
                <div class="lnbCTACenterBox__container-contacts--num">
                    <?php echo do_shortcode('[phone_link]'); ?>
                </div>
                <div class="lnbCTACenterBox__container-contacts--btn">
                    <a is="hypercore-button" class="hypercore-button lnbArrowHover" href="<?php echo site_url('/#/'); ?>">
                        <fa-icon icon="arrow-right" family="solid" class="lnbArrowHover__arrow"></fa-icon>
                        <span>Button CTA</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
  <?php echo ob_get_clean();
}
add_shortcode('center-box', 'output_center_box');

// Icon Rectangles //
//**************************************** */
function output_icon_rects() {
  ob_start(); ?>
<section class="lnbIconRects">
    <div class="lnbIconRects__blocks">
        <div class="lnbIconRects__blocks-item">
            <span class="lnbIconRects__blocks-item--icon"><fa-icon icon="heart" family="solid"></fa-icon></span>
            <div class="lnbIconRects__blocks-content">
                <span class="lnbIconRects__blocks-content--title">Item Title 1/3 WCT</span>
                <span class="lnbIconRects__blocks-text">Lorem ipsum dolor sit amet consetetur sadipscing elitr. <a href="<?php echo site_url('/'); ?>">WCT 8/CC 55</a></span>
                <span class="lnbIconRects__blocks-text--arrow arrow"><fa-icon icon="arrow-right" family="solid"></span>
            </div>
        </div>
        <div class="lnbIconRects__blocks-item">
        <span class="lnbIconRects__blocks-item--icon"><fa-icon icon="heart" family="solid"></fa-icon></span>
            <div class="lnbIconRects__blocks-content">
                <span class="lnbIconRects__blocks-content--title">Item Title 1/3 WCT</span>
                <span class="lnbIconRects__blocks-text">Lorem ipsum dolor sit amet consetetur sadipscing elitr. <a href="<?php echo site_url('/'); ?>">WCT 8/CC 55</a></span>
                <span class="lnbIconRects__blocks-text--arrow arrow"><fa-icon icon="arrow-right" family="solid"></span>
            </div>
        </div>
        <div class="lnbIconRects__blocks-item">
        <span class="lnbIconRects__blocks-item--icon"><fa-icon icon="heart" family="solid"></fa-icon></span>
            <div class="lnbIconRects__blocks-content">
                <span class="lnbIconRects__blocks-content--title">Item Title 1/3 WCT</span>
                <span class="lnbIconRects__blocks-text">Lorem ipsum dolor sit amet consetetur sadipscing elitr. <a href="<?php echo site_url('/'); ?>">WCT 8/CC 55</a></span>
                <span class="lnbIconRects__blocks-text--arrow arrow"><fa-icon icon="arrow-right" family="solid"></span>
            </div>
        </div>
        <div class="lnbIconRects__blocks-item">
        <span class="lnbIconRects__blocks-item--icon"><fa-icon icon="heart" family="solid"></fa-icon></span>
            <div class="lnbIconRects__blocks-content">
                <span class="lnbIconRects__blocks-content--title">Item Title 1/3 WCT</span>
                <span class="lnbIconRects__blocks-text">Lorem ipsum dolor sit amet consetetur sadipscing elitr. <a href="<?php echo site_url('/'); ?>">WCT 8/CC 55</a></span>
                <span class="lnbIconRects__blocks-text--arrow arrow"><fa-icon icon="arrow-right" family="solid"></span>
            </div>
        </div>
    </div>
</section>
  <?php echo ob_get_clean();
}
add_shortcode('icon-rects', 'output_icon_rects');


// Icon Squares //
//**************************************** */
function output_icon_squares() {
  ob_start(); ?>

<section class="lnbIconSquares">
  <div class="lnbIconSquares__grid">
    <a class="lnbIconSquares__card" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquares__content">
        <fa-icon icon="tools" family="solid" role="presentation" aria-label="Display Icon"></fa-icon>
        <span class="lnbIconSquares__title">Item Title</span>
      </div>
    </a>
    <a class="lnbIconSquares__card" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquares__content">
        <fa-icon icon="tools" family="solid" role="presentation" aria-label="Display Icon"></fa-icon>
        <span class="lnbIconSquares__title">Item Title</span>
      </div>
    </a>
    <a class="lnbIconSquares__card" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquares__content">
        <fa-icon icon="tools" family="solid" role="presentation" aria-label="Display Icon"></fa-icon>
        <span class="lnbIconSquares__title">Item Title</span>
      </div>
    </a>
    <a class="lnbIconSquares__card" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquares__content">
        <fa-icon icon="tools" family="solid" role="presentation" aria-label="Display Icon"></fa-icon>
        <span class="lnbIconSquares__title">Item Title</span>
      </div>
    </a>
    <a class="lnbIconSquares__card" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquares__content">
        <fa-icon icon="tools" family="solid" role="presentation" aria-label="Display Icon"></fa-icon>
        <span class="lnbIconSquares__title">Item Title</span>
      </div>
    </a>
    <a class="lnbIconSquares__card" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquares__content">
        <fa-icon icon="tools" family="solid" role="presentation" aria-label="Display Icon"></fa-icon>
        <span class="lnbIconSquares__title">Item Title</span>
      </div>
    </a>
  </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('icon-squares', 'output_icon_squares');


// Icon Squares BG//
//**************************************** */
function output_icon_squares_bg() {
  ob_start(); ?>

<section class="lnbIconSquaresBG hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>">
  <div class="lnbIconSquaresBG__squares"> 
    <a class="lnbIconSquaresBG__square" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquaresBG__square-content">
        <fa-icon icon="tools" family="solid"></fa-icon>
        <span>Item Title Heading</span>
      </div>
    </a>
    <a class="lnbIconSquaresBG__square" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquaresBG__square-content">
        <fa-icon icon="tools" family="solid"></fa-icon>
        <span>Item Title Heading</span>
      </div>
    </a>
    <a class="lnbIconSquaresBG__square" href="<?php echo site_url('/#/'); ?>">
      <div class="lnbIconSquaresBG__square-content">
        <fa-icon icon="tools" family="solid"></fa-icon>
        <span>Item Title Heading</span>
      </div>
    </a>
    <a class="lnbIconSquaresBG__square" href="<?php echo site_url('/#/indoor-air-quality/'); ?>">
      <div class="lnbIconSquaresBG__square-content">
        <fa-icon icon="tools" family="solid"></fa-icon>
        <span>Item Title Heading</span>
      </div>
    </a>
  </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('icon-squares-bg', 'output_icon_squares_bg');


// Image with Background //
//**************************************** */
function output_img_with_bg() {
  ob_start(); ?>

<section class="lnbImgWithBG">
  <?php echo hypercore_get_lazyload_image( '375', 'lnbImgWithBG__img' ); ?>
</section>

<?php echo ob_get_clean();
}
add_shortcode('img-with-bg', 'output_img_with_bg');


// Partial Slide Up //
//**************************************** */
function output_partial_slideup() {
  ob_start(); ?>

<section class="lnbPartialSlideUps">
    <a class="lnbPartialSlideUps__box" href="<?php echo site_url('/');?>" >
        <img class="lnbPartialSlideUps__box-image hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg') ?>" />
        <span class="lnbPartialSlideUps__box-overlay">
            <span class="lnbPartialSlideUps__box-heading">           
                <h3 class="lnbPartialSlideUps__box-title"></h3>            
            </span>
            <span class="lnbPartialSlideUps__box-description"></span>
        </span>
    </a>   
</section>

<?php echo ob_get_clean();
}
add_shortcode('partial-slideup', 'output_partial_slideup');


// Review Thirds //
//**************************************** */
function output_reviews_third() {
  ob_start(); ?>

<section>
  <div class="lnbNNReviewThirds">
    <h3 class="faux-h2">H3 Heading Title Length Flexible</h3>
    <p class="lnbNNReviewThirds__compelling">1-3 Word Compelling</p>
    <hypercore-nearby-now-reviews></hypercore-nearby-now-reviews>
    <div class="lnbNNReviewThirds__buttons">
      <a title="" is="hypercore-button" class="lnb-hover-wobble hypercore-button"
        href="https://mammothmurals.com/consultation-scheduling/" aria-label="Button">
        <fa-icon icon="arrow-right" family="solid" class="lnbArrowHover__arrow" role="presentation"
          aria-label="Display Icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
            </path>
          </svg></fa-icon>
        <span>Button CTA</span>
      </a>
      <a title="" is="hypercore-button" class="lnb-hover-wobble hypercore-button"
        href="https://mammothmurals.com/consultation-scheduling/" aria-label="Button">
        <fa-icon icon="arrow-right" family="solid" class="lnbArrowHover__arrow" role="presentation"
          aria-label="Display Icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
            </path>
          </svg></fa-icon>
        <span>About Us</span>
      </a>
    </div>
  </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('reviews-third', 'output_reviews_third');


// Right Content Overlay //
//**************************************** */
function output_right_content_overlay() {
  ob_start(); ?>

<section class="lnbRightContentOverlay hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>">
    <div class="lnbRightContentOverlay__container">
    <div class="lnbRightContentOverlay__services">
        <span class="lnbRightContentOverlay__header">Heading Compelling Phrase 5 - 8 WCC</span>
            <div class="lnbRightContentOverlay__item">
                <img src="<?php echo content_url('/uploads/check-in-circle-green42A853.svg');?>">
                <div>
                <span class="lnbRightContentOverlay__item-heading">H3 Lorem Ispum</span>
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. WCT 36/CC 212</span>
            </div>
        </div>
        <div class="lnbRightContentOverlay__item">
                <img src="<?php echo content_url('/uploads/check-in-circle-green42A853.svg');?>">
                <div>
                <span class="lnbRightContentOverlay__item-heading">H3 Lorem Ispum</span>
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. WCT 36/CC 212</span>
            </div>
        </div>
        <div class="lnbRightContentOverlay__item">
                <img src="<?php echo content_url('/uploads/check-in-circle-green42A853.svg');?>">
                <div>
                <span class="lnbRightContentOverlay__item-heading">H3 Lorem Ispum</span>
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. WCT 36/CC 212</span>
            </div>
       </div>
       <a is="hypercore-button" href="<?php echo site_url('/about-us/');?>" class="hypercore-button"><fa-icon icon="arrow-right" family="solid"></fa-icon>Button CTA</a>
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('right-content-overlay', 'output_right_content_overlay');


// Shifty Boxes //
//**************************************** */
function output_shifty_boxes() {
  ob_start(); ?>

<section class="lnbShiftyBoxes">
    <div class="lnbShiftyBoxes__grid">
        <div class="lnbShiftyBoxes__content">
            <div class="lnbShiftyBoxes__heading hyper-lazyload-bg" data-bg-image="<?php echo content_url('/'); ?>">
                <h3>H3 Heading Title Length Flexible</h3>
            </div>
            <!-- This commented out code allows the boxes to be paginated, delete if unncessary -->

            <!-- <div class="lnbElementPagination">
                <div class="lnbElementPagination__tabRow">
                    <div class="lnbElementPagination__tab lnbElementPagination__tab--first lnbElementPagination__tab--selected">
                    <span class="lnbElementPagination__tab-text">1</span>
                    </div>
                    <div class="lnbElementPagination__tab">
                    <span class="lnbElementPagination__tab-text">2</span>
                    </div>
                    <span class="lnbElementPagination__next" onclick="lnbNextTab(this)"><fa-icon icon="arrow-right"></fa-icon></span>
                </div>
                <div class="lnbElementPagination__content lnbElementPagination__content--first lnbElementPagination__content--active"> -->
                <div class="lnbShiftyBoxes__boxes">
                    <a class="lnbShiftyBoxes__box" href="<?php echo site_url('/'); ?>">
                        <span class="lnbShiftyBoxes__box-content">
                            <span class="lnbShiftyBoxes__box-upper">
                                <fa-icon icon="heart" class="title--large" family="solid"></fa-icon>
                                <span class="lnbShiftyBoxes__box-title">Item Title 1/3 WCT</span>
                            </span>
                            <span class="lnbShiftyBoxes__box-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat voluptua. WCT 22/CC 145</span>
                            <fa-icon class="lnbShiftyBoxes__box-arrow" family="regular" icon="long-arrow-alt-right"></fa-icon>
                        </span>
                    </a>
                    <a class="lnbShiftyBoxes__box" href="<?php echo site_url('/'); ?>">
                        <span class="lnbShiftyBoxes__box-content">
                            <span class="lnbShiftyBoxes__box-upper">
                                <fa-icon icon="heart" class="title--large" family="solid"></fa-icon>
                                <span class="lnbShiftyBoxes__box-title">Item Title 1/3 WCT</span>
                            </span>
                            <span class="lnbShiftyBoxes__box-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat voluptua. WCT 22/CC 145</span>
                            <fa-icon class="lnbShiftyBoxes__box-arrow" family="regular" icon="long-arrow-alt-right"></fa-icon>
                        </span>
                    </a>
                    <a class="lnbShiftyBoxes__box" href="<?php echo site_url('/'); ?>">
                        <span class="lnbShiftyBoxes__box-content">
                            <span class="lnbShiftyBoxes__box-upper">
                                <fa-icon icon="heart" class="title--large" family="solid"></fa-icon>
                                <span class="lnbShiftyBoxes__box-title">Item Title 1/3 WCT</span>
                            </span>
                            <span class="lnbShiftyBoxes__box-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat voluptua. WCT 22/CC 145</span>
                            <fa-icon class="lnbShiftyBoxes__box-arrow" family="regular" icon="long-arrow-alt-right"></fa-icon>
                        </span>
                    </a>
                    <a class="lnbShiftyBoxes__box" href="<?php echo site_url('/'); ?>">
                        <span class="lnbShiftyBoxes__box-content">
                            <span class="lnbShiftyBoxes__box-upper">
                                <fa-icon icon="heart" class="title--large" family="solid"></fa-icon>
                                <span class="lnbShiftyBoxes__box-title">Item Title 1/3 WCT</span>
                            </span>
                            <span class="lnbShiftyBoxes__box-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat voluptua. WCT 22/CC 145</span>
                            <fa-icon class="lnbShiftyBoxes__box-arrow" family="regular" icon="long-arrow-alt-right"></fa-icon>
                        </span>
                    </a>
                </div>
            </div>
            <!-- This commented out code allows the boxes to be paginated, delete if unncessary -->

            <!-- <div class="lnbElementPagination__content">
            
            </div>
        </div> 
        </div> -->
        <div class="lnbShiftyBoxes__img hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>">
        </div>
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('shifty-boxes', 'output_shifty_boxes');


// Static Badges //
//**************************************** */
function output_static_badges() {
  ob_start(); ?>

<section class="lnbStaticBadges">
    <div class="lnbStaticBadges__grid">
        <?php echo hypercore_get_lazyload_image(368, 'lnbStaticBadges__badge'); ?>
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('static-badges', 'output_static_badges');


// Two Column Hover Images //
//**************************************** */
function output_two_col_hov_img() {
  ob_start(); ?>

<section class="lnbTwoColHoverImgs">
  <div class="lnbTwoColHoverImgs__imgs">
    <a class="lnbTwoColHoverImgs__imgs-link" href="<?php echo site_url('/#/'); ?>">
      <?php echo hypercore_get_lazyload_image( '368' ); ?>
    </a>
    <a class="lnbTwoColHoverImgs__imgs-link" href="<?php echo site_url('/#/'); ?>">
      <?php echo hypercore_get_lazyload_image( '368' ); ?>
    </a>
  </div>
  <div class="lnbTwoColHoverImgs__content">
    <div class="lnbTwoColHoverImgs__content-inner">
      <span>1-2 Word Compelling</span>
      <h3>H3 Heading Title Length Flexible</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras. Ut sem nulla pharetra diam sit amet nisl. Nunc scelerisque viverra mauris in aliquam sem.</p>
      <a is="hypercore-button" class="hypercore-button lnbArrowHover" href="<?php echo site_url('#'); ?>">
        <fa-icon icon="arrow-right" family="solid" class="lnbArrowHover__arrow"></fa-icon>
        <span>Button CTA</span>
      </a>
    </div>
  </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-col-hov-imgs', 'output_two_col_hov_img');


// Two Columns Left Content//
//**************************************** */
function output_two_col_left_content() {
  ob_start(); ?>

<section class="lnbTwoColLeftContent">
  <div class="lnbTwoColLeftContent__content">
    <div class="lnbTwoColLeftContent__content-inner hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/2022/04/background-svg.svg'); ?>">
    <span class="lnbTwoColLeftContent__content-inner--header">1-2 Word Compelling</span>
      <h3>H3 Heading Title Length Flexible</h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren. WCT 36-85/CC 212-530</p>
      <a is="hypercore-button" class="hypercore-button lnbArrowHover" href="<?php echo site_url('/#/'); ?>">
        <fa-icon icon="arrow-right" family="solid" class="lnbArrowHover__arrow"></fa-icon>
        <span>Button CTA</span>
      </a>
    </div>
  </div>
  <img src="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg');?>">
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-col-left-content', 'output_two_col_left_content');


// Two Column Link List //
//**************************************** */
function output_two_col_link_list() {
  ob_start(); ?>

<section class="lnbTwoColLinkList">
    <div class="lnbTwoColLinkList__content">
        <div class="unflex">
            <h3 class="lnbTwoColLinkList__heading"></h3>
            <ul class="lnbTwoColLinkList__list">
                <li>
                    <a href="<?php echo site_url(''); ?>">
                        <fa-icon icon="map-marker-alt" family="solid"></fa-icon> 
                        <span>City Name, State</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url(''); ?>">
                        <fa-icon icon="map-marker-alt" family="solid"></fa-icon> 
                        <span>City Name, State</span>
                    </a>
                </li> 
                <li>
                    <a href="<?php echo site_url(''); ?>">
                        <fa-icon icon="map-marker-alt" family="solid"></fa-icon> 
                        <span>City Name, State</span>
                    </a>
                </li> 
                <li>
                    <a href="<?php echo site_url(''); ?>">
                        <fa-icon icon="map-marker-alt" family="solid"></fa-icon> 
                        <span>City Name, State</span>
                    </a>
                </li>   
            </ul>
            <span class="lnbTwoColLinkList__text"></span>
            <a is="hypercore-button" class="hypercore-button lnb-radiate lnb-hover-wobble" href="<?php echo site_url('/'); ?>">
                <fa-icon icon="arrow-right"></fa-icon>
                <span></span>
            </a>
        </div>
    </div>
    <div class="lnbTwoColLinkList__img hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>">
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-col-link-list', 'output_two_col_link_list');


// Two Columns Right Content//
//**************************************** */
function output_two_col_right_content() {
  ob_start(); ?>

<section class="lnbTwoColRightContent">
  <div class="lnbTwoColRightContent__img hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>"></div>
  <div class="lnbTwoColRightContent__content">
    <div class="lnbTwoColRightContent__content-inner">
      <?php echo hypercore_get_logo('large', true, 'lnbTwoColRightContent'); ?>
      <h3>H3 Heading Title Length Flexible</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras. Ut sem nulla pharetra diam sit amet nisl. Nunc scelerisque viverra mauris in aliquam sem. In ornare quam viverra orci. Consectetur adipiscing elit pellentesque habitant morbi tristique. Enim neque volutpat ac tincidunt. Erat velit scelerisque in dictum non consectetur a. Feugiat in ante metus dictum at tempor.</p>
      <a is="hypercore-button" class="hypercore-button lnbArrowHover" href="<?php echo site_url('/#/'); ?>">
        <fa-icon icon="arrow-right" family="solid" class="lnbArrowHover__arrow"></fa-icon>
        <span>Button CTA</span>
      </a>
    </div>
  </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-col-right-content', 'output_two_col_right_content');


// Two Columns Right Content Short//
//**************************************** */
function output_two_col_right_content_short() {
  ob_start(); ?>

<section class="lnbTwoColRightContentShort">
  <div class="lnbTwoColRightContentShort__img hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>"></div>
  <div class="lnbTwoColRightContentShort__content">
    <div class="lnbTwoColRightContentShort__content-inner">
      <h3>H3 Heading Title 1-5 WCT</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras. Ut sem nulla pharetra diam sit amet nisl.</p>
      <a is="hypercore-button" class="hypercore-button lnbArrowHover" href="<?php echo site_url('#'); ?>">
        <fa-icon icon="arrow-right" family="solid" class="lnbArrowHover__arrow"></fa-icon>
        <span>Button CTA</span>
      </a>
    </div>
  </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-col-right-content-short', 'output_two_col_right_content_short');


// Two Col Specials //
//**************************************** */
function output_two_col_specials() {
  ob_start(); ?>

<section class="lnbTwoColSpecials hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>">
    <div class="lnbTwoColSpecials__content">
        <div class="unflex">    
            <div class="lnbTwoColSpecials__headings hyper-lazyload-bg" data-bg-image="<?php echo content_url('/'); ?>">
                <span class="lnbTwoColSpecials__cta">Some Content Can Go Here</span>
                <h3>Some additional content can go here</h3>
            </div>
            <span class="lnbTwoColSpecials__text"></span>
            <a is="hypercore-button" class="hypercore-button lnbTwoColSpecials__btn lnbCapsuleBtn lnb-hover-wobble" href="<?php echo site_url('/'); ?>">
                <fa-icon icon="arrow-right"></fa-icon>
                <span>CTA Button Text</span>
            </a>
        </div>
    </div>
    <div class="lnbTwoColSpecials__rotator">
        <div class="lnbEnhancedRotator">
            <?php echo do_shortcode('[clipit_rotator tag="home"]'); ?>
        </div>      
        <script>
            function styleRotator() {
                var rotator = document.querySelector('.clipit-rotator');
                
                var specialOffer = document.createElement("span");
                specialOffer.classList.add('clipit-rotator__heading');
                specialOffer.innerHTML = "Special Offer";
                rotator.prepend(specialOffer);

                var tagline = document.createElement("span");
                tagline.classList.add('clipit-rotator__tagline');
                tagline.innerHTML = "Available when you need us!";
                rotator.append(tagline);

                var button = document.createElement("a");
                button.setAttribute('is', 'hypercore-button');
                button.setAttribute('href', '<?php echo site_url('/contact-us/') ?>');
                button.classList.add('hypercore-button', 'lnbEnhancedRotator__btn', 'lnbCapsuleBtn', 'lnb-hover-wobble');
                button.innerHTML = "<fa-icon icon=\"arrow-right\" family=\"solid\"></fa-icon><span>Contact PDM</span>";
                rotator.append(button);

                var navLeft = document.querySelector('.clipit-rotator__nav--previous');
                var navRight = document.querySelector('.clipit-rotator__nav--next');
            }
            addEventListener('DOMContentLoaded', setTimeout(styleRotator, 1000));
        </script>    
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-col-specials', 'output_two_col_specials');


// Two Column Tabs //
//**************************************** */
function output_two_col_tabs() {
  ob_start(); ?>

<section class="lnbTwoColTabs">
    <div class="lnbTwoColTabs__img hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg'); ?>">
    </div>
    <div class="lnbTwoColTabs__content">
        <div class="unflex">
        <div>
            <div class="toggleBox">
            <div class="toggleBox__topRow">
                <div class="toggleBox__tab toggleBox__tab--selected">Tab 1</div>
                <div class="toggleBox__tab">Tab 2</div>
                <div class="toggleBox__tab">Tab 3</div>
            </div>
            <div class="toggleBox__content toggleBox__content--active">
                <div>
                    <h3 class="lnbTwoColTabs__heading">H3 Heading Title For Tab 1</h3>
                    <span class="lnbTwoColTabs__text"></span>
                    <a is="hypercore-button" class="hypercore-button lnb-radiate lnb-hover-wobble" href="<?php echo site_url('/'); ?>">
                        <fa-icon icon="arrow-right"></fa-icon>
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="toggleBox__content">
                <div>
                    <h3 class="lnbTwoColTabs__heading">H3 Heading Title For Tab 2</h3>
                    <span class="lnbTwoColTabs__text"></span>
                    <a is="hypercore-button" class="hypercore-button lnb-radiate lnb-hover-wobble" href="<?php echo site_url('/'); ?>">
                        <fa-icon icon="arrow-right"></fa-icon>
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="toggleBox__content">
                <div>
                    <h3 class="lnbTwoColTabs__heading">H3 Heading Title For Tab 3</h3>
                    <span class="lnbTwoColTabs__text"></span>
                    <a is="hypercore-button" class="hypercore-button lnb-radiate lnb-hover-wobble" href="<?php echo site_url('/'); ?>">
                        <fa-icon icon="arrow-right"></fa-icon>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
        <script>
            (function () {
                const tabs = document.getElementsByClassName('toggleBox__tab');

                function toggleTabs(event, key) {

                    // Change Toggle Tab Classes
                    let currentActive = document.querySelector('.toggleBox__tab--selected')
                    currentActive.classList.remove('toggleBox__tab--selected')
                    event.target.classList.add('toggleBox__tab--selected')

                    // Change Content Classes
                    let currentActiveContent = document.querySelector('.toggleBox__content--active')
                    const tabToggleBoxes = document.querySelectorAll('.toggleBox__content')
                    currentActiveContent.classList.remove('toggleBox__content--active')
                    tabToggleBoxes[key].classList.add('toggleBox__content--active')
                }

                Object.values(tabs).forEach((tab, key) => {
                    tab.addEventListener('click', (event) => {
                        toggleTabs(event, key)
                    });
                });

            })();
        </script>
        </div>
        </div>
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-col-tabs', 'output_two_col_tabs');


// Two Image CTAs //
//**************************************** */
function output_two_img_cta() {
  ob_start(); ?>

<section class="lnbTwoImgCTA">
    <div class="lnbTwoImgCTA__grid">
        <?php echo hypercore_get_lazyload_image(368, 'lnbTwoImgCTA__img');?>
        <div class="lnbTwoImgCTA__content">
            <span class="lnbTwoImgCTA__content-heading">Call or Text 24/7</span>
            <?php echo do_shortcode('[phone_link]'); ?>
        </div>
        <?php echo hypercore_get_lazyload_image(368, 'lnbTwoImgCTA__img');?>
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-img-cta', 'output_two_img_cta');


// Two Steps //
//**************************************** */
function output_two_steps() {
  ob_start(); ?>

<section class="lnbTwoSteps">
    <div class="lnbTwoSteps__container">
        <div class="lnbTwoSteps__container-left">
            <span>Call To Action Here</span>
            <fa-icon icon="arrow-right" family="regular"></fa-icon>
        </div>
        <div class="lnbTwoSteps__container-right">
            <span>Call To Action Here</span>
            <fa-icon icon="arrow-right" family="regular"></fa-icon>
        </div>
    </div>
</section>

<?php echo ob_get_clean();
}
add_shortcode('two-steps', 'output_two_steps');

//**************************************** */
// MOBILE //
//**************************************** */

// Mobile Header Rectangles //
//**************************************** */
function output_mobile_header_rect() {
  ob_start(); ?>
<section class="lnbMobileHeaderRect">
  <div class="lnbMobileHeaderRect__grid">
      <div class="lnbMobileHeaderRect__content">
        <div>
          <div class="lnbMobileHeaderRect__content-logo">
          <?php echo hypercore_get_logo('large', true, 'header'); ?>
        </div>
        <div class="lnbMobileHeaderRect__content-num">
          <span>24/7</span>
          <fa-icon icon="phone" family="solid"></fa-icon>
          <?php echo do_shortcode('[phone_link]'); ?>
        </div>
      </div>
    </div>
    <div class="lnbMobileHeaderRect__menu">
      <?php echo do_shortcode('[hyper-toggle nav-type="default"]'); ?>
    </div>
  </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('mobile-header-rect', 'output_mobile_header_rect');

// Mobile Header Rectangles //
//**************************************** */
function output_mobile_sticky_bar() {
  ob_start(); ?>
    <div class="lnbMobileStickyBar">
      <a class="lnbMobileStickyBar__link" href="<?php echo site_url('/#/'); ?>">
        <fa-icon icon="heart" family="solid"></fa-icon>
        <span>CTA max 12 C</span>
      </a>
      <a class="lnbMobileStickyBar__link phone-num" href="tel:<?php echo do_shortcode('[phone_number]'); ?>">
        <fa-icon icon="phone-alt" family="solid"></fa-icon>
        <span>Call Now</span>
      </a>
      <a class="lnbMobileStickyBar__link" href="<?php echo site_url('/#/'); ?>">
        <fa-icon icon="heart" family="solid"></fa-icon>
        <span>CTA max 12 C</span>
      </a>
      <a class="lnbMobileStickyBar__link" href="<?php echo site_url('/#/'); ?>">
        <fa-icon icon="heart" family="solid"></fa-icon>
        <span>CTA max 12 C</span>
      </a>
    </div>
<?php echo ob_get_clean();
}
add_shortcode('mobile-sticky-bar', 'output_mobile_sticky_bar');

//**************************************** */
// Other Components //
//**************************************** */

// Back to top //
//**************************************** */
function output_back_to_top() {
  ob_start(); ?>
<span onclick="topFunction()" class="back2top" id="back2top">
    <span>Back To Top</span>
       <fa-icon icon="arrow-right" family="solid" role="presentation" aria-label="Display Icon"></fa-icon>
    
        <script>
        const backToTop = document.getElementById('back2top');
        window.onscroll = function() {scrollFunction()};
        backToTop.addEventListener('click', () => {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            })
        </script>
    </span>
    <?php echo ob_get_clean();
}
add_shortcode('back-to-top', 'output_back_to_top');

//**************************************** */
// TITLE COMPONENT //
//**************************************** */

// Title //
//**************************************** */

function output_title_bar() {
    ob_start();?>
      <section class="lnbTitleBar1">
        <div class="lnbTitleBar1--wrap">
          <div class="lnbTitleBar1__content">
            <h1><?php echo get_the_title(); ?></h1>
            <a is="hypercore-button" class="hypercore-button lnb-hover-wobble" href="<?php echo site_url('/#/'); ?>"><fa-icon icon="arrow-right"></fa-icon> Request Service</a>
          </div>
          <div class="lnbTitleBar1__badge">
            <?php echo do_shortcode('[static-nn-badge]');?>
          </div>
        </div>
      </section>
    <?php return ob_get_clean();
}
add_shortcode('title_bar', 'output_title_bar');

function output_sidebar_slogan() {

  ob_start(); ?>
  <section class="lnbSidebarSlogan-backgroundImg hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/JMS-Sidebar-Background.jpeg'); ?>">
      <section class="lnbSidebarSlogan">
          <div class="lnbSidebarSlogan__container">
              <div class="lnbSidebarSlogan__container-slogan">
                  <img class="lnbSidebarSlogan__container-slogan--svg" src="<?php echo content_url('/uploads/lnb-logo.jpeg');?>">
                  <img class="lnbSidebarSlogan__container-slogan--img" src="<?php echo content_url('/uploads/img-indy-car-racing-gray.jpg');?>">
              </div>
              <div class="lnbSidebarSlogan__container-links">
                  <ul>
                      <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 1</a></li>
                      <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 2</a></li>
                      <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 3</a></li>
                      <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 4</a></li>
                  </ul>
              </div>
          </div>
      </section>
  </section>
  <?php echo ob_get_clean();
  
  };
  add_shortcode( 'hypercore-sidebar-slogan', 'output_sidebar_slogan' );

  function output_sidebar_links() {

    ob_start(); ?>
    <aside class="sidebar">
      <div class="lnbSidebarLinks">
        <div class="lnbSidebarLinks__img">
          <?php echo hypercore_get_lazyload_image( '502' ); ?>
        </div>
        <div class="lnbSidebarLinks__inner">
          <div class="lnbSidebarLinks__cta">Text or elements can go here</div>
          <div class="lnbSidebarLinks__menu">
            <ul>
                <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 1</a></li>
                <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 2</a></li>
                <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 3</a></li>
                <li class="lnbArrowHover"><fa-icon class="lnbArrowHover__arrow" icon="arrow-right" family="solid"></fa-icon><a href="<?php echo site_url('/'); ?>">Service Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
    </aside>
    <?php echo ob_get_clean();
    
    };
    add_shortcode( 'hypercore-sidebar-links', 'output_sidebar_links' );
