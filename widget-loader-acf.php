<?php

$key = 'widget_feature_box';
$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
	'key' => $key,
	'name' => 'feature-box',
	'label' => 'Feature Box',
	'display' => 'block',
	'sub_fields' => array (
		array (
			'key' => $key . '_basic_details_tab',
			'label' => 'Basic Details',
			'type' => 'tab',
			'placement' => $widgetplacement,
		),
		array (
			'key' => $key . '_image',
			'label' => 'Image',
			'name' => 'image',
			'type' => 'image',
			'instructions' => 'Upload the image you want to use (Max Size 650x800)',
			'required' => 1,
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),
		array (
			'key' => $key . '_has_flash_caption',
			'label' => 'Do you want to add a flash caption?',
			'name' => 'has_flash_caption',
			'type' => 'true_false',
			'wrapper' => array (
				'class' => 'extra-widget-settings',
			),
			'layout' => 'vertical',
			'wrapper' => array (
				'width' => '50%',
			)
		),
		array (
			'key' => $key . '_flash_caption',
			'label' => 'Flash caption',
			'name' => 'flash_caption',
			'type' => 'text',
			'instructions' => 'Add a caption to the image. (Optional)',
			'conditional_logic' => array (
				array (
					array (
						'field' => $key . '_has_flash_caption',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '50%',
			)
		),
		array (
			'key' => $key . '_heading',
			'label' => 'Paragraph Heading',
			'name' => 'paragraph_heading',
			'type' => 'text',
			'required' => 1,
		),
		array (
			'key' => $key . '_text',
			'label' => 'Paragraph Text',
			'name' => 'paragraph_text',
			'type' => 'strict_wysiwyg',
			'required' => 1,
			'simplify' => true
		),
		array (
			'key' => $key . '_switch_sides',
			'label' => 'Reverse layout (Image on right, Text on left)',
			'name' => 'switch_sides',
			'type' => 'true_false',
			'layout' => 'vertical',
			'wrapper' => array (
				'width' => '50%',
			)
		),
		array (
			'key' => $key . '_has_underline',
			'label' => 'Do you want to underline the heading',
			'name' => 'has_underline',
			'type' => 'true_false',
			'wrapper' => array (
				'class' => 'extra-widget-settings',
			),
			'layout' => 'vertical',
			'wrapper' => array (
				'width' => '50%',
			)
		)
	)
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
