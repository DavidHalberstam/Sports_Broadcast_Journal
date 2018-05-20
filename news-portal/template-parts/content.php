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

	<div class="np-article-thumb">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'full' ); ?>
		</a>
	</div><!-- .np-article-thumb -->

	<div class="np-archive-post-content-wrapper">

		<header class="entry-header">
			<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

				if ( 'post' === get_post_type() ) :
			?>
					<div class="entry-meta">
						<?php news_portal_inner_posted_on(); ?>
					</div><!-- .entry-meta -->
			<?php
				endif;
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_excerpt();
				$news_portal_archive_read_more_text = get_theme_mod( 'news_portal_archive_read_more_text', __( 'Continue Reading', 'news-portal' ) );
			?>
			<span class="np-archive-more"><a href="<?php the_permalink(); ?>" class="np-button"><i class="fa fa-arrow-circle-o-right"></i><?php echo esc_html( $news_portal_archive_read_more_text ); ?></a></span>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php news_portal_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .np-archive-post-content-wrapper -->
</article><!-- #post-<?php the_ID(); ?> -->