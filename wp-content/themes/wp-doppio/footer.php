<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WP Doppio
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-one'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-two'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-three'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-four'); ?>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <?php echo __('&copy; ', 'wp-doppio') . esc_attr(get_bloginfo('name', 'wp-doppio')); ?>
                    <?php if (is_home() && !is_paged()) { ?>
                        <?php _e('- Powered by ', 'wp-doppio'); ?><a
                        href="<?php echo esc_url('http://wordpress.org/'); ?>"
                        title="<?php esc_attr_e(''); ?>"><?php _e('WordPress', 'wp-doppio'); ?></a>
                        <?php _e(' and ', 'wp-doppio'); ?><a
                        href="<?php echo esc_url('http://invictusthemes.com/'); ?>"><?php _e('Invictus Themes', 'wp-doppio'); ?></a>
                    <?php } ?>
                </div>
                <div class="col-md-6 soc-media-container">
                    <?php if (get_theme_mod('wp_doppio_facebook')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_facebook')); ?>"
                           title="<?php _e('Facebook', 'wp-doppio'); ?>"><i class="fa fa-facebook-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_twitter')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_twitter')); ?>"
                           title="<?php _e('Twitter', 'wp-doppio'); ?>"><i class="fa fa-twitter-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_google')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_google')); ?>"
                           title="<?php _e('Google Plus', 'wp-doppio'); ?>"><i class="fa fa-google-plus-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_pinterest')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_pinterest')); ?>"
                           title="<?php _e('Pinterest', 'wp-doppio'); ?>"><i class="fa fa-pinterest-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_linkedin')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_linkedin')); ?>"
                           title="<?php _e('Linkedin', 'wp-doppio'); ?>"><i class="fa fa-linkedin-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_youtube')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_youtube')); ?>"
                           title="<?php _e('Youtube', 'wp-doppio'); ?>"><i class="fa fa-youtube"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_tumblr')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_tumblr')); ?>"
                           title="<?php _e('Tumblr', 'wp-doppio'); ?>"><i class="fa fa-tumblr-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_instagram')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_instagram')); ?>"
                           title="<?php _e('Instagram', 'wp-doppio'); ?>"><i class="fa fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_flickr')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_flickr')); ?>"
                           title="<?php _e('Flickr', 'wp-doppio'); ?>"><i class="fa fa-flickr"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_vimeo')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_vimeo')); ?>"
                           title="<?php _e('Vimeo', 'wp-doppio'); ?>"><i class="fa fa-vimeo-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_rss')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('wp_doppio_rss')); ?>"
                           title="<?php _e('RSS', 'wp-doppio'); ?>"><i class="fa fa-rss-square"></i></a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('wp_doppio_email')) : ?>
                        <a href="<?php _e('mailto:', 'wp-doppio');
                        echo sanitize_email(get_theme_mod('wp_doppio_email')); ?>"
                           title="<?php _e('Email', 'wp-doppio'); ?>"><i class="fa fa-envelope-square"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
