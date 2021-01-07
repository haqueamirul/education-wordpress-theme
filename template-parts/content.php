<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softedu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-md-6 blog-to">
	<?php if ( the_post_thumbnail() ): ?>										
	<a href="<?php the_permalink(); ?>"><img class="<?php the_post_thumbnail('post-image'); ?>" alt="" /></a>
	<?php endif; ?>
		<div class="blog-top">
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="blog-left">
				<b><?php the_time('d'); ?></b>
				<span><?php the_time('M, Y'); ?></span>
			</div>
			<?php endif; ?>
			<div class="top-blog">
				<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif; ?>
				<p><?php _e('Posted by','softedu'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>"><?php the_author(); ?></a> | <a href="<?php comments_link(); ?>"><?php comments_popup_link('No Comment','One Comment','% comments','author','comments off'); ?></a></p> 

				<p class="sed">
					<?php
						echo sExcerpt('25'); ( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'softedu' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'softedu' ),
							'after'  => '</div>',
						) );
						?>
				</p> 
				
			</div>
		<div class="clearfix"> </div>
	</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
