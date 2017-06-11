<?php
    remove_action('wp_head','rsd_link');
    remove_action('wp_head','wiwmanifest_link');
    remove_action('wp_head','wp_generator');
    show_admin_bar(false);

function logo_widget_init() {

	register_sidebar( array(
		'name'          => 'Логотип SVG',
		'id'            => 'logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'logo_widget_init' );

require_once (get_stylesheet_directory().'/theme-options.php');

add_theme_support('post-thumbnails');