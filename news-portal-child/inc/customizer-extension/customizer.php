<?php
/**
 * News Portal Theme Customizer
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function np_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
    $wp_customize->selective_refresh->add_partial( 
        'blogname', 
            array(
                'selector' => '.site-title a',
                'render_callback' => 'news_portal_customize_partial_blogname',
            )
    );

    $wp_customize->selective_refresh->add_partial( 
        'blogdescription', 
            array(
                'selector' => '.site-description',
                'render_callback' => 'news_portal_customize_partial_blogdescription',
            )
    );

    

/*-----------------------------------------------------------------------------------------------------------*/
    /**
     * Add Important theme links
     *
     * @since 1.1.0
     */
    $wp_customize->add_section(
        'news_portal_imp_link_section',
        array(
            'title'             => __( 'Important Theme Links', 'news-portal' ),
            'priority'          => 35
        )
    );

    $wp_customize->add_setting(
        'news_portal_imp_links',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

   

}
add_action( 'customize_register', 'np_customize_register' );

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function np_customize_preview_js() {
	wp_enqueue_script( 'news_portal_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'np_customize_preview_js' );

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Enqueue required scripts/styles for customizer panel
 *
 * @since 1.0.0
 */
function np_customize_backend_scripts() {

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/library/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
    
    wp_enqueue_style( 'news_portal_admin_customizer_style', get_template_directory_uri() . '/assets/css/np-customizer-style.css' );

    wp_enqueue_script( 'news_portal_admin_customizer', get_template_directory_uri() . '/assets/js/np-customizer-controls.js', array( 'jquery', 'customize-controls' ), '20170616', true );
}
add_action( 'customize_controls_enqueue_scripts', 'np_customize_backend_scripts', 10 );

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Load required files for customizer section
 *
 * @since 1.0.0
 */
require get_stylesheet_directory() . '/inc/customizer-extension/np-grid-settings.php';          // Custom Grid Settings