<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softedu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header" id="movetop">
		<div class="container">
			<div class="header-top">
				<?php if ( cs_get_option('phone_no') ): ?>
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Phone:<?php echo esc_html(cs_get_option('phone_no')); ?></p>
				<?php endif ?>
				<div class="logo">
					<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(cs_get_option('provite_logo')); ?>">
				</div>

				<div class="social-icons">
					<ul>
						<li><a class="google-plus" href="<?php echo esc_url(cs_get_option('facebook')); ?>">Facebook</a></li>
						<li><a class="google-plus" href="<?php echo esc_url(cs_get_option('twitter')); ?>">Twitter</a></li>
						<li><a class="google-plus" href="<?php echo esc_url(cs_get_option('google_pluse')); ?>">Google+</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- navigation -->
			<div class="navigation">
					<nav class="navbar navbar-default">
					 
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						
						<?php
							wp_nav_menu( array(
								'theme_location'    => 'main-menu',
								'depth'             => 3,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse nav-wil',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
						?>
					</nav>
			</div>
			<!-- //navigation -->
		</div>
	</div>