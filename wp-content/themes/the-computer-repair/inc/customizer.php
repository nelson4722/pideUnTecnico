<?php
/**
 * The Computer Repair Theme Customizer
 *
 * @package The Computer Repair
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function the_computer_repair_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'the_computer_repair_custom_controls' );

function the_computer_repair_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'the_computer_repair_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'the-computer-repair' ),
	) );

	// Layout
	$wp_customize->add_section( 'the_computer_repair_left_right', array(
    	'title'      => __( 'General Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('the_computer_repair_theme_options',array(
        'default' => __('Right Sidebar','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_theme_options',array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','the-computer-repair'),
        'description' => __('Here you can change the sidebar layout for posts. ','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
            'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
            'One Column' => __('One Column','the-computer-repair'),
            'Three Columns' => __('Three Columns','the-computer-repair'),
            'Four Columns' => __('Four Columns','the-computer-repair'),
            'Grid Layout' => __('Grid Layout','the-computer-repair')
        ),
	) );

	$wp_customize->add_setting('the_computer_repair_page_layout',array(
        'default' => __('One Column','the-computer-repair'),
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','the-computer-repair'),
        'description' => __('Here you can change the sidebar layout for pages. ','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
            'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
            'One Column' => __('One Column','the-computer-repair')
        ),
	) );

	//Top Bar
	$wp_customize->add_section( 'the_computer_repair_topbar', array(
    	'title'      => __( 'Top Bar Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('the_computer_repair_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_location',array(
		'label'	=> __('Add Location','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '123 Dunmmy street lorem ipsum, USA', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_call',array(
		'label'	=> __('Add Phone Number','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '+00 1234 567 890', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_email',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_email',array(
		'label'	=> __('Add Email Address','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_top_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_top_btn_text',array(
		'label'	=> __('Add Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'FREE EVALUATION', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_top_btn_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('the_computer_repair_top_btn_url',array(
		'label'	=> __('Add Button URL','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'https://example.com/', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'the_computer_repair_header_search',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));  
    $wp_customize->add_control( new the_computer_repair_Toggle_Switch_Custom_control( $wp_customize, 'the_computer_repair_header_search',array(
      	'label' => esc_html__( 'Show / Hide Search','the-computer-repair' ),
      	'section' => 'the_computer_repair_topbar'
    )));
    
	//Slider
	$wp_customize->add_section( 'the_computer_repair_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting( 'the_computer_repair_slider_arrows',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));  
    $wp_customize->add_control( new the_computer_repair_Toggle_Switch_Custom_control( $wp_customize, 'the_computer_repair_slider_arrows',array(
      	'label' => esc_html__( 'Show / Hide Slider','the-computer-repair' ),
      	'section' => 'the_computer_repair_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'the_computer_repair_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'the_computer_repair_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'the_computer_repair_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'the-computer-repair' ),
			'description' => __('Slider image size (1600 x 600)','the-computer-repair'),
			'section'  => 'the_computer_repair_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}
 
	//Our Services section
	$wp_customize->add_section( 'the_computer_repair_services_section' , array(
    	'title'      => __( 'Our Services', 'the-computer-repair' ),
		'priority'   => null,
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('the_computer_repair_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_section_title',array(
		'label'	=> __('Add Section Title','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Our Services', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_services_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_section_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_section_text',array(
		'label'	=> __('Add Section Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'lorem ipsum is dummy text', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_services_section',
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

	$wp_customize->add_setting('the_computer_repair_our_services',array(
		'default'	=> 'select',
		'sanitize_callback' => 'the_computer_repair_sanitize_choices',
	));
	$wp_customize->add_control('the_computer_repair_our_services',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Services','the-computer-repair'),
		'description' => __('Image Size (280 x 180)','the-computer-repair'),
		'section' => 'the_computer_repair_services_section',
	));

	//Content Craetion
	$wp_customize->add_section( 'the_computer_repair_content_section' , array(
    	'title' => __( 'Customize Home Page Settings', 'the-computer-repair' ),
		'priority' => null,
		'panel' => 'the_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('the_computer_repair_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new the_computer_repair_Content_Creation( $wp_customize, 'the_computer_repair_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','the-computer-repair' ),
		),
		'section' => 'the_computer_repair_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'the-computer-repair' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('the_computer_repair_footer',array(
		'title'	=> __('Footer Settings','the-computer-repair'),
		'panel' => 'the_computer_repair_panel_id',
	));	
	
	$wp_customize->add_setting('the_computer_repair_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_computer_repair_footer_text',array(
		'label'	=> __('Copyright Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));	
}

add_action( 'customize_register', 'the_computer_repair_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class the_computer_repair_Customize {

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
		$manager->register_section_type( 'the_computer_repair_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new the_computer_repair_Customize_Section_Pro( $manager,'example_1', array(
			'priority'   => 9,
			'title'    => esc_html__( 'Computer Repair Pro', 'the-computer-repair' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'the-computer-repair' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/computer-repair-wordpress-theme/'),
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

		wp_enqueue_script( 'the-computer-repair-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'the-computer-repair-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
the_computer_repair_Customize::get_instance();