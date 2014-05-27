<?php
/**
 * The Template for displaying all single posts
 */

get_header(); ?>

<?php
    while ( have_posts() ) {
        the_post();
        get_template_part( 'content', '' );
    }
    ?>
<?php
get_footer();

