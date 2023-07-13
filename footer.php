<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aeriz
 */

?>
	<footer id="colophon" class="footer">
		<!---->
		<div class="footer__site-branding">
			<a href="https://aeriz.com/" class="" rel="home" aria-label="Go To The Homepage" <?php if (is_page_template( 'page-home.php' )):?>aria-current="page"<?php endif?>>
				<img src="http://localhost/aeriz2023/wp-content/uploads/2023/06/Aeriz_Logo.svg" alt="Aeriz Logo">
			</a>
		</div>
		<!---->
		<div class="footer__copyright">
			<p>@2023</p>
		</div>
		<!---->
		<div class="footer__ul-navigation-container">
			<h6>Explore</h6>
			<ul class="footer__ul footer__ul-navigation-content" aria-label="Site Links"> 
			<div>
				<li><a href="">Ethos</a></li>
				<li><a href="">Products</a></li>
				<li><a href="">Strains</a></li>
				<li><a href="">Culture</a></li>
			</div>
			<div>
				<li><a href="">Sustainability</a></li>
				<li><a href="">Dosage</a></li>
				<li><a href="">Newsletter</a></li>
				<li><a href="">Hotline</a></li>
			</div>
			</ul>
		</div>
		<!---->
		<div class="footer__ul-newsletter-container">
			<h6>Stay In The Grow</h6>
			<form title="newsletter sign-up" class="footer__form" action="">
				<label aria-label="sign-up for our newsletter" for="footer__newsletter"></label>
				<input title="enter Your email to sign-up for our newsletter" tabindex="0" class="footer__input-email tab--deactivate" id="footer__newsletter" name="newsletter"  type="email" placeholder="Enter email address"/>
				<button tabindex="0" id="footer__submit-btn" title="submit email input to sign-up for our newsletter" class="footer__input-submit tab--deactivate" type="submit"></button>
			</form>
		</div>
		<!---->
		<div class="footer__ul-company-container">
			<h6>Company</h6>
			<ul class="footer__ul" aria-label="Company Links"> 
				<div>
					<li><a href="">Careers</a></li>
					<li><a href="">Email Us</a></li>
					<li><a href="">FAQ</a></li>
				</div>
			</ul>
		</div>
		<!---->
		<div class="footer__ul-web-container">
			<h6>Web</h6>
			<ul class="footer__ul" aria-label="Web Links"> 
				<div>
					<li><a target="_blank" href="">Leafly</a></li>
					<li><a target="_blank" href="">Instagram</a></li>
					<li><a target="_blank" href="">Youtube</a></li>
					<li><a target="_blank" href="">Twitter</a></li>
				</div>
			</ul>
		</div>
		<!---->
		<div class="footer__legal">
			<a href="">Terms & Conditions</a>
			<a href="">Privacy Policy</a>
		</div>
		<!---->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
