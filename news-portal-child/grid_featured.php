<div class="grid-item--width2 grid-item">
<li class="grid-post">	
		
<div class="grid-overlay" style = "background-image: url('<?php echo the_post_thumbnail_url( 'gridfirst' ) ?>');"> 
<div class="grid--item-meta--width2">
	
			<div class="grid-link">
			<a class="photolink" href="<?php the_permalink(); ?>" ></a>
			</div>	
	
<div class="grid-item-meta-text">
	<span class="grid-cat"><?php news_portal_single_post_categories_list(); ?></span>
			<h3 class="grid-featured-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'news portal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo wp_trim_words( get_the_title(), 20, '...' ); ?></a></h3>
			
</div>	
	
<?php if ( is_sticky() ) : ?>
	<span class="right radius secondary label"><?php _e( 'Sticky', 'news portal' ); ?></span>
	<?php endif; ?>
	
	<div class="grid-post-meta">
	</div>
	<div class="grid-links">
			<a class="photolink" href="<?php the_permalink(); ?>" ></a>
			</div>
</div>
</div>	
	
</li>
</div>
