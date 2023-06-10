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
	<header id="masthead" class="site_header header">
		<div class="header_content-container">
			<div class="nav_gap-active"></div>
			<div class="site_branding">
				<a href="http://localhost/aeriz2023/" class="" rel="home" aria-label="Go To The Homepage" <?php if (is_page_template( 'page-home.php' )):?>aria-current="page"<?php endif?>>
					<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Logo.svg" alt="Aeriz Logo">
				</a>
			</div>
			<!--  -->
			<a id="btn_header-shop" class="btn_default btn_shop btn_w-holographic btn_w-holographic-w-overlay" href="" target="_self">shop our cannabis</a>
			<button aria-label="Toggle Navigation Menu" aria-pressed="false" aria-haspopup="true" class="nav_toggle-btn" id="nav_toggle-btn">
					<!---->
					<p class="hamburger_text">MENU<p>
					<!---->
					<div class="hamburger_container">
						<div  class="hamburger hamburger_one"></div>
						<div  class="hamburger hamburger_two"></div>
						<div  class="hamburger hamburger_three"></div>
					</div>
				</button>
			<div class="site_nav-container">

				<!---->
				<div class="nav_module-container">
					<!---->
					<div class="nav_module-background"></div>
					<!---->
					<div class="nav_module">
						<nav id="site_navigation" class="nav">
							<!---->
							<ul aria-label="main navigation list" class="nav_module-primary-navigation">
								<!---->
								<li class="site_branding branding-nav-module">
									<a href="http://localhost/aeriz2023/" class="" rel="home" aria-label="Go To The Homepage" <?php if (is_page_template( 'page-home.php' )):?>aria-current="page"<?php endif?>>
										<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Logo.svg" alt="Aeriz Logo">
									</a>
								</li>
								<!---->
								<div class="nav_main-links">
									<li>
										<a class='container-morph' aria-label="Open Ethos Page" href="">
											ETHOS
										</a>
									</li>
									<li>
										<a aria-label="Open Products Page" href="">
											PRODUCTS
										</a>
									</li>
									<li>
										<a aria-label="Open Sustainability Page" href="">
										Sustainability											
										</a>
									</li>
									<li>
										<a aria-label="Open Strains Page" href="">
											STRAINS											
										</a>
									</li>
									<li>
										<a aria-label="Open Culture Page" href="">
											Culture
										</a>
									</li> 
								</div>
								<!---->
								<div class="nav_secondary-links">
									<li>
										<a href="">dosage</a>
									</li>
									<li><a href="">merch</a></li>
									<li><a href="">shop</a></li>
								</div>
								<!---->
								<li class="nav_aeriz-hotline">
									<a  aria-label="Open Aeriz Hotline" href="">
										<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/hotline-icon.gif" alt="Aeriz Hotline (844)-Terpene Logo">
									</a>
								</li>
								<!---->
								<li class="nav_module-legal-terms">
									<a href="">Terms & Conditions</a>
								</li>
								<!---->
								<li class="nav_module-legal-privacy">
									<a href="">Privacy Policy</a>
								</li>
								<!---->
							</ul>
								<!---->	
						</nav>
						<!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>		
	</header><!-- #masthead -->
