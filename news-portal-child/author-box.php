<?php
/**
 * Author Box
 *
 * Displays author box with author description and thumbnail on single posts
 *
 * @package WordPress
 * @subpackage magneti, for WordPress
 * @since magneti, for WordPress 4.0
 */
?>

<?php /**
 * Define variables for author box social icons
 * <h5><?php _e('About the Author', 'news-portal-child' ); ?></h5>
 */

$twitter  = get_the_author_meta('twitter', $author_id);
$facebook = get_the_author_meta('facebook', $author_id);
$googleplus = get_the_author_meta('googleplus', $author_id);
$linkedin = get_the_author_meta('linkedin', $author_id);
$instagram = get_the_author_meta('instagram', $author_id);
$youtube = get_the_author_meta('youtube', $author_id);
$email = get_the_author_meta('email', $author_id);
?>

<?php if ( get_the_author_meta('description') ) : ?>


		<div class="author-box">
			
			<div class="author-avatar">
			<a href="<?php get_the_author_meta('url'); ?>"><?php echo get_avatar( get_the_author_meta('user_email'),'60' ); ?></a>
			</div>
			
			<div class="author-description">
			<h5><?php The_author_posts_link(); ?></h5>
			<p>
				<?php echo get_the_author_meta('description'); ?>
			</p>
			</div>
		<div class="author-box-social-icons">
	<?php	
			if(!empty($email)) {
    echo '<a title="Email" href="mailto:'.$email.'" id="author-social-email"></a>';
} 		
			if(!empty($instagram)) {
    echo '<a title="Instagram" href="'.$instagram.'" id="author-social-instagram"></a>';
} 		
			if(!empty($youtube)) {
    echo '<a title="YouTube" href="'.$youtube.'" id="author-social-youtube"></a>';
} 		
			if(!empty($linkedin)) {
    echo '<a title="Follow me on LinkedIn" href="'.$linkedin.'" id="author-social-linkedin"></a>';
} 				
			if(!empty($googleplus)) {
    echo '<a title="Follow me on Google Plus" href="'.$googleplus.'" id="author-social-googleplus"></a>';
} 					
			if(!empty($twitter)) {
    echo '<a title="Follow me on Twitter" href="https://twitter.com/'.$twitter.'" id="author-social-twitter"></a>';
}
			if(!empty($facebook)) {
    echo '<a title="Follow me on Facebook" href="'.$facebook.'" id="author-social-facebook"></a>';
} 				
		?>
		</div>	
			
		</div>


<?php endif; ?>