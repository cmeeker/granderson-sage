<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);

    // Add a Header information section
    $wp_customize->add_section( 'header' , [
          'title'     => __( 'Header', 'sage' ),
          'priority'  => 29, // Before Widgets.
        ]
    );


      //Header top left text
      $wp_customize->add_setting('header_top_left', [
          'default'   => 'BEVERLY HILLS',
        ]
      );
      $wp_customize->add_control('header_top_left', [
          'type'      => 'text',
          'label'     => __('Header text - top left', 'sage'),
          'section'   => 'header',
        ]
      );

      //Header top left text
      $wp_customize->add_setting('header_top_right', [
          'default'   => 'NEW YORK CITY',
        ]
      );
      $wp_customize->add_control('header_top_right', [
          'type'      => 'text',
          'label'     => __('Header text - top right', 'sage'),
          'section'   => 'header',
        ]
      );

      // Add setting for header logo uploader
      $wp_customize->add_setting('logo');
      $wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'logo', [
            'label'    => __('Upload Logo', 'sage'),
            'section'  => 'title_tagline',
            'settings' => 'logo',
          ]
        )
      );

    // Add a footer information section
    $wp_customize->add_section( 'footer' , [
          'title'     => __( 'Footer', 'sage' ),
          'priority'  => 30, // Before Widgets.
        ]
    );

    $wp_customize->add_setting('footer_text');
    $wp_customize->add_control('footer_text', [
      'type'      => 'text',
      'label'     => __('Footer Text', 'sage'),
      'section'   => 'footer',
        ]
    );

    // Add setting for footer logo uploader
    $wp_customize->add_setting('footer_logo');
    $wp_customize->add_control(new \WP_Customize_Image_Control($wp_customize, 'footer_logo', [
            'label'    => __('Upload Footer Logo', 'sage'),
            'section'  => 'footer',
            'settings' => 'footer_logo',
          ]
        )
    );

    $wp_customize->add_setting('footer_email', [
            'default'   => 'info@gdrfirm.com',
        ]
    );
    $wp_customize->add_control('footer_email', [
      'type'      => 'text',
      'label'     => __('Footer Email', 'sage'),
      'section'   => 'footer',
        ]
    );

});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

