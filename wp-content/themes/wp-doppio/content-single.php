<?php
/**
 * @package WP Doppio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <div class="feature-image-container">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php if (wp_doppio_sanitize_checkbox(get_theme_mod('wp_doppio_categories_tags'))) { ?>
            <div class="row meta-contanainer">
                <div class="col-md-6">
                    <?php
                    $categories_list = get_the_category_list(__(', ', 'wp-doppio'));
                    if ($categories_list && wp_doppio_categorized_blog()) {
                        printf('<span class="cat-links">' . __('Posted in %1$s', 'wp-doppio') . '</span>', $categories_list);
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    $tags_list = get_the_tag_list('', __(', ', 'wp-doppio'));
                    if ($tags_list) {
                        printf('<span class="tags-links">' . __(' Tagged %1$s', 'wp-doppio') . '</span>', $tags_list);
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
        <?php the_content(); ?>
        <div class="entry-meta">
            <div class="featured-category">
                <ul class="meta-info">
                    <li><i class="fa fa-user"></i><?php the_author_posts_link(); ?></li>
                    <li><i class="fa fa-clock-o"></i><?php the_time(get_option('date_format')); ?></li>
                    <li><i class="fa fa-comments"></i><a href="<?php comments_link(); ?>"
                                                         class="meta-comment"><?php comments_number('0 comment', '1 comment', '% comments'); ?></a>
                    </li>
                </ul>

            </div>
        </div>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'wp-doppio'),
            'after' => '</div>',
        ));
        ?>
        <?php if (wp_doppio_sanitize_checkbox(get_theme_mod('wp_doppio_author_bio'))) : ?>
            <div class="author-bio">
                <?php
                $author_avatar = get_avatar(get_the_author_meta('email'), '75');
                if ($author_avatar) : ?>
                    <div class="author-thumb"><?php echo $author_avatar; ?></div>
                <?php endif; ?>

                <div class="author-info">
                    <?php $author_posts_url = get_author_posts_url(get_the_author_meta('ID')); ?>
                    <h4 class="author-title"><?php _e('Posted by ', 'wp-doppio'); ?><a
                            href="<?php echo esc_url($author_posts_url); ?>"
                            title="<?php printf(__('View all posts by %s', 'wp-doppio'), get_the_author()) ?>"><?php the_author(); ?></a>
                    </h4>
                    <?php $author_desc = get_the_author_meta('description');
                    if ($author_desc) : ?>
                        <p class="author-description"><?php echo $author_desc; ?></p>
                    <?php endif; ?>
                    <?php $author_url = get_the_author_meta('user_url');
                    if ($author_url) : ?>
                        <p><?php _e('Website: ', 'wp-doppio') ?><a
                                href="<?php echo $author_url; ?>"><?php echo $author_url; ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

    </div><!-- .entry-content -->


</article><!-- #post-## -->
