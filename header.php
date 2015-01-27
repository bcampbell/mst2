<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" />
	<link rel="icon" type="image/gif" href="<?= get_template_directory_uri(); ?>/favicon.gif">
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Cabin|Bree+Serif|Droid+Serif' rel='stylesheet' type='text/css' data-norem />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <!--[if lt IE 9]>
    <script src="<?= get_template_directory_uri(); ?>/polyfill/html5shiv.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="l-contain">
       <div class="site-header-inner">
        <a href="/" class="site-logo"><img src="<?= get_template_directory_uri(); ?>/img/mstlogo.png" alt="Media Standards Trust"/></a>
        <?php get_search_form(); ?>
        <div id="site-hotdog-btn" class="btn btn-hotdog is-hidden"></div>
        </div>
    </div>
</header>

<div id="site-nav-hotdog" class="site-nav-hotdog">
    <div id="navigation-wrapper">
    <?php wp_nav_menu( array(
        'theme_location'=>'header-menu',
        //'menu_class'=>'menu menu-fancy',
        'depth'=>1,
        'container'=>'nav'
        ) ); ?>

            <ul class="social">
                <li><a href="https://twitter.com/NewsMatters" class="icon twitter">Twitter</a></li>
                <li><a href="https://www.facebook.com/pages/Media-Standards-Trust/152015511494934" class="icon facebook">Facebook</a></li>
                <!-- <li><a href="" class="icon googleplus">Google+</a></li> 
                <li><a href="" class="icon rss">RSS</a></li>-->
            </ul>
        
    </div>
</div>

<div class="site-content">

