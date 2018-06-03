<?php 
function theme_enqueue_scripts() {
	//PRIORITY FIRE FIRST
    wp_enqueue_style( 'news-portal-style', get_template_directory_uri() . '/style.css' );
    
	//...Custom queueing of .js and .css for Javascript plugins and such here
    wp_enqueue_script( 'news-portal-child_js', get_stylesheet_directory_uri() . '/masonry.min.js', array( 'jquery' ), '1.0', true );
	
	//Deregister select parent theme scripts and action hooks. 
	//important - must fire in correct priority order when loading to work correctly, after the parent setup theme but before the child initialization
	//news_portal_dynamic_styles controls the tag colors and buttons
	//found in the parent themme template-functions.php
	function remove_my_parent_theme_function() {
	remove_action('wp_enqueue_scripts', 'news_portal_dynamic_styles');
}
add_action('after_setup_theme', 'remove_my_parent_theme_function', 7);

    //PRIORITY FIRE LAST
    wp_enqueue_style( 'news-portal-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'news-portal-style' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

/*--Overwrite parent theme files color tag style--*/
require get_stylesheet_directory() . '/inc/template-functions.php';
/*--require get_stylesheet_directory() . '/inc/template-tags.php';
--*/

/*--Overwrite parent theme files header and footer--*/
require get_stylesheet_directory() . '/inc/hooks/np-header-hooks.php';
require get_stylesheet_directory() . '/inc/hooks/np-footer-hooks.php';
require get_stylesheet_directory() . '/inc/hooks/np-custom-hooks.php';

/*--Don't record IP address of comments- this should be a temporary setting--*/
function wpb_remove_commentsip( $comment_author_ip ) {
return '';
}
add_filter( 'pre_comment_user_ip', 'wpb_remove_commentsip' );

/*--Stop sending annoying email notices for user password changes--*/
add_filter( 'send_email_change_email', '__return_false' );

/*-- WARNING: using Redux framework causes the editor to stop working.  
 * It can be used to quickly change the settings of the grid and offset quickly, and has no adverse effects 
 * for site visitors, just the admin
require get_stylesheet_directory() . '/inc/theme-options/ReduxCore/framework.php';
require get_stylesheet_directory() . '/inc/theme-options/sample/config.php';

/**
 * This code will add grid settings to the customizer panel, but the controls don't work.  
Until this can be fixed, the redux config.php can be used to control the grid settings
or they can be manually changed in the functions.php and index.php--*/
 require get_stylesheet_directory() . '/inc/customizer-extension/customizer.php';
 

/*--Offset Pre_Get_Posts pagination fix--*/
add_action('pre_get_posts', 'myprefix_query_offset', 1 );
function myprefix_query_offset(&$query) {

    //Before anything else, make sure this is the right query...   
    if ( $query->is_home() && !$query->is_main_query()) {
        return;
    }
    //Define desired offset using .  Remove the following declaration to remove WordPress customizer options
    //$option_offset = get_theme_mod('news_portal_posts_offset', '0');
	//If Customizer options stop working, set $offset=$option_offset; to a regular number integer.  Default is 5
    $offset = get_theme_mod('news_portal_posts_offset', '0');
    //Next, determine how many posts per page you want (we'll use WordPress's settings)
    $ppp = get_option('posts_per_page');
    //Next, detect and handle pagination...
    if ( $query->is_paged ) {
        //Manually determine page query offset (offset + current page (minus one) x posts per page)
        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

        //Apply adjust page offset
        $query->set('offset', $page_offset );
    }
	
    else {
		
		if ( $query->is_home() && $query->is_main_query()) {
        //This is the first page. Just use the offset...
        $query->set('offset',$offset);
}			
}
}

add_filter('found_posts', 'myprefix_adjust_offset_pagination', 1, 2 );
function myprefix_adjust_offset_pagination($found_posts, $query) {

    //Define our offset again...
    $offset = get_theme_mod('news_portal_posts_offset', '0');	
    //Ensure we're modifying the right query object...
    if ( $query->is_home() ) {
        //Reduce WordPress's found_posts count by the offset... 
        return $found_posts - $offset;
    }
    return $found_posts;
}					

/*--Pre_Get_Posts category archives pagination fix--*/
add_action('pre_get_posts', 'np_query_offset', 1 );
function np_query_offset(&$query) {

    if( $query->is_archive() && !$query->is_main_query()) {
         return;
    }
    $offset = 0;
    $ppp = get_option('posts_per_page');
    if ( $query->is_paged && $query->is_archive()) {
        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );
        $query->set('offset', $page_offset );
    }   
}

add_filter('found_posts', 'np_adjust_offset_pagination', 1, 2 );
function np_adjust_offset_pagination($found_posts, $query) {

     $offset = 0;
     if( $query->is_archive()) {
          return $found_posts - $offset;
    }
    return $found_posts;
}                       

/*--Pre_Get_Posts Search pagination fix--*/
add_action('pre_get_posts', 'news_portal_search_query_offset', 1 );
function news_portal_search_query_offset(&$query) {

    if( $query->is_search() && !$query->is_main_query()) {
         return;
    }
    $offset = 0;
    $ppp = get_option('posts_per_page');
    if ( $query->is_paged && $query->is_search()) {
        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );
        $query->set('offset', $page_offset );
    }   
}

add_filter('found_posts', 'news_portal_search_adjust_offset_pagination', 1, 2 );
function news_portal_search_adjust_offset_pagination($found_posts, $query) {

     $offset = 0;
     if( $query->is_search()) {
          return $found_posts - $offset;
    }
    return $found_posts;
}   

/**
 * Add Custom Excerpts to Pages
 **/
add_post_type_support( 'page', 'excerpt' );
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
/**
 * Set Excerpt Length
 * **/
function custom_excerpt_length( $length ) { return 15; } add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); 
// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 40,
		'flex-width'  => true,
	) );
// Load Google Fonts API
function load_fonts() {
            wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,500,600,700|Ubuntu:400,500,600,700|Raleway:400,700|Alegreya Sans:400,500|Fjalla One:400,500|Rubik+Mono+One:400|Lato:400');
            wp_enqueue_style( 'google-fonts', 'google-fonts2');
        }
    
    add_action('wp_print_styles', 'load_fonts');
/**
 * Add Custom Social Media entry forms for Author Profile 
 */
function custom_author_links( $contactmethods ) {
        $contactmethods['linkedin'] = __( 'Linkedin profile URL', 'news-portal-child' );
        $contactmethods['youtube'] = __( 'YouTube', 'news-portal-child' );
        $contactmethods['instagram'] = __( 'Instagram', 'news-portal-child');

        return $contactmethods;
    }
    add_filter('user_contactmethods','custom_author_links', 10, 1);
/**
 * Create Regular pagination
 */
function regular_pagination() {
global $wp_query;
$big = 999999999; // need an unlikely integer
$links= paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages,
	'prev_next' => true,
	'prev_text' => '&laquo',
	'next_text' => '&raquo',
	'type' => 'list',
) );
       $pagination= str_replace( 'pagination', 'page-numbers', $links);
	   echo $pagination;
 }
?>