<?php

$wp_customize->add_section('main_page_section', [
    'panel' => 'customizer',
    'title' => __('Main Page', 'textdomain'),
    'priority' => 10,
    'description' => 'Text for main page',
]);

$wp_customize->add_setting('main_page_title', [
    'type' => 'theme_mod',
    'default' => 'Main Page Title',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_textarea',
]);

$wp_customize->add_control('main_page_title', [
    'type' => 'textarea',
    'label' => __('Main Page Title', 'textdomain'),
    'section' => 'main_page_section',
    'priority' => 1,
]);

$wp_customize->add_setting('main_page_sub_title', [
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
]);
$wp_customize->add_control('main_page_sub_title', [
    'type' => 'textarea',
    'priority' => 1,
    'section' => 'main_page_section',
    'label' => __('Main Page Sub Title', 'textdomain'),
    'description' => '',
]);