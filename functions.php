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


// Sets the post excerpt length to 200 characters.

add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length) {

        return 40;
    
}

function limit_words($string, $word_limit) {
 
	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character
 
	$words = explode(' ', $string);
 
	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character
 
	return implode(' ', array_slice($words, 0, $word_limit));
 
}

function mst_excerpt_more() {
	
	return '... <br /><a href="'. get_permalink() . '" class="arrow">' . __('More ', '') . '</a>';

}
?>
