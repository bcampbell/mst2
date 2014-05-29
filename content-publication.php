<?php
    $dl = mst2_get_download_url();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("fancypub"); ?>>
    <div class="entry-thumb hidden-sm">
        <? if ( has_post_thumbnail() ) { ?>
            <a href="<? the_permalink()?>"><? the_post_thumbnail();?></a>
        <? } ?>
    </div>
    <div class="entry-main">
        <header class="entry-header">
            <h3 class="entry-title p-name"><a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark"><? the_title() ?></a></h3>
            <time class="dt-published published hidden-sm" datetime="<?=get_the_time('c')?>"><?= get_the_time('F Y') ?></time>
        </header>
            <? if($dl) { ?>
            <a class="more-link" href="<?= esc_url($dl) ?>">Download</a>
            <? } ?>
    </div>
</article>

