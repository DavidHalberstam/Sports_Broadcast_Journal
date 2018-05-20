<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php			
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			

			if ( 'post' === get_post_type() ) :
		?>
				<div class="entry-meta">
					<?php news_portal_inner_posted_on(); ?>
				</div><br><!-- .entry-meta -->
		<?php
			endif;
		?>
	</header><!-- .entry-header -->
	
	<div class="np-article-thumb">
		<a href="<?php the_permalink(); ?>" ><?php 
		the_post_thumbnail( 'full' ); 
		?></a>
	</div><!-- .np-article-thumb -->

	<div class="entry-content">
		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'news-portal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php news_portal_post_categories_list(); ?>

	<footer class="entry-footer">
		<?php news_portal_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->