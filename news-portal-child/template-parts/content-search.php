<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
					<h6><?php _e('By', 'news-portal' );?> <?php The_author_posts_link(); ?><span>&nbsp</span><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?><span>&nbsp</span><span class="comments-icon"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span></h6>	
				</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<hr class="gradient">
	<footer class="entry-footer">
		<!----news_portal_entry_footer();---->
	</footer><!-- .entry-footer -->

</div><!-- #post-<?php the_ID(); ?> -->

