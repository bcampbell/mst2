<?php

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("l-rel"); ?>>
    <header class="entry-header">
    	<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
    <div class="l-contain">
    <?php if ( has_post_thumbnail() ) { // the current post has a thumbnail ?>
	
		<div class="tool-icon"><?php the_post_thumbnail('tool-thumbnail'); ?></div>

			<h1 class="tool-title"><? the_title(); ?></h1>

		
												
	<?php	} else { // the current post lacks a thumbnail ?>
	
		<h1 class="entry-title p-name"><? the_title(); ?></h1>
		
	<?php } ?>

	
	
	
					
					
    </div>
    </header>

    <div class="l-contain">
	<div class="entry-content e-content">
		<?php the_content(); ?>
    </div>
    </div>
</article>

