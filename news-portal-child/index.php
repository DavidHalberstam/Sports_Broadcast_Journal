<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 * $option_cats = $options['mg-posts-categories'];
 * $option_pg_number = 4 ;
 * 
 */
get_header();
 ?>
<?php 
do_shortcode( '[mg-masonry_js]' );
$options = get_option('mg_options');
$option_cats = get_theme_mod('news_portal_grid_categories', 'announcers');

$option_pg_number = get_theme_mod('np_posts_per_page', '5');
	$args = array(
		'post_type' => 'post',
		'post_status' => array( 'publish' ),
		'posts_per_page' => $option_pg_number,
		'orderby' => 'date',
		'order' => 'DESC',
		'cat' => $option_cats,
		'offset' => 0,
	);


?>
<div id="all-content-wrapper">
<div id="home-content" >
	
<div class="grid-container">
<div id="grid">
	
	<?php if (is_home() && $paged < 1 ) {
		$paged = get_query_var('paged'); ?>
		
	
<?php  // initialize main loop	?>		
	
<?php	$grid_query = new WP_Query( $args );
	
		if ( $grid_query->have_posts() ) : 
			while ( $grid_query->have_posts()) : $grid_query->the_post(); 
?>
	
			<?php   switch ( $grid_query->current_post ) {
        			case 0 :
			?>
				<?php  // First featured image code here	?>
				<?php	echo get_template_part('grid_featured');	?>
				<?php break; ?>
		
					<?php  // Grid image array code here	?>	
       				<?php default : ?>
	
					<?php	echo get_template_part('grid');	
	?>
		
						<?php } ?>	<?php  // end switch that switches between the featured image and grid styles	?>							
			<?php endwhile; 
	wp_reset_postdata(); 
	rewind_posts(); ?>
	
	<?php else : ?>
			<h2><?php _e('No posts.', 'news portal' ); ?></h2>
			<br><br><p class="lead"><?php _e('Sorry about this, I couldn\'t seem to find what you were looking for.', 'news portal' ); ?></p>
<?php endif; ?>	
	<?php 
	}  // end paged
?>
</div>	
	</div>
<?php 
//get_template_part( 'template-parts/index-category-loop', get_post_format() );
?>	
	
<div id="primary" class="content-area">	
<main id="main" class="site-main" role="main">
	
<?php /* Start the Loop */	?>
		<?php
	
        $args2 = array(
        'post_type' => 'post',
        'posts_per_page' => $option_pg_number,
        'offset' => '0',
        'paged' => get_query_var( 'paged' ),
);
?>
		<?php $main_query = new WP_Query( $args2 ); 
		if ( have_posts() ) :
			
			while ( have_posts() ) : the_post();
			 
	
				get_template_part( 'template-parts/blog', get_post_format() );

			endwhile;?>
	<?php	wp_reset_postdata(); 
	rewind_posts(); ?>
		
<div class="pagination-container">
			<?php  
	 echo regular_pagination(); 
	?>

</div>

		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
news_portal_get_sidebar(); ?>
</div><!-- #home -->
<div class="top-footer-full-width">
		<?php 
//get_template_part( 'template-parts/index-category-loop', get_post_format() );
?>	
</div>
	</div><!-- #all -->
<?php get_footer(); ?>