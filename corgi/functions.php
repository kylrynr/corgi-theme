<?php 

// Install CSS Stylesheet
function wpt_theme_styles () {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700' );
	wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom-styles.css' );
}
	add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

// Install JavaScript Files
function wpbootstrap_scripts_with_jquery()
{
	global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// Register a Menu
function register_theme_menus() {

	register_nav_menus(
		array(
			'header-menu' 	=> __( 'Header Menuu' )			
		)
	);

}
add_action( 'init', 'register_theme_menus' );

// Register Widgets
function create_widget($name, $id, $description) {
    register_sidebar(array(
        'name'  =>  __( $name ),
        'id'    =>  $id,
        'description'   =>  __( $description ),
        'before_widget' =>  '<div class="widget">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar','page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar','blog', 'Displays on the side of pages in the blog section' );


add_theme_support( 'post-thumbnails' );

