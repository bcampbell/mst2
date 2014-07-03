<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("event"); ?>>
    <div class="l-stackable text-center">
        <div class="l-item25">
            <time class="dt-published published dateicon" datetime="2014-08-11"><span class="dateicon-month">July</span><span class="dateicon-day">11</span></time>
        </div>
        <div class="l-item75 text-left">
            <div class="event-main">
                <h3 class="entry-title p-name"><? the_title(); ?></h1>
                <div class="l-contain">
                    <div class="entry-content e-content">
                        <?php the_content(); ?>
                    </div>
                </div>
        </div>
        </div>
    </div>
</article>
