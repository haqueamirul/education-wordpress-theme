<?php 
/*
 Template Name: HomePage
*/
get_header(); ?>
    <!-- =========================
            Slider SECTION
    ========================= -->
    <section class="slider-section">
      <div class="slider-active owl-carousel owl-theme">
		 
		 
		 <?php

          $softr_slider = cs_get_option('Pro_slider_group_section');

            if ( !empty($softr_slider) ) {

            foreach ( $softr_slider as $single_slider ) {
          
          ?> 
		  
        <div class="single-slider">
          <img src="<?php echo esc_url($single_slider['slider_image']); ?>" alt="slider" />
          <div class="slider-content">
            <div class="table">
              <div class="table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="slider-dts">
                            <h1><?php echo esc_html($single_slider['slider_p_name']); ?></h1>
                            <?php if ( $single_slider['product_measurement'] ): ?>
                            <p><?php echo esc_html($single_slider['product_measurement']); ?></p>
                            <?php endif; 
								if ( $single_slider['product_subtitle'] ):
                            ?>
                            <h2><?php echo esc_html($single_slider['product_subtitle']); ?></h2>
                            <?php endif; 
								if ( $single_slider['p_text_1'] ):
                            ?>
                            <ul>
                                <li><?php echo esc_html($single_slider['p_text_1']); ?></li>
                                <li><?php echo esc_html($single_slider['p_text_2']); ?></li>
                                <li><?php echo esc_html($single_slider['p_text_3']); ?> </li>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="slider_thumnail">
                        <img src="<?php echo esc_url($single_slider['slider_image2']); ?>" alt="img">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
         <?php } } ?>
        
      </div>
    </section><!-- /.slider-section -->
    <!-- =========================
        Home About SECTION
    ========================= -->
    <section class="home_about_section sec_padding">
        <div class="container">
			
			<?php if ( cs_get_option('about_image') ): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="home_about_header">
                        <div class="home_about_meta">
                            <img src="<?php echo esc_url(cs_get_option('about_image')); ?>" alt="about">
                        </div><!-- /.home_about_meta -->
                        <div class="home_about_content">
                            <h3><?php echo cs_get_option('about_sutitle'); ?></h3>
                            <span><?php echo cs_get_option('about_subtitle'); ?></span>
                            <p><?php echo cs_get_option('about_text_1'); ?></p>
                            <p><?php echo cs_get_option('about_content_2'); ?></p>
                        </div><!-- /.home_about_content -->
                    </div><!-- /.home_about_header -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
			<?php endif; ?>
          
        </div><!-- /.container -->
    </section><!-- /.home_about_section -->
  
   
    <!-- =========================
        Home Latest SECTION
    ========================= -->
    <section class="home_latest_section sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest_header">
                        <h2><?php _e('our products','provet'); ?></h2>
                    </div><!-- /.latest_header -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="latest_slider owl-carousel owl-theme">
				
				<?php 
					$recentpost = new WP_Query( array(
						'post_type' => 'post',
                                                'category_name' => 'our-product',
						'posts_per_page' => -1,
					));
					while( $recentpost->have_posts() ) : $recentpost->the_post(); 
					
					$meta_data = get_post_meta( get_the_ID(), '_our_menu_list', true );
				?>
				
                 <div class="latest_single text-center">
                    <a href="<?php the_permalink(); ?>" title="click here">
                        <img src="<?php the_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>
                        <div class="single_product">
	 		<a href="<?php the_permalink(); ?>" class="btn btn-me btn-learn">learn more</a>
	 		</div>
                    </a>
                </div><!-- /.latest_single -->
                
               <?php endwhile; ?>
               
                
            </div><!-- /.latest_slider -->
        </div><!-- /.container -->
    </section><!-- /.home_latest_section -->
    <!-- =========================
        Home Gallery SECTION
    ========================= -->
    <?php if ( cs_get_option('gallery_title') ) : ?>
    <section class="home_partner_section sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner_header">
                        <h2><?php echo cs_get_option('gallery_title'); ?></h2>
                    </div><!-- /.partner_header -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="partenr_slider owl-carousel owl-theme">
				
				<?php

				  $gallery_image= cs_get_option('gallery_logo_group');

					if ( !empty($gallery_image) ) {

					foreach ( $gallery_image as $single_gallery ) {
				  
				  ?> 
				  
                <div class="partner_single">
                    <img style="width: 300px; height: 200px;" src="<?php echo esc_url($single_gallery ['galler_com_image']); ?>" alt="partner-img">
                </div><!-- /.partner_single -->
                
                <?php } } ?>
                
                
            </div><!-- /.partner_slider -->
        </div><!-- /.container -->
    </section><!-- /.home_partner_section -->
    
    <?php endif; ?>
    
    <!-- =========================
        Home Partner SECTION
    ========================= -->
    <?php if ( cs_get_option('parner_title_here') ) : ?>
    <section class="home_partner_section sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner_header">
                        <h2><?php echo cs_get_option('parner_title_here'); ?></h2>
                    </div><!-- /.partner_header -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="partenr_slider owl-carousel owl-theme">
				
				<?php

				  $parter_logo = cs_get_option('partner_logo_group');

					if ( !empty($parter_logo) ) {

					foreach ( $parter_logo as $single_partner ) {
				  
				  ?> 
				  
                <div class="partner_single">
                    <img src="<?php echo esc_url($single_partner['company_image']); ?>" alt="partner-img">
                </div><!-- /.partner_single -->
                
                <?php } } ?>
                
                
            </div><!-- /.partner_slider -->
        </div><!-- /.container -->
    </section><!-- /.home_partner_section -->
    
    <?php endif; ?>
    
    <!-- =========================
            Footer SECTION
    ========================= -->
   <?php get_footer(); ?>
