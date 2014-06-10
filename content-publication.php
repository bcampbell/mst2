<?php
    /* this template formats a publication post using the .fancypub style,
       thumbnail, download link, no content */


    /* get download link from scanning content of post - hacky but intuitive enough */
    $dl = mst2_get_download_url();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("fancypub"); ?>>
    <? if ( has_post_thumbnail() ) { ?>
    <a class="entry-thumb hidden-sm" href="<? the_permalink()?>"><? the_post_thumbnail();?></a>
    <? } else { ?>
    <div class="entry-thumb hidden-sm"></div>
    <? } ?>
    <div class="entry-main">
        <header class="entry-header">
            <h3 class="entry-title p-name"><a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark"><? the_title() ?></a></h3>
            <time class="dt-published published hidden-sm" datetime="<?=get_the_time('c')?>"><?= get_the_time('F Y') ?></time>
        </header>
            <? if($dl) { ?>
            <a class="dl-link" href="<?= esc_url($dl) ?>">Download</a>
            <? } ?>
    </div>
</article>

