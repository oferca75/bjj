<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <?php $slider_cat = get_theme_mod('wp_doppio_category'); ?>
    <?php
    //query posts

    $args = array(
        'offset' => 0,
        'category_name' => $slider_cat,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'post',
        'post_mime_type' => '',
        'post_parent' => '',
        'post_status' => 'publish',
        'suppress_filters' => true
    );
    $counter = 0;
    $the_query = new WP_Query($args);

    ?>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php if ($the_query->have_posts()) : ?>
            <?php $first_post = true; ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php if ($counter < 5) { ?>
                    <div class="item <?php if ($first_post) {
                        $first_post = false;
                        echo 'active';
                    } ?>">
                        <div class="col-md-7 col-md-push-5">
                            <div class="fearure_thumb_box">
                                <?php the_post_thumbnail('slide-large-image'); ?>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-pull-7">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <p class="read_more"><a href="<?php the_permalink(); ?>"
                                                    class="btn btn-info read_more"><?php _e('Read More', 'wp-doppio'); ?></a>
                            </p>
                        </div>
                    </div>
                    <?php $counter++;
                } ?>
            <?php endwhile; ?>

        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <ol class="carousel-indicators">
        <?php for ($coun_t = 0; $coun_t < $counter; $coun_t++) { ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $coun_t; ?>" class="<?php if ($coun_t == 0) {
                echo "active";
            } ?>"></li>
        <?php } ?>
    </ol>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"><?php _e('Previous', 'wp-doppio'); ?></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"><?php _e('Next', 'wp-doppio'); ?></span>
    </a>
</div>