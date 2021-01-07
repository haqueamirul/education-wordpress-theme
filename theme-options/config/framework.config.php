<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options <small>by Soft-theme</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// Softrestaura Slider sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'header_top_section',
  'title'       => 'Header Top Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'phone_no',
          'type'        => 'text',
          'title'       => 'Phone Number',
          'desc'        => 'Write Your Phone Number Here',
        ),
        array(
          'id'          => 'facebook',
          'type'        => 'text',
          'title'       => 'Facebook',
          'desc'        => 'Facebook Link Here',
        ),
        array(
          'id'          => 'twitter',
          'type'        => 'text',
          'title'       => 'Twitter',
          'desc'        => 'Twitter Link Here',
        ),
        array(
          'id'          => 'google_pluse',
          'type'        => 'text',
          'title'       => 'Google+',
          'desc'        => 'Google+ Link Here',
        ),

  ), // end: fields
);


// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'logo_cart_section',
  'title'       => 'Logo Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'provite_logo',
          'type'        => 'upload',
          'title'       => 'Logo',
          'desc'       => 'Upload Your Theme Logo',
        ),
  ), // end: fields
);

// ----------------------------------------
// Softrestaura Slider sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'slider_section_p',
  'title'       => 'Slider Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'provite_logo1',
          'type'        => 'upload',
          'title'       => 'Upload Your Slider Image',
        ),
        array(
          'id'          => 'provite_logo2',
          'type'        => 'upload',
          'title'       => 'Upload Your Slider Image',
        ),
        array(
          'id'          => 'provite_logo3',
          'type'        => 'upload',
          'title'       => 'Upload Your Slider Image',
        ),
        array(
          'id'          => 'provite_logo4',
          'type'        => 'upload',
          'title'       => 'Upload Your Slider Image',
        ),
        array(
          'id'          => 'provite_logo5',
          'type'        => 'upload',
          'title'       => 'Upload Your Slider Image',
        ),

  ), // end: fields
);

// ----------------------------------------
// Homepage section One Left -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage_section_one',
  'title'       => 'Homepage Sec 1 Left',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'sec_1_left_title',
          'type'        => 'text',
          'title'       => 'Title',
          'desc'       => 'Write Title Here',
        ),
        array(
          'id'          => 'sec_1_left_subtitle',
          'type'        => 'text',
          'title'       => 'Sub-Title',
          'desc'       => 'Write Sub-Title Here',
        ),
        array(
          'id'          => 'sec_1_left_content',
          'type'        => 'textarea',
          'title'       => 'Content',
          'desc'       => 'Write Content Here',
        ),

  ), // end: fields
);

// ----------------------------------------
// Homepage section One Right -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage_section_one_right',
  'title'       => 'Homepage Sec 1 Right',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'sec_1_right_title',
          'type'        => 'text',
          'title'       => 'Title',
          'desc'       => 'Write Title Here',
        ),
        array(
          'id'          => 'sec_1_right_subtitle',
          'type'        => 'text',
          'title'       => 'Sub-Title',
          'desc'       => 'Write Sub-Title Here',
        ),
        array(
          'id'          => 'sec_1_right_image',
          'type'        => 'upload',
          'title'       => 'Image',
          'desc'       => 'Upload your Image',
        ),
        array(
          'id'          => 'sec_1_right_content',
          'type'        => 'textarea',
          'title'       => 'Content',
          'desc'       => 'Write Content Here',
        ),
        array(
          'id'          => 'sec_1_right_adress',
          'type'        => 'text',
          'title'       => 'Address',
          'desc'       => 'Write Address Here',
        ),
        array(
          'id'          => 'sec_1_right_time',
          'type'        => 'text',
          'title'       => 'Time',
          'desc'       => 'Write Time & Schedule Here',
        ),

  ), // end: fields
);

// ----------------------------------------
// Homepage section One Right -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage_section_two',
  'title'       => 'Homepage Sec 2 Welcome',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'sec_2_title_wel',
          'type'        => 'text',
          'title'       => 'Title',
          'desc'       => 'Write Title Here',
        ),
        array(
          'id'          => 'sec_2_wel_content1',
          'type'        => 'textarea',
          'title'       => 'Content',
          'desc'       => 'Write Content Here',
        ),

        array(
          'id'          => 'sec_2_wel_image',
          'type'        => 'upload',
          'title'       => 'Image',
          'desc'       => 'Upload your Image',
        ),
        array(
          'id'          => 'sec_2_wel_subtitle',
          'type'        => 'text',
          'title'       => 'Sub-Title',
          'desc'       => 'Write Sub-Title Here',
        ),
        array(
          'id'          => 'sec_2_wel_content2',
          'type'        => 'textarea',
          'title'       => 'Content',
          'desc'       => 'Write Second Content Here',
        ),

  ), // end: fields
);

// ----------------------------------------
// Home page sections Three -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage_sec_3',
  'title'       => 'Homepage Sec 3',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'sec_3_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'sec_3_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),

        array(
          'id'              => 'sec_3_group_con',
          'type'            => 'group',
          'title'           => 'Staf Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Staf',
          'fields'          => array(

            array(
              'id'          => 'staf_image',
              'type'        => 'upload',
              'title'       => 'Image',
              'desc'        => 'Upload Your Staf Image',
            ),
            
            array(
              'id'          => 'staf_name',
              'type'        => 'text',
              'title'       => 'Name',
              'desc'        => 'Write Staf Name',
            ),

            array(
              'id'          => 'staf_desc',
              'type'        => 'textarea',
              'title'       => 'Description',
              'desc'        => 'Staf Description',
            ),

            array(
              'id'          => 'staf_facebook',
              'type'        => 'text',
              'title'       => 'Facebook',
              'desc'        => 'Staf Facebook Link Here',
            ),

            array(
              'id'          => 'staf_twitter',
              'type'        => 'text',
              'title'       => 'Twitter',
              'desc'        => 'Staf Twitter Link Here',
            ),
          )
        ),

  ), // end: fields
);


// ----------------------------------------
// Homepage Section Foour  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage_sec_4',
  'title'       => 'Homepage Sec 4',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'sec_4_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'sec_4_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),

        array(
            'id' => 'select_cat_service',
            'type' => 'select',
            'title' => 'Select Service category ',
            'options'     => 'categories',
            'query_args'  => array(
                'type'      => 'post',
                'taxonomy'  => 'category',
            ),
        ),

  ), // end: fields
);


// ----------------------------------------
// Homepage Section Five Latest News  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage_sec_5',
  'title'       => 'Homepage Sec 5 News',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'sec_5_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'sec_5_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),

        array(
            'id' => 'select_cat_news',
            'type' => 'select',
            'title' => 'Select Latest News category ',
            'options'     => 'categories',
            'query_args'  => array(
                'type'      => 'post',
                'taxonomy'  => 'category',
            ),
        ),

  ), // end: fields
);

// ----------------------------------------
// Footer Section  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'footer_section_one',
  'title'       => 'Footer Section One',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'footer_1_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'footer_1_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),
        array(
              'id'          => 'footer_1_form',
              'type'        => 'switcher',
              'title'       => 'Subscribe Here',
              'desc'        => 'You may enable or disenable',
          ),

  ), // end: fields
);

// ----------------------------------------
// Footer Section  Two-
// ----------------------------------------
$options[]      = array(
  'name'        => 'footer_section_two',
  'title'       => 'Footer Section Two',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'footer_2_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'footer_2_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),

  ), // end: fields
);

// ----------------------------------------
// Footer Section  Three-
// ----------------------------------------
$options[]      = array(
  'name'        => 'footer_section_three',
  'title'       => 'Footer Section Three',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'footer_3_title',
              'type'        => 'text',
              'title'       => 'Title',
              'desc'        => 'Write Title Here',
          ),
        array(
              'id'          => 'footer_3_content',
              'type'        => 'textarea',
              'title'       => 'Content',
              'desc'        => 'Write Content Here',
          ),
        array(
              'id'          => 'footer_3_facebook',
              'type'        => 'text',
              'title'       => 'Facebook',
              'desc'        => 'Write Facebook Link Here',
          ),
        array(
              'id'          => 'footer_3_twitter',
              'type'        => 'text',
              'title'       => 'Twitter',
              'desc'        => 'Write Twitter Link Here',
          ),
        array(
              'id'          => 'footer_3_google',
              'type'        => 'text',
              'title'       => 'Google+',
              'desc'        => 'Write Google+ Link Here',
          ),

  ), // end: fields
);

// ----------------------------------------
// Copyright Section-
// ----------------------------------------
$options[]      = array(
  'name'        => 'copyright_section',
  'title'       => 'Copyright Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(


        array(
              'id'          => 'copyright_text',
              'type'        => 'text',
              'title'       => 'Copyright Text',
              'desc'        => 'Write Copyright Text Here',
              'default'     => '2018 soft-theme. All Rights Reserved | Design by',
          ),
        array(
              'id'          => 'copany_name',
              'type'        => 'text',
              'title'       => 'Company Name',
              'default'     => 'Soft-theme',
              'desc'        => 'Write Company Here',
          ),
        array(
              'id'          => 'company_link',
              'type'        => 'text',
              'title'       => 'Company URL',
              'default'     => 'http://soft-theme.com',
              'desc'        => 'Write Company URL Here',
          ),

  ), // end: fields
);


CSFramework::instance( $settings, $options );
