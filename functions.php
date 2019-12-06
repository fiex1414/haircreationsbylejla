<?php 

// include style
function hairdresser_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'hairdresser_resources');


// include jQuery
function include_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'include_jquery');

wp_enqueue_script('submenu_jquery', get_template_directory_uri() .'/js/submenu_jquery.js', array('jquery'), null, true);


// include Vuetify
function include_vue() {

    wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js', array(), null, true);
    wp_enqueue_script('vuetify', 'https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'include_vue');

wp_enqueue_script('app', get_template_directory_uri() .'/js/app.js', array('vue', 'vuetify'), null, true);


//Remove Posts Menu
function post_remove ()      
{ 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');


//Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'navdrawer' => __('Nav Drawer Menu'),
    'footer' => __('Footer Menu'),
));

//Header Logo + Background image
function hairdresser_custom_logo() {
    $defaults = array(
    'height'      => 30,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'hairdresser_custom_logo' );

$args = array(
'width'         => 1000,
'height'        => 64,
'uploads'       => true,
);

add_theme_support( 'custom-header', $args );






