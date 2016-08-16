<?php
/**
 * @name : Default
 * @package : ZoTheme
 * @author : ZoTheme
 */
?>
<?php global $smof_data, $zo_meta; ?>
<?php if ($smof_data['enable_header_top'] =='1'): ?>
    <div id="zo-header-top">
        <div class="container">
            <div class="row">
                <?php if (is_active_sidebar('sidebar-2')) : ?>
                    <div id="zo-header-top-first" class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><?php dynamic_sidebar('sidebar-2'); ?></div>
                <?php endif; ?>
                <?php if (is_active_sidebar('sidebar-3')) : ?>
                    <div id="zo-header-top-second" class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><?php dynamic_sidebar('sidebar-3'); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif;?>
<div id="zo-header" class="zo-main-header zo-header-2 <?php if ( !$smof_data['menu_sticky'] && empty($zo_meta->_zo_enable_header_fixed) ) {
    echo 'no-sticky';
} ?> <?php if ($smof_data['menu_sticky_tablets']) {
    echo 'sticky-tablets';
} ?> <?php if ($smof_data['menu_sticky_mobile']) {
    echo 'sticky-mobile';
} ?> <?php if (!empty($zo_meta->_zo_enable_header_fixed)) {
    echo 'header-fixed-page';
} ?> <?php if (!empty($zo_meta->_zo_enable_header_menu)) {
    echo 'header-menu-custom';
} ?>">
    <div class="container">
        <div class="row">
            <?php if(is_page('category') ) { ?>
                <div id="zo-header-logo" class="col-xs-12 [ text-center ]">
            <?php } ?>
            <?php if( ! is_page('category') ) { ?>
                <div id="zo-header-logo" class="col-xs-12 col-lg-2 [ padding-left ]">
            <?php } ?>
                <?php if( $smof_data['sticky_logo_enable'] || (isset($zo_meta->_zo_sticky_logo_enable) && !empty($zo_meta->_zo_sticky_logo_enable)) ) : ?>
                <a class="sticky-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="" src="<?php echo esc_url(zo_page_header_sticky_logo()); ?>"></a>
                <?php endif; ?>
                <a class="main-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if(is_page('category') ) { ?>
                         <img alt="logo ana georgina" src="<?php echo esc_url(zo_page_header_logo()); ?>">
                    <?php } ?>
                    <?php if( ! is_page('category') ) { ?>
                         <img alt="logo ana georgina" src="http://localhost:8888/ana-georgina/wp-content/themes/lucian/images/logo-1.png">
                    <?php } ?>
                </a>
            </div>
            <?php if (is_active_sidebar('header-right')): ?>
            <div id="zo-header-navigation" class="col-xs-12">
            <?php else : ?>
                <?php if(is_page('category') ) { ?>
                    <div id="zo-header-navigation" class="col-xs-12">
                <?php } ?>
                <?php if( ! is_page('category') ) { ?>
                    <div id="zo-header-navigation" class="col-xs-12 col-lg-10 [ text-right ]">
                <?php } ?>

            <?php endif; ?>
                <nav id="site-navigation" class="main-navigation">
                    <?php

                    $attr = array(
                        'menu' => zo_menu_location(),
                        'menu_class' => 'nav-menu menu-main-menu',
                    );

                    $menu_locations = get_nav_menu_locations();

                    if (!empty($menu_locations['primary'])) {
                        $attr['theme_location'] = 'primary';
                    }

                    /* enable mega menu. */
                    if (class_exists('HeroMenuWalker')) {
                        $attr['walker'] = new HeroMenuWalker();
                    }

                    /* main nav. */
                    wp_nav_menu($attr); ?>
                </nav>
            </div>
            <?php if (is_active_sidebar('header-right')): ?>
                <div id="zo-header-right" class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                    <?php dynamic_sidebar('header-right'); ?>
                </div>
            <?php endif; ?>
            <div id="zo-menu-mobile" class="collapse navbar-collapse"><i class="pe-7s-menu"></i></div>
        </div>
    </div>
    <!-- #site-navigation -->
</div>
<!--#zo-header-->
