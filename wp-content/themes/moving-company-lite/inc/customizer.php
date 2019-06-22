<?php
/**
 * Moving Company Lite Theme Customizer
 *
 * @package Moving Company Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function moving_company_lite_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'moving_company_lite_custom_controls' );

function moving_company_lite_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'moving_company_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'moving-company-lite' ),
	) );

	// Layout
	$wp_customize->add_section( 'moving_company_lite_left_right', array(
    	'title'      => __( 'General Settings', 'moving-company-lite' ),
		'panel' => 'moving_company_lite_panel_id'
	) );

	$wp_customize->add_setting('moving_company_lite_theme_options',array(
        'default' => __('Right Sidebar','moving-company-lite'),
        'sanitize_callback' => 'moving_company_lite_sanitize_choices'
	));
	$wp_customize->add_control('moving_company_lite_theme_options',array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','moving-company-lite'),
        'description' => __('Here you can change the sidebar layout for posts. ','moving-company-lite'),
        'section' => 'moving_company_lite_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','moving-company-lite'),
            'Right Sidebar' => __('Right Sidebar','moving-company-lite'),
            'One Column' => __('One Column','moving-company-lite'),
            'Three Columns' => __('Three Columns','moving-company-lite'),
            'Four Columns' => __('Four Columns','moving-company-lite'),
            'Grid Layout' => __('Grid Layout','moving-company-lite')
        ),
	) );

	$wp_customize->add_setting('moving_company_lite_page_layout',array(
        'default' => __('One Column','moving-company-lite'),
        'sanitize_callback' => 'moving_company_lite_sanitize_choices'
	));
	$wp_customize->add_control('moving_company_lite_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','moving-company-lite'),
        'description' => __('Here you can change the sidebar layout for pages. ','moving-company-lite'),
        'section' => 'moving_company_lite_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','moving-company-lite'),
            'Right Sidebar' => __('Right Sidebar','moving-company-lite'),
            'One Column' => __('One Column','moving-company-lite')
        ),
	) );

	//Top Bar
	$wp_customize->add_section( 'moving_company_lite_topbar', array(
    	'title'      => __( 'Top Bar Settings', 'moving-company-lite' ),
		'panel' => 'moving_company_lite_panel_id'
	) );

	$wp_customize->add_setting('moving_company_lite_calling_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('moving_company_lite_calling_text',array(
		'label'	=> __('Add Phone Text','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( 'Call us Now', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('moving_company_lite_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('moving_company_lite_phone_number',array(
		'label'	=> __('Add Phone Number','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( '+00 1234 567 890', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('moving_company_lite_email_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('moving_company_lite_email_text',array(
		'label'	=> __('Add Email Text','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( 'Email us Now', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('moving_company_lite_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('moving_company_lite_email_address',array(
		'label'	=> __('Add Email Address','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('moving_company_lite_opening_time_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('moving_company_lite_opening_time_text',array(
		'label'	=> __('Add Opening Time Text','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( 'Open Hours', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('moving_company_lite_opening_time',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('moving_company_lite_opening_time',array(
		'label'	=> __('Add Opening Time','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( 'Mon - Fri 8:00am to 9:00am Sat - Closed', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'moving_company_lite_header_search',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'moving_company_lite_switch_sanitization'
    ));  
    $wp_customize->add_control( new Moving_Company_Lite_Toggle_Switch_Custom_Control( $wp_customize, 'moving_company_lite_header_search',array(
      	'label' => esc_html__( 'Show / Hide Search','moving-company-lite' ),
      	'section' => 'moving_company_lite_topbar'
    )));

    $wp_customize->add_setting( 'moving_company_lite_social_media',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'moving_company_lite_switch_sanitization'
    ));  
    $wp_customize->add_control( new Moving_Company_Lite_Toggle_Switch_Custom_Control( $wp_customize, 'moving_company_lite_social_media',array(
      	'label' => esc_html__( 'Show / Hide Social Media','moving-company-lite' ),
      	'section' => 'moving_company_lite_topbar'
    )));
    
	//Slider
	$wp_customize->add_section( 'moving_company_lite_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'moving-company-lite' ),
		'panel' => 'moving_company_lite_panel_id'
	) );

	$wp_customize->add_setting( 'moving_company_lite_slider_arrows',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'moving_company_lite_switch_sanitization'
    ));  
    $wp_customize->add_control( new Moving_Company_Lite_Toggle_Switch_Custom_Control( $wp_customize, 'moving_company_lite_slider_arrows',array(
      	'label' => esc_html__( 'Show / Hide Slider','moving-company-lite' ),
      	'section' => 'moving_company_lite_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'moving_company_lite_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'moving_company_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'moving_company_lite_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'moving-company-lite' ),
			'description' => __('Slider image size (1600 x 600)','moving-company-lite'),
			'section'  => 'moving_company_lite_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}
 
	//Our Services section
	$wp_customize->add_section( 'moving_company_lite_services_section' , array(
    	'title'      => __( 'Our Services', 'moving-company-lite' ),
		'priority'   => null,
		'panel' => 'moving_company_lite_panel_id'
	) );

	$wp_customize->add_setting('moving_company_lite_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('moving_company_lite_section_title',array(
		'label'	=> __('Add Section Title','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( 'Packers & Movers Services', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_services_section',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cat_post = array();
	$cat_post[]= 'select';
	$i = 0;	
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('moving_company_lite_our_services',array(
		'default'	=> 'select',
		'sanitize_callback' => 'moving_company_lite_sanitize_choices',
	));
	$wp_customize->add_control('moving_company_lite_our_services',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Services','moving-company-lite'),
		'description' => __('Image Size (280 x 180)','moving-company-lite'),
		'section' => 'moving_company_lite_services_section',
	));

	//Content Craetion
	$wp_customize->add_section( 'moving_company_lite_content_section' , array(
    	'title' => __( 'Customize Home Page Settings', 'moving-company-lite' ),
		'priority' => null,
		'panel' => 'moving_company_lite_panel_id'
	) );

	$wp_customize->add_setting('moving_company_lite_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new Moving_Company_Lite_Content_Creation( $wp_customize, 'moving_company_lite_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','moving-company-lite' ),
		),
		'section' => 'moving_company_lite_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'moving-company-lite' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('moving_company_lite_footer',array(
		'title'	=> __('Footer Settings','moving-company-lite'),
		'panel' => 'moving_company_lite_panel_id',
	));	
	
	$wp_customize->add_setting('moving_company_lite_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('moving_company_lite_footer_text',array(
		'label'	=> __('Copyright Text','moving-company-lite'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'moving-company-lite' ),
        ),
		'section'=> 'moving_company_lite_footer',
		'type'=> 'text'
	));	
}

add_action( 'customize_register', 'moving_company_lite_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Moving_Company_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Moving_Company_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Moving_Company_Lite_Customize_Section_Pro( $manager,'example_1', array(
			'priority'   => 9,
			'title'    => esc_html__( 'Moving Company Pro', 'moving-company-lite' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'moving-company-lite' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/moving-company-wordpress-theme/'),
		) )	);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'moving-company-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'moving-company-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Moving_Company_Lite_Customize::get_instance();