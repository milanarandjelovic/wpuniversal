<?php
/**
 * For full documentation, please visit:
 *
 * @link http://docs.reduxframework.com/
 *
 * For a more extensive sample-config file, you may look at:
 *
 * @link https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'universal_data';

/**********************************************************************************
 * SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to:
 *
 * @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 ********************************************************************************* */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	'opt_name'              => 'universal_data',
	'dev_mode'              => false,
	'display_name'          => $theme->get( 'Name' ),
	'display_version'       => $theme->get( 'Version' ),
	'page_slug'             => 'universal',
	'page_title'            => esc_html__( 'Theme Options', 'universal' ),
	'update_notice'         => true,
	'intro_text'            => esc_html__( 'Universal Theme Options', 'universal' ),
	'admin_bar'             => true,
	'menu_type'             => 'menu',
	'menu_title'            => esc_html__( 'Universal', 'universal' ),
	'allow_sub_menu'        => true,
	'page_parent_post_type' => 'your_post_type',
	'customizer'            => true,
	'default_mark'          => '*',
	'class'                 => 'universal',
	'hints'                 => array(
		'icon'          => 'el el-dashboard',
		'icon_position' => 'left',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'blue',
			'shadow'  => '1',
			'rounded' => '1',
			'style'   => 'bootstrap',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseleave unfocus',
			),
		),
	),
	'output'                => true,
	'output_tag'            => false,
	// Disable to print dynamic CSS on page head. See CustomStyling class, method universal_custom_styling.
	'settings_api'          => true,
	'cdn_check_time'        => '1440',
	'compiler'              => true,
	'page_permissions'      => 'manage_options',
	'save_defaults'         => true,
	'show_import_export'    => true,
	'disable_save_warn'     => true,
	'database'              => 'options',
	'transient_time'        => '3600',
	'network_sites'         => true,
);

Redux::setArgs( $opt_name, $args );

/***********************************************************************************
 *
 * END ARGUMENTS
 *
 ********************************************************************************* */

/**********************************************************************************
 *
 * START SECTIONS
 *
 * 1. General Settings
 * 2. Header Settings
 * 3. Search Form Settings
 * 4. Footer Settings
 * 5. Footer Widgets Settings
 * 6. Footer Copyright Settings
 * 7. Blog Options
 * 8. Single Post Settings
 * 9. Team Options
 * 10. WooCommerce Options
 * 11. Page Pre-Loader Options
 * 12. 404 Page Options
 * 13. 404 Page Styling
 * 14. Coming Soon Page Options
 * 15. Under Construction Page Options
 * 16. Social Media Options
 * 17. Custom CSS
 * 18. Theme Information
 ********************************************************************************* */

/*********************************************************************************
 * 1. General Settings
 ******************************************************************************** */
Redux::setSection( $opt_name, array(
	'id'     => 'universal__section-general',
	'title'  => esc_html__( 'General Settings', 'universal' ),
	'icon'   => 'el el-folder-open',
	'fields' => array(

		// Custom logo.
		array(
			'id'       => 'universal__opt-custom-logo',
			'type'     => 'media',
			'title'    => esc_html__( 'Logo Image', 'universal' ),
			'desc'     => esc_html__( 'Upload your image or remove image if you want to use text logo.', 'universal' ),
			'url'      => true,
			'compiler' => true,
			'default'  => array(
				'url' => '',
			),
			'width'    => '',
			'height'   => '',
		),

		// Logo width.
		array(
			'id'             => 'universal__opt-custom-logo-width',
			'title'          => esc_html__( 'Logo With', 'universal' ),
			'subtitle'       => esc_html__( 'Set your logo width.', 'universal' ),
			'desc'           => esc_html__( 'Logo width can be set in px. Height will automatically calculated.', 'universal' ),
			'type'           => 'dimensions',
			'units'          => array( 'px' ),
			'units_extended' => 'false',
			'height'         => false,
			'default'        => array(
				'width' => 100,
			),
		),
		// Logo width on mobile.
		array(
			'id'             => 'universal__opt-custom-logo-width-mobile',
			'title'          => esc_html__( 'Logo With', 'universal' ),
			'subtitle'       => esc_html__( 'Set your logo width on mobile.', 'universal' ),
			'desc'           => esc_html__( 'Logo width can be set in px. Height will automatically calculated.', 'universal' ),
			'type'           => 'dimensions',
			'units'          => array( 'px' ),
			'units_extended' => 'false',
			'height'         => false,
			'default'        => array(
				'width' => 80,
			),
		),
	),
) );

/*********************************************************************************
 * 2. Header Settings
 ******************************************************************************** */
Redux::setSection( $opt_name, array(
	'id'     => 'universal__section-header',
	'title'  => esc_html__( 'Header', 'universal' ),
	'icon'   => 'el el-arrow-up',
	'fields' => array(

		// Sticky Header.
		array(
			'id'       => 'universal__opt-sticky-header',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Sticky header', 'universal' ),
			'subtitle' => esc_html__( 'The header will remain in view at the top.', 'universal' ),
			'default'  => 1,
			'on'       => esc_html__( 'Yes', 'universal' ),
			'off'      => esc_html__( 'No', 'universal' ),
		),
	),
) );

/*********************************************************************************
 * 3. Search Form Settings
 ******************************************************************************** */

/*********************************************************************************
 * 4. Footer Settings
 ******************************************************************************** */

/*********************************************************************************
 * 5. Footer Widgets Settings
 ******************************************************************************** */

/*********************************************************************************
 * 6. Footer Copyright Settings
 ******************************************************************************** */

/*********************************************************************************
 * 7. Blog Options
 ******************************************************************************** */

/*********************************************************************************
 * 8. Single Post Settings
 ******************************************************************************** */

/*********************************************************************************
 * 9. Team Options
 ******************************************************************************** */

/*********************************************************************************
 * 10. WooCommerce Options
 ******************************************************************************** */

/*********************************************************************************
 * 11. Page Pre-Loader Options
 ******************************************************************************** */
Redux::setSection( $opt_name, array(
	'title'  => esc_html__( 'Page Pre-Loader', 'universal' ),
	'id'     => 'universal__section-page-pre-loader',
	'icon'   => 'el el-repeat',
	'fields' => array(

		// Show or hide page pre-loader.
		array(
			'id'       => 'universal__opt-page-pre-loader',
			'type'     => 'switch',
			'title'    => esc_html__( 'Use Page Pre-Loader', 'universal' ),
			'subtitle' => esc_html__( 'Turn on to use page pre-loader.', 'universal' ),
			'desc'     => esc_html__( 'If turn on you will see spinner before content will be shown.' ),
			'default'  => 1,
			'on'       => esc_html__( 'Yes', 'universal' ),
			'of'       => esc_html__( 'No', 'universal' ),
		),

		// Enable or disable styling for page pre-loader.
		array(
			'id'       => 'universal__opt-custom-page-pre-loader',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable styling for page pre-loader', 'universal' ),
			'subtitle' => esc_html__( 'Turn on to change colors for page pre-loader.', 'universal' ),
			'default'  => false,
			'on'       => esc_html__( 'Yes', 'universal' ),
			'of'       => esc_html__( 'No', 'universal' ),
			'required' => array( 'universal__opt-page-pre-loader', '=', '1' ),
		),

		// Choose background color for page pre-loader.
		array(
			'id'                    => 'universal__opt-page-pre-loader-bg',
			'type'                  => 'background',
			'output'                => array( '.page-pre-loader' ),
			'title'                 => esc_html__( 'Page pre-loader background', 'universal' ),
			'subtitle'              => esc_html__( 'Choose background color for page pre-loader screen.', 'universal' ),
			'preview'               => false,
			'background-size'       => false,
			'background-repeat'     => false,
			'background-attachment' => false,
			'background-position'   => false,
			'background-image'      => false,
			'transparent'           => false,
			'default'               => array(
				'background-color' => '#fefefe',
			),
			'required'              => array(
				array( 'universal__opt-page-pre-loader', '=', 1 ),
				array( 'universal__opt-custom-page-pre-loader', '=', 1 ),
			),
		),

		// Choose color for spinning bar.
		array(
			'id'          => 'universal__opt-page-pre-loader-bar-color1',
			'type'        => 'color',
			'title'       => esc_html__( 'Spinning Bar Color Primary', 'universal' ),
			'subtitle'    => esc_html__( 'Choose color for spinning bar.', 'universal' ),
			'default'     => '#99c24d',
			'transparent' => false,
			'required'    => array(
				array( 'universal__opt-page-pre-loader', '=', 1 ),
				array( 'universal__opt-custom-page-pre-loader', '=', 1 ),
			),
		),

		// Choose dimension for spinning bar.
		array(
			'id'            => 'universal__opt-page-pre-loader-spinner-size',
			'type'          => 'dimensions',
			'units'         => array( 'px' ),
			'output'        => array( '.page-pre-loader .pre-loader' ),
			'unit_extended' => false,
			'title'         => esc_html__( 'Spinner Size', 'universal' ),
			'subtitle'      => esc_html__( 'Setup spinner size.', 'universal' ),
			'desc'          => esc_html__( 'Spinner size can be set in px.', 'universal' ),
			'height'        => false,
			'default'       => array(
				'width' => 60,
			),
			'required'      => array(
				array( 'universal__opt-page-pre-loader', '=', 1 ),
				array( 'universal__opt-custom-page-pre-loader', '=', 1 ),
			),
		),

	),
) );

/*********************************************************************************
 * 12. 404 Page Options
 ******************************************************************************** */

/*********************************************************************************
 * 13. 404 Page Styling
 ******************************************************************************** */

/*********************************************************************************
 * 14. Coming Soon Page Options
 ******************************************************************************** */

/*********************************************************************************
 * 15. Under Construction Page Options
 ******************************************************************************** */

/*********************************************************************************
 * 16. Social Media Options
 ******************************************************************************** */

/*********************************************************************************
 * 17. Custom CSS
 ******************************************************************************** */
Redux::setSection( $opt_name, array(
	'id'     => 'universal__section-custom-css',
	'title'  => esc_html__( 'Custom CSS', 'universal' ),
	'icon'   => 'el el-css',
	'fields' => array(

		// Custom CSS code.
		array(
			'id'       => 'universal__opt-custom-css',
			'title'    => esc_html__( 'CSS code', 'universal' ),
			'subtitle' => esc_html__( 'Paste your custom CSS code here.', 'universal' ),
			'desc'     => esc_html__( 'Any custom CSS can be added here, it will override the theme CSS.' ),
			'type'     => 'ace_editor',
			'mode'     => 'css',
			'theme'    => 'monokai',
			'default'  => '',
		),
	),
) );

/*********************************************************************************
 * 18. Theme Information
 ******************************************************************************** */
if ( file_exists( get_template_directory() . '/readme.txt' ) ) {
	Redux::setSection( $opt_name, array(
		'id'     => 'universal-readme',
		'icon'   => 'el-icon-list-alt',
		'title'  => esc_html__( 'Theme Information', 'universal' ),
		'fields' => array(
			array(
				'id'       => 'universal-readme-description',
				'type'     => 'raw',
				'markdown' => true,
				'content'  => file_get_contents( get_template_directory() . '/readme.txt' ),
			),
		),
	) );
}

/***********************************************************************************
 *
 * END SECTIONS
 *
 ********************************************************************************** */
