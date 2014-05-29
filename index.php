<?php
?>
 
<?php get_header(); ?>

    <div class="front front-strapline ">
        <div class="l-contain">
            <div class="strapline-outer">
                <div class="strapline-inner">
                <span class="strapline">Accountability for the digital age</span>
                </div>
            </div>
        </div>
    </div>

    <div class="front front-tools">
        <div class="l-contain">
            <h2>Tools</h2>

            <div class="l-stackable">

            <div class="l-item25">
            <div class="tool">
                <a href=""><img src="<?= get_template_directory_uri(); ?>/img/journalistedicon.png" alt="Journalisted" /></a>
                <p>Find journalists and see what they are writing about</p>
                <a href="" class="btn btn-default">Read more</a>
            </div>
            </div>

            <div class="l-item25">
            <div class="tool">
                <a href=""><img src="<?= get_template_directory_uri(); ?>/img/churnalismicon.png" alt="Churnalism" /></a>
                <p>Find journalists and see what they are writing about</p>
                <a href="" class="btn btn-default">Read more</a>
            </div>
            </div>

            <div class="l-item25">
            <div class="tool">
                <a href=""><img src="<?= get_template_directory_uri(); ?>/img/unsourcedicon.png" alt="Unsourced" /></a>
                <p>Find journalists and see what they are writing about</p>
                <a href="" class="btn btn-default">Read more</a>
            </div>
            </div>

            <div class="l-item25">
            <div class="tool">
                <a href=""><img src="<?= get_template_directory_uri(); ?>/img/presscomplaintsicon.png" alt="Press Complaints" /></a>
                <p>Find journalists and see what they are writing about</p>
                <a href="" class="btn btn-default">Read more</a>
            </div>
            </div>

            </div> <!-- end .l-stackable -->
        </div> <!-- end .l-contain -->

    </div>

    <?php
    /* Multiple loops, one for each category we want on the front page */
    ?>
    <div class="front front-publications archive">
        <div class="l-contain">
            <h2>Latest Publications</h2>
            <div class="l-stackable">
            <?php
                $q = new WP_Query('category_name=publications&showposts=4');
                while ($q->have_posts()) {
                    $q->the_post();
            ?>
            <div class="l-item50"><? get_template_part( 'content', 'publication' ); ?> </div>
            <?php
                }
            ?>
            </div>
            <div class="text-center"><a class="more-link" href="/publications">&gt; More publications</a></div>
        </div> <!-- end .l-contain -->
    </div>

    <div class="front front-news archive">
        <div class="l-contain">
            <h2>Latest News</h2>
            <div>
            <?php
                $q = new WP_Query('category_name=mst-news&showposts=3');
                while ($q->have_posts()) {
                    $q->the_post();
                    get_template_part( 'content', '' );
                }
            ?>
            </div>
            <div class="text-center"><a class="more-link" href="/mst-news">&gt; More news</a></div>
        </div> <!-- end .l-contain -->
    </div>

    <div class="front front-events archive">
        <div class="l-contain text-center">
            <h2>Upcoming events</h2>

            <!-- dummy event -->
            <div class="event">
                <div class="timewrap">
                <time class="dt-published published" datetime="2014-05-29"><span class="month">May</span><span class="day">21</span></time>
                </div>
                <div>
                    <h3>Fancypants Event</h3>
                    Vivamus fermentum semper porta. Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, id fringilla sem nunc vel mi. Nam dictum, odio nec pretium volutpat, arcu ante placerat erat, non tristique elit urna et turpis.
                </div>
            </div>


        </div> <!-- end .l-contain -->
    </div>

    <div class="front front-orwell">
        <div class="l-contain">
            <h2>The Orwell Prize</h2>
            <a href="">Find out more</a>
        </div> <!-- end .l-contain -->
    </div>


<?php get_footer(); ?>
