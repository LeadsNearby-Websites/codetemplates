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
    'menu_class' => 'nav__menu',
    'menu_id' => false,
    'container' => false,
    'fallback_cb' => false,
    'depth' => 1));?>
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
    'menu_class' => 'nav__menu',
    'menu_id' => false,
    'container' => false,
    'fallback_cb' => false));?>
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