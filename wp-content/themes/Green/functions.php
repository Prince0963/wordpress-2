<?php

function Green_assests()
{

    // vendor css files

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', true);
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', true);
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', true);
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', true);
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', true);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', true);

    // footer scripts

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '1.0.0', true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), '1.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'Green_assests');


// Register Menu

register_nav_menus(array(
    'primary' => __('Primary Menu', 'bootstrap-basic'),
));


// Logo Custom

function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

//Customize Register

function impact_customize_register($wp_customize)
{
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
    // $wp_customize->add_panel( 'menus', array(
    //     'title' => __( 'Menus' ),
    //     'description' => '$description', // Include html tags such as <p>.
    //     'priority' => 160, // Mixed with top-level-section hierarchy.
    //   ) );

    //Top header section
    $wp_customize->add_section('topheader', array(
        'title' => __('Top Header Section', 'impact'),
        'priority' => 105, // Before Widgets.
    ));


    // For Email 
    //setting
    $wp_customize->add_setting(
        'top_email',
        array(
            'default'           => __('', 'nd_dosth'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );


    //control
    $wp_customize->add_control(
        'top_email',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'topheader',
            'setting'     => 'top_email',
            'label'       => 'Email Id',
            'description' => 'Put your email id here',
        )
    );

    //For Mobile
    //setting
    $wp_customize->add_setting(
        'top_mobile',
        array(
            'default'           => __(' ', 'nd_dosth'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );


    //control
    $wp_customize->add_control(
        'top_mobile',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'topheader',
            'setting'     => 'top_mobile',
            'label'       => 'Mobile Number',
            'description' => 'Put your mobile number here',
        )
    );


    //For Checkbox 
    //setting
    $wp_customize->add_setting(
        'topbar',
        array(
            'default'           => __('1', 'nd_dosth'),
            // 'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );


    //control
    $wp_customize->add_control(
        'topbar',
        array(
            'type'        => 'checkbox',
            'priority'    => 1,
            'section'     => 'topheader',
            // 'setting'     => 'top_mobile',
            'label'       => 'Top bar show and hide',
            // 'description' => 'Put your mobile number here',
        )
    );
}
add_action('customize_register', 'impact_customize_register');


//social media
function social_media_register($wp_customize)
{
    // Add a section for social media links
    $wp_customize->add_section('social_media_section', array(
        'title'    => __('Social Media Links', 'my-theme'),
        'priority' => 30,
    ));

    // Add setting and control for Twitter
    $wp_customize->add_setting('twitter_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('twitter_url', array(
        'label'    => __('Twitter URL', 'my-theme'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ));

    // Add setting and control for Facebook
    $wp_customize->add_setting('facebook_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('facebook_url', array(
        'label'    => __('Facebook URL', 'my-theme'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ));

    // Add setting and control for Instagram
    $wp_customize->add_setting('instagram_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('instagram_url', array(
        'label'    => __('Instagram URL', 'my-theme'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ));

    // Add setting and control for Linkedin
    $wp_customize->add_setting('linkedin_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('linkedin_url', array(
        'label'    => __('Linkedin URL', 'my-theme'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ));
}

add_action('customize_register', 'social_media_register');


//sidebar register
/**
 * Add a sidebar.
 */
function impact_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Footer 1', 'textdomain'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="col-lg-2 col-6 footer-links widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 2', 'textdomain'),
        'id'            => 'footer-2',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="col-lg-2 col-6 footer-links widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 3', 'textdomain'),
        'id'            => 'footer-3',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="col-lg-2 col-6 footer-links widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ));

}
add_action('widgets_init', 'impact_widgets_init');




