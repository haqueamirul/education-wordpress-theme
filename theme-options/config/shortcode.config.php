<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[]     = array(
  'title'      => 'About Page Shortcode Area',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_1',
      'title'     => 'First Section',
      'fields'    => array(

        // shortcode option field
        array(
          'id'    => 'ttitle',
          'type'  => 'text',
          'title' => 'Title',
        ),

        // shortcode content
        array(
          'id'    => 'ccontent',
          'type'  => 'textarea',
          'title' => 'Content',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'aimage',
          'type'  => 'upload',
          'title' => 'Content',
          'help'  => 'Lorem Ipsum Dollar.',
        )


      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_2',
      'title'     => 'Second Section',
      'fields'    => array(

        array(
          'id'    => 'left_title_about',
          'type'  => 'text',
          'title' => 'Left Title',
        ),

        array(
          'id'    => 'left_content_1',
          'type'  => 'textarea',
          'title' => 'Left Content One',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'left_content_2',
          'type'  => 'textarea',
          'title' => 'Left Content Two',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'left_content_3',
          'type'  => 'textarea',
          'title' => 'Left Content Three',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'right_title_about',
          'type'  => 'text',
          'title' => 'Right Title',
        ),

        array(
          'id'    => 'right_image_1',
          'type'  => 'icon',
          'title' => 'Client Image One',
        ),

        array(
          'id'    => 'client_right_content_1',
          'type'  => 'textarea',
          'title' => 'Client Content One',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'client_name_1',
          'type'  => 'text',
          'title' => 'Client Name One',
        ),

        array(
          'id'    => 'right_image_2',
          'type'  => 'icon',
          'title' => 'Client Image Two',
        ),

        array(
          'id'    => 'client_right_content_2',
          'type'  => 'textarea',
          'title' => 'Client Content Two',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'client_name_2',
          'type'  => 'text',
          'title' => 'Client Name Two',
        ),

      ),
    ),
    // end: shortcode

// Our Staff

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_3',
      'title'     => 'Our Staff Section',
      'fields'    => array(

        array(
          'id'         => 'active',
          'type'       => 'switcher',
          'title'      => 'Active',
          'label'      => 'You want to it ?',
        ),

      ),
    ),
    // end: shortcode

  ),
);




// -----------------------------------------
// Advanced Shortcode Examples             -
// -----------------------------------------
$options[]     = array(
  'title'      => 'Advanced Shortcode Examples',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'           => 'cs_advanced_1',
      'title'          => 'Duplicate Shortcode',
      'view'           => 'clone_duplicate',
      'clone_title'    => 'Add New',
      'clone_fields'   => array(

        array(
          'id'         => 'gtitle',
          'type'       => 'text',
          'title'      => 'Title',
        ),

        array(
          'id'         => 'gimage',
          'type'       => 'upload',
          'title'      => 'Content',
        ),

      )
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'          => 'cs_advanced_3',
      'title'         => 'Duplicate Group Shortcode',
      'view'          => 'clone',
      'clone_id'      => 'cs_advanced_3_sub',
      'clone_title'   => 'Add New',
      'fields'        => array(

        array(
          'id'        => 'ggtitle',
          'type'      => 'text',
          'title'     => 'Option 1',
        ),

      ),
      'clone_fields'  => array(

        array(
          'id'        => 'ggtitle2',
          'type'      => 'text',
          'title'     => 'Tab Title',
        ),

        array(
          'id'        => 'ggimage',
          'type'      => 'upload',
          'title'     => 'Image',
        ),
      )
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'           => 'cs_advanced_4',
      'title'          => 'Contents Shortcode',
      'view'           => 'contents',
      'fields'         => array(

        array(
          'id'         => 'content_1',
          'type'       => 'textarea',
          'title'      => 'Content 1',
        ),

        array(
          'id'         => 'content_2',
          'type'       => 'textarea',
          'title'      => 'Content 2',
        )

      ),
    ),
    // end: shortcode

  ),
);

CSFramework_Shortcode_Manager::instance( $options );
