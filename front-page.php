<?php 
/*
Template Name: Homepage
*/
get_header(); ?>

	<!-- header-section-ends-here -->

	
	<div class="slider">
	    <ul class="rslides" id="slider1">

	    	

	    <?php if ( cs_get_option('provite_logo1') ): ?>
	      <li><img src="<?php echo esc_url(cs_get_option('provite_logo1')); ?>" alt=""></li>
	    <?php endif;
	    	if ( cs_get_option('provite_logo2') ):
	     ?>
	      <li><img src="<?php echo esc_url(cs_get_option('provite_logo2')); ?>" alt=""></li>
	    <?php endif;
	    	if ( cs_get_option('provite_logo3') ):
	     ?>
	      <li><img src="<?php echo esc_url(cs_get_option('provite_logo3')); ?>" alt=""></li>
	    <?php endif;
	    	if ( cs_get_option('provite_logo4') ):
	     ?>
	      <li><img src="<?php echo esc_url(cs_get_option('provite_logo4')); ?>" alt=""></li>
	    <?php endif;
	    	if ( cs_get_option('provite_logo5') ):
	     ?>
	      <li><img src="<?php echo esc_url(cs_get_option('provite_logo5')); ?>" alt=""></li>
	  	<?php endif; ?>
	     

	    </ul>
    </div>


	<!-- content-section-starts-here -->
	<div class="content">

		<?php if ( cs_get_option('sec_1_left_title') || cs_get_option('sec_1_right_title') ): ?>
		<div class="welcome-top">
			<div class="container">

				<?php if ( cs_get_option('sec_1_left_title') ): ?>

				<div class="col-md-6 welcome_top_left">
					<h3><?php echo esc_html(cs_get_option('sec_1_left_title')); ?></h3>
					<h5><?php echo esc_html(cs_get_option('sec_1_left_subtitle')); ?></h5>
					<p><?php echo esc_html(cs_get_option('sec_1_left_content')); ?></p>
				</div>

				<?php endif; ?>

				<?php if ( cs_get_option('sec_1_right_title') ): ?>
					
				<div class="col-md-6 welcome_top_right">
					<h3><?php echo esc_html(cs_get_option('sec_1_right_title')); ?></h3>
					<h5><?php echo esc_html(cs_get_option('sec_1_right_subtitle')); ?></h5>
					<div class="welcome_right_location">
						<div class="location_img">
							<img src="<?php echo esc_url(cs_get_option('sec_1_right_image')); ?>" alt="" />
						</div>
						<div class="location">
							<p><?php echo esc_html(cs_get_option('sec_1_right_content')); ?></p>
							<?php if ( cs_get_option('sec_1_right_adress') ): ?>
							<p class="location_text"><span class="glyphicon glyphicon-map-marker"></span><?php echo esc_html(cs_get_option('sec_1_right_adress')); ?></p>
							<?php endif;
								if ( cs_get_option('sec_1_right_time') ):
							 ?>
							<p class="location_text"><span class="glyphicon glyphicon-dashboard"></span><?php echo esc_html(cs_get_option('sec_1_right_time')); ?></p>
							<?php endif; ?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php endif ?>

				<div class="clearfix"></div>
			</div>
		</div>

		<?php endif;
			 if ( cs_get_option('sec_2_title_wel') ): ?>
		

		<div class="welcome_bottom">
			<div class="container">
				<div class="welcome_head text-center">
					<h2><?php echo esc_html(cs_get_option('sec_2_title_wel')); ?></h2>
					<p><?php echo esc_html(cs_get_option('sec_2_wel_content1')); ?></p>
				</div>
				<div class="welcome-grids">
					<div class="col-md-6 welcome_bottom_left">
						<img src="<?php echo esc_url(cs_get_option('sec_2_wel_image')); ?>" alt=""/>
					</div>
					<div class="col-md-6 welcome_bottom_right">
						<h3><?php echo esc_html(cs_get_option('sec_2_wel_subtitle')); ?></h3>
						<p> <?php echo esc_html(cs_get_option('sec_2_wel_content2')); ?></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<?php endif; ?>


		<!-- //welcome -->
		<!-- Our-staff-starts -->
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

		<!-- //Our-staff-ends -->
		<!-- Services-starts -->

		<?php if ( cs_get_option('sec_4_title') ): ?>
			
		
		<div class="service-section">
				<div class="container">
					<div class="service-section-head text-center">
						<header>
							<h3><?php echo esc_html(cs_get_option('sec_4_title')); ?></h3>
							<p><?php echo esc_html(cs_get_option('sec_4_content')); ?></p>
						</header>
					</div>
					<div class="service-section-grids">
						<?php

							$service_cat = get_the_category_by_id(cs_get_option('select_cat_service'));

							$servicepost = new WP_Query(array(
								'post_type'      => 'post',
								'posts_per_page' => '6',
								'category_name'  => $service_cat,
							));

							while ( $servicepost->have_posts() ) : $servicepost->the_post();

							$meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true );
						?>
						<div class="col-md-4 service-grid">
							<div class="service-section-grid">
								<div class="icon">
									<span class="<?php echo $meta_data['section_4_icon']; ?>"></span>
								</div>
								<div class="icon-text">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<p><?php echo cExcerpt('25'); ?></p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<?php endwhile; ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<?php endif ?>


			<!-- //services -->
			<!-- News-section -->

 			<?php if ( cs_get_option('sec_5_title') ): ?>
 	

			<div class="news-section">
			 <div class="container">
				<div class="news-section-head text-center">
					<header>
						<h3><?php echo esc_html(cs_get_option('sec_5_title')); ?></h3>
						<p><?php echo esc_html(cs_get_option('sec_5_content')); ?></p>
					</header>
				</div>
				<div class="news-section-grids">

					<?php

						$news_cat = get_the_category_by_id(cs_get_option('select_cat_news'));

						$newspost = new WP_Query(array(
							'post_type'      => 'post',
							'posts_per_page' => '6',
							'category_name'  => $news_cat,
						));

						while ( $newspost->have_posts() ) : $newspost->the_post();
					?>

					<div class="col-md-4 news-section-grid">
						<div class="news-section-grid-left">
							<h3><?php the_time('m'); ?>/</h3>
							<h3><?php the_time('y'); ?></h3>
						</div>
						<div class="news-section-grid-right">
							<a href="single.html"><?php the_title(); ?></a>
							<p><?php echo cExcerpt('25'); ?> </p>
						</div>
						<div class="clearfix"></div>
					</div>

					<?php endwhile; ?>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		 <?php endif ?>

	</div>
	<!-- //News-section -->
	<!-- //content-section-ends-here -->
	<!-- footer-section-starts-here -->
	<!-- footer-section -->
<?php get_footer(); ?>
