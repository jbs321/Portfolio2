<?php

$wp_customize->add_section('skills_page_section', [
    'panel' => 'customizer',
    'title' => __('Skills Page', 'textdomain'),
    'priority' => 10,
]);

$wp_customize->add_setting('skills_page_title', [
    'type' => 'theme_mod',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_textarea',
]);

$wp_customize->add_control('skills_page_title', [
    'type' => 'textarea',
    'label' => __('Skills Page Title', 'textdomain'),
    'section' => 'skills_page_section',
    'priority' => 1,
]);
