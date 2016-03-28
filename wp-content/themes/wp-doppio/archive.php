<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP Doppio
 */
?>
<?php get_header(); ?>
<header class="content-header">
    <?php if (have_posts()) : ?>
        <div class="container">
            <div class="row">
                <h1 class="entry-title">
                    <?php
                    if (is_category()) :
                        single_cat_title();

                    elseif (is_tag()) :
                        single_tag_title();

                    elseif (is_author()) :
                        printf(__('Author: %s', 'wp-doppio'), '<span class="vcard">' . get_the_author() . '</span>');

                    elseif (is_day()) :
                        printf(__('Posted on %s', 'wp-doppio'), '<span>' . get_the_date() . '</span>');

                    elseif (is_month()) :
                        printf(__('Posted on %s', 'wp-doppio'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'wp-doppio')) . '</span>');

                    elseif (is_year()) :
                        printf(__('Posted on %s', 'wp-doppio'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'wp-doppio')) . '</span>');

                    elseif (is_tax('post_format', 'post-format-aside')) :
                        _e('Asides', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-gallery')) :
                        _e('Galleries', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-image')) :
                        _e('Images', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-video')) :
                        _e('Videos', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-quote')) :
                        _e('Quotes', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-link')) :
                        _e('Links', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-status')) :
                        _e('Statuses', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-audio')) :
                        _e('Audios', 'wp-doppio');

                    elseif (is_tax('post_format', 'post-format-chat')) :
                        _e('Chats', 'wp-doppio');

                    else :
                        _e('Archives', 'wp-doppio');

                    endif;
                    ?>
                </h1>
            </div>
        </div>
    <?php endif; ?>
</header><!-- .entry-header -->
<div class="container">
    <div class="row">
        <section id="primary" class="content-area col-md-9">
            <main id="main" class="site-main" role="main">
                <?php if (have_posts()) : ?>
                    <header class="page-header">
                        <?php
                        // Show an optional term description.
                        $term_description = term_description();
                        if (!empty($term_description)) :
                            printf('<div class="taxonomy-description">%s</div>', $term_description);
                        endif;
                        ?>
                    </header><!-- .page-header -->
                    <div id="manson">
                        <?php /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part('content', 'search');
                            ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="clearfix"></div>
                    <?php if (function_exists("wp_doppio_pagination")) {
                        wp_doppio_pagination();
                    }
                    ?>
                <?php else : ?>
                    <?php get_template_part('content', 'none'); ?>
                <?php endif; ?>
            </main><!-- #main -->
        </section><!-- #primary -->
        <aside id="widget" class="widget-container col-md-3 ">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>
