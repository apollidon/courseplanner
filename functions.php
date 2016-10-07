<?php
if ( ! function_exists( 'courseplanner_setup' ) ) :

function courseplanner_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'courseplanner', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'courseplanner' ),
        'social'  => __( 'Social Links Menu', 'courseplanner' ),
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
endif; // courseplanner_setup

add_action( 'after_setup_theme', 'courseplanner_setup' );


if ( ! function_exists( 'courseplanner_init' ) ) :

function courseplanner_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // courseplanner_setup

add_action( 'init', 'courseplanner_init' );


if ( ! function_exists( 'courseplanner_widgets_init' ) ) :

function courseplanner_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Contact Area', 'courseplanner' ),
        'id' => 'contact_area',
        'before_widget' => '<div class="row"><div class="columns medium-10 medium-offset-1">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widgettitle text-center">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'courseplanner_widgets_init' );
endif;// courseplanner_widgets_init



if ( ! function_exists( 'courseplanner_customize_register' ) ) :

function courseplanner_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'main_area_settings', array(
        'title' => __( 'Main Area Settings', 'courseplanner' )
    ));

    $wp_customize->add_setting( 'main_bkg', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'main_bkg', array(
        'label' => __( 'Main Background Image', 'courseplanner' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_title', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque Sed Sapien Lorem'
    ));

    $wp_customize->add_control( 'main_title', array(
        'label' => __( 'Main Title', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Main Title'
            )
    ));

    $wp_customize->add_setting( 'main_title_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_title_color', array(
        'label' => __( 'Main Title Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_subheading', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque sed sapien lorem at lacinia urna.'
    ));

    $wp_customize->add_control( 'main_subheading', array(
        'label' => __( 'Main Sub-Heading', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Pellentesque sed sapien lorem at lacinia urna'
            )
    ));

    $wp_customize->add_setting( 'main_subheading_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_subheading_color', array(
        'label' => __( 'Sub-Heading Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_section( 'main_area_settings', array(
        'title' => __( 'Main Area Settings', 'courseplanner' )
    ));

    $wp_customize->add_setting( 'main_bkg', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'main_bkg', array(
        'label' => __( 'Main Background Image', 'courseplanner' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_title', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque Sed Sapien Lorem'
    ));

    $wp_customize->add_control( 'main_title', array(
        'label' => __( 'Main Title', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Main Title'
            )
    ));

    $wp_customize->add_setting( 'main_title_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_title_color', array(
        'label' => __( 'Main Title Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_subheading', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque sed sapien lorem at lacinia urna.'
    ));

    $wp_customize->add_control( 'main_subheading', array(
        'label' => __( 'Main Sub-Heading', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Pellentesque sed sapien lorem at lacinia urna'
            )
    ));

    $wp_customize->add_setting( 'main_subheading_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_subheading_color', array(
        'label' => __( 'Sub-Heading Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_section( 'main_area_settings', array(
        'title' => __( 'Main Area Settings', 'courseplanner' )
    ));

    $wp_customize->add_setting( 'main_bkg', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'main_bkg', array(
        'label' => __( 'Main Background Image', 'courseplanner' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_subheading', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque sed sapien lorem at lacinia urna.'
    ));

    $wp_customize->add_control( 'main_subheading', array(
        'label' => __( 'Main Sub-Heading', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Pellentesque sed sapien lorem at lacinia urna'
            )
    ));

    $wp_customize->add_setting( 'main_subheading_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_subheading_color', array(
        'label' => __( 'Sub-Heading Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_title', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque Sed Sapien Lorem'
    ));

    $wp_customize->add_control( 'main_title', array(
        'label' => __( 'Main Title', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Main Title'
            )
    ));

    $wp_customize->add_setting( 'main_title_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_title_color', array(
        'label' => __( 'Main Title Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_button', array(
        'type' => 'theme_mod',
        'default' => 'Request Demo'
    ));

    $wp_customize->add_control( 'main_button', array(
        'label' => __( 'Main Button', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings'
    ));

    $wp_customize->add_setting( 'main_button_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_button_color', array(
        'label' => __( 'Main Button Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_section( 'main_area_settings', array(
        'title' => __( 'Main Area Settings', 'courseplanner' )
    ));

    $wp_customize->add_setting( 'main_bkg', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'main_bkg', array(
        'label' => __( 'Main Background Image', 'courseplanner' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_title', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque Sed Sapien Lorem'
    ));

    $wp_customize->add_control( 'main_title', array(
        'label' => __( 'Main Title', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Main Title'
            )
    ));

    $wp_customize->add_setting( 'main_title_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_title_color', array(
        'label' => __( 'Main Title Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_subheading', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque sed sapien lorem at lacinia urna.'
    ));

    $wp_customize->add_control( 'main_subheading', array(
        'label' => __( 'Main Sub-Heading', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Pellentesque sed sapien lorem at lacinia urna'
            )
    ));

    $wp_customize->add_setting( 'main_subheading_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_subheading_color', array(
        'label' => __( 'Sub-Heading Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_section( 'main_area_settings', array(
        'title' => __( 'Main Area Settings', 'courseplanner' )
    ));

    $wp_customize->add_setting( 'main_bkg', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'main_bkg', array(
        'label' => __( 'Main Background Image', 'courseplanner' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_title', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque Sed Sapien Lorem'
    ));

    $wp_customize->add_control( 'main_title', array(
        'label' => __( 'Main Title', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Main Title'
            )
    ));

    $wp_customize->add_setting( 'main_title_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_title_color', array(
        'label' => __( 'Main Title Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_subheading', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque sed sapien lorem at lacinia urna.'
    ));

    $wp_customize->add_control( 'main_subheading', array(
        'label' => __( 'Main Sub-Heading', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Pellentesque sed sapien lorem at lacinia urna'
            )
    ));

    $wp_customize->add_setting( 'main_subheading_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_subheading_color', array(
        'label' => __( 'Sub-Heading Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_section( 'main_area_settings', array(
        'title' => __( 'Main Area Settings', 'courseplanner' )
    ));

    $wp_customize->add_setting( 'main_bkg', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'main_bkg', array(
        'label' => __( 'Main Background Image', 'courseplanner' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_title', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque Sed Sapien Lorem'
    ));

    $wp_customize->add_control( 'main_title', array(
        'label' => __( 'Main Title', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Main Title'
            )
    ));

    $wp_customize->add_setting( 'main_title_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_title_color', array(
        'label' => __( 'Main Title Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    $wp_customize->add_setting( 'main_subheading', array(
        'type' => 'theme_mod',
        'default' => 'Pellentesque sed sapien lorem at lacinia urna.'
    ));

    $wp_customize->add_control( 'main_subheading', array(
        'label' => __( 'Main Sub-Heading', 'courseplanner' ),
        'type' => 'text',
        'section' => 'main_area_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'Pellentesque sed sapien lorem at lacinia urna'
            )
    ));

    $wp_customize->add_setting( 'main_subheading_color', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_subheading_color', array(
        'label' => __( 'Sub-Heading Color', 'courseplanner' ),
        'type' => 'color',
        'section' => 'main_area_settings'
    ) ) );

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'courseplanner_customize_register' );
endif;// courseplanner_customize_register


if ( ! function_exists( 'courseplanner_enqueue_scripts' ) ) :
    function courseplanner_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', false, null, false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js', false, null, true);

    wp_deregister_script( 'foundation' );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', false, null, true);

    wp_deregister_script( 'scroll' );
    wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'foundationflex' );
    wp_enqueue_style( 'foundationflex', get_template_directory_uri() . '/css/foundation-flex.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'courseplanner_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>