<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP Doppio
 */
?>

<div class="item col-md-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post_box">
            <?php if (has_post_thumbnail()) { ?>
                <div class="thumb_box">
                    <a href="<?php the_permalink('') ?>"
                       title="<?php the_title(); ?>"><?php the_post_thumbnail('doppio-medium-thumb'); ?></a>
                </div>
            <?php } ?>
            <header>
                <?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
                <?php if ('post' == get_post_type()) : ?>
                    <div class="entry-meta row">
                        <ul class="meta-info">
                            <li><?php _e('Posted By ', 'wp-doppio');
                                the_author_posts_link(); ?></li>
                            <li><?php _e('On ', 'wp-doppio');
                                the_time(get_option('date_format')); ?></li>
                        </ul>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php
                /* translators: %s: Name of current post */
                the_excerpt();

                ?>

                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'wp-doppio'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->
            <a href="<?php the_permalink('') ?>"
               class="btn btn-info read_more"><?php _e('Read More', 'wp-doppio'); ?></a>
        </div>
    </article><!-- #post-## -->
    <div class="clearfix"></div>
</div>
