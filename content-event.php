<?php
    $eventdate = get_post_meta( get_the_ID(), 'eventdate', true );
    if( $eventdate ) {
        $eventdate = DateTime::createFromFormat('Y-m-d', $eventdate);
    }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("event"); ?>>
    <div class="l-stackable text-center">
        <div class="l-item25">
            <? if( $eventdate ) { ?>
            <time class="dt-published published dateicon" datetime="<?= date_format($eventdate,'Y-m-d'); ?>"><span class="dateicon-month"><?= date_format($eventdate,'M'); ?></span><span class="dateicon-day"><?= date_format($eventdate, 'j'); ?></span></time>
            <? } ?>
        </div>
        <div class="l-item75 text-left">
            <div class="event-main">
                <h3 class="entry-title p-name"><? the_title(); ?></h3>
                <div class="l-contain">
                    <div class="entry-content e-content">
                        <?php the_content(); ?>
                    </div>
                </div>
        </div>
        </div>
    </div>
</article>
