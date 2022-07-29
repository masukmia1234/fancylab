<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */

?>
		<footer>
			<!-- <section class="footer-widgets">Footer Widgets</section> -->
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6"></div>
						<nav class="footer-menu col-12 col-md-6 text-left text-md-right">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'footer',
									'menu_id'        => 'footer-menu',
								) );
								?>

						</nav>
					</div>
				</div>
				
			
		</section>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>