<?php
/**
 * One Login Business: Customizer
 *
 * @package WordPress
 * @subpackage One Login Business
 * @since 1.0
 */

function one_login_business_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'one_login_business_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => esc_html__( 'Theme Settings', 'one-login-business' ),
	    'description' => esc_html__( 'Description of what this panel does.', 'one-login-business' ),
	) );

	//Layouts
	$wp_customize->add_section( 'one_login_business_left_right', array(
    	'title'      => esc_html__( 'Layout Settings', 'one-login-business' ),
		'priority'   => 30,
		'panel' => 'one_login_business_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('one_login_business_layout_options',array(
	        'default' => esc_html__('Right Sidebar','one-login-business'),
	        'sanitize_callback' => 'one_login_business_sanitize_choices'
	    )
    );

	$wp_customize->add_control('one_login_business_layout_options',
	    array(
	        'type' => 'radio',
	        'label' => esc_html__( 'Do you want this section', 'one-login-business' ),
	        'section' => 'one_login_business_left_right',
	        'choices' => array(
	            'Left Sidebar' => esc_html__('Left Sidebar','one-login-business'),
	            'Right Sidebar' => esc_html__('Right Sidebar','one-login-business')
	        ),
	    )
    );

	//Top Bar
	  	$wp_customize->add_section('one_login_business_topbar',array(
	    	'title' => esc_html__('Topbar Section','one-login-business'),
	    	'description' => esc_html__('Add topbar content','one-login-business'),
	    	'priority'  => null,
	    	'panel' => 'one_login_business_panel_id',
	  	));

	  	$wp_customize->add_setting('one_login_business_call1',array(
	    	'default' => '',
	    	'sanitize_callback' => 'sanitize_text_field',
	  	));
	  	$wp_customize->add_control('one_login_business_call1',array(
	    	'label' => esc_html__('Phone Number','one-login-business'),
	    	'section' => 'one_login_business_topbar',
	    	'type'  => 'text'
	  	));

	  	$wp_customize->add_setting('one_login_business_mail1',array(
	    	'default' => '',
	    	'sanitize_callback' => 'sanitize_text_field',
	  	));
	  	$wp_customize->add_control('one_login_business_mail1',array(
	    	'label' => esc_html__('Mail','one-login-business'),
	    	'section' => 'one_login_business_topbar',
	    	'type'  => 'text'
	  	));

	  	$wp_customize->add_setting('one_login_business_time1',array(
	    	'default' => '',
	    	'sanitize_callback' => 'sanitize_text_field',
	  	));
	  	$wp_customize->add_control('one_login_business_time1',array(
	    	'label' => esc_html__('Timing','one-login-business'),
	    	'section' => 'one_login_business_topbar',
	    	'type'  => 'text'
	  	));

  		$wp_customize->add_setting('one_login_business_free1',array(
    		'default' => '',
    		'sanitize_callback' => 'sanitize_text_field'
    	)); 
    	$wp_customize->add_control('one_login_business_free1',array(
    		'label' => esc_html__('Button text','one-login-business'),
    		'section' => 'one_login_business_topbar',
    		'type'  => 'text'
    	));

    	$wp_customize->add_setting('one_login_business_free',array(
    		'default' => '',
    		'sanitize_callback' => 'esc_url_raw'
    	)); 
    	$wp_customize->add_control('one_login_business_free',array(
    		'label' => esc_html__('Add Link','one-login-business'),
    		'section' => 'one_login_business_topbar',
    		'setting' => 'one_login_business_free',
    		'type'  => 'url'
  		));

  		//social icons
 	 	$wp_customize->add_section('one_login_business_social_icons',array(
  	  		'title' => esc_html__('Social Icons ','one-login-business'),
    		'description' => esc_html__('Add topbar content','one-login-business'),
    		'priority'  => null,
    		'panel' => 'one_login_business_panel_id',
  		));

  		$wp_customize->add_setting('one_login_business_facebook_url',array(
    		'default' => '',
    		'sanitize_callback' => 'esc_url_raw'
  		)); 
  		$wp_customize->add_control('one_login_business_facebook_url',array(
    		'label' => esc_html__('Add Facebook link','one-login-business'),
    		'section' => 'one_login_business_social_icons',
    		'setting' => 'one_login_business_facebook_url',
    		'type'  => 'url'
  		));

  		$wp_customize->add_setting('one_login_business_twitter_url',array(
    		'default' => '',
    		'sanitize_callback' => 'esc_url_raw'
  		)); 
  		$wp_customize->add_control('one_login_business_twitter_url',array(
    		'label' => esc_html__('Add Twitter link','one-login-business'),
    		'section' => 'one_login_business_social_icons',
    		'setting' => 'one_login_business_twitter_url',
    		'type'  => 'url'
  		));

  		$wp_customize->add_setting('one_login_business_youtube_url',array(
    		'default' => '',
    		'sanitize_callback' => 'esc_url_raw'
  		));
		$wp_customize->add_control('one_login_business_youtube_url',array(
			'label' => esc_html__('Add Youtube link','one-login-business'),
			'section' => 'one_login_business_social_icons',
			'setting' => 'one_login_business_youtube_url',
			'type'  => 'url'
		));

		$wp_customize->add_setting('one_login_business_google_plus_url',array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw'
		));
		$wp_customize->add_control('one_login_business_google_plus_url',array(
			'label' => esc_html__('Add Google Plus link','one-login-business'),
			'section' => 'one_login_business_social_icons',
			'setting' => 'one_login_business_google_plus_url',
			'type'  => 'url'
		));

		$wp_customize->add_setting('one_login_business_linkedin_url',array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw'
		)); 
		$wp_customize->add_control('one_login_business_linkedin_url',array(
			'label' => esc_html__('Add Linkedin link','one-login-business'),
			'section' => 'one_login_business_social_icons',
			'setting' => 'one_login_business_linkedin_url',
			'type'  => 'url'
		));

	//home page slider1
	$wp_customize->add_section( 'one_login_business_slidersettings' , array(
    	'title'      => esc_html__( 'Slider Settings', 'one-login-business' ),
		'priority'   => null,
		'panel' => 'one_login_business_panel_id'
	) );

	$wp_customize->add_setting('one_login_business_slider_hide_show',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('one_login_business_slider_hide_show',array(
	   'type' => 'checkbox',
	   'label' => esc_html__('Show / Hide slider','one-login-business'),
	   'section' => 'one_login_business_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'one_login_business_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'one_login_business_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'one_login_business_slider_page' . $count, array(
			'label'    => esc_html__( 'Select Slider Page', 'one-login-business' ),
			'section'  => 'one_login_business_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}
	
	// OUR services

	$wp_customize->add_section('one_login_business_service',array(
		'title' => esc_html__('Our Services','one-login-business'),
		'panel' => 'one_login_business_panel_id',
	));

	$wp_customize->add_setting('one_login_business_our_services_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('one_login_business_our_services_title',array(
		'label' => esc_html__('Section Title','one-login-business'),
		'section' => 'one_login_business_service',
		'setting' => 'one_login_business_our_services_title',
		'type'    => 'text'
	));

	$wp_customize->add_setting('one_login_business_our_services_subtitle',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('one_login_business_our_services_subtitle',array(
		'label' => esc_html__('Section Sub-title','one-login-business'),
		'section' => 'one_login_business_service',
		'setting' => 'one_login_business_our_services_subtitle',
		'type'    => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	  $default = $category->slug;
	  $i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('one_login_business_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('one_login_business_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display Post','one-login-business'),
		'section' => 'one_login_business_service',
	));

	//Footer
    $wp_customize->add_section( 'one_login_business_footer', array(
    	'title'      => esc_html__( 'Footer Text', 'one-login-business' ),
		'priority'   => null,
		'panel' => 'one_login_business_panel_id'
	) );

    $wp_customize->add_setting('one_login_business_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('one_login_business_footer_copy',array(
		'label'	=> esc_html__('Footer Text','one-login-business'),
		'section'	=> 'one_login_business_footer',
		'setting'	=> 'one_login_business_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'one_login_business_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'one_login_business_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'one_login_business_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'one_login_business_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'one-login-business' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'one-login-business' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'one_login_business_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'one_login_business_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'one_login_business_customize_register' );

function one_login_business_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark', 'custom' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light';
}

function one_login_business_customize_partial_blogname() {
	bloginfo( 'name' );
}

function one_login_business_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


function one_login_business_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function one_login_business_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}