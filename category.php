<?php
$term_description = term_description();
?>

<?php get_header(); ?>
			<?php if ( have_posts() ) : ?>

                <h1 class="archive-title"><? single_cat_title( '', true ); ?></h1>
                <?php if( !empty( $term_description ) ) { ?>
                <div class=""><?= $term_description ?></div>
                <?php }?>

			<?php
					// Start the Loop.
                    while ( have_posts() ) {
                        the_post();
    					get_template_part( 'content', '' );
                    }
                    // prev/next page nav here
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();
