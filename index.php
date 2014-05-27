<?php
?>
 
<?php get_header(); ?>

    <div class="front front-tagline">
        <div class="front-tagline-inner">
            <div class="tagline">Accountability for the digital age</div>
        </div>
    </div>

    <div class="front front-tools">
    <h2>Tools</h2>

    <div class="item item-tool">
        <a href=""><img src="http://lorempixel.com/114/104" width="114" height="104" alt="Journalisted" /></a>
        <p>Find journalists and see what they are writing about</p>
        <a href="" class="btn btn-default">Read more</a>
    </div>

    <div class="item item-tool">
        <a href=""><img src="http://lorempixel.com/114/104" width="114" height="104" alt="Journalisted" /></a>
        <p>Find journalists and see what they are writing about</p>
        <a href="" class="btn btn-default">Read more</a>
    </div>

    <div class="item item-tool">
        <a href=""><img src="http://lorempixel.com/114/104" width="114" height="104" alt="Journalisted" /></a>
        <p>Find journalists and see what they are writing about</p>
        <a href="" class="btn btn-default">Read more</a>
    </div>

    <div class="item item-tool">
        <a href=""><img src="http://lorempixel.com/114/104" width="114" height="104" alt="Journalisted" /></a>
        <p>Find journalists and see what they are writing about</p>
        <a href="" class="btn btn-default">Read more</a>
    </div>



    </div>

    <?php
    /* Multiple loops, one for each category we want on the front page */
    ?>
    <div class="front front-publications">
    <h2>Latest Publications</h2>
    <?php
        $q = new WP_Query('category_name=publications&showposts=4');
        while ($q->have_posts()) {
            $q->the_post();
        ?>
        <div><a href="<? the_permalink()?>"><? the_title(); ?></a></div>
        <?php
        }
    ?>
    </div>

    <div class="front front-news">
    <h2>Latest News</h2>
    <?php
        $q = new WP_Query('category_name=mst-news&showposts=3');
        while ($q->have_posts()) {
            $q->the_post();
    		get_template_part( 'content', '' );
        }
    ?>
    </div>

    <div class="front front-events">
    <h2>Upcoming events</h2>
    </div>

    <div class="front front-orwell">
    <h2>The Orwell Prize</h2>
    <a href="">Find out more</a>
    </div>


<?php get_footer(); ?>
