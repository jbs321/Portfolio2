<?php
function prefix_customizer_register($wp_customize) {
    require_once('appearance/panel.php');

    require_once('appearance/main/main.php');
    require_once('appearance/about-me/about-me.php');
    require_once('appearance/skills/skills.php');
    require_once('appearance/howidoit/howidoit.php');
    require_once('appearance/map/map.php');


}

add_action('customize_register', 'prefix_customizer_register');