<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<title><?php wp_title( '|', true, 'left' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Lucas">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php //echo get_stylesheet_uri(); ?>" >
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css?v=1.6" >
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<div class="site-inner">

			<header class="header">
				<!-- .site-header -->
				<?php get_template_part( 'templates/header' ); ?>
				<!-- .site-header -->
			</header>

			<!-- .site Content -->
			<div id="content" class="site-content">
