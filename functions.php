<?php
function thermo_widgets_init() {

	register_sidebar( array(
		'name' => __( 'First Landing Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-landing-2',
		'description' => __( 'Appears when using the optional Landing Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Landing Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-landing-3',
		'description' => __( 'Appears when using the optional Landing Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'thermo_widgets_init' );
?>