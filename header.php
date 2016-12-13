<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php

// Debug bdd
// echo dirname( __FILE__ );

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<script src="http://momentjs.com/downloads/moment.js"></script>
		<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
		<!-- REDIRECTION -->
		<!-- <meta http-equiv="refresh" content="7; URL='http://www.owinfinity.com/en/'" /> -->
		<!-- FIN REDIRECTION -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?= get_stylesheet_directory_uri() ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<?php wp_head(); ?>
		<?php
			$urlPhoto = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
		<style>
			body {
				background-image: url(<?php echo $urlPhoto ?>);
			}
		</style>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar row" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?= get_stylesheet_directory_uri().'/assets/images/icons/logo.png' ?>" alt="Overwatch Infinity Logo" />
						</a>
						<div class="version-number-wrap">
							<div class="version-number">v1.0</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
			<div class="top-bar-right-right">
				<?php foundationpress_top_bar_lang(); ?>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
