<?php
//Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';

//Hooks
add_action('wp_enqueue_scripts', 'mm_theme_styles');
add_action('after_setup_theme', 'mm_after_setup');
add_action('widgets_init', 'mm_widgets');
add_action("customize_register", "mm_customize_register");



?> 