<?php
/**
 * Search Results page
 */
 ?>

<?php get_header(); ?>
    <div class="l-contain">

			<?php if ( have_posts() ) : ?>

            <header class="category-header"> 
            <h1>Search Results for: <?= the_search_query(); ?></h1>
			</header>

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'content', '');
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


<?php
get_footer();

