<?php

function mst2_setup() {
	//add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 152, 216,true );
//	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

	register_nav_menus( array(
        'header-menu'=>'Site header menu',
        'footer-menu'=>'Site footer menu'
    ) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

    // kludge to style next/prev links
    add_filter('next_posts_link_attributes', 'mst2_next_posts_link_attributes');
    add_filter('previous_posts_link_attributes', 'mst2_previous_posts_link_attributes');

}
add_action( 'after_setup_theme', 'mst2_setup' );


function mst2_previous_posts_link_attributes() {
    return 'class="btn btn-default" rel="prev"';
}

function mst2_next_posts_link_attributes() {
    return 'class="btn btn-default" rel="next"';
}

// get the url of the first link in the post
function mst2_get_download_url() {
    $p = get_post();
    $content = $p->post_content;

    $m=array();
    if( preg_match('/<\s*a\s+.*?href="(?P<url>.*?)"/i', $content, $m) ) {
        return $m['url'];
    }
    return "";
}

?>
