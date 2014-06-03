<?php

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("l-rel"); ?>>
    <header class="entry-header">
    <div class="l-contain">
    <h1 class="entry-title p-name"><? the_title(); ?></h1>
    <?php
        /*    <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('j F Y') ?></time>
*/
?>
    </div>
    </header>

    <div class="l-contain">
	<div class="entry-content e-content">
		<?php the_content(); ?>
    </div>
    </div>
</article>

