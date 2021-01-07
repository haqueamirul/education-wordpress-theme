<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softedu
 */

?>

	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="col-md-4 footer-grid">
					<h5><?php echo esc_html(cs_get_option('footer_1_title')); ?></h5>
					<p><?php echo esc_html(cs_get_option('footer_1_content')); ?></p>

					<?php if ( cs_get_option('footer_1_form') ): ?>
						
					<form>					 
					  <input type="text" class="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
					 <input type="submit" value="Submit">
					 <div class="clearfix"></div>
				 	</form>
				 	<?php endif ?>
				</div>
				<div class="col-md-4 footer-grid">
					<h5><?php echo esc_html(cs_get_option('footer_2_title')); ?></h5>
					<p><?php echo esc_html(cs_get_option('footer_2_content')); ?></p>
				</div>
				<div class="col-md-4 footer-grid">
					<h5><?php echo esc_html(cs_get_option('footer_3_title')); ?></h5>
					<p><?php echo esc_html(cs_get_option('footer_3_content')); ?> </p>
					
					<div class="social-icons footer-social-icons">
						<?php if ( cs_get_option('footer_3_facebook') ): ?>
							

						<a class="facebook" href="<?php echo esc_html(cs_get_option('footer_3_facebook')); ?>">Facebook</a>
						<?php endif;
							if ( cs_get_option('footer_3_twitter') ):
						 ?>
						<a class="twitter" href="<?php echo esc_html(cs_get_option('footer_3_twitter')); ?>">Twitter</a>
						<?php endif;
							if ( cs_get_option('footer_3_google') ):
						 ?>
						<a class="google-plus" href="<?php echo esc_html(cs_get_option('footer_3_google')); ?>">Google+</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="copyrights text-center">
					<p>© <?php echo esc_html(cs_get_option('copyright_text')); ?>   <a href="<?php echo esc_html(cs_get_option('company_link')); ?>">  <?php echo esc_html(cs_get_option('copany_name')); ?></a></p>					
				</div>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'footer-menu',
						'depth'             => 3,
						'container'         => 'div',
						'container_class'   => 'footer-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer-section -->
	<!-- //footer-section-ends-here -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
<?php wp_footer(); ?>
</body>
</html>