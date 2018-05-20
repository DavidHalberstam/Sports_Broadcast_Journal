<?php
/**
 * This overrides the parent theme template-functions.php
 * Specificallty the color tags and assorted buttons
 */


/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Dynamic style about template
 *
 * @since 1.0.0
 */

add_action( 'wp_enqueue_scripts', 'np_dynamic_styles' );

if( ! function_exists( 'np_dynamic_styles' ) ) :
    function news_portal_dynamic_styles() {

        $get_categories = get_categories( array( 'hide_empty' => 1 ) );
        $news_portal_theme_color = get_theme_mod( 'news_portal_theme_color', '#029FB2' );
        $news_portal_theme_hover_color = news_portal_hover_color( $news_portal_theme_color, '-50' );

        $news_portal_site_title_option = get_theme_mod( 'news_portal_site_title_option', 'true' );        
        $news_portal_site_title_color = get_theme_mod( 'news_portal_site_title_color', '#029FB2' );

        $output_css = '';

        foreach( $get_categories as $category ){

            $cat_color = get_theme_mod( 'news_portal_category_color_'.strtolower( $category->name ), '#00a9e0' );

            $cat_hover_color = news_portal_hover_color( $cat_color, '-50' );
            $cat_id = $category->term_id;
            
            if( !empty( $cat_color ) ) {
                $output_css .= ".category-button.np-cat-". esc_attr( $cat_id ) ." a { border-bottom: 2px solid ". esc_attr( $cat_color ) ."!important}\n";

                $output_css .= ".category-button.np-cat-". esc_attr( $cat_id ) ." a:hover { border-bottom: 2px solid ". esc_attr( $cat_hover_color ) ."!important}\n";

                $output_css .= ".np-block-title .np-cat-". esc_attr( $cat_id ) ." { color: ". esc_attr( $cat_color ) ."}\n";

                /*$output_css .= ".block-header.mt-cat-".$cat_id." { border-left: 2px solid ".$cat_color." }\n";
                 
                $output_css .= ".archive .page-header.mt-cat-".$cat_id." { border-left: 4px solid ".$cat_color." }\n";

                $output_css .= "#site-navigation ul li.mt-cat-".$cat_id." { border-bottom-color: ".$cat_color." }\n";*/
            }
        }

        $output_css .= ".navigation .nav-links a,.bttn,button,input[type='button'],input[type='reset'],input[type='submit'],.navigation .nav-links a:hover,.bttn:hover,button,input[type='button']:hover,input[type='reset']:hover,input[type='submit']:hover,.widget_search .search-submit,.edit-link .post-edit-link,.reply .comment-reply-link,.np-top-header-wrap,.np-header-menu-wrapper,#site-navigation ul.sub-menu, #site-navigation ul.children,.np-header-menu-wrapper::before, .np-header-menu-wrapper::after,.np-header-search-wrapper .search-form-main .search-submit,.news_portal_slider .lSAction > a:hover,.news_portal_default_tabbed ul.widget-tabs li,.np-full-width-title-nav-wrap .carousel-nav-action .carousel-controls:hover,.news_portal_social_media .social-link a,.np-archive-more .np-button:hover,.error404 .page-title,#np-scrollup,.news_portal_featured_slider .slider-posts .lSAction > a:hover { background: ". esc_attr( $news_portal_theme_color ) ."}\n";

        $output_css .= ".home .np-home-icon a, .np-home-icon a:hover,#site-navigation ul li:hover > a, #site-navigation ul li.current-menu-item > a,#site-navigation ul li.current_page_item > a,#site-navigation ul li.current-menu-ancestor > a,.news_portal_default_tabbed ul.widget-tabs li.ui-tabs-active, .news_portal_default_tabbed ul.widget-tabs li:hover { background: ". esc_attr( $news_portal_theme_hover_color ) ."}\n";

        $output_css .= ".np-header-menu-block-wrap::before, .np-header-menu-block-wrap::after { border-right-color: ". esc_attr( $news_portal_theme_hover_color ) ."}\n";

        $output_css .= "a,a:hover,a:focus,a:active,.widget a:hover,.widget a:hover::before,.widget li:hover::before,.entry-footer a:hover,.comment-author .fn .url:hover,#cancel-comment-reply-link,#cancel-comment-reply-link:before,.logged-in-as a,.np-slide-content-wrap .post-title a:hover,#top-footer .widget a:hover,#top-footer .widget a:hover:before,#top-footer .widget li:hover:before,.news_portal_featured_posts .np-single-post .np-post-content .np-post-title a:hover,.news_portal_fullwidth_posts .np-single-post .np-post-title a:hover,.news_portal_block_posts .layout3 .np-primary-block-wrap .np-single-post .np-post-title a:hover,.news_portal_featured_posts .layout2 .np-single-post-wrap .np-post-content .np-post-title a:hover,.np-block-title,.widget-title,.page-header .page-title,.np-related-title,.np-post-meta span:hover,.np-post-meta span a:hover,.news_portal_featured_posts .layout2 .np-single-post-wrap .np-post-content .np-post-meta span:hover,.news_portal_featured_posts .layout2 .np-single-post-wrap .np-post-content .np-post-meta span a:hover,.np-post-title.small-size a:hover,#footer-navigation ul li a:hover,.entry-title a:hover,.entry-meta span a:hover,.entry-meta span:hover,.np-post-meta span:hover, .np-post-meta span a:hover, .news_portal_featured_posts .np-single-post-wrap .np-post-content .np-post-meta span:hover, .news_portal_featured_posts .np-single-post-wrap .np-post-content .np-post-meta span a:hover,.news_portal_featured_slider .featured-posts .np-single-post .np-post-content .np-post-title a:hover { color: ". esc_attr( $news_portal_theme_color ) ."}\n";

        $output_css .= ".navigation .nav-links a,.bttn,button,input[type='button'],input[type='reset'],input[type='submit'],.widget_search .search-submit,.np-archive-more .np-button:hover { border-color: ". esc_attr( $news_portal_theme_color ) ."}\n";

        $output_css .= ".comment-list .comment-body,.np-header-search-wrapper .search-form-main { border-top: ". esc_attr( $news_portal_theme_color ) ."}\n";

        $output_css .= ".np-header-search-wrapper .search-form-main:before { border-bottom: ". esc_attr( $news_portal_theme_color ) ."}\n";

        $output_css .= "@media (max-width: 768px) { #site-navigation,.main-small-navigation li.current-menu-item > .sub-toggle i { background: ". esc_attr( $news_portal_theme_color ) ." !important } }\n";

        if ( $news_portal_site_title_option == 'false' ) {
                $output_css .=".site-title, .site-description {
                            position: absolute;
                            clip: rect(1px, 1px, 1px, 1px);
                        }\n";
            } else {
                $output_css .=".site-title a, .site-description {
                            color:". esc_attr( $news_portal_site_title_color ) .";
                        }\n";
            }

        $refine_output_css = news_portal_css_strip_whitespace( $output_css );

        wp_add_inline_style( 'news-portal-style', $refine_output_css );
    }
endif;
/*---------------------------------------------------------------------------------------------------------------*/
