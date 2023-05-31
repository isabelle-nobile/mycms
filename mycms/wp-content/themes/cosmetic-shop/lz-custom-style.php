<?php 

	$cosmetic_shop_custom_style = '';

	// Logo Size
	$cosmetic_shop_logo_top_padding = get_theme_mod('cosmetic_shop_logo_top_padding');
	$cosmetic_shop_logo_bottom_padding = get_theme_mod('cosmetic_shop_logo_bottom_padding');
	$cosmetic_shop_logo_left_padding = get_theme_mod('cosmetic_shop_logo_left_padding');
	$cosmetic_shop_logo_right_padding = get_theme_mod('cosmetic_shop_logo_right_padding');

	if( $cosmetic_shop_logo_top_padding != '' || $cosmetic_shop_logo_bottom_padding != '' || $cosmetic_shop_logo_left_padding != '' || $cosmetic_shop_logo_right_padding != ''){
		$cosmetic_shop_custom_style .=' .logo {';
			$cosmetic_shop_custom_style .=' padding-top: '.esc_attr($cosmetic_shop_logo_top_padding).'px; padding-bottom: '.esc_attr($cosmetic_shop_logo_bottom_padding).'px; padding-left: '.esc_attr($cosmetic_shop_logo_left_padding).'px; padding-right: '.esc_attr($cosmetic_shop_logo_right_padding).'px;';
		$cosmetic_shop_custom_style .=' }';
	}

//Slider color
$cosmetic_shop_slider_color = get_theme_mod('cosmetic_shop_slider_color');

if ( $cosmetic_shop_slider_color != '') {
	$cosmetic_shop_custom_style .=' #slider h2,#slider p {';
		$cosmetic_shop_custom_style .=' color:'.esc_attr($cosmetic_shop_slider_color).';';
	$cosmetic_shop_custom_style .=' }';
}


//featureproduct color
$cosmetic_shop_featureproduct_color = get_theme_mod('cosmetic_shop_featureproduct_color');

if ( $cosmetic_shop_featureproduct_color != '') {
	$cosmetic_shop_custom_style .=' .featureproduct-box .featureproduct-content h4 {';
		$cosmetic_shop_custom_style .=' color:'.esc_attr($cosmetic_shop_featureproduct_color).';';
	$cosmetic_shop_custom_style .=' }';
}