<?php

    $dl = mst2_get_download_url();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if(is_search() || !is_single() ) { ?>
    <div class="entry-thumb">
        <? if ( has_post_thumbnail() ) { ?>
            <a href="<? the_permalink()?>"><? the_post_thumbnail();?></a>
        <? } ?>
    </div>
    <div>
        <header class="entry-header">
            <h3 class="entry-title p-name"><a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark"><? the_title() ?></a></h3>
            <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('F Y') ?></time>
        </header>
            <? if($dl) { ?>
            <a class="more-link" href="<?= esc_url($dl) ?>">Download</a>
            <? } ?>
    </div>
<?php } else { ?>
    <header class="entry-header">
    <h1 class="entry-title p-name"><? the_title(); ?></h1>
    <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('j F Y') ?></time>
    </header>
    <? if ( has_post_thumbnail() ) { ?>
        <div class="post-thumb"><a href="<? the_permalink()?>"><? the_post_thumbnail();?></a></div>
    <? } ?>
	<div class="entry-content e-content">
		<?php the_content(); ?>
    </div>
<?php } ?>
</article>

