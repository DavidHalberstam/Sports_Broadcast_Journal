<!-- Content that is brought into the index Loop for Posts -->
<?php

?>
<!-- Start Content -->

<div id="blog-layout">
	<div class="primary_post_container">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<div class="primary_image_container">
<div class="lightbox-overlay-links">
<div class="lightbox-background-image" style = "background-image: url('<?php the_post_thumbnail_url( 'medium_large' ); ?>');">

	
			<div class="lightbox-links">
			<a class="lightbox-link" href="<?php the_permalink(); ?>" ></a>
			</div>				
</div>		
</div>

	</div>
		
	<!-- .np-article-thumb -->

	<header class="primary_excerpt_container">
		
		
		<!--use php brackets around news_portal_post_categories_list(); to control category color settings from the customizer-->
		<span class="blog-post-cat"><?php news_portal_single_post_categories_list(); ?>
		</span>
	<?php		
			if ( is_singular() ) :
		
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		<?php			 
			if ( 'post' === get_post_type() ) :
		?>
				<div class="entry-meta">
					<h6 class="single-author-slug">
			<?php if ( function_exists( 'coauthors_posts_links' ) ) { ?>						
<?php _e('By', 'news-portal' );?> <?php coauthors_posts_links(); ?><span>&nbsp</span><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?><span>&nbsp</span><span class="comments-icon"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>						
<?php   
} else { ?>
    		<?php _e('By', 'news-portal' );?> <?php The_author_posts_link(); ?><span>&nbsp</span><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?><span>&nbsp</span><span class="comments-icon"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
<?php } ?>		
	</h6>
					
					
				</div><!-- .entry-meta -->
		<?php
			endif;
		?>
		<div class="excerpt-container">
		<?php
			the_excerpt();
		?>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'news-portal' ),
				'after'  => '</div>',
			) );
		?>		
	
	</header><!-- .entry-header -->
			
	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</div><!-- #post-->	
		
</div>
</div>
<hr class="gradient">