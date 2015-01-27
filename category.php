<?php
$term_description = term_description();

get_header();
?>


        <header class="category-header">
            <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
        <h1 class="archive-title"><? single_cat_title( '', true ); ?></h1>
        <?php if( !empty( $term_description ) ) { ?>
        <div class="archive-description"><?= $term_description ?></div>
        <?php }?>
        </header>
        <div class="l-contain">
    <?php if( is_category( 'publications' )) { ?>
        <div class="l-stackable">
        <?php while ( have_posts() ) { ?>
            <? the_post(); ?>
            <div class="l-item50">
                <? get_template_part( 'content', 'publication' ); ?>
            </div>
        <?php } ?>
        </div>
        <?php } else if (is_category('events')) { ?>
        <div class="cat-list">
        <?php while ( have_posts() ) { ?>
            <? the_post(); ?>
                <? get_template_part( 'content', 'event' ); ?>
            <?php } ?>
        </div>
        <?php } else { /* default */?>
        <div class="cat-list">
        <?php while ( have_posts() ) { ?>
            <? the_post(); ?>
                <? get_template_part( 'content', '' ); ?>
            <?php } ?>
        </div>
    <?php } ?>
    <div class="text-center pagination">
        <?php previous_posts_link( 'Previous page' ); ?>
        <?php next_posts_link( 'Next page' ); ?>
    </div>
    </div> <!-- end l-contain -->

<?php
get_footer();
?>
