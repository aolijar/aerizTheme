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
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$aeriz_description = get_bloginfo( 'description', 'display' );
			if ( $aeriz_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $aeriz_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="site-nav-container">
		<a class="btn-default btn header-shop-btn btn-w-holographic btn-w-holographic-w-overlay" href="" target="_self">shop our cannabis</a>

		<nav id="site-navigation" class="main-navigation">
			<div role="button" aria-label="Open Navigation Menu" aria-pressed="false" class="menu-toggle-btn" id="menu-toggle-btn">
				<div aria-hidden="true" class="hamburger hamburger-one"></div>
				<div aria-hidden="true" class="hamburger hamburger-two"></div>
				<div aria-hidden="true" class="hamburger hamburger-three"></div>
			</div>
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
