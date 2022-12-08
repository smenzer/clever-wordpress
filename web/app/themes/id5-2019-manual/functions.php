<?php

if ( ! function_exists( 'id5_2019_setup' ) ) :

function id5_2019_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'id5_2019', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    // add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'id5_2019' ),
        'social'  => __( 'Social Links Menu', 'id5_2019' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // id5_2019_setup

add_action( 'after_setup_theme', 'id5_2019_setup' );


if ( ! function_exists( 'id5_2019_init' ) ) :

function id5_2019_init() {
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
endif; // id5_2019_setup

add_action( 'init', 'id5_2019_init' );


if ( ! function_exists( 'id5_2019_widgets_init' ) ) :

function id5_2019_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'id5_2019_widgets_init' );
endif;// id5_2019_widgets_init



if ( ! function_exists( 'id5_2019_customize_register' ) ) :

function id5_2019_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'id5_2019_customize_register' );
endif;// id5_2019_customize_register


if ( ! function_exists( 'id5_2019_enqueue_scripts' ) ) :
    function id5_2019_enqueue_scripts() {

        $scripts_style_host_id5 = '//id5.io';

        /* Enqueue Scripts Begin */
        wp_deregister_script( 'sharethis' );
        wp_enqueue_script( 'sharethis', '//platform-api.sharethis.com/js/sharethis.js#property=5ccaaf844b94860012b42f31&product=inline-follow-buttons', false, null, true);

        wp_deregister_script( 'quantcast-cmp' );
        wp_enqueue_script( 'quantcast-cmp', $scripts_style_host_id5.'/js/quantcast-cmp.js', false, null, false);

        wp_deregister_script( 'jquery' );
        wp_enqueue_script( 'jquery', '/app/themes/id5-2019-manual/jquery.min.js', false, null, true);

        wp_deregister_script( 'popper' );
        wp_enqueue_script( 'popper', '/app/themes/id5-2019-manual/popper.js', false, null, true);

        wp_deregister_script( 'bootstrap-script' );
        wp_enqueue_script( 'bootstrap-script', '/app/themes/id5-2019-manual/bootstrap.min.js', false, null, true);

        wp_deregister_script( 'id5' );
        wp_enqueue_script( 'id5', $scripts_style_host_id5.'/js/id5.js', false, null, true);

        // wp_deregister_script( 'id5usersync' );
        // wp_enqueue_script( 'id5usersync', $scripts_style_host.'/assets/js/id5-usersync.js', false, null, true);

        wp_deregister_script( 'zoho' );
        wp_enqueue_script( 'zoho', $scripts_style_host_id5.'/js/zoho.js', false, null, true);

        wp_deregister_script( 'particles' );
        wp_enqueue_script( 'particles', '//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', false, null, true);
        /* Enqueue Scripts End */

        /* Enqueue Styles Begin */
        wp_deregister_style( 'bootstrap-style' );
        wp_enqueue_style( 'bootstrap-style', '/app/themes/id5-2019-manual/bootstrap.css', false, null, 'all');

        wp_deregister_style( 'style' );
        wp_enqueue_style( 'style', '/app/themes/id5-2019-manual/style.css', false, null, 'all');

        wp_deregister_style( 'fontawesome' );
        wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', false, null, 'all');

        wp_deregister_style( 'googlefonts' );
        wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700,800,900', false, null, 'all');
        /* Enqueue Styles End */
    }
    add_action( 'wp_enqueue_scripts', 'id5_2019_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }


if ( ! function_exists( 'id5_image_url_by_id' ) ) :
function id5_image_url_by_id($thumbnail_id, $size = array('width'=>800,'height'=>800))
{
    if(!is_numeric($thumbnail_id)) return false;

    if(is_array($size)) {
        $size[0] = $size['width'];
        $size[1] = $size['height'];
    }

    $image_src = wp_get_attachment_image_src($thumbnail_id, $size);

    if(!$image_src) return false;

    return $image_src[0];
}
endif;
?>