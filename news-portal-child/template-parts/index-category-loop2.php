<?php 
$args = array( 
	'post_type' => 'post', 
	'posts_per_page' => 1, 
	'post__not_in' => $do_not_duplicate
	'page' => $page, 
	'cat' => 'cat=2 ' 
);

$cat_query = new WP_Query('category_name=announcers&posts_per_page=4'); 
if ( have_posts() ) :
while ($cat_query->have_posts()) : $cat_query->the_post(); // start second loop
	if ( $post->ID == $do_not_duplicate ) continue; 
$do_not_duplicate[] = get_the_ID();
		echo get_template_part('grid');
?>
<?php endwhile;  
endif; 
wp_reset_postdata(); 
rewind_posts(); ?>

<?php $cat_query = new WP_Query('category_name=interviews&posts_per_page=4'); 
 while ($cat_query->have_posts()) : $cat_query->the_post(); // start third loop
		echo get_template_part('grid');
?>
<?php endwhile;  
wp_reset_postdata(); 
rewind_posts(); ?>

