<?php

function mst2_setup() {
	//add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 200, true );
	
//	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

    add_image_size( 'tool-thumbnail', 150, 150 ); // Tool thumbnail size (no crop)
	
	add_image_size( 'news', 150, 200, true ); // News thumbnail (cropped)

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

    // override the automatic-excerpt length (wp default is 55)
    add_filter('excerpt_length', 'mst2_excerpt_length', 999);
    add_filter( 'excerpt_more', 'mst2_excerpt_more' );
}
add_action( 'after_setup_theme', 'mst2_setup' );


function mst2_previous_posts_link_attributes() {
    return 'class="btn btn-default" rel="prev"';
}

function mst2_next_posts_link_attributes() {
    return 'class="btn btn-default" rel="next"';
}

function mst2_excerpt_length($length) {
    return 30;
}

function mst2_excerpt_more( $more ) {
    return " &hellip;";
//    return '... <br /><a href="'. get_permalink() . '" class="arrow">' . __('More ', '') . '</a>';
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
