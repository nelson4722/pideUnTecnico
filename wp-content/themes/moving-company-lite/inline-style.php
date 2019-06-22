<?php
	/*------------------------------ Global First Color -----------*/

	$moving_company_lite_first_color = get_theme_mod('moving_company_lite_first_color');

	$custom_css = '';

	if($moving_company_lite_first_color != false){
		$custom_css .='#header .nav ul.sub-menu li a:hover, #header .nav ul.children li a:hover, .social-media .custom-social-icons i:hover, .more-btn, input[type="submit"], #footer .tagcloud a:hover, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer-2, #sidebar h3, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.call-info i.fas.fa-phone{';
			$custom_css .='background-color: '.esc_html($moving_company_lite_first_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_first_color != false){
		$custom_css .='a, a.scrollup, #header .nav ul li a:hover, #footer .custom-social-icons i:hover, #footer li a:hover, .post-main-box:hover h3, #sidebar ul li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title{';
			$custom_css .='color: '.esc_html($moving_company_lite_first_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_first_color != false){
		$custom_css .='.scrollup{';
			$custom_css .='border-color: '.esc_html($moving_company_lite_first_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_first_color != false){
		$custom_css .='.more-btn:before{';
			$custom_css .='border-left-color: '.esc_html($moving_company_lite_first_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_first_color != false){
		$custom_css .='#serv-section h3, #footer h3:after{';
			$custom_css .='border-bottom-color: '.esc_html($moving_company_lite_first_color).';';
		$custom_css .='}';
	}

	/*------------------------------ Global Second Color -----------*/

	$moving_company_lite_second_color = get_theme_mod('moving_company_lite_second_color');

	if($moving_company_lite_second_color != false){
		$custom_css .='.social-media, .more-btn:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer, .pagination span, .pagination a, #sidebar .custom-social-icons i:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce span.onsale, #header .nav ul.sub-menu li a, #header .nav ul.children li a{';
			$custom_css .='background-color: '.esc_html($moving_company_lite_second_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_second_color != false){
		$custom_css .='#slider .inner_carousel h2, #slider .inner_carousel p, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, h1, h2, h3, h4, h5, h6, .post-main-box h3, .post-navigation a, .woocommerce-message::before, .woocommerce-info::before, h2.woocommerce-loop-product__title, .woocommerce div.product .product_title, .woocommerce .quantity .qty{';
			$custom_css .='color: '.esc_html($moving_company_lite_second_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_second_color != false){
		$custom_css .='.woocommerce .quantity .qty,.call-info i.fas.fa-phone{';
			$custom_css .='border-color: '.esc_html($moving_company_lite_second_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_second_color != false){
		$custom_css .='.woocommerce-message, .woocommerce-info{';
			$custom_css .='border-top-color: '.esc_html($moving_company_lite_second_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_second_color != false){
		$custom_css .='.more-btn:hover:before{';
			$custom_css .='border-left-color: '.esc_html($moving_company_lite_second_color).';';
		$custom_css .='}';
	}
	if($moving_company_lite_second_color != false){
		$custom_css .='nav.woocommerce-MyAccount-navigation ul li{
		box-shadow: 2px 2px 0 0 '.esc_html($moving_company_lite_second_color).';
		}';
	}
	if($moving_company_lite_second_color != false || $moving_company_lite_first_color != false){
	$custom_css .='.box:hover{
		background: linear-gradient(to right, '.esc_html($moving_company_lite_second_color).', '.esc_html($moving_company_lite_first_color).');
		}';
	}
	if($moving_company_lite_second_color != false || $moving_company_lite_first_color != false){
	$custom_css .='.top-bar{
		background: linear-gradient(60deg, '.esc_html($moving_company_lite_second_color).' 74.5%, '.esc_html($moving_company_lite_first_color).' 32%) repeat scroll 0 0;
		}';
	}
	if($moving_company_lite_first_color != false || $moving_company_lite_second_color != false){
	$custom_css .='.info-box{
		background: linear-gradient(60deg, '.esc_html($moving_company_lite_first_color).' 41%, '.esc_html($moving_company_lite_second_color).' 32%) repeat scroll 0 0;
		}';
	}