<?php
/**
 * Enqueue scripts and styles.
 */
function softedu_scripts() {
	wp_enqueue_style( 'softedu-style', get_stylesheet_uri() );
	wp_enqueue_style( 'provet-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'medisoft-2-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'provet-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'provet-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,400italic,600,300italic,300,700italic,800,800italic');
	

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'softedu-responsiveslides', get_template_directory_uri() . '/js/responsiveslides.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softedu-move-top', get_template_directory_uri() . '/js/move-top.js', array(), '20151215', true );
	wp_enqueue_script( 'softedu-easing', get_template_directory_uri() . '/js/easing.js', array(), '20151215', true );
	wp_enqueue_script( 'softedu-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );
	wp_enqueue_script( 'softedu-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	wp_enqueue_script( 'softedu-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'softedu-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'softedu_scripts' );