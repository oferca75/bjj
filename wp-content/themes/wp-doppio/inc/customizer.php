<?php
/**
 * WP Doppio Theme Customizer
 *
 * @package WP Doppio
 */

/*******************************************************************
 * These are settings for the Theme Customizer in the admin panel.
 *******************************************************************/
if (!function_exists('wp_doppio_theme_customizer')) :
    function wp_doppio_theme_customizer($wp_customize)
    {

        $wp_customize->remove_section('title_tagline');


        /* logo option */
        $wp_customize->add_section('wp_doppio_logo_section', array(
            'title' => __('Site Logo', 'wp-doppio'),
            'priority' => 29,
            'description' => __('Upload a logo to replace the default site name in the header', 'wp-doppio'),
        ));

        $wp_customize->add_setting('wp_doppio_logo', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wp_doppio_logo', array(
            'label' => __('Choose your logo (ideal width is 100-300px and ideal height is 40-100px)', 'wp-doppio'),
            'section' => 'wp_doppio_logo_section',
            'settings' => 'wp_doppio_logo',
        )));


        /* color theme */
        $wp_customize->add_setting('wp_doppio_primary_theme_color', array(
            'default' => '#97642d',
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wp_doppio_primary_theme_color', array(
            'label' => __('Primary Theme Color Option', 'wp-doppio'),
            'section' => 'colors',
            'settings' => 'wp_doppio_primary_theme_color',
            'priority' => 21,
        )));

        $wp_customize->add_setting('wp_doppio_secondary_theme_color', array(
            'default' => '#4b1d0d',
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wp_doppio_secondary_theme_color', array(
            'label' => __('Secondary Theme Color Option', 'wp-doppio'),
            'section' => 'colors',
            'settings' => 'wp_doppio_secondary_theme_color',
            'priority' => 22,
        )));


        /* social media option */
        $wp_customize->add_section('wp_doppio_social_section', array(
            'title' => __('Social Media Icons', 'wp-doppio'),
            'priority' => 33,
            'description' => __('Optional social media buttons in the header', 'wp-doppio'),
        ));

        $wp_customize->add_setting('wp_doppio_facebook', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_facebook', array(
            'label' => __('Enter your Facebook url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_facebook',
            'priority' => 101,
        )));

        $wp_customize->add_setting('wp_doppio_twitter', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_twitter', array(
            'label' => __('Enter your Twitter url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_twitter',
            'priority' => 102,
        )));

        $wp_customize->add_setting('wp_doppio_google', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_google', array(
            'label' => __('Enter your Google+ url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_google',
            'priority' => 103,
        )));

        $wp_customize->add_setting('wp_doppio_pinterest', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_pinterest', array(
            'label' => __('Enter your Pinterest url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_pinterest',
            'priority' => 104,
        )));

        $wp_customize->add_setting('wp_doppio_linkedin', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_linkedin', array(
            'label' => __('Enter your Linkedin url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_linkedin',
            'priority' => 105,
        )));

        $wp_customize->add_setting('wp_doppio_youtube', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_youtube', array(
            'label' => __('Enter your Youtube url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_youtube',
            'priority' => 106,
        )));

        $wp_customize->add_setting('wp_doppio_tumblr', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_tumblr', array(
            'label' => __('Enter your Tumblr url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_tumblr',
            'priority' => 107,
        )));

        $wp_customize->add_setting('wp_doppio_instagram', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_instagram', array(
            'label' => __('Enter your Instagram url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_instagram',
            'priority' => 108,
        )));

        $wp_customize->add_setting('wp_doppio_flickr', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_flickr', array(
            'label' => __('Enter your Flickr url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_flickr',
            'priority' => 109,
        )));

        $wp_customize->add_setting('wp_doppio_vimeo', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_vimeo', array(
            'label' => __('Enter your Vimeo url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_vimeo',
            'priority' => 110,
        )));


        $wp_customize->add_setting('wp_doppio_rss', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_rss', array(
            'label' => __('Enter your RSS url', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_rss',
            'priority' => 111,
        )));

        $wp_customize->add_setting('wp_doppio_email', array(
            'sanitize_callback' => 'sanitize_email',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_email', array(
            'label' => __('Enter your email address', 'wp-doppio'),
            'section' => 'wp_doppio_social_section',
            'settings' => 'wp_doppio_email',
            'priority' => 112,
        )));

        // author bio in posts option 
        $wp_customize->add_section('wp_doppio_author_bio_section', array(
            'title' => __('Display Author Bio', 'wp-doppio'),
            'priority' => 113,
            'description' => __('Option to show/hide the author bio in the posts.', 'wp-doppio'),
        ));

        $wp_customize->add_setting('wp_doppio_author_bio', array(
            'default' => 0,
            'sanitize_callback' => 'wp_doppio_sanitize_checkbox',
        ));

        $wp_customize->add_control('wp_doppio_author_bio', array(
            'settings' => 'wp_doppio_author_bio',
            'label' => __('Show the author bio in posts?', 'wp-doppio'),
            'section' => 'wp_doppio_author_bio_section',
            'type' => 'checkbox',
        ));

        // Categories and Tags in posts option 
        $wp_customize->add_section('wp_doppio_categories_tags_section', array(
            'title' => __('Display Categories and Tags', 'wp-doppio'),
            'priority' => 114,
            'description' => __('Option to show/hide the Categories and Tags in the posts.', 'wp-doppio'),
        ));

        $wp_customize->add_setting('wp_doppio_categories_tags', array(
            'default' => 0,
            'sanitize_callback' => 'wp_doppio_sanitize_checkbox',
        ));

        $wp_customize->add_control('wp_doppio_categories_tags', array(
            'settings' => 'wp_doppio_categories_tags',
            'label' => __('Show the Categories and Tags in posts?', 'wp-doppio'),
            'section' => 'wp_doppio_categories_tags_section',
            'type' => 'checkbox',
        ));

        //slider
        $categories = get_categories();
        $cats = array();
        $i = 0;
        foreach ($categories as $category) {
            if ($i == 0) {
                $default = $category->slug;
                $i++;
            }
            $cats[$category->slug] = $category->name;
        }

        //  Select Box               
        $wp_customize->add_section('wp_doppio_slider', array(
            'title' => __('Slider Option', 'wp-doppio'),
            'priority' => 115,
        ));

        $wp_customize->add_setting('wp_doppio_disable_slider', array(
            'default' => 0,
            'sanitize_callback' => 'wp_doppio_sanitize_checkbox',
        ));

        $wp_customize->add_control('wp_doppio_disable_slider', array(
            'settings' => 'wp_doppio_disable_slider',
            'label' => __("Don't show slider on the home page", 'wp-doppio'),
            'section' => 'wp_doppio_slider',
            'type' => 'checkbox',
        ));


        $wp_customize->add_setting(
            'wp_doppio_category',
            array(
                'default' => 'uncategorized',
                'sanitize_callback' => 'wp_doppio_sanitize_category',
            )
        );

        $wp_customize->add_control(
            'wp_doppio_category',
            array(
                'type' => 'select',
                'label' => 'Select Category:',
                'section' => 'wp_doppio_slider',
                'choices' => $cats,
            )
        );

        $wp_customize->add_setting('wp_doppio_slider_speed', array(
            'default' => '6000',
            'sanitize_callback' => 'wp_doppio_sanitize_integer',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wp_doppio_slider_speed', array(
            'label' => __('Slider Speed (milliseconds)', 'wp-doppio'),
            'section' => 'wp_doppio_slider',
            'settings' => 'wp_doppio_slider_speed',
            'priority' => 116,
        )));


    }
endif;
add_action('customize_register', 'wp_doppio_theme_customizer');


if (!function_exists('wp_doppio_sanitize_category')) {
    function wp_doppio_sanitize_category($input)
    {
        $categories = get_categories();
        $cats = array();
        $i = 0;
        foreach ($categories as $category) {
            if ($i == 0) {
                $default = $category->slug;
                $i++;
            }
            $cats[$category->slug] = $category->name;
        }
        $valid = $cats;

        if (array_key_exists($input, $valid)) {
            return $input;
        } else {
            return '';
        }
    }
}
/**
 * Sanitize integer input
 */
if (!function_exists('wp_doppio_sanitize_integer')) :
    function wp_doppio_sanitize_integer($input)
    {
        return absint($input);
    }
endif;

/**
 * Sanitize checkbox
 */
if (!function_exists('wp_doppio_sanitize_checkbox')) :
    function wp_doppio_sanitize_checkbox($input)
    {
        if ($input == 1) {
            return 1;
        } else {
            return 0;
        }
    }
endif;

/**
 * Apply Color Scheme
 */
if (!function_exists('wp_doppio_apply_color')) :
    function wp_doppio_apply_color()
    {
        if (get_theme_mod('wp_doppio_primary_theme_color')) {
            ?>
            <style id="color-settings">
                <?php if ( get_theme_mod('wp_doppio_primary_theme_color') ) : ?>
                .navbar-toggle .icon-bar, .btn-info, .pagination .fa, #respond #submit, .post-content form input[type=submit], .post-content form input[type=button], footer .widget_calendar thead tr, .navbar-toggle .icon-bar, .tagcloud a {
                    background-color: <?php echo get_theme_mod('wp_doppio_primary_theme_color'); ?>;
                }

                .nav_container, ul.meta-info li, footer#colophon, .site-branding, .featured_slide, .content-header {
                    border-color: <?php echo get_theme_mod('wp_doppio_primary_theme_color'); ?>;
                }

                a, .main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, h1.site-title span, h3.entry-title a:hover, h2.site-description, .meta-info, .meta-info a, .meta-info, .meta-info a, .meta-info a:hover, .post_box a.meta-comment:hover, .entry-meta span.posted-on, .entry-meta span.comments-link a:hover, .tagcloud a:hover, a.comment-reply-link, ul li.recentcommentscite.fn, cite.fn a, aside ul li a, footer ul li a:hover, footer .meta-info span, footer .meta-info a, span.post-date, .site-info a:hover, .site-info .fa:hover, .main-navigation ul ul a, aside ul li:before, .widget_calendar tbody a {
                    color: <?php echo get_theme_mod('wp_doppio_primary_theme_color'); ?>;
                }

                @media screen and (max-width: 767px) {
                    .main-navigation ul > li, .main-navigation ul ul.children > li > a, .main-navigation ul ul.sub-menu > li > a {
                        background-color: <?php echo get_theme_mod('wp_doppio_primary_theme_color'); ?>;
                    }
                }

                <?php endif; ?>
                <?php if ( get_theme_mod('wp_doppio_secondary_theme_color') ) : ?>
                .site-info, .site-branding, footer#colophon, .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info, .pagination .fa:hover {
                    background: <?php echo get_theme_mod('wp_doppio_secondary_theme_color'); ?>;
                }

                .thumb_box {
                    border-color: <?php echo get_theme_mod('wp_doppio_secondary_theme_color'); ?>;
                }

                h3.entry-title a, a:hover, a:focus, a:active, .h1.page-title, h1.entry-title, .thumb_box p, .carousel-inner h1, .carousel-inner p, .widget-title h4, ul li.recentcomments {
                    color: <?php echo get_theme_mod('wp_doppio_secondary_theme_color'); ?>;
                }

                @media screen and (max-width: 767px) {
                    .main-navigation ul > li > a:hover, .main-navigation ul ul.sub-menu > li > a:hover {
                        color: <?php echo get_theme_mod('wp_doppio_secondary_theme_color'); ?>;
                    }
                }

                <?php endif; ?>
            </style>
            <?php
        }
    }
endif;
add_action('wp_head', 'wp_doppio_apply_color');