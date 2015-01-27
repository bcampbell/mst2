<?php
/**
 * Search Results page
 */
 ?>

<?php get_header(); ?>
    

			<?php if ( have_posts() ) : ?>

            <header class="category-header"> 
            <div class="breadcrumbs"></div>
            <h1>Search Results for: <?= the_search_query(); ?></h1>
			</header>
			<div class="l-contain">
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						/* get_template_part( 'content', ''); */
					?>
					<div class="entry-main">
					        <header class="entry-header">
					            <h3 class="entry-title p-name"><a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark"><? the_title() ?></a></h3>
					            
					        </header>
					    	<div class="entry-summary p-summary hidden-sm">
						    	<?php the_excerpt(); ?>
					        </div>
					        
					</div>

				<?php
					endwhile;
					// Previous/next post navigation.
				else :
					// If no content, include the "No posts found" template.
//					get_template_part( 'content', 'none' );
?>
No matches
<?php
				endif;
			?>
			</div>

<?php
get_footer();

