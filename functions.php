<?php
/*
*
*Table of contents:
*	1.	Theme Support
*	2.	loading Assets
*	3.	Theme Customizer
*	4.	Navigation Menus
*	5.	Widgets
*	6.	Custom Post Types
*
*/

//https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
add_theme_support('title-tag');
add_theme_support( 'html5', array( /*'comment-list', 'comment-form', 'search-form', */'gallery', 'caption' ) );
add_theme_support( 'custom-header', array(
	'header-text' => false
));
add_theme_support( 'custom-logo' );

/*
*
*Load Assets
*
*/

function linked_assets(){
	wp_enqueue_style('theme_styles',get_stylesheet_uri());
	wp_enqueue_script('theme_script', get_stylesheet_directory_uri() . '/assets/scripts/scripts.js');
	wp_enqueue_script('animejs', get_stylesheet_directory_uri() . '/assets/modules/anime-master/lib/anime.min.js');
	wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Montserrat');
}
add_action('wp_enqueue_scripts','linked_assets');

/*
*
*	Theme Customizer 
*	https://codex.wordpress.org/Theme_Customization_API
*
*/

// function theme_customize_register( $wp_customize ){
// 	$wp_customize->add_section('fonts', array(
// 	'title'	=>__('Custom Fonts', 'fonts'),
// 	'description' => 'Change the fonts for different sections of the theme',
// 	'priority' => 50,
// 	));
// 	$wp_customize->add_setting( 'font_page_header', array(
//       'default'   => '',
//       'transport' => 'refresh',
//     ) );
// 	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'font_page_header', array(
//       'section' => 'fonts',
// 		'type' => 'text',
//       'label'   => esc_html__( 'Header Font', 'theme' ),
//     ) ) );
// }
// add_action( 'customize_register', 'theme_customize_register' );

/*
*
*	Dynamic Navigation Menus
*
*/

// function my_menus(){
// 	register_nav_menu('header-menu','Main Navigation Menu');
// }
// add_action('init','my_menus');

/*
*
*	Widgets
*
*/ 

// function widgets(){
// 	register_sidebar(array(
// 		'name' => 'Sidebar for the Homepage',
// 		'description' => 'The sidebar for the homepage',
// 		'id' => 'home'
// 	));
// }
// add_action('widgets_init','widgets');

/* 
*
* Custom Post Types
*
*/ 

// function create_posttype(){ 
// 	register_post_type('projects', array(
// 		'labels' => array(
// 			'name' => __('Projects'),
// 			'singular_name' => __('Project')
// 		),
// 		'public' => true,
// 		'has_archive' => true,
// 		'rewrite' => array('slug' => 'projects'),
// 	));
// }
// add_action('init', 'create_posttype');