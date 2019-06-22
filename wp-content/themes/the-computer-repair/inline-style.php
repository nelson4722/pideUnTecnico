<?php

	$the_computer_repair_first_color = get_theme_mod('the_computer_repair_first_color');

	/*------------------------------ Global First Color -----------*/
	if($the_computer_repair_first_color != false){
		$custom_css .='.cart-value,.top-btn a,.more-btn a,input[type="submit"],#sidebar h3,.pagination .current,.pagination a:hover,#sidebar .custom-social-icons i, #footer .custom-social-icons i,#sidebar .tagcloud a:hover,#footer .tagcloud a:hover,#footer-2,#header .nav ul.sub-menu li a:hover, #header .nav ul.children li a:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover a,#comments input[type="submit"],nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$custom_css .='background-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='.scrollup,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover{';
			$custom_css .='border-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='a ,.lower-bar i,.post-main-box:hover h3,#sidebar ul li a:hover,#footer .custom-social-icons i:hover,a.scrollup,#header .nav ul li a:hover{';
			$custom_css .='color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}	
	if($the_computer_repair_first_color != false){
		$custom_css .='.lower-bar,#footer h3:after,.heading-box hr{';
			$custom_css .='border-bottom-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}