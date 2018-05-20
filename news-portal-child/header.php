<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="http://www.sportsbroadcastersjournal.com/wp-content/themes/news-portal-child/style.css"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117999631-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117999631-1');
</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Global faceook like button -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
	<?php
		/**
	     * news_portal_before_page hook
	     *
	     * @since 1.0.0
	     */
	    do_action( 'news_portal_before_page' );
	?>
	
<div id="page" class="site">
	
	<?php 
		$news_portal_top_header_option = get_theme_mod( 'news_portal_top_header_option', 'show' );
		if( $news_portal_top_header_option == 'show' ) {
			
			/**
		     * news_portal_top_header hook
		     *
		     * @hooked - news_portal_top_header_start - 5
		     * @hooked - news_portal_top_left_section - 10
		     * @hooked - news_portal_top_right_section - 15
		     * @hooked - news_portal_top_header_end - 20
		     *
		     * @since 1.0.0
		     */
		    do_action( 'news_portal_top_header' );
		}
	?>

	
	<?php 	
		/**
	     * news_portal_header_section hook
	     *
	     * @hooked - news_portal_header_section_start - 5
	     * @hooked - news_portal_header_logo_ads_section_start - 10
	     * @hooked - news_portal_site_branding_section - 15
	     * @hooked - news_portal_header_ads_section - 20
	     * @hooked - news_portal_header_logo_ads_section_end - 25
	     * @hooked - news_portal_primary_menu_section - 30
	     * @hooked - news_portal_header_section_end - 35
	     *
	     * @since 1.0.0
	     */
	    do_action( 'news_portal_header_section' );
	?>

	<?php 
		$news_portal_ticker_option = get_theme_mod( 'news_portal_ticker_option', 'show' );
		if( $news_portal_ticker_option == 'show' && is_front_page() ) {

			/**
		     * news_portal_top_header hook
		     *
		     * @hooked - news_portal_ticker_section_start - 5
		     * @hooked - news_portal_ticker_content - 10
		     * @hooked - news_portal_ticker_section_end - 15
		     *
		     * @since 1.0.0
		     */
		    do_action( 'news_portal_ticker_section' );
		}
	?>

	<div id="content" class="site-content">
		<div class="mt-container">