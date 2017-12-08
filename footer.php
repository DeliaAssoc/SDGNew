<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heim
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div id="footer-contact" class="footer-col">
				<div id="footer-contact-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img id="logo" src="<?php bloginfo('template_directory'); ?>/img/footer/heim-footer-logo.svg" alt="logo">
					</a>
				</div>
				<div id="footer-location">
					<h1>1-800-564-HEIM</h1>
					<h4>1999 Route 88 East, Brick, NJ 08724</h4>
				</div>
				<div class="social-icons">
					<ul>
						<li><a id="fb-logo" href="https://www.facebook.com/HeimElectronics1976/"><i class="fa fa-facebook"></i></a></li>
			      <li><a id="twitter-logo" href="https://twitter.com/heimelectronics"><i class="fa fa-twitter"></i></a></li>
			    	<li><a id="linked-logo" href="https://www.linkedin.com/company/heim-electronics"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div id="footer-quick-links" class="footer-col">
				<h2>Quick LInks</h2>

				<?php wp_nav_menu( array( 'theme_location' => 'quick-links', 'menu_id' => 'quick-links' ) ); ?>

			</div>
			<div id="footer-newsletter" class="footer-col">
				<h2>Subscribe to News</h2>
				<p>Subscribe to our news list and we will inform you about newest projects and promotions<span class="red">.</span></p>
				<div class="register-form">
					<?php echo do_shortcode( '[contact-form-7 id="191" title="Contact Email"]' ); ?>
				</div>
			</div>
		</div>
		<div id="copyright">
			<p class="copyright"><?php echo date('Y'); ?> Heim. All rights reserved.</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
