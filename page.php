<?php
/**
* The Template for displaying pages (as opposed to posts)
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

