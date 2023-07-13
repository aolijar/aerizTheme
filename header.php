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
		<!---->
		<div class="header__content">
				<!--HEADER-->
				<header class="header">
					<!---->
					<div class="header__site-branding">
						<a href="https://aeriz.com/" rel="home" aria-label="Go To The Homepage" <?php if (is_page_template( 'page-home.php' )):?>aria-current="page"<?php endif?>>
							<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Logo.svg" alt="Aeriz Logo">
						</a>
					</div>
					<!---->
					<a id="btn__header-shop" class="btn__header-shop btn__default btn__w-holographic btn__w-holographic-w-overlay links__tab--deactivate" href="" target="_self">shop our cannabis</a>
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
								<p class="hamburger__text">MENU</p>
									<div class="hamburger__text--container">
										<!-- <div class="hamburger__text--clip-mid-nav">
											<span>M</span>
											<span>M</span>
										</div>
										<div class="hamburger__text--clip-mid-nav">
											<span>E</span>
											<span>E</span>
										</div>
										<div class="hamburger__text--clip-mid-nav">
											<span>N</span>
											<span>N</span>
										</div>
										<div class="hamburger__text--clip-mid-nav">
											<span>U</span>
											<span>U</span>
										</div> -->
									</div>
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
								<div class="nav__main-links-container">
									<li>
										<a class="nav__main-link" aria-label="ethos" href="">
											<div class="nav__main-links-clip-container">
												<div class="nav__main-links-clips">
													<span>e</span>
													<span>e</span>
												</div>
												<div class="nav__main-links-clips">
													<span>t</span>
													<span>t</span>
												</div>
												<div class="nav__main-links-clips">
													<span>h</span>
													<span>h</span>
												</div>
												<div class="nav__main-links-clips">
													<span>o</span>
													<span>o</span>
												</div>
												<div class="nav__main-links-clips">
													<span>s</span>
													<span>s</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="nav__main-link" aria-label="products" href="">
											<div class="nav__main-links-clip-container">
												<div class="nav__main-links-clips">
													<span>p</span>
													<span>p</span>
												</div>
												<div class="nav__main-links-clips">
													<span>r</span>
													<span>r</span>
												</div>
												<div class="nav__main-links-clips">
													<span>o</span>
													<span>o</span>
												</div>
												<div class="nav__main-links-clips">
													<span>d</span>
													<span>d</span>
												</div>
												<div class="nav__main-links-clips">
													<span>u</span>
													<span>u</span>
												</div>
												<div class="nav__main-links-clips">
													<span>©</span>
													<span>c</span>
												</div>
												<div class="nav__main-links-clips">
													<span>t</span>
													<span>t</span>
												</div>
												<div class="nav__main-links-clips">
													<span>s</span>
													<span>s</span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="nav__main-link" aria-label="sustainability" href="">
											<div class="nav__main-links-clip-container nav__main-links-sustainability">
												<div class="nav__main-links-clips">
													<span>s</span>
													<span>s</span>
												</div>
												<div class="nav__main-links-clips">
													<span>u</span>
													<span>u</span>
												</div>
												<div class="nav__main-links-clips">
													<span>s</span>
													<span>s</span>
												</div>
												<div class="nav__main-links-clips">
													<span>t</span>
													<span>t</span>
												</div>
												<div class="nav__main-links-clips">
													<span>a</span>
													<span>a</span>
												</div>
												<div class="nav__main-links-clips">
													<span>i</span>
													<span>i</span>
												</div>
												<div class="nav__main-links-clips">
													<span>n</span>
													<span>n</span>
												</div>
												<div class="nav__main-links-clips">
													<span>a</span>
													<span>a</span>
												</div>
												<div class="nav__main-links-clips">
													<span>b</span>
													<span>b</span>
												</div>
												<div class="nav__main-links-clips">
													<span>i</span>
													<span>i</span>
												</div>
												<div class="nav__main-links-clips">
													<span>l</span>
													<span>l</span>
												</div>
												<div class="nav__main-links-clips">
													<span>i</span>
													<span>i</span>
												</div>
												<div class="nav__main-links-clips">
													<span>t</span>
													<span>t</span>
												</div>
												<div class="nav__main-links-clips">
													<span>y</span>
													<span>y</span>
												</div>
											</div>											
										</a>
									</li>
									<li>
										<a class="nav__main-link" aria-label="strains" href="">
											<div class="nav__main-links-clip-container nav__main-links-strains">
												<div class="nav__main-links-clips">
													<span>s</span>
													<span>s</span>
												</div>
												<div class="nav__main-links-clips">
													<span>t</span>
													<span>t</span>
												</div>
												<div class="nav__main-links-clips">
													<span>r</span>
													<span>r</span>
												</div>
												<div class="nav__main-links-clips">
													<span>a</span>
													<span>a</span>
												</div>
												<div class="nav__main-links-clips">
													<span>i</span>
													<span>i</span>
												</div>
												<div class="nav__main-links-clips">
													<span>n</span>
													<span>n</span>
												</div>
												<div class="nav__main-links-clips">
													<span>s</span>
													<span>s</span>
												</div>
											</div>											
										</a>
									</li>
									<li>
										<a class="nav__main-link" aria-label="culture" href="">
											<div class="nav__main-links-clip-container nav__main-links-culture">
												<div class="nav__main-links-clips">
													<span>c</span>
													<span>c</span>
												</div>
												<div class="nav__main-links-clips">
													<span>u</span>
													<span>u</span>
												</div>
												<div class="nav__main-links-clips">
													<span>l</span>
													<span>l</span>
												</div>
												<div class="nav__main-links-clips">
													<span>t</span>
													<span>t</span>
												</div>
												<div class="nav__main-links-clips">
													<span>u</span>
													<span>u</span>
												</div>
												<div class="nav__main-links-clips">
													<span>r</span>
													<span>r</span>
												</div>
												<div class="nav__main-links-clips">
													<span>e</span>
													<span>e</span>
												</div>
											</div>
										</a>
									</li> 
								</div>
								<!---->
								<li class="nav__aeriz-hotline">
									<a  aria-label="Call The Aeriz Hotline 1-844-837-7363" href="tel:18448377363">
										<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Website_CallNow_Circle.svg" alt="Aeriz Hotline (844)-Terpene Background">
										<img class="nav__aeriz-hotline--moving-text" src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Website_CallNow_MovingText.svg" alt="Aeriz Hotline (844)-Terpene Text">
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
		</div>
		<!---->
	</div><!-- #masthead -->


							