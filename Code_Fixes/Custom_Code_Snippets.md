Copy and paste snippet in the primary excerpt container to use the customizer color category tags

	<span class="blog-post-cat"><?php news_portal_single_post_categories_list(); ?>
		</span>

This code should be used for the related posts.

    <div class="np-single-post np-clearfix">
				<div class="np-post-thumb">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'medium_large' ); ?>
					</a>
				</div>
				<!-- end np-post-thumb -->

Original Related Posts CSS

	.np-related-posts-wrap.np-clearfix{
	width:100%;
	margin:0;
	padding:0px 0px 0px 0px;
	overflow:hidden;
	}
	.np-single-post.np-clearfix{
	width:30%;
	padding: 0px 0px 0px 0px;
	position: inline-block;
	}

	.np-single-post img{
	height:150px;
	width: 100%;
	overflow:hidden;	
	}
	.np-post-thumb{
	height:150px;
	width: 100%;
	background: cover;
	}
	.np-post-thumb:hover img,
	.np-slide-thumb:hover img {
	-webkit-transform: scale(1.05);
	-ms-transform: scale(1.05);
	-o-transform: scale(1.05);
	transform: scale(1.05);
	opacity: 0.8;
	}
	.np-related-section-wrapper{
	margin-top: 0px;
	}

Use this code enclosed in php brackets to add the default theme pagination buttons instead of numerical pagination.

	the_posts_navigation();

Use this code to add the admin-visable-only edit post button inside the entry footer on posts.

	news_portal_entry_footer(); 

Use the pre_get_posts fix to offset pagination loop.

	/*--Offset Pre_Get_Posts pagination fix--*/
	add_action('pre_get_posts', 'myprefix_query_offset', 1 );
	function myprefix_query_offset(&$query) {

	//Before anything else, make sure this is the right query...   
	if ( $query->is_home() && !$query->is_main_query()) {
        return;
	}
	//First, define your desired offset...
	$offset = 6;
	//Next, determine how many posts per page you want (we'll use WordPress's settings)
	$ppp = get_option('posts_per_page');
	//Next, detect and handle pagination...
	if ( $query->is_paged ) {
    //Manually determine page query offset (offset + current page (minus one) x posts per page)
    $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

    //Apply adjust page offset
    $query->set('offset', $page_offset );
	}

	else {
	
	if ( $query->is_home() && $query->is_main_query()) {
    //This is the first page. Just use the offset...
    $query->set('offset',$offset);
	}			
	}
	}

	add_filter('found_posts', 'myprefix_adjust_offset_pagination', 1, 2 );
	function myprefix_adjust_offset_pagination($found_posts, $query) {

	//Define our offset again...
	$offset = 6;	
	//Ensure we're modifying the right query object...
	if ( $query->is_home() ) {
        //Reduce WordPress's found_posts count by the offset... 
        return $found_posts - $offset;
	}
	return $found_posts;
	}		

	/*--Pre_Get_Posts category archives pagination fix--*/
	add_action('pre_get_posts', 'np_query_offset', 1 );
	function np_query_offset(&$query) {

	if( $query->is_archive() && !$query->is_main_query()) {
        return;
	}
	$offset = 0;
	$ppp = get_option('posts_per_page');
	if ( $query->is_paged && $query->is_archive()) {
        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );
        $query->set('offset', $page_offset );
	}   
	}

	add_filter('found_posts', 'np_adjust_offset_pagination', 1, 2 );
	function np_adjust_offset_pagination($found_posts, $query) {

 	$offset = 0;
 	if( $query->is_archive()) {
        return $found_posts - $offset;
	}
	return $found_posts;
	}				

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

Insert this code to add author byline and date to grid posts

    <h6 class="grid-post-subtitle"><?php _e('By', 'news portal' );?> <?php The_author_posts_link(); ?> &nbsp &nbsp <span class="entry-date"><?php echo get_the_date(); ?></span></h6>	
    
Insert this code when using the Co-Authors Plus Plugin for multiple authors byline to display 
    
    <?php if ( function_exists( 'coauthors_posts_links' ) ) { ?>
	
	<?php echo get_avatar( get_the_author_meta('ID'), 20); ?> <?php _e('By', 'news-portal' );?> <?php coauthors_posts_links(); ?><span>&nbsp&nbsp&nbsp</span><?php the_date(); ?><span>&nbsp&nbsp&nbsp</span><span class="comments-icon"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
    <?php   
    } else { ?>
    		<?php echo get_avatar( get_the_author_meta('ID'), 20); ?> <?php _e('By', 'news-portal' );?> <?php the_author_posts_link(); ?><span>&nbsp&nbsp&nbsp</span><?php the_date(); ?><span>&nbsp&nbsp&nbsp</span><span class="comments-icon"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
    <?php } ?>
    
Use this code to add category filter option to WP Customizer options

    $wp_customize->add_setting(
        'news_portal_grid_categories',
        array(
            'default'      => __( '' ),
            'sanitize_callback' => 'sanitize_text_field'
            )
    );
	
    $wp_customize->add_control(new WP_Customize_Control ($wp_customize,
        'news_portal_grid_categories',
        array(	 
		'type'      => 'select',
        'label'     => esc_html__( 'Sort by Category', 'news-portal-child' ),
        'section'   => 'news_portal_grid_section',
		'description' => __( 'Leave it empty to display all', 'news-portal-child' ),
        'choices'        => array(
			    'cat'    => __( 'Announcers' ),
				'featured'  => __( 'Featured' ),
                'interviews'  => __( 'Interviews' ),
				'news'  => __( 'News' )
            )
			))
    );
