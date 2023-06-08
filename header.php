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
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<?php wp_head(); ?>
</head>

<!-- <body <?php body_class(); ?>> -->
<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aeriz' ); ?></a> -->

	<header id="masthead" class="site_header header">
		<div class="header_content-container">
			<div class="site_branding">
				<a href="http://localhost/aeriz2023/" class="" rel="home" aria-label="Go To The Homepage" <?php if (is_page_template( 'page-home.php' )):?>aria-current="page"<?php endif?>>
					<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Logo.svg" alt="Aeriz Logo">
				</a>
			</div>
			<!-- .site-branding -->
			<div class="site_nav-container">
					<a class="btn_default btn_shop btn_w-holographic btn_w-holographic-w-overlay" href="" target="_self">shop our cannabis</a>
					<div tabindex="0" role="button" aria-label="Toggle Navigation Menu" aria-pressed="false" aria-haspopup="true" class="nav_toggle-btn hamburger_text" id="navigation_toggle-btn">
							MENU
							<div aria-hidden="true" class="hamburger_container">
								<div  class="hamburger hamburger_one"></div>
								<div  class="hamburger hamburger_two"></div>
								<div  class="hamburger hamburger_three"></div>
							</div>
					</div>
					<nav id="site_navigation" class="nav">
						<!-- <?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						); 
						?>-->
					</nav><!-- #site-navigation -->
			<div>
		</div>		
	</header><!-- #masthead -->
