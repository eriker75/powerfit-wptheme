<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;  

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', false);


include "inc/inc.vite.php";


function powerfit_add_theme_supports(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults );

    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );    
}

add_action('init','powerfit_add_theme_supports');


function get_custom_logo_url()
{
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $image[0];
}


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
            'header_menu' => __( 'Main Menu', 'text_domain' ),
	    	'social_menu' => __( 'Social Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}


if( !function_exists('powerfit_customizer') ){

    function powerfit_customizer($wp_customize){
        /*---------------------------------------------------------------------------------------*/
        // Slider Section
        $wp_customize->add_section( 
            "sec_slider", array(
                "title" 		=> __( "Slider Settings", "fancy-lab"),
                "description" 	=> __( "Slider Section", "fancy-lab" )
            )
        );
        for ($i = 1; $i <= 5; $i++) {
            $wp_customize->add_setting(
                "set_slider_page$i", array(
                    "type" 				=> "theme_mod",
                    "default" 			=> "",
                    "sanitize_callback" => "absint"
                )
            );
            $wp_customize->add_control(
                "set_slider_page$i", array(
                    "label" 		=> __( "Set slider page $i", "fancy-lab" ),
                    "description" 	=> __( "Set slider page $i", "fancy-lab" ),
                    "section" 		=> "sec_slider",
                    "type" 			=> "dropdown-pages"
                )
            );
            $wp_customize->add_setting(
                "set_slider_button_text$i", array(
                    "type" 				=> "theme_mod",
                    "default" 			=> "",
                    "sanitize_callback" => "sanitize_text_field"
                )
            );
            $wp_customize->add_control(
                "set_slider_button_text$i", array(
                    "label" 		=> __( "Button Text for Page $i", "fancy-lab" ),
                    "description" 	=> __( "Button Text for Page $i", "fancy-lab" ),
                    "section" 		=> "sec_slider",
                    "type" 			=> "text"
                )
            );
            $wp_customize->add_setting(
                "set_slider_button_url$i", array(
                    "type" 				=> "theme_mod",
                    "default" 			=> "",
                    "sanitize_callback" => "esc_url_raw"
                )
            );
            $wp_customize->add_control(
                "set_slider_button_url$i", array(
                    "label" 		=> __( "URL for Page $i", "fancy-lab" ),
                    "description" 	=> __( "URL for Page $i", "fancy-lab" ),
                    "section" 		=> "sec_slider",
                    "type" 			=> "url"
                )
            );
            $wp_customize->add_setting(
                "set_slider_title_text$i", array(
                    "type" 				=> "theme_mod",
                    "default" 			=> "",
                    "sanitize_callback" => "sanitize_text_field"
                )
            );
            $wp_customize->add_control(
                "set_slider_title_text$i", array(
                    "label" 		=> __( "Title Text for Page $i", "fancy-lab" ),
                    "description" 	=> __( "Title Text for Page $i", "fancy-lab" ),
                    "section" 		=> "sec_slider",
                    "type" 			=> "text"
                )
            );
            $wp_customize->add_setting(
                "set_slider_content_text$i", array(
                    "type" 				=> "theme_mod",
                    "default" 			=> "",
                    "sanitize_callback" => "sanitize_text_field"
                )
            );
            $wp_customize->add_control(
                "set_slider_content_text$i", array(
                    "label" 		=> __( "Content Text for Page $i", "fancy-lab" ),
                    "description" 	=> __( "Content Text for Page $i", "fancy-lab" ),
                    "section" 		=> "sec_slider",
                    "type" 			=> "text"
                )
            );

            $wp_customize->add_setting(
                "set_slider_image_$i", array(
                    "default" => "",
                    "type"    => "theme_mod"
                )
            );
    
            
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 
                "set_slider_image_$i", array(
                    "label"             => __("Slider Image #$i", "name-theme"),
                    "section"           => "sec_slider",
                    "settings"          => "set_slider_image_$i",
                    "library_filter" => array( "gif", "jpg", "jpeg", "png", "ico" ),    
                )
            ));
        }
    }

    add_action( 'customize_register', 'powerfit_customizer' );
}