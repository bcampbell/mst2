<?php

function mst2_setup() {
	//add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 152, 216,true );
//	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

    /*
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'mst2' ),
	) );
    */

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

}
add_action( 'after_setup_theme', 'mst2_setup' );




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
