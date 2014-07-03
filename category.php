<?php
$term_description = term_description();

get_header();
?>
<div class="categorypage">
<div class="l-contain">
        <header class="category-header">
        <h1 class="archive-title"><? single_cat_title( '', true ); ?></h1>
        <?php if( !empty( $term_description ) ) { ?>
        <div class="archive-description"><?= $term_description ?></div>
        <?php }?>
        </header>
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
        <div>
        <?php while ( have_posts() ) { ?>
            <? the_post(); ?>
                <? get_template_part( 'content', 'event' ); ?>
            <?php } ?>
        </div>
        <?php } else { /* default */?>
        <div>
        <?php while ( have_posts() ) { ?>
            <? the_post(); ?>
                <? get_template_part( 'content', '' ); ?>
            <?php } ?>
        </div>
    <?php } ?>
    <div class="text-center">
        <?php previous_posts_link( 'Previous page' ); ?>
        <?php next_posts_link( 'Next page' ); ?>
    </div>
</div> <!-- end l-contain -->
</div>
<?php
get_footer();
?>
