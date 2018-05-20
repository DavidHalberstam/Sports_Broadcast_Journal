<?php
/**
 * Add on Loop 
 *
 * 
 */
 ?>

<?php	
$cat_query = new WP_Query('category_name=announcers&posts_per_page=4&offset=5');
if( have_posts() ) : 
while ($cat_query->have_posts()) : $cat_query->the_post();
$do_not_duplicate = $post->ID;
get_template_part( 'template-parts/blog', get_post_format() );
?>

<?php endwhile; 
wp_reset_postdata(); 
rewind_posts(); ?>
<?php endif; ?>	