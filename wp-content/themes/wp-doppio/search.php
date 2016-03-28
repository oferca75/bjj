<?php
/**
 * The template for displaying search results pages.
 *
 * @package WP Doppio
 */
?>
<?php get_header(); ?>
<header class="content-header">
    <div class="container">
        <div class="row">
            <h1 class="entry-title">Search:</h1>
        </div>
    </div>
</header><!-- .entry-header -->
<div class="container">
    <div class="row">
        <section id="primary" class="content-area col-md-9">
            <main id="main" class="site-main" role="main">
                <?php if (have_posts()) : ?>
                    <header class="page-header">
                        <h1 class="page-title"><?php printf(__('Search Results for: %s', 'wp-doppio'), '<span>' . get_search_query() . '</span>'); ?></h1>
                    </header><!-- .page-header -->
                    <?php /* Start the Loop */ ?>
                    <div id="manson">
                        <?php while (have_posts()) : the_post(); ?>

                            <?php
                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part('content', 'search');
                            ?>

                        <?php endwhile; ?>
                    </div>
                    <?php wp_doppio_paging_nav(); ?>

                <?php else : ?>

                    <?php get_template_part('content', 'none'); ?>

                <?php endif; ?>

            </main><!-- #main -->
        </section><!-- #primary -->

        <aside class="col-md-3">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>
