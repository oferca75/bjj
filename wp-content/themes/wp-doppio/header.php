<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP Doppio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'wp-doppio'); ?></a>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (get_theme_mod('wp_doppio_logo')) : ?>
                            <div id="site-logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                   title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                    <img src="<?php echo esc_url(get_theme_mod('wp_doppio_logo')); ?>"
                                         alt="<?php echo esc_attr(get_bloginfo('name')); ?>"/>
                                </a>
                            </div>
                        <?php else : ?>
                            <div id="site-logo">
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                          rel="home"><?php bloginfo('name', 'wp-doppio'); ?></a></h1>
                                <h2 class="site-description"><?php bloginfo('description', 'wp-doppio'); ?></h2>
                            </div>
                        <?php endif; ?>
                        <nav id="site-navigation" class="main-navigation container-fluid" role="navigation">
                            <button class="menu-toggle navbar-toggle" aria-controls="menu" aria-expanded="false">
                                <span class="sr-only"><?php _e('Toggle navigation', 'wp-doppio'); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'wp_doppio_menu', 'depth' => 3)); ?>

                        </nav>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>

        </div><!-- .site-branding -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
