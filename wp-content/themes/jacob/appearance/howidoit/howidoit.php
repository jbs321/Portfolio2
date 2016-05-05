<?php

$wp_customize->add_section('howidoit_page_section', [
    'panel' => 'customizer',
    'title' => __('How I Do It Page', 'textdomain'),
    'priority' => 10,
]);

$wp_customize->add_setting('howidoit_page_title', [
    'type' => 'theme_mod',
    'default' => 'How I Do It Page Title',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_textarea',
]);

$wp_customize->add_control('howidoit_page_title', [
    'type' => 'textarea',
    'label' => __('How I Do It Page Title', 'textdomain'),
    'section' => 'howidoit_page_section',
    'priority' => 1,
]);
