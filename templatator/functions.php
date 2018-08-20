<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.

// wp_enqueue_style is a function to get stylesheets...
function add_bootstrap() {
	wp_enqueue_style( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css");
}

function add_pacifico_font() {
	wp_enqueue_style( 'pacifico', "https://fonts.googleapis.com/css?family=Pacifico");
}

// Register a new navigation menu
function add_Main_Nav() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}

// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );

// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
                register_sidebar( array(
                                'name'          => 'Sidebar',
                                'id'            => 'sidebar',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );