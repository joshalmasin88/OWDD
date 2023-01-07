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
}

add_action( 'customize_register', 'owd_customizer' );