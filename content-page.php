<?php

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("l-rel"); ?>>
    <header class="entry-header">
    <div class="l-contain">
    <h1 class="entry-title p-name"><?php if ( has_post_thumbnail() ) { // the current post has a thumbnail ?>
	
		<div class="tool-icon"><?php the_post_thumbnail('tool-thumbnail'); ?></div>
												
	<?php	} else { // the current post lacks a thumbnail ?>
	
		<? the_title(); ?></h1>
		
	<?php } ?>

	
	
	
					
					
    </div>
    </header>

    <div class="l-contain">
	<div class="entry-content e-content">
		<?php the_content(); ?>
    </div>
    </div>
</article>

