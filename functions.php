<?php

/* sidebar */
if ( function_exists('register_sidebar') )
    //register_sidebar(array('description' => 'Left Sidebar'));

/* nav menus */
if ( function_exists( 'register_nav_menu' ) ) {
	//register_nav_menu('header_nav', __('Header Navigation Menu'));
	//register_nav_menu('footer_nav', __('Footer Navigation Menu'));
}

add_filter( 'wp_title', 'filter_wp_title' );
/**
 * Filters the page title appropriately depending on the current page
 *
 * This function is attached to the 'wp_title' fiilter hook.
 *
 * @uses	get_bloginfo()
 * @uses	is_home()
 * @uses	is_front_page()
 */
function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo( 'description' );

	$filtered_title = $title . get_bloginfo( 'name' );
	//$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

// Image Stuff
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 813, 282 );

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


function steph_meta_data() { ?>

<span class="post-meta clearfix">
    In <?php echo get_the_category_list(', '); ?>
    <a href="<?php the_permalink() ?>#comments" class="comment-counts alignright"><i class="fa fa-comments"></i> View Comments</a>
</span>

<?php }
