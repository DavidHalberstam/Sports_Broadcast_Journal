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
<div class="article-content">
<div class="article-cat">
	<?php news_portal_single_post_categories_list(); ?>
	</div>
	<header class="entry-header">
		<?php 
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		<h2 class="entry-subtitle"> <?php echo get_secondary_title(); 
		?></h2>
		<div class="single-post-entry-meta">
			<h6 class="single-author-slug"><?php echo get_avatar( get_the_author_meta('ID'), 20); ?> <?php _e('By', 'news-portal' );?> <?php The_author_posts_link(); ?><span>&nbsp&nbsp&nbsp</span><?php the_date(); ?><span>&nbsp&nbsp&nbsp</span><span class="comments-icon"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span></h6>
				</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
	<div class="np-article-thumb">		
		<?php
$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
the_post_thumbnail('full');
  if(!empty($get_description)){//If description is not empty show the div
  echo '<div class="featured_caption">' . $get_description . '</div>';
  }
?>
		
	</div><!-- .np-article-thumb -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'news-portal' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
				
			) ); ?>
			<?php wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'news-portal' ),
				'after'  => '</div>',
			) );
		?>	
		<!-- Facebook Like Button -->
		<div class="fb-like" data-href="http://www.sportsbroadcastjournal.com/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
		<?php news_portal_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
		</div>
</article><!-- #post-<?php the_ID(); ?> -->