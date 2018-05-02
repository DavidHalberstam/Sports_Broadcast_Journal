Use this custom query loop code to sort multiple loops by category IDs.
    
    <?php	
	$cat_query = new WP_Query('category_name=announcers&posts_per_page=2');
    if( have_posts() ) : 
	while ($cat_query->have_posts()) : $cat_query->the_post();
	$do_not_duplicate = $post->ID;
	get_template_part( 'template-parts/blog', get_post_format() );
	
	?>
	
	<?php endwhile; 
	wp_reset_postdata(); 
	rewind_posts(); ?>
	<?php endif; ?>	
	
	<?php $cat_query = new WP_Query('category_name=announcers&posts_per_page=3&offset=1'); 
	if ( have_posts() ) :
	 while ($cat_query->have_posts()) : $cat_query->the_post(); // start second loop
	if ( $post->ID == $do_not_duplicate ) continue; 
			echo get_template_part('grid');
	?>
	<?php endwhile;  
	endif; 
	wp_reset_postdata(); 
	rewind_posts(); ?>
	
	<?php $cat_query = new WP_Query('category_name=interviews&posts_per_page=2'); 
	 while ($cat_query->have_posts()) : $cat_query->the_post(); // start third loop
			echo get_template_part('grid');
	?>
	<?php endwhile;  
	wp_reset_postdata(); 
	rewind_posts(); ?>


The number of random posts can be changed in the np-custom-hooks.php file

820px or higher is the recommended image width resolution.  400px is used for vertical and square images


use stylesheet for child theme, template for parent theme in functions.php

To add to the customizer
https://css-tricks.com/getting-started-wordpress-customizer/

The SSL certificate was validated by adding a .well-known folder.  Don't delete this.

http://www.sports-announcers.com/.well-known/pki-validation/A665A1BEF9E89C4AC67516BC2CA86B6A.txt

Insert this code to add author byline and date to grid posts

    <h6 class="grid-post-subtitle"><?php _e('By', 'news portal' );?> <?php The_author_posts_link(); ?> &nbsp &nbsp <span class="entry-date"><?php echo get_the_date(); ?></span></h6>	
