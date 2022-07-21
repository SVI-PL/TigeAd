<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TigeAD
 */

?>
<section class="home-6">
        <div class="home-6-container">
            <div class="home_text">Overwhelmed by running Amazon Ads? Try our solution by claiming 30-Day Free Trial! No card needed. </div>
            <a href="#" class="btn-small-blue">Try Free for 30 Days</a>
        </div>
    </section>
</main><!-- #main -->

<footer class="footer">
	<div class="footer_col1">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</div>
	<div class="footer_col2">
		<div class="contact_block">
			<div class="tel_line">123-456-7890</div>
			<div class="mail_line">info@thinkad.ai</div>
			<div class="geo_line">500 Terry Francois St</div>
			<div class="loc_line">San Francisco, CA 94158</div>
		</div>
	</div>
	<div class="footer_col3">
		<div class="social_block">
			<div class="social_title">Follow us on</div>
			<div class="social_icon">
				<a href="#">
					<div class="social-media-icons">
						<div class="linkedin"></div>
					</div>
				</a>
				<a href="#">
					<div class="social-media-icons">
						<div class="instagram"></div>
					</div>
				</a>
				<a href="#">
					<div class="social-media-icons">
						<div class="youtube"></div>
					</div>
				</a>
				<a href="#">
					<div class="social-media-icons">
						<div class="facebook"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="footer_col4">
		<div class="footer_logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri() ?>/img/svg/Logo.svg" alt="">
				<div class="logo-text">ThinkAd</div>
				<div class="break"></div>
				<div class="logo_sub">We are from Ukraine</div>
			</a>
		</div>
		<div class="btn-small-blue">Try Free for 30 Days</div>
	</div>
</footer>
</div><!-- #page -->
<div class="up_box"><i></i></div>
<?php wp_footer(); ?>

</body>

</html>