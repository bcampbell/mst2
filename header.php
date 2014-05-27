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

    <link href='http://fonts.googleapis.com/css?family=Cabin|Bree+Serif|Droid+Serif' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container site-header-inner">
        <a href="/" class="site-logo"><img src="http://lorempixel.com/180/52" alt="Media Standards Trust"/></a>
        <?php get_search_form(); ?>
        <nav class="site-nav">
         <ul>
             <li>blah</li>
             <li>blah</li>
             <li>blah</li>
             <li>blah</li>

        </ul>
        </nav>
    </div>
</header>
<div class="site-content">

