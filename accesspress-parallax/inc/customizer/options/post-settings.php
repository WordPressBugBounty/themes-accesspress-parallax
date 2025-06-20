<?php

/** Post Settings * */
$wp_customize->add_section( 'accesspress_parallax_post_settings', array(
    'title' => __( 'Post Settings', 'accesspress-parallax' ),
    'priority' => 20
) );

// Show Posted Date
$wp_customize->add_setting( 'accesspress_parallax[post_date]', array( 'default' => 1, 'type' => 'option', 'sanitize_callback' => 'accesspress_parallax_sanitize_checkbox' ) );
$wp_customize->add_control(
        'accesspress_parallax[post_date]', array(
    'label' => __( 'Show Posted Date', 'accesspress-parallax' ),
    'type' => 'checkbox',
    'section' => 'accesspress_parallax_post_settings',
) );

// Show Featured Image
$wp_customize->add_setting( 'accesspress_parallax[featured_image]', array( 'default' => 1, 'type' => 'option', 'sanitize_callback' => 'accesspress_parallax_sanitize_checkbox' ) );
$wp_customize->add_control(
        'accesspress_parallax[featured_image]', array(
    'label' => __( 'Show Featured Image', 'accesspress-parallax' ),
    'type' => 'checkbox',
    'section' => 'accesspress_parallax_post_settings',
) );

// Show Post Author
$wp_customize->add_setting( 'accesspress_parallax[post_author]', array( 'default' => 1, 'type' => 'option', 'sanitize_callback' => 'accesspress_parallax_sanitize_checkbox' ) );
$wp_customize->add_control(
        'accesspress_parallax[post_author]', array(
    'label' => __( 'Show Post Author', 'accesspress-parallax' ),
    'type' => 'checkbox',
    'section' => 'accesspress_parallax_post_settings',
) );

// Show Posted Date
$wp_customize->add_setting( 'accesspress_parallax[post_footer]', array( 'default' => 1, 'type' => 'option', 'sanitize_callback' => 'accesspress_parallax_sanitize_checkbox' ) );
$wp_customize->add_control(
        'accesspress_parallax[post_footer]', array(
    'label' => __( 'Show Post Footer text', 'accesspress-parallax' ),
    'type' => 'checkbox',
    'section' => 'accesspress_parallax_post_settings',
) );

// Show Posted Date
$wp_customize->add_setting( 'accesspress_parallax[post_pagination]', array( 'default' => 1, 'type' => 'option', 'sanitize_callback' => 'accesspress_parallax_sanitize_checkbox' ) );
$wp_customize->add_control(
        'accesspress_parallax[post_pagination]', array(
    'label' => __( 'Show Prev Next Pagination', 'accesspress-parallax' ),
    'type' => 'checkbox',
    'section' => 'accesspress_parallax_post_settings',
) );


/** Blog Settings * */
$wp_customize->add_section( 'accesspress_parallax_blog_settings', array(
    'title' => __( 'Blog Settings', 'accesspress-parallax' ),
    'priority' => 30
) );

// Show Featured Image
$wp_customize->add_setting( 'accesspress_parallax[bl_featured_image]', array( 'default' => 1, 'type' => 'option', 'sanitize_callback' => 'accesspress_parallax_sanitize_checkbox' ) );
$wp_customize->add_control(
        'accesspress_parallax[bl_featured_image]', array(
    'label' => __( 'Show Featured Image', 'accesspress-parallax' ),
    'type' => 'checkbox',
    'section' => 'accesspress_parallax_blog_settings',
) );

// Show Post Date
$wp_customize->add_setting( 'accesspress_parallax[bl_post_date]', array( 'default' => 1, 'type' => 'option', 'sanitize_callback' => 'accesspress_parallax_sanitize_checkbox' ) );
$wp_customize->add_control(
        'accesspress_parallax[bl_post_date]', array(
    'label' => __( 'Show Date', 'accesspress-parallax' ),
    'type' => 'checkbox',
    'section' => 'accesspress_parallax_blog_settings',
) );

$wp_customize->add_setting( 'accesspress_parallax[blog_excerpt_length]', array( 'default' => 150, 'type' => 'option', 'sanitize_callback' => 'absint' ) );
$wp_customize->add_control(
        'accesspress_parallax[blog_excerpt_length]', array(
    'label' => __( 'Excerpt length', 'accesspress-parallax' ),
    'type' => 'number',
    'section' => 'accesspress_parallax_blog_settings',
) );

