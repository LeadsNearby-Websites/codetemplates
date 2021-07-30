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
    'heading'  => 'Heading Using Shortcode Parameter',
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
            <?php echo wp_get_attachment_image(200, $size, false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(200, $size, false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(200, $size, false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(200, $size, false, ['class' => 'lnbSmallCard__item-img']); ?>
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
            <?php echo wp_get_attachment_image(115, $size, false, ['class' => 'lnbLargeCard__item-img']); ?>
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>">Link</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <?php echo wp_get_attachment_image(115, $size, false, ['class' => 'lnbLargeCard__item-img']); ?>
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>">Link</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <?php echo wp_get_attachment_image(115, $size, false, ['class' => 'lnbLargeCard__item-img']); ?>
            <fa-icon class="lnbLargeCard__item-icon" family="solid" icon="temperature-frigid"></fa-icon>
            <div class="lnbLargeCard__item-content">
                <p class="lnbLargeCard__item-desc">Around 275 Characters of lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuerefaucibus nulla, sed lacinia dui malesuada a. Integer viverra at dui a dictum. Proin malesuada risusut diam blandit rutrum. Quisque imperdiet id sem eu convallis. Sed convallis eu.</p>
                <a href="<?php echo site_url('/#/'); ?>">Link</a>
            </div>
        </div>
        <div class="lnbLargeCard__item">
            <?php echo wp_get_attachment_image(115, $size, false, ['class' => 'lnbLargeCard__item-img']); ?>
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
<section style="min-height: 2000px; overflow: hidden">
  <div id="fake-header">
    <div class="lnbDualNav">
        <div class="lnbDualNav__grid">
            <div class="lnbDualNav__logo">
                <?php echo hypercore_get_logo() ?>
            </div>
            <div class="lnbDualNav__navBlocks">
                <div class="lnbDualNav__topNav">
                    <nav class="nav" aria-label="Main Navigation" role="navigation">
                    <?php wp_nav_menu(array(
    'theme_location' => 'secondary',
    'menu_class'     => 'nav__menu',
    'menu_id'        => false,
    'container'      => false,
    'fallback_cb'    => false,
    'depth'          => 1));?>
                    </nav>
                    <div class="lnbDualNav__afterTopNav">
                        <a class="lnbDualNav__phone phone-num" href="tel:<?php echo do_shortcode('[phone_number]'); ?>">
                            <span class="lnbDualNav__phone-text black-text oswald">24/7</span>
                            <fa-icon class="lnbDualNav__phone-icon lnbRadiate" icon="phone" family="solid"></fa-icon>
                            <span class="lnbDualNav__phone-text oswald"><?php echo do_shortcode('[phone_number]'); ?></span>
                        </a>
                    </div>
                </div>
                <div class="lnbDualNav__bottomNav">
                    <nav class="nav nav--main" aria-label="Main Navigation" role="navigation">
                    <?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class'     => 'nav__menu',
    'menu_id'        => false,
    'container'      => false,
    'fallback_cb'    => false));?>
                    </nav>
                    <div class="lnbDualNav__afterBottomNav" style="display: flex; align-items: center;">
                      Additional Content
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="mobileHeader">
        <?php echo hypercore_get_logo() ?>
        Mobile Header Goes Here
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('dual-nav-header', 'output_dual_nav_header');

function output_threecol_footer() {
  ob_start(); ?>
<section class="lnbThreeColFooter">
    <div class="lnbThreeColFooter__grid">
        <div class="lnbThreeColFooter__column">
            <span class="lnbThreeColFooter__column-heading">Specific Heading</span>
            <p class="lnbThreeColFooter__column-info">
                <span>Phone Number etc</span>
                <span>Phone Number etc</span>
            </p>
            <p class="lnbThreeColFooter__column-info">
                <span>License # etc</span>
                <span>License # etc</span>
            </p>
            <p class="lnbThreeColFooter__column-info">
                <span>111 Example Ln.</span>
                <span>City, State 12345</span>
            </p>
        </div>
        <div class="lnbThreeColFooter__column">
            <span class="lnbThreeColFooter__column-heading">Service Area</span>
            <p>Short summary of service area lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis dolor leo.</p>
        </div>
        <div class="lnbThreeColFooter__column">
            <span class="lnbThreeColFooter__column-heading">Helpful Links</span>
            <ul>
                <li><a href="<?php echo site_url('/#/'); ?>">Example Link</a></li>
                <li><a href="<?php echo site_url('/#/'); ?>">Example Link</a></li>
                <li><a href="<?php echo site_url('/#/'); ?>">Example Link</a></li>
                <li><a href="<?php echo site_url('/#/'); ?>">Example Link</a></li>
                <li><a href="<?php echo site_url('/#/'); ?>">Example Link</a></li>
                <li><a href="<?php echo site_url('/#/'); ?>">Example Link</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="lnbSocialLinks">
<?php
$social_links = hypercore_get_social_links();
  foreach ($social_links as $social_link_network => $social_link_value) {
    $social_link_icon = $social_link_network;
    if ($social_link_network === 'facebook') {
      $social_link_icon = 'facebook-f';
    }
    if ($social_link_network === 'linkedin') {
      $social_link_icon = 'linkedin-in';
    }
    echo '<a class="lnbSocialLinks__link lnbSocialLinks__link--' . $social_link_network . '" target="blank" href="' . $social_link_value . '"><fa-icon family="brands" icon="' . $social_link_icon . '"></fa-icon></a>';
  }
  ?>
</section>
<section class="lnbCopyright">
    <div class="lnbCopyright__name">
        <?php echo do_shortcode('[site_copyright]'); ?>
    </div>
    <div class="lnbCopyright__links">
        <a href="<?php echo site_url('/terms-and-conditions/'); ?>">Terms &amp; Conditions</a> |
        <a href="<?php echo site_url('/privacy-policy/'); ?>">Privacy Policy</a> |
        <a href="<?php echo site_url('/sitemap/'); ?>">Sitemap</a> |
        Design &amp; Marketing by <a target="blank" href="https://www.leadsnearby.com/">LeadsNearby</a>
    </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('three-col-footer', 'output_threecol_footer');

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