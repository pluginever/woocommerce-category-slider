<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;

echo wc_category_slider()->elements->switcher( array(
	'name'  => 'empty_image',
	'label' => __( 'Hide Image', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'empty_image', 'off' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
) );
echo wc_category_slider()->elements->switcher( array(
	'name'    => 'empty_content',
	'label'   => __( 'Hide Content', 'woo-category-slider-by-pluginever' ),
	'value'   => wc_slider_get_settings( $post->ID, 'empty_content', 'off' ),
	'default' => 'no',
	'desc'    => __( '', 'woo-category-slider-by-pluginever' ),
) );
echo wc_category_slider()->elements->switcher( array(
	'name'  => 'empty_button',
	'label' => __( 'Hide Button', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'empty_button', 'off' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
) );

echo wc_category_slider()->elements->switcher( array(
	'name'  => 'empty_name',
	'label' => __( 'Hide Category Name', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'empty_name', 'off' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
) );
echo wc_category_slider()->elements->switcher( array(
	'name'  => 'empty_product_count',
	'label' => __( 'Hide Product Count', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'empty_product_count', 'off' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
) );
echo wc_category_slider()->elements->switcher( array(
	'name'  => 'empty_nav',
	'label' => __( 'Hide Navigation', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'empty_nav', 'off' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
) );
echo wc_category_slider()->elements->switcher( array(
	'name'  => 'empty_border',
	'label' => __( 'Hide Border', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'empty_border', 'off' ),
	'desc'  => __( 'Border around slider image?', 'woo-category-slider-by-pluginever' ),
) );
echo wc_category_slider()->elements->select( array(
	'label'            => __( 'Image Hover effect', 'woo-category-slider-by-pluginever' ),
	'name'             => 'hover_style',
	'placeholder'      => '',
	'show_option_all'  => '',
	'show_option_none' => '',
	'value'            => 'default',
	'selected'         => wc_slider_get_settings( $post->ID, 'hover_style', 'no-hover' ),
	'options'          => apply_filters( 'wc_category_slider_hover_styles', array(
		'no-hover'      => 'No Hover',
		'hover-zoom-in' => 'Zoom In',
	) )
) );
echo wc_category_slider()->elements->select( array(
	'name'             => 'theme',
	'label'            => __( 'Theme', 'woo-category-slider-by-pluginever' ),
	'placeholder'      => '',
	'show_option_all'  => '',
	'show_option_none' => '',
	'selected'         => wc_slider_get_settings( $post->ID, 'theme', 'default' ),
	'value'            => 'default',
	'options'          => apply_filters( 'wc_category_slider_themes', array(
		'default' => 'Default',
		'basic'   => 'Basic',
	) ),

) );

echo wc_category_slider()->is_pro_installed() ? '' : sprintf( '<h2 class="pro-feat-title">%s</h2>', __( 'Pro Features', 'woo-category-slider-by-pluginever' ) );

echo wc_category_slider()->elements->input( apply_filters( 'wc_category_slider_button_text_args', array(
	'name'        => 'button_text',
	'label'       => __( 'Button Text', 'woo-category-slider-by-pluginever' ),
	'placeholder' => '',
	'value'       => wc_slider_get_settings( $post->ID, 'button_text', __( 'Shop Now', 'woo-category-slider-by-pluginever' ) )
), $post->ID ) );
echo wc_category_slider()->elements->select( apply_filters( 'wc_category_slider_button_type_args', array(
	'name'             => 'button_type',
	'label'            => __( 'Button Type', 'woo-category-slider-by-pluginever' ),
	'placeholder'      => '',
	'show_option_all'  => '',
	'show_option_none' => '',
	'selected'         => wc_slider_get_settings( $post->ID, 'button_type', 'solid-btn' ),
	'options'          => array(
		'solid-btn'       => 'Solid',
		'transparent-btn' => 'Transparent'
	),

), $post->ID ) );
echo wc_category_slider()->elements->switcher( apply_filters( 'wc_category_slider_animate_border_args', array(
	'name'  => 'animate_border',
	'label' => __( 'Animate Border', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'animate_border', 'off' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
), $post->ID ) );

echo wc_category_slider()->elements->switcher( apply_filters( 'wc_category_slider_show_desc_args', array(
	'name'  => 'show_desc',
	'label' => __( 'Show Category Description', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'animate_border', 'off' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
), $post->ID ) );

echo wc_category_slider()->elements->colorpicker( apply_filters( 'wc_category_slider_primary_color_args', array(
	'name'  => 'primary_color',
	'label' => __( 'Primary Color', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'primary_color', '#b0589f' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
), $post->ID ) );

echo wc_category_slider()->elements->colorpicker( apply_filters( 'wc_category_slider_secondary_color_args', array(
	'name'  => 'secondary_color',
	'label' => __( 'Secondary Color', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'primary_color', '#ffff' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
	'attrs' => array(
		'disabled' => 'disabled',
	),
), $post->ID ) );

echo wc_category_slider()->elements->colorpicker( apply_filters( 'wc_category_slider_content_color_args', array(
	'name'  => 'content_color',
	'label' => __( 'Content Color', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'primary_color', '#000000' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
	'attrs' => array(
		'disabled' => 'disabled',
	),
), $post->ID ) );

echo wc_category_slider()->elements->colorpicker( apply_filters( 'wc_category_slider_content_bg_args', array(
	'name'  => 'content_bg',
	'label' => __( 'Content Background Color', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'primary_color', 'rgba(237,237,237,1)' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
	'attrs' => array(
		'disabled' => 'disabled',
	),
), $post->ID ) );

echo wc_category_slider()->elements->colorpicker( apply_filters( 'wc_category_slider_border_color_args', array(
	'name'  => 'border_color',
	'label' => __( 'Border Color', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'primary_color', '#ddd' ),
), $post->ID ) );

echo wc_category_slider()->elements->input( apply_filters( 'wc_category_slider_border_width_args', array(
	'name'  => 'border_width',
	'label' => __( 'Border Width', 'woo-category-slider-by-pluginever' ),
	'type'  => 'number',
	'value' => wc_slider_get_settings( $post->ID, 'number', '1' ),
	'desc'  => __( 'Unit is in px. only input number', 'woo-category-slider-by-pluginever' ),
), $post->ID ) );

echo wc_category_slider()->elements->input( apply_filters( 'wc_category_slider_custom_class_args', array(
	'name'  => 'custom_class',
	'label' => __( 'Custom CSS Class', 'woo-category-slider-by-pluginever' ),
	'value' => wc_slider_get_settings( $post->ID, 'number' ),
	'desc'  => __( '', 'woo-category-slider-by-pluginever' ),
), $post->ID ) );


echo wc_category_slider()->elements->select( apply_filters( 'wc_category_slider_image_size_args', array(
	'name'             => 'image_size',
	'label'            => __( 'Image Size', 'woo-category-slider-by-pluginever' ),
	'placeholder'      => '',
	'show_option_all'  => '',
	'show_option_none' => '',
	'selected'         => wc_slider_get_settings( $post->ID, 'image_size', 'default' ),
	'options'          => array(
		'default'             => 'Default',
		'custom_image_size_1' => 'Custom Image Size 1',
		'custom_image_size_2' => 'Custom Image Size 2',
		'custom_image_size_3' => 'Custom Image Size 3',
	),

), $post->ID ) );


