<?php

function custom_sidebar_slogan() {

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
add_filter( 'hypercore_sidebar_html', 'custom_sidebar_slogan' );