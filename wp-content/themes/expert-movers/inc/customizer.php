<?php
/**
 * expert-movers: Customizer
 *
 * @package WordPress
 * @subpackage expert-movers
 * @since 1.0
 */

function expert_movers_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'expert_movers_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'expert-movers' ),
	    'description' => __( 'Description of what this panel does.', 'expert-movers' ),
	) );

	$wp_customize->add_section( 'expert_movers_theme_options_section', array(
    	'title'      => __( 'General Settings', 'expert-movers' ),
		'priority'   => 30,
		'panel' => 'expert_movers_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('expert_movers_theme_options',array(
        'default' => __('Right Sidebar','expert-movers'),
        'sanitize_callback' => 'expert_movers_sanitize_choices'	        
	));

	$wp_customize->add_control('expert_movers_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','expert-movers'),
        'section' => 'expert_movers_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-movers'),
            'Right Sidebar' => __('Right Sidebar','expert-movers'),
            'One Column' => __('One Column','expert-movers'),
            'Three Columns' => __('Three Columns','expert-movers'),
            'Four Columns' => __('Four Columns','expert-movers'),
            'Grid Layout' => __('Grid Layout','expert-movers')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'expert_movers_contact_details', array(
    	'title'      => __( 'Top Bar', 'expert-movers' ),
		'priority'   => null,
		'panel' => 'expert_movers_panel_id'
	) );

	$wp_customize->add_setting('expert_movers_call1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_movers_call1',array(
		'label'	=> __('Phone Number','expert-movers'),
		'section'=> 'expert_movers_contact_details',
		'setting'=> 'expert_movers_call1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('expert_movers_email1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_movers_email1',array(
		'label'	=> __('Email Us','expert-movers'),
		'section'=> 'expert_movers_contact_details',
		'setting'=> 'expert_movers_email1',
		'type'=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'expert_movers_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'expert-movers' ),
		'priority'   => null,
		'panel' => 'expert_movers_panel_id'
	) );

	$wp_customize->add_setting('expert_movers_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_movers_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','expert-movers'),
	   	'description' => __('Image Size ( 1600px x 582px )','expert-movers'),
	   	'section' => 'expert_movers_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'expert_movers_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'expert_movers_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'expert_movers_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'expert-movers' ),
			'section'  => 'expert_movers_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//	Our Features
	$wp_customize->add_section('expert_movers_service',array(
		'title'	=> __('Our Features','expert-movers'),
		'description'=> __('This section will appear below the slider.','expert-movers'),
		'panel' => 'expert_movers_panel_id',
	));
	
	$wp_customize->add_setting('expert_movers_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_movers_title',array(
		'label'	=> __('Section Title','expert-movers'),
		'section'	=> 'expert_movers_service',
		'setting'	=> 'expert_movers_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('expert_movers_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('expert_movers_cat',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','expert-movers'),
		'section' => 'expert_movers_service',
	));

	//Footer
    $wp_customize->add_section( 'expert_movers_footer', array(
    	'title'      => __( 'Footer Text', 'expert-movers' ),
		'priority'   => null,
		'panel' => 'expert_movers_panel_id'
	) );

    $wp_customize->add_setting('expert_movers_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_movers_footer_copy',array(
		'label'	=> __('Footer Text','expert-movers'),
		'section'	=> 'expert_movers_footer',
		'setting'	=> 'expert_movers_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'expert_movers_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'expert_movers_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'expert_movers_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'expert_movers_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'expert-movers' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'expert-movers' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'expert_movers_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'expert_movers_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'expert_movers_customize_register' );

function expert_movers_customize_partial_blogname() {
	bloginfo( 'name' );
}

function expert_movers_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function expert_movers_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function expert_movers_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Expert_Movers_Customize {

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
		$manager->register_section_type( 'Expert_Movers_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Expert_Movers_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Expert Movers Pro ', 'expert-movers' ),
					'pro_text' => esc_html__( 'Go Pro','expert-movers' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/movers-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'expert-movers-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'expert-movers-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Expert_Movers_Customize::get_instance();