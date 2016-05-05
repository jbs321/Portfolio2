<?php
$wp_customize->add_section('about_me_page_section', [
    'panel' => 'customizer',
    'title' => __('About-Me Page', 'textdomain'),
    'priority' => 10,
    'description' => 'Text for about me page',
]);

$wp_customize->add_setting('about_me_page_title', [
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
]);
$wp_customize->add_control('about_me_page_title', [
    'type' => 'textarea',
    'priority' => 1,
    'section' => 'about_me_page_section',
    'label' => __('Main Page Sub Title', 'textdomain'),
    'description' => '',
]);

$wp_customize->add_setting('about_me_page_sub_title', [
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
]);
$wp_customize->add_control('about_me_page_sub_title', [
    'type' => 'textarea',
    'priority' => 1,
    'section' => 'about_me_page_section',
    'label' => __('Main Page Sub Title', 'textdomain'),
    'description' => '',
]);