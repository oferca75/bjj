<?php
/**
 * WP Doppio functions and definitions
 *
 * @package WP Doppio
 */
require get_template_directory() . '/inc/pagination.php';
require get_template_directory() . '/inc/widget.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Set the content width based on the theme's design and stylesheet.
 */

if (!isset($content_width)) {
    $content_width = 640; /* pixels */
}

if (!function_exists('wp_doppio_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_doppio_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on WP Doppio, use a find and replace
         * to change 'wp-doppio' to the name of your theme in all the template files
         */
        load_theme_textdomain('wp-doppio', get_template_directory() . '/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support("title-tag");
        add_theme_support('automatic-feed-links');
        add_editor_style();
        add_theme_support('post-thumbnails');
        add_image_size('widget-post-thumb', 70, 70, true);
        add_image_size('post-thumb', 400, '200', true);
        add_image_size('doppio-medium-thumb', 500, '500', true);
        add_image_size('slide-large-image', 640, 340, true);
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'wp-doppio')
        ));


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wp_doppio_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif; // wp_doppio_setup
add_action('after_setup_theme', 'wp_doppio_setup');


if (!function_exists('wp_doppio_menu')) {
    function wp_doppio_menu()
    {
        require get_template_directory() . '/inc/wpdoppio-menu.php';
    }
}
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wp_doppio_widgets_init()
{
    register_sidebar(array(
        'name' => __('Homepage Sidebar', 'wp-doppio'),
        'id' => 'defaul-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<div class="widget-title"><h4>',
        'after_title' => '</h4></div>',
    ));

    register_sidebar(array(
        'name' => __('Post Sidebar', 'wp-doppio'),
        'id' => 'post-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<div class="widget-title"><h4>',
        'after_title' => '</h4></div>',
    ));

    register_sidebar(array(
        'name' => __('Page Sidebar', 'wp-doppio'),
        'id' => 'page-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<div class="widget-title"><h4>',

        'after_title' => '</h4></div>',
    ));

    register_sidebar(array(
        'name' => __('Archives Sidebar', 'wp-doppio'),
        'id' => 'archives-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<div class="widget-title"><h4>',
        'after_title' => '</h4></div>',
    ));

    register_sidebar(array(
        'name' => __('Footer 1', 'wp-doppio'),
        'id' => 'footer-one',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'wp-doppio'),
        'id' => 'footer-two',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'wp-doppio'),
        'id' => 'footer-three',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
    register_sidebar(array(
        'name' => __('Footer 4', 'wp-doppio'),
        'id' => 'footer-four',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
}

add_action('widgets_init', 'wp_doppio_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wp_doppio_scripts()
{
    global $wp_scripts;
    global $wp_styles;
    $slider_speed = 6000;
    if (get_theme_mod('wp_doppio_slider_speed')) {
        $slider_speed = wp_doppio_sanitize_integer(get_theme_mod('wp_doppio_slider_speed'));
    }

    wp_enqueue_style('wp_doppio_responsive', get_template_directory_uri() . '/css/responsive.css', array(), false, 'screen');
    wp_enqueue_style('wp_doppio_font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('wp_doppio_googleFonts', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800');
    wp_enqueue_style('wp-doppio-style', get_stylesheet_uri());

    wp_enqueue_script('wp_doppio_responsive_js', get_template_directory_uri() . '/js/responsive.js', array('jquery'));
    wp_enqueue_script('wp_doppio_navigation_js', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);
    wp_enqueue_script('wp_doppio_load_images_js', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js');
    wp_enqueue_script('wp-doppio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);
    wp_enqueue_script('wp_doppio_ie', get_template_directory_uri() . "/js/html5shiv.js");
    $wp_scripts->add_data('wp_doppio_ie', 'conditional', 'lt IE 9');
    wp_enqueue_script('wp_doppio_ie-responsive', get_template_directory_uri() . "/js/ie-responsive.min.js");
    $wp_scripts->add_data('wp_doppio_ie-responsive', 'conditional', 'lt IE 9');

    wp_register_script("wp_doppio_custom_js", get_template_directory_uri() . "/js/custom.js", array('jquery-masonry'));
    wp_enqueue_script("wp_doppio_custom_js");
    wp_localize_script("wp_doppio_custom_js", "slider_speed", array('vars' => $slider_speed));


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'wp_doppio_scripts');

function wp_doppio_excerpt_length($length)
{
    return 70;
}

add_filter('excerpt_length', 'wp_doppio_excerpt_length', 999);

function wp_doppio_excerpt_more($more)
{
    return '...';
}

add_filter('excerpt_more', 'wp_doppio_excerpt_more');

add_filter('comment_form_defaults', 'remove_comment_form_allowed_tags');
function remove_comment_form_allowed_tags($defaults)
{

    $defaults['comment_notes_after'] = '';
    return $defaults;

}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
