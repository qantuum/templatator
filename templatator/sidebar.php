<!-- is a side bar is required from root panel -->
<?php if (is_active_sidebar( 'sidebar' )) : 
	add_bootstrap();
    add_pacifico_font();?>
	<aside id="primary-sidebar" class="primary-sidebar widget-area col-md-4" role="complementary">
    	<!-- displays the sidebar -->
    	<?php dynamic_sidebar('sidebar'); ?>
	</aside>
<?php endif; ?>