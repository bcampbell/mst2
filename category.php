<?php
$term_description = term_description();
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) { ?>

    <header class="category-header">
        <h1 class="archive-title"><? single_cat_title( '', true ); ?></h1>
        <?php if( !empty( $term_description ) ) { ?>
        <div class=""><?= $term_description ?></div>
        <?php }?>
    </header>
    <div class="container">
        <?php
        $cat = is_category( 'publications' ) ? 'publication':'';
        // Start the Loop.
        while ( have_posts() ) {
            the_post();
            get_template_part( 'content', $cat );
        }
        // prev/next page nav here
        ?>
    </div>
    <? } ?>
<?php
get_footer();
