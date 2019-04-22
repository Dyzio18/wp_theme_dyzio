<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package patryk-nizio-2019
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="mobile-menu" class="hide">
	<ul id="mobile-menu-list">
		<li>o mnie</li>
		<li>projekty</li>
		<li>blog</li>
	</ul>
</nav>



<div id="page-wrapper" class="site" data-page-wrapper>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'patryk-nizio-2019' ); ?></a>
	<div class="page__container container" data-page-container>
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-4">
				<header id="header" class="header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/brand/logotyp.png" alt="logotyp: Patryk Nizio">
					</a>
					<nav>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">blog</a> </li>
							<li><a href="<?php echo esc_url( home_url( '/works' ) ); ?>">portfolio</a> </li>
							<li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">o mnie</a> </li>
						</ul>
					</nav>
				</header>
			</div>

			<div class="col-lg-10 col-md-9 col-sm-8">
				<main  id="content" class="content typeset" data-page-content>
			
