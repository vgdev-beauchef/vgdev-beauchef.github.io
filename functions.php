<?php

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'jq', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ) );
	wp_register_script( 'jqeasing', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery' ) );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
  wp_register_script( 'grayscale', get_template_directory_uri() . '/js/grayscale.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
  //wp_enqueue_style( 'font-awesome', get_stylesheet_uri() );
	wp_enqueue_script( 'jq' );
	wp_enqueue_script( 'jqeasing' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'grayscale' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function themeslug_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'themeslug_logo_section' , array(
		'title'       => __( 'Logo', 'themeslug' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );

	$wp_customize->add_setting( 'themeslug_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
	    'label'    => __( 'Logo', 'themeslug' ),
	    'section'  => 'themeslug_logo_section',
	    'settings' => 'themeslug_logo',
	) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

?>
