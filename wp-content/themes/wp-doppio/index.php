<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP Doppio
 */
?>
<?php get_header(); ?>
<?php if (!wp_doppio_sanitize_checkbox(get_theme_mod('wp_doppio_disable_slider'))) { ?>
    <div class="featured_slide">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php get_template_part('inc/slider') ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-12">
            <main id="main" class="site-main row" role="main">
                <div id="manson">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part('content', get_post_format());
                            ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php get_template_part('content', 'none'); ?>
                    <?php endif; ?>
                    <?php if (function_exists("wp_doppio_pagination")) {
                        wp_doppio_pagination();
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
            </main><!-- #main -->
            <div class="clearfix"></div>
        </div><!-- #primary -->
    </div>
</div>
<?php get_footer(); ?>
