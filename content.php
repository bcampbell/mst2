<?php

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("l-rel"); ?>>
<?php if(is_search() || !is_singular() ) { ?>
    <? if ( has_post_thumbnail() ) { ?>
    <a class="entry-thumb hidden-sm" href="<? the_permalink()?>"><? the_post_thumbnail();?></a>
    <? } else { /* ?>
    <div class="entry-thumb hidden-sm"></div>
    <? */ } ?>
    <div class="entry-main">
        <header class="entry-header">
            <h3 class="entry-title p-name"><a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark"><? the_title() ?></a></h3>
            <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('j F Y') ?></time>
        </header>
    	<div class="entry-summary p-summary hidden-sm">
	    	<?php the_excerpt(); ?>
        </div>
        <a class="btn btn-default fook hidden-sm" href="<?= esc_url( get_permalink() ) ?>">Read more</a>
    </div>
<?php } else { ?>
    <header class="entry-header">
    <div class="l-contain">
    <h1 class="entry-title p-name"><? the_title(); ?></h1>
    <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('j F Y') ?></time>
    </div>
    </header>

    <div class="l-contain">
	<div class="entry-content e-content">
		<?php the_content(); ?>
    </div>
    </div>
<?php } ?>
</article>

