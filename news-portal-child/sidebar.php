<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	
	<?php 
$do_not_duplicate[] = get_the_ID();
$args = array( 
	'post_type' => 'post', 
	'posts_per_page' => 1, 
	'post__not_in' => $do_not_duplicate,
	'cat' => 'cat=2' 
);
?>
<div class="sidebar-posts-container">
<h4>FEATURED</h4>
<?php
$cat_query = new WP_Query('category_name=featured&posts_per_page=5'); 
if ( have_posts() ) :
while ($cat_query->have_posts()) : $cat_query->the_post(); // start second loop
?>
	<div class="lightbox-img-wrapper" >
<div class="sidebar-thumbs-lightbox-overlay-links">
			
<div class="sidebar-thumbs-lightbox-image" style = "background-image: url('<?php the_post_thumbnail_url( 'medium_large' ); ?>');">

			<div class="sidebar-thumbs-lightbox-links">
			<a class="sidebar-thumbs-lightbox-link" href="<?php the_permalink(); ?>" ></a>
			</div>				
</div>		
</div>
	</div>

	<!-- .np-article-thumb -->
<h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'news portal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo wp_trim_words( get_the_title(), 20, '...' ); ?></a>
</h4>
		<?php
			//the_excerpt();
		?>

<?php endwhile;  
endif; 
wp_reset_postdata(); 
rewind_posts(); 
?>
</div>
	<?php
wp_reset_postdata(); 
rewind_posts(); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
