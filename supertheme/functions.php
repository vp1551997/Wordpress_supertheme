<?php
function supertheme_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','supertheme_theme_support');

function supertheme_menus(){

    $location = array(
        'primary' => "Desktop Primary left sidebar",
        'footer' => "footer menus Items"
    );
    register_nav_menus( $location);
}
add_action('init','supertheme_menus');
 
function supertheme_register_styles(){
   $version = wp_get_theme()->get('Version');
    wp_enqueue_style('supertheme-style',get_template_directory_uri()."/style.css",array('supertheme-bootstrap'),$version,'all');
    wp_enqueue_style('supertheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
    wp_enqueue_style('supertheme-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');
     
    
   
 }
 add_action('wp_enqueue_scripts','supertheme_register_styles');

 
function supertheme_register_scripts(){
   
    wp_enqueue_script('supertheme-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true);
     wp_enqueue_script('supertheme-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'1.16.0',true);
    wp_enqueue_script('supertheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1',true);
     wp_enqueue_script('supertheme-main',get_template_directory_uri()."/assets/js/main.js",array(),'1.8',true);

   
 }
 add_action('wp_enqueue_scripts','supertheme_register_scripts');

function supertheme_widget_area(){
    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => ''

        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'sidebar widget area'
        )
    );
     register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer widget area'
        )
    );
}
add_action('widgets_init','supertheme_widget_area');
?>