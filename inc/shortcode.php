<?php
/* ==============================================================================
// About Page First section
================================================================================*/
function about_section_one($attr){


	extract( shortcode_atts( array(
      'ttitle'    => '',
      'ccontent' => '',
      'aimage' => '',
    ), $atts ) );

		


	ob_start(); ?>


		<div class="about">
			<div class="container">
				
				<div class="about-bottom text-center">
					<img src="<?php echo do_shortcode( $attr['aimage'] ); ?>" alt="" />
					<h4><?php echo do_shortcode( $attr['ttitle'] ); ?></h4>
					<p><?php echo do_shortcode( $attr['ccontent'] ); ?></p>
				</div>
			</div>
		</div>

	<?php
	return ob_get_clean();

}
add_shortcode('cs_shortcode_1','about_section_one');


/* ==============================================================================
// About Page Second section
================================================================================*/
function about_section_two($attr){


	extract( shortcode_atts( array(
      'left_title_about'    => '',
      'left_content_1' => '',
      'left_content_2' => '',
      'left_content_3' => '',
      'right_title_about' => '',
      'right_image_1' => '',
      'client_right_content_1' => '',
      'client_name_1' => '',
      'right_image_2' => '',
      'client_right_content_2' => '',
      'client_name_2' => '',
    ), $atts ) );

		


	ob_start(); ?>


		<div class="about-middle">
        	<div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 testimonials">
                    <h3><?php echo do_shortcode( $attr['left_title_about'] ); ?></h3>
                    <ul class="list3">
                        <li>
                            <strong>1</strong>
                            <div class="extra">
                                <p><?php echo do_shortcode( $attr['left_content_1'] ); ?></p>
                            </div>
                        </li>
                        <li>
                            <strong>2</strong>
                            <div class="extra">
                                <p><?php echo do_shortcode( $attr['left_content_2'] ); ?></p>
                            </div>
                        </li>
                        <li>
                            <strong>3</strong>
                            <div class="extra">
                                <p><?php echo do_shortcode( $attr['left_content_3'] ); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 testimonials-box testimonials">
                    <h3><?php echo do_shortcode( $attr['right_title_about'] ); ?></h3>
                    <ul class="list4">
                        <li>
                        	<span class="<?php echo do_shortcode( $attr['right_image_1'] ); ?>"></span>
                            <div class="extra">
                                <p><?php echo do_shortcode( $attr['client_right_content_1'] ); ?> </p>
                                <p><?php echo do_shortcode( $attr['client_name_1'] ); ?></p>
                            </div>
                        </li>
                        <li>
                            <span class="<?php echo do_shortcode( $attr['right_image_2'] ); ?>"></span>
                            <div class="extra">
                                <p><?php echo do_shortcode( $attr['client_right_content_2'] ); ?> </p>
                                <p><?php echo do_shortcode( $attr['client_name_2'] ); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
        	</div>
		</div>

	<?php
	return ob_get_clean();

}
add_shortcode('cs_shortcode_2','about_section_two');


/* ==============================================================================
// Our Staff
================================================================================*/
function our_staff_section($attr){


	extract( shortcode_atts( array(
      'active'    => '',
    ), $atts ) );

		


	ob_start(); ?>

		<?php if ( do_shortcode( $attr['active'] ) ): ?>
			
		
		<?php if ( cs_get_option('sec_3_title') ): ?>
			
		<div class="our-staff">
			<div class="container">
				<div class="our-staff-head text-center">
					<header>
						<h3><?php echo esc_html(cs_get_option('sec_3_title')); ?></h3>
						<p><?php echo esc_html(cs_get_option('sec_3_content')); ?></p>
					</header>
				<div class="our-staff-grids text-center">


					<?php

			          $staf_content = cs_get_option('sec_3_group_con');

			            if ( !empty($staf_content) ) {

			            foreach ( $staf_content as $single_staf ) {
			          
			          ?> 

					<div class="col-md-3 our-staff-grid">
						<div class="view view-seventh">
								<img class="img-responsive" src="<?php echo esc_url($single_staf['staf_image']); ?>" alt="">
					                 <div class="mask">
				 						<ul class="staff-social-icons">
				 							<?php if ( $single_staf['staf_facebook'] ): ?>
				 								

											<li><a href="<?php echo esc_html($single_staf['staf_facebook']); ?>"><span class="facebook"> </span></a></li>
											<?php endif;
				 								if ( $single_staf['staf_twitter'] ):
				 							 ?>
											<li><a href="<?php echo esc_html($single_staf['staf_twitter']); ?>"><span class="twitter"> </span></a></li>
										<?php endif; ?>
										</ul>
                   					 </div>
                   					 <h4><?php echo esc_html($single_staf['staf_name']); ?></h4>
			                    <p><?php echo esc_html($single_staf['staf_desc']); ?></p>
                   		</div>
					</div>

					<?php } } ?>

					
					<div class="clearfix"></div>
				</div>
				</div>
			</div>
		</div>
		<?php endif ?>

		<?php endif ?>

	<?php
	return ob_get_clean();

}
add_shortcode('cs_shortcode_3','our_staff_section');


/* ==============================================================================
// Group Section
================================================================================*/
function groupable_section($attr){


	extract( shortcode_atts( array(
      'gtitle'    => '',
      'gimage'    => '',
    ), $atts ) );

		


	ob_start(); ?>


		<div class="about">
			<div class="container">


				
				<div class="about-bottom text-center">
					<img src="<?php echo do_shortcode( $attr['gimage'] ); ?>" alt="" />
					<h4><?php echo do_shortcode( $attr['gtitle'] ); ?></h4>
				</div>



			</div>
		</div>

	<?php
	return ob_get_clean();

}
add_shortcode('cs_advanced_1','groupable_section');


/* ==============================================================================
// Title with Group Section
================================================================================*/
function groupable_section_2($attr){


	extract( shortcode_atts( array(
      'ggtitle'    => '',
      'ggimage'    => '',
      'ggtitle2'    => '',
    ), $atts ) );

		


	ob_start(); ?>


		<div class="about">
			<div class="container">
				<h4><?php echo do_shortcode( $attr['ggtitle'] ); ?></h4>


				
				<div class="about-bottom text-center">
					<img src="<?php echo do_shortcode( $attr['ggimage'] ); ?>" alt="" />
					<h4><?php echo do_shortcode( $attr['ggtitle2'] ); ?></h4>
				</div>



			</div>
		</div>

	<?php
	return ob_get_clean();

}
add_shortcode('cs_advanced_3','groupable_section_2');