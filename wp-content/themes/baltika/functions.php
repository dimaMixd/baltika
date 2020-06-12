<?php
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

function add_theme_scripts() {
    //css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'grid', get_template_directory_uri() . '/assets/css/_grid.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style( 'sal_css', get_template_directory_uri() . '/assets/css/sal.css', array(), '1.1', 'all');
    //js
    wp_enqueue_script( 'lib', get_template_directory_uri() . '/assets/js/sal.js', array (), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js', array (), 1.1, true);
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/js/swiper.min.js', false );
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  // function remove_editor() {
  //   remove_post_type_support('page', 'editor');
  // }
  // add_action('admin_init', 'remove_editor');

  if( function_exists('acf_add_options_page') ) {

    // Register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Footer'),
        'menu_title'    => __('Footer'),
        'redirect'      => false
    ));
}

add_theme_support( 'post-thumbnails' );