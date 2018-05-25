<?php
/**
 * Add extra settings
 *
 * @package Wordpress
 * @param object $wp_customize
 * @since   1.0
 */
add_action( 'customize_register', 'jess_register_theme_customizer' );
function jess_register_theme_customizer( $wp_customize ) {

	// Add Sections
	$wp_customize->add_section( 'jess_new_section_extra_settings', array(
		'title'       => 'Nomada Extra Settings',
		'description' => 'Custom settings for Nomada theme',
    'priority'    => 1,
	) );


	/**
	 * Add settings
	 *
	 * @package Wordpress
	 */

	$wp_customize->add_setting( 'jess_article_body_size', array(
 		'default'           => 16,
 	) );

	$wp_customize->add_setting( 'jess_font_group_3', array(
 		'default'           => "PT Serif",
 	) );

  /**
	 * Add Controls
	 *
	 * @package Wordpress
	 */

	// Travel Better
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jess_article_body_size', array(
		'label'    		 => 'Article Body Size',
		'section'  		 => 'jess_new_section_extra_settings',
		'settings' 		 => 'jess_article_body_size',
		'type'     		 => 'number',
		'priority' 		 => 1
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jess_font_group_3', array(
		'label'       => 'Font Group 3',
		'section'     => 'jess_new_section_extra_settings',
		'settings'    => 'jess_font_group_3',
		'description' => 'Default font is "PT Serif" - Changes home page article titles, home page featured article title, article title, and article h1-6 tags ',
		'type'        => 'select',
		'priority'    => 2,
		'choices'     => penci_all_fonts()
	) ) );
}

/**
 * Callback function for sanitizing radio settings.
 * Use for travel_better
 *
 * @param $input , $setting
 *
 * @return $input
 */
if ( ! function_exists( 'penci_sanitize_choices_field' ) ) {
	function penci_sanitize_choices_field( $input ) {
		return $input;
	}
}

/**
 * Callback function for sanitizing textarea settings
 * Use for travel_better
 *
 * @param $input , $setting
 *
 * @return $input
 */
if ( ! function_exists( 'penci_sanitize_textarea_field' ) ) {
	function penci_sanitize_textarea_field( $input ) {
		return $input;
	}
}
/**
 * Callback function for sanitizing checkbox settings.
 * Use for travel_better
 *
 * @param $input
 *
 * @return string default value if type is not exists
 */
if ( ! function_exists( 'penci_sanitize_checkbox_field' ) ) {
	function penci_sanitize_checkbox_field( $input ) {
		if ( $input == 1 ) {
			return true;
		}
		else {
			return false;
		}
	}
}

/**
 * Callback function for sanitizing checkbox settings.
 * Use for travel_better
 *
 * @param $input
 *
 * @return a number
 */
if ( ! function_exists( 'penci_sanitize_number_field' ) ) {
	function penci_sanitize_number_field( $input ) {
		return absint( $input );
	}
}

?>
