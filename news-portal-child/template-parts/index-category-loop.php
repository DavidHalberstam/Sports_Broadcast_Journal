<?php 
$do_not_duplicate[] = get_the_ID();
$args = array( 
	'post_type' => 'post', 
	'posts_per_page' => 1, 
	'post__not_in' => $do_not_duplicate,
	'cat' => 'cat=2' 
);
?>
<?php
$cat_query = new WP_Query('category_name=announcers&posts_per_page=1'); 
if ( have_posts() ) :
while ($cat_query->have_posts()) : $cat_query->the_post(); // start second loop
?>


<div class="category-posts-container">
	
<h4>Announcers</h4>

<div class="lightbox-overlay" style = "background-image: url('<?php the_post_thumbnail_url( 'medium_large' ); ?>');">
<div class="lightbox--item-meta">
	
			<div class="lightbox-links">
			<a class="lightbox-link" href="<?php the_permalink(); ?>" ></a>
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

<?php $cat_query = new WP_Query('category_name=announcers&posts_per_page=3&offset=1'); 
 while ($cat_query->have_posts()) : $cat_query->the_post(); // start third loop
?>
		<h6><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'news portal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo wp_trim_words( get_the_title(), 20, '...' ); ?></a>
</h6>

<?php endwhile; ?> 
</div>
	<?php
wp_reset_postdata(); 
rewind_posts(); ?>


<?php // -------------------------------------start second loop---------------------------------------- ?>

<?php
$cat_query = new WP_Query('category_name=interviews&posts_per_page=1'); 
if ( have_posts() ) :
while ($cat_query->have_posts()) : $cat_query->the_post(); 
?>


<div class="category-posts-container">

<h4>Interviews</h4>
	
<div class="lightbox-overlay" style = "background-image: url('<?php the_post_thumbnail_url( 'medium_large' ); ?>');">
<div class="lightbox--item-meta">
	
			<div class="lightbox-links">
			<a class="lightbox-link" href="<?php the_permalink(); ?>" ></a>
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
rewind_posts(); ?>

<?php $cat_query = new WP_Query('category_name=interviews&posts_per_page=3&offset=1'); 
 while ($cat_query->have_posts()) : $cat_query->the_post(); // start third loop
?>
		<h6><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'news portal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo wp_trim_words( get_the_title(), 20, '...' ); ?></a>
</h6>

<?php endwhile; ?> 
</div>
	<?php
wp_reset_postdata(); 
rewind_posts(); ?>

<?php // ------------------------------start third loop----------------------------------- ?>

<?php
$cat_query = new WP_Query('category_name=news&posts_per_page=1'); 
if ( have_posts() ) :
while ($cat_query->have_posts()) : $cat_query->the_post(); 
?>


<div class="category-posts-container">
	
<h4>News</h4>

<div class="lightbox-overlay" style = "background-image: url('<?php the_post_thumbnail_url( 'medium_large' ); ?>');">
<div class="lightbox--item-meta">
	
			<div class="lightbox-links">
			<a class="lightbox-link" href="<?php the_permalink(); ?>" ></a>
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
rewind_posts(); ?>

<?php $cat_query = new WP_Query('category_name=news&posts_per_page=3&offset=1'); 
 while ($cat_query->have_posts()) : $cat_query->the_post(); // start third loop
?>
		<h6><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'news portal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo wp_trim_words( get_the_title(), 20, '...' ); ?></a>
</h6>

<?php endwhile; ?> 
</div>
	<?php
wp_reset_postdata(); 
rewind_posts(); ?>

<?php // ------------------------------start fourth loop----------------------------------- ?>

<?php
$cat_query = new WP_Query('category_name=broadcasting&posts_per_page=1'); 
if ( have_posts() ) :
while ($cat_query->have_posts()) : $cat_query->the_post(); 
?>


<div class="category-posts-container">
	
<h4>Broadcasting</h4>

<div class="lightbox-overlay" style = "background-image: url('<?php the_post_thumbnail_url( 'medium_large' ); ?>');">
<div class="lightbox--item-meta">
	
			<div class="lightbox-links">
			<a class="lightbox-link" href="<?php the_permalink(); ?>" ></a>
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
rewind_posts(); ?>

<?php $cat_query = new WP_Query('category_name=broadcasting&posts_per_page=3&offset=1'); 
 while ($cat_query->have_posts()) : $cat_query->the_post(); // start third loop
?>
		<h6><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'news portal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo wp_trim_words( get_the_title(), 20, '...' ); ?></a>
</h6>

<?php endwhile; ?> 
</div>
	<?php
wp_reset_postdata(); 
rewind_posts(); ?>