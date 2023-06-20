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
	<div id="masthead" class="header__content-container">
		<!--HEADER-->
		<header class="header">
			<!---->
			<div class="header__site-branding">
				<a href="https://aeriz.com/" rel="home" aria-label="Go To The Homepage" <?php if (is_page_template( 'page-home.php' )):?>aria-current="page"<?php endif?>>
					<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Logo.svg" alt="Aeriz Logo">
				</a>
			</div>
			<!---->
			<a id="btn__header-shop" class="btn__header-shop btn__default btn__w-holographic btn__w-holographic-w-overlay" href="" target="_self">shop our cannabis</a>
			<!---->
		</header>		
		<!--NAV-->
		<div class="nav__module-container">
				<!---->
			<div class="nav__module-background"></div>
				<!---->
			<div class="nav__module-content">
				<!---->
				<nav id="site__navigation" class="nav">
					<!---->
					<button aria-label="Toggle Navigation Menu" aria-pressed="false" aria-haspopup="true" class="nav__toggle-btn" id="nav__toggle-btn">
						<!---->
						<p class="hamburger__text">MENU<p>
						<!---->
						<div class="hamburger__container">
							<div  class="hamburger hamburger__layer-one"></div>
							<div  class="hamburger hamburger__layer-two"></div>
							<div  class="hamburger hamburger__layer-three"></div>
						</div>
						<!---->
					</button>
					<!---->
					<ul aria-label="main navigation list" class="nav__module-primary-navigation">
						<li class="nav__module-branding">
							<a href="https://aeriz.com/" class="" rel="home" aria-label="Go To The Homepage" <?php if (is_page_template( 'page-home.php' )):?>aria-current="page"<?php endif?>>
								<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Logo.svg" alt="Aeriz Logo">
							</a>
						</li>
						<!---->
						<div class="nav__main-links">
							<li>
								<a href="">
									ETHOS
								</a>
							</li>
							<li>
								<a href="">
									PRODUCTS
								</a>
							</li>
							<li>
								<a href="">
								Sustainability											
								</a>
							</li>
							<li>
								<a href="">
									STRAINS											
								</a>
							</li>
							<li>
								<a href="">
									Culture
								</a>
							</li> 
						</div>
						<!---->
						<li class="nav__aeriz-hotline">
							<a  aria-label="Call The Aeriz Hotline 1-844-837-7363" href="tel:18448377363">
								<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/hotline-icon.gif" alt="Aeriz Hotline (844)-Terpene Logo">
							</a>
						</li>
						<!---->
						<div class="nav__secondary-links">
							<li>
								<a href="">dosage</a>
							</li>
							<li>
								<a href="">merch</a>
							</li>
							<li>
								<a href="">shop</a>
							</li>
						</div>
						<!---->
						<li class="nav__module-legal-terms">
							<a href="">Terms & Conditions</a>
						</li>
						<!---->
						<li class="nav__module-legal-privacy">
							<a href="">Privacy Policy</a>
						</li>
						<!---->
					</ul>
					<!---->	
				</nav>
				<!-- #site-navigation -->
			</div>
			<!---->
		</div>
		<!---->
	</div><!-- #masthead -->


							