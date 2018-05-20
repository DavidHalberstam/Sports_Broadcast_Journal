<?php
/**
 * News Portal Design Settings panel at Theme Customizer
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

add_action( 'customize_register', 'news_portal_grid_settings_register' );

function news_portal_grid_settings_register( $wp_customize ) {

	
	/**
     * Add Grid Settings Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
	    'news_portal_grid_settings_panel',
	    array(
	        'priority'       => 35,
	        'capability'     => 'edit_theme_options',
	        'theme_supports' => '',
	        'title'          => __( 'Grid Settings', 'news-portal-child' ),
	    )
    );


	
/*---------------------------------------------------------------------------------------------------------------*/
    /**
     * Custom Grid Settings
     *
     * @since 1.0.0
     */	
	$opt_name = "mg_options";
	
	$wp_customize->add_section( 
		 "news_portal_grid_section", 
		 array(
		'title'     => esc_html__( 'Grid Style', 'news-portal-child' ),
		'panel'     => 'news_portal_grid_settings_panel',
		'priority'  => 25,
		)       
    );	 
	
	$wp_customize->add_setting( 
		 'np_posts_per_page', 
		 array(			 
		'default'           => '6',
		'sanitize_callback' => 'sanitize_key',
		)       
    );	
	$wp_customize->add_control(new WP_Customize_Control ($wp_customize,
        'np_posts_per_page',
		 array(
                'type'     => 'text',
				'section'   => 'news_portal_grid_section',
			 	'settings'   => 'np_posts_per_page',
				'priority' => 2,
                'label' => __( 'Grid Posts' ),
  				'description' => __( 'This sets the number of posts to display in the grid section.  This must be numeric.  Values can be adjusted manually in the functions.php and index.php' ),
			 'validate' => 'numeric',
                'default'  => '5',
 				'input_attrs' => array(
    				'min' => 0,
    				'max' => 50,
    				'step' => 1,
  				),
		
       )) );

 
	
	
/*---------------------------------------------------------------------------------------------------------------*/	
	
 	$wp_customize->add_setting(
        'news_portal_posts_offset',
        array(
            'default'      => __( '5' ),
            'sanitize_callback' => 'sanitize_text_field'
            )
    );
	 $wp_customize->add_control(new WP_Customize_Control ($wp_customize,
        'news_portal_posts_offset',
	 array(	 
		'type'      => 'text',
        'label'     => esc_html__( 'Posts Offset', 'news-portal-child' ),
		'description' => __( 'Offset value should match the number of grid posts.  Must be numeric', 'news-portal' ),
        'section'   => 'news_portal_grid_section',
		'priority' => 3,
		 'validate' => 'numeric',       
			)) );

/*---------------------------------------------------------------------------------------------------------------*/
}/*end function news_portal_grid_settings_register*/