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
	<meta name="author" content="Jüssi">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" >
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P3NQM2Z');</script>
	<!-- End Google Tag Manager -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3NQM2Z"	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="site">
		<div class="site-inner">

			<header class="header">
				<!-- .site-header -->
				<?php get_template_part( 'templates/header' ); ?>
				<!-- .site-header -->
			</header>
			
			<!-- .site Content -->
			<div id="content" class="site-content">
				<!-- BREADCRUMB -->
				<div class="container">
					<div class="row no gutter">
						<div class="col-xs-12">
							<?php custom_breadcrumbs(); ?>
						</div>
					</div>
				</div>
				<!-- BREADCRUMB -->