<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aeriz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<!-- <body <?php body_class(); ?>> -->
<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aeriz' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo();?>
		</div><!-- .site-branding -->
		<div class="site-nav-container">
		<a class="btn-default header-shop-btn btn-w-holographic btn-w-holographic-w-overlay" href="" target="_self">shop our cannabis</a>

		<nav id="site-navigation" class="main-navigation">
			<div role="button" aria-label="Open Navigation Menu" aria-pressed="false" class="menu-toggle-btn" id="menu-toggle-btn">
			<!---->
			<div class="rotate-fluid-container">
					<div class="rotate-box" style="transition-delay: 50ms">
					<span>M</span>
					</div>
					<div class="rotate-box" style="transition-delay: 80ms">
					<span>E</span>
					</div>
					<div class="rotate-box" style="transition-delay: 110ms">
					<span>N</span>
					</div>
					<div class="rotate-box" style="transition-delay: 140ms">
					<span>U</span>
				</div>
				<!---->
				<div aria-hidden="true" class="hamburger hamburger-one"></div>
					<div aria-hidden="true" class="hamburger hamburger-two"></div>
					<div aria-hidden="true" class="hamburger hamburger-three"></div>
				</div>
			<!--NAV-->
			<div>
			<!-- <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</div> -->
		</nav><!-- #site-navigation -->
		<div>
	</header><!-- #masthead -->
