<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<!-- style functions from functions.php -->
	<?php add_bootstrap();
      	  add_pacifico_font();?>
	<head>
	   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	   <meta charset="<?php bloginfo( 'charset' ); ?>">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	   <!-- declares head -->
	   <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- header : title + menu -->
		<header class="my-logo">
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a> <!-- gets blog name from db -->
			</h1>
			<!-- displays the default menu -->
			<?php wp_nav_menu(); ?>
		</header>