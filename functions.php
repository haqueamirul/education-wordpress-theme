<?php
/**
 * softedu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softedu
 */
/**
 * Theme support.
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 */
require_once get_template_directory() .'/theme-options/cs-framework.php';

/**
 * Shortcode.
 */
require get_template_directory() . '/inc/shortcode.php';


/**
 * Register widget area.
 */
require get_template_directory() . '/inc/theme-widget.php';

/**
 * Enqueue scripts and styles.
 */

require get_template_directory() . '/inc/enqueue-scripts.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


