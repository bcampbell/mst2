<?php
    get_header();
    $photos = array(
        array(
            'file'=>'/img/strapline/310_365_standard.jpeg',
            'title'=>'310/365 standard',
            'title_link'=>'https://www.flickr.com/photos/aakashgautam/8497909263',
            'by' => 'David Telford',
            'licence' => 'CC BY-NC-SA 2.0',
            'licence_link' => 'https://creativecommons.org/licenses/by-nc-sa/2.0/'
        ),
        array(
            'file'=>'/img/strapline/bbc_london_news_studio.jpeg',
            'title'=>'BBC London News Studio',
            'title_link'=>'https://www.flickr.com/photos/realjv/8671470586',
            'by' => 'John Vincent',
            'licence' => 'CC BY-NC-SA 2.0',
            'licence_link' => 'https://creativecommons.org/licenses/by-nc-sa/2.0/'
        ),
        array(
            'file'=>'/img/strapline/data_center_ncc.jpeg',
            'title'=>'Data Center - NCC',
            'title_link'=>'https://www.flickr.com/photos/beraldoleal/8681750288',
            'by' => 'Beraldo Leal',
            'licence' => 'CC BY 2.0',
            'licence_link' => 'https://creativecommons.org/licenses/by/2.0/'
        ),
        array(
            'file'=>'/img/strapline/photographing_the_photographers.jpeg',
            'title'=>'Photographing The Photographers',
            'title_link'=>'https://www.flickr.com/photos/sharkbait/3284702688',
            'by' => 'A bloke called Jerm',
            'licence' => 'CC BY-NC-SA 2.0',
            'licence_link' => 'https://creativecommons.org/licenses/by-nc-sa/2.0/'
        ),
        /*
        array(
            'file'=>'/img/strapline/mediascrum.jpeg',
            'title'=>'Media Scrum',
            'title_link'=>'https://www.flickr.com/photos/oliviachow/13929786994',
            'by' => 'Dean Goodwin',
            'licence' => 'CC BY 2.0',
            'licence_link' => 'https://creativecommons.org/licenses/by/2.0/'
        ),
        array(
            'file'=>'/img/strapline/trafalgar_square.jpeg',
            'title'=>"STOP THE WAR COALITION RALLY TRAFALGAR SQUARE.08.10.2011",
            'title_link'=>"https://www.flickr.com/photos/wheelzwheeler/6235092439",
            'by'=>"Haydn",
            'licence' => 'CC BY-NC-SA 2.0',
            'licence_link'=>'https://creativecommons.org/licenses/by-nc-sa/2.0/'
        ),
        array(
            'file'=>'/img/strapline/do_away_with_clothes.jpeg',
            'title'=>'Do away with clothes, not mobile',
            'title_link'=>'https://www.flickr.com/photos/aakashgautam/8497909263',
            'by' => 'utilitarian',
            'by_link' => 'https://www.flickr.com/people/aakashgautam/',
            'licence' => 'CC BY-NC 2.0',
            'licence_link' => 'https://creativecommons.org/licenses/by-nc/2.0/'
        ),
        array(
            'file'=>'/img/strapline/newspaper_kiosk_blurred.jpeg',
            'title'=>'Newspaper Kiosk blured',
            'title_link'=>'https://www.flickr.com/photos/aakashgautam/8497909263',
            'by' => 'lambdachialpha',
            'licence' => 'CC BY-NC-SA 2.0',
            'licence_link' => 'https://creativecommons.org/licenses/by-nc-sa/2.0/'
        ),
        */
    );

    $photo = $photos[array_rand($photos)];

    function photo_attribution($photo) {
        if(array_key_exists('by_link',$photo)) {
            $by = "<a href=\"{$photo['by_link']}\">{$photo['by']}</a>";
        } else {
            $by = $photo['by'];
        }
        ?>
            Image: <a href="<?= $photo['title_link'] ?>"><?= $photo['title'] ?></a>
            by <?= $by ?> (<a href="<?= $photo['licence_link'] ?>"><?= $photo['licence'] ?></a>)
        <?php

    }

?>

    <div class="front front-strapline">
        <img class="strapline-img" src="<?= get_template_directory_uri(); ?><?= $photo['file'] ?>" />
        <div class="attribution text-right small"><? photo_attribution($photo); ?></div>
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
            <div class="front-body">
            <h2>Tools</h2>

            <div class="l-stackable">

            <div class="l-item25">
                <a class="tool" href="/journalisted/">
                    <img src="<?= get_template_directory_uri(); ?>/img/journalistedicon.png" alt="Journalisted" />
                    <p>Find journalists and see what they are writing about</p>
                    <div class="btn btn-default">Read more</div>
                </a>
            </div>

            <div class="l-item25">
                <a class="tool" href="/churnalism/">
                    <img src="<?= get_template_directory_uri(); ?>/img/churnalismicon.png" alt="Churnalism" />
                    <p>Helping distinguish journalism from churnalism</p>
                    <div class="btn btn-default">Read more</div>
                </a>
            </div>

            <div class="l-item25">
                <a class="tool" href="/unsourced/">
                    <img src="<?= get_template_directory_uri(); ?>/img/unsourcedicon.png" alt="Unsourced" />
                    <p>Crowd-sourcing original sources for news articles</p>
                    <div class="btn btn-default">Read more</div>
                </a>
            </div>

            <div class="l-item25">
                <a class="tool" href="/presscomplaints/">
                    <img src="<?= get_template_directory_uri(); ?>/img/presscomplaintsicon.png" alt="Press Complaints" />
                    <p>A user-friendly database of PCC complaints</p>
                    <div class="btn btn-default">Read more</div>
                </a>
            </div>

            </div> <!-- end .l-stackable -->
            </div>
        </div> <!-- end .l-contain -->

    </div>

    <?php
    /* Multiple loops, one for each category we want on the front page */
    ?>
    <div class="front front-publications archive">
        <div class="l-contain">
            <div class="front-body">
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
            </div>
        </div> <!-- end .l-contain -->
    </div>

    <div class="front front-news archive">
        <div class="l-contain">
            <div class="front-body">
                <h2>Latest News</h2>
                <div>
                <?php /*
                    $q = new WP_Query('category_name=mst-news&showposts=3');
                    while ($q->have_posts()) {
                        $q->the_post();
                        get_template_part( 'content', '' );
                    }
                */
				?>
				
				
				<div class="entry-content">		
		
		
		
		
		<?php rewind_posts(); ?>
					<?php $i = 1; while (have_posts() && $i < 4) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class("l-rel"); ?>>
					<header class="entry-header">
					<?php if ( has_post_thumbnail() ) { // the current post has a thumbnail ?>
							
							<div class="newsThumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<?php	} else { // the current post lacks a thumbnail ?>
							
					<?php } ?>
					<div class="news-details">
					
					<h3 class="entry-title p-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					 <time class="dt-published published" datetime="<?=get_the_time('c')?>"><?= get_the_time('j F Y') ?></time>
					 </header>
					 <div class="entry-summary p-summary hidden-sm">	
						<?php echo limit_words(get_the_excerpt(), '30'); ?>
					</div>

					<a class="btn btn-default fook hidden-sm" href="<?= esc_url( get_permalink() ) ?>">Read more</a>
					</div>
					</article>
				<?php $i++; endwhile; ?>

				
		<div class="line">&nbsp;</div>	
				
                </div>
                <div class="text-center"><a class="more-link" href="/mst-news">&gt; More news</a></div>
            </div>
        </div> <!-- end .l-contain -->
    </div>

    <div class="front front-events archive">
        <div class="l-contain">
            <div class="front-body">
                <h2>Upcoming events</h2>

                <!-- dummy event -->
                <div class="event">
                    <div class="l-stackable text-center">

                    <div class="l-item25">
                        <time class="dt-published published dateicon" datetime="2014-08-11"><span class="dateicon-month">July</span><span class="dateicon-day">11</span></time>
                    </div>
                    <div class="l-item75 text-left">
                        <div class="event-main">
                            <h3>Panel discussion</h3>
                            <p>The Media Standards Trust is organising a panel discussion at the '<a href="http://www.kcl.ac.uk/sspp/kpi/events/eventrecords/2014/commongood.aspx">New Politics of the Common Good</a>' conference at King's College.<br/>
                        '<em>Will Facebook tell you if your council is corrupt?</em>' will examine the decline of the local press, the rise of hyperlocal, the role of social
                        media (Facebook in particular), and the democratic deficit.</p>
                        <p><a href="https://www.eventbrite.co.uk/e/power-to-people-the-new-politics-of-the-common-good-tickets-11154925683">Book here</a> (Eventbrite)</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>


        </div> <!-- end .l-contain -->
    </div>

    <div class="front front-orwell">
        <div class="l-contain text-center">
            <div class="front-body">
                <div class="orwell-wrapper">
                    <a class="orwell-title" href="http://theorwellprize.co.uk"><img alt="The Orwell Prize" src="<?= get_template_directory_uri(); ?>/img/orwelltitle.png"/></a><br/>
                    <a class="more-link" href="http://theorwellprize.co.uk">&gt; Find out more</a>
                </div>
            </div>
        </div> <!-- end .l-contain -->
    </div>


<?php get_footer(); ?>
