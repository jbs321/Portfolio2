<?php
$wp_customize->add_panel('customizer', [
    'priority' => 10,
    'capability' => 'edit_theme_options',
    'title' => __('Site Meta', 'textdomain'),
]);