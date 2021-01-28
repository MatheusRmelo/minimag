<?php 
function mm_theme_styles(){
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css');
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js');
}
function mm_after_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('menu');

    register_nav_menu('primary', 'Menu Primário');
    register_nav_menu('top', 'Menu Superior');
}
function mm_widgets(){
    $mm_sidebar = array(
        'name' => 'Sidebar Lateral',
        'id' => 'mm_sidebar',
        'description' => 'Sidebar Lateral',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title" >',
        'after_title' => '</h4>'
    );
    $mm_footersidebar = array(
        'name' => 'Sidebar Rodapé',
        'id' => 'mm_footersidebar',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title" >',
        'after_title' => '</h4>'
    );
    register_sidebar($mm_sidebar);
    register_sidebar($mm_footersidebar);

}

?>