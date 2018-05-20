<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 * 
 */

// Pagination fix

get_header(); ?>
<div id="all-content-wrapper">	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-archive', get_post_format() );

			endwhile;  ?>

			<!--use the_posts_navigation(); for default news portal pagination-->
			<div class="pagination-container">
			<?php echo regular_pagination(); ?>
</div>

		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
<?php wp_reset_postdata(); 
	rewind_posts(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
news_portal_get_sidebar();?>
</div><!-- #primary -->
<?php get_footer(); ?>