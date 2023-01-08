<?php

function owd_customizer( $wp_customize ) {

    /** Hero Section */
    $wp_customize->add_section(
        'hero', array(
            'title' => 'Hero Settings',
            'description' => 'Hero Section',
            'priority' => 160,
        )
    );

    /** Hero Settings */

    // Hero H1
    $wp_customize->add_setting(
        'hero-h1', array(
            'type' => 'theme_mod',
            'default' => 'OWDD',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'hero-h1', array(
            'label' => 'Hero H1',
            'description' => 'Heading Text',
            'section' => 'hero',
            'type' => 'text'
        )
    );

    /**Hero Paragraph */
    $wp_customize->add_setting(
        'hero-p', array(
            'type' => 'theme_mod',
            'default' => 
            'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur dolores  obcaecati, incidunt non doloremque voluptatibus laboriosam aliquid quia porro totam?',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'hero-p', array(
            'label' => 'Hero Paragraph',
            'description' => 'Heading Paragraph',
            'section' => 'hero',
            'type' => 'text'
        )
    );

      /** Hero Image */
      $wp_customize->add_setting('hero-image', array(
        'default'   => get_template_directory_uri().'/imgs/hero-slide-img.png',
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'hero-image', 
        array(
            'label'   => 'Hero Image',
            'section' => 'hero',
            'settings' => 'hero-image',
            'priority'  => 1
        )
    ));


    /** About Section  */
    $wp_customize->add_section(
        'about', array(
            'title'   => 'About Settings',
            'description' => 'About Section',
            'priority'    => 160
      ));
  
      /** About Image */
      $wp_customize->add_setting('about-image', array(
        'default'   => get_template_directory_uri().'/imgs/team.png',
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'about-image', 
        array(
            'label'   => 'About Image',
            'section' => 'about',
            'settings' => 'about-image',
            'priority'  => 2
        )
    ));

    /** About Heading */
    $wp_customize->add_setting(
        'about-heading', array(
            'type' => 'theme_mod',
            'default' => 
            'Lorem ipsum dolor sit amet.',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'about-heading', array(
            'label' => 'About Heading',
            'description' => 'About Heading',
            'section' => 'about',
            'type' => 'text'
        )
    );

    /**About Paragraph */
    $wp_customize->add_setting(
        'about-p', array(
            'type' => 'theme_mod',
            'default' => 
            'We move with make a Creative Strategy for help your business goal, we help to improve your income by a services we have. make your content look interesting and make people look for your business<br>
            We move with make a Creative Strategy for help your business goal, we help to improve your income by a services we have. make your content look interesting and make people look for your business',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'about-p', array(
            'label' => 'About Paragraph',
            'description' => 'About Paragraph',
            'section' => 'about',
            'type' => 'text'
        )
    );


    /** Work Section  */
    $wp_customize->add_section(
        'work', array(
            'title'   => 'Work Settings',
            'description' => 'Work Section',
            'priority'    => 160
      ));


    /** Work Heading */
      $wp_customize->add_setting(
        'work-heading', array(
            'type' => 'theme_mod',
            'default' => 'Our Work',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'work-heading', array(
            'label' => 'Work Heading',
            'description' => 'Work Heading',
            'section' => 'work',
            'type' => 'text'
        )
    );

    /**Work Paragraph */
    $wp_customize->add_setting(
        'work-p', array(
            'type' => 'theme_mod',
            'default' => 
            'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores
            aliquam blanditiis nulla repudiandae pariatur? Assumenda maiores eum fugit dolorem amet.',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'work-p', array(
            'label' => 'Work Paragraph',
            'description' => 'Work Paragraph',
            'section' => 'work',
            'type' => 'text'
        )
    );

    
}

add_action( 'customize_register', 'owd_customizer' );