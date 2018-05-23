<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				
					<div class="contact-us">
						<h3>CONTACT INFO</h3>
						<p>
							<i class ="fa fa-envelope"></i>
							<a href="mailto:info@inhabitent.com">mailto:info@inhabitent.com</a>
						</p>
						<p>
							<i class ="fa fa-phone"></i>
							<a href="tel:5551234567">778-456-7891</a>
						</p>
						<p>
							<span><i class="fab fa-facebook-square"></i></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
							<span><i class ="fab fa-google-plus-square"></i></span> 
					</div>
					<div class="business-hours">
						<h3>BUSINESS HOURS</h3>
						<p> 
							<span class="days-of-week">Monday-Friday: </span>9am to 5pm
						</p>
						<p> 
							<span class="days-of-week">Saturday: </span>10am to 2pm
						</p>
						<p> 
							<span class="days-of-week">Sunday: </span>Closed
						</p>
					</div>
					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri()?>/images/logos/inhabitent-logo-text.svg" alt="Our Company Logo">
					</div>
					<div class="site-info">COPYRIGHT &copy 2017 INHABITENT
					</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>