<?php
$wp_customize->add_section('map_page_section', [
    'panel' => 'customizer',
    'title' => __('Map Page', 'textdomain'),
    'priority' => 10,
    'description' => 'Map',
]);

$wp_customize->add_setting('map_page_link', [
    'type' => 'theme_mod',
    'default' => 'Link for Iframe',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_textarea',
]);

$wp_customize->add_control('map_page_link', [
    'type' => 'textarea',
    'label' => __('Link for Iframe', 'textdomain'),
    'section' => 'map_page_section',
    'priority' => 1,
]);
?>