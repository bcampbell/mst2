<?php

//get_the_time( 'j F Y', $post );

?>
<!--- post  --->
<article id="post-<?php the_ID(); ?>" <?php post_class("l-rel"); ?>>
<?php if(is_search() || !is_single() ) { ?>
    <header class="entry-header">
    <h3 class="entry-title p-name"><a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark"><? the_title() ?></a></h3>
    <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('j F Y') ?></time>
    </header>
	<div class="entry-summary p-summary">
		<?php the_excerpt(); ?>
    </div>
    <a class="btn btn-default fook" href="<?= esc_url( get_permalink() ) ?>">Read more</a>
<?php } else { ?>
    <header class="entry-header">
    <h1 class="entry-title p-name"><? the_title(); ?></h1>
    <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('j F Y') ?></time>
    </header>
	<div class="entry-content e-content">
		<?php the_content(); ?>
    </div>
<?php } ?>
</article>

