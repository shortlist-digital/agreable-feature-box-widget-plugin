<?php
$widget_config = array (
  'key' => 'widget_feature_box',
  'name' => 'feature-box',
  'label' => 'Feature Box',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => 'widget_feature_box_image',
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
      'key' => 'widget_feature_box_has_flash_caption',
      'label' => 'Do you want to add a flash caption?',
      'name' => 'has_flash_caption',
      'type' => 'true_false',
      'wrapper' => array (
        'class' => 'extra-widget-settings',
      ),
      'layout' => 'vertical',
    ),
    array (
      'key' => 'widget_feature_box_flash_caption',
      'label' => 'Flash caption',
      'name' => 'flash_caption',
      'type' => 'text',
      'instructions' => 'Add a caption to the image. (Optional)',
      'conditional_logic' => array (
        array (
          array (
            'field' => 'widget_feature_box_has_flash_caption',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
    ),
    array (
      'key' => 'widget_feature_box_heading',
      'label' => 'Paragraph Heading',
      'name' => 'paragraph_heading',
      'type' => 'text',
      'required' => 1,
    ),
    array (
      'key' => 'widget_feature_box_text',
      'label' => 'Paragraph Text',
      'name' => 'paragraph_text',
      'type' => 'strict_wysiwyg',
      'required' => 1,
      'simplify' => true
    ),
    array (
    'key' => 'widget_feature_box_switch_sides',
    'label' => 'Reverse layout (Image on right, Text on left)',
    'name' => 'switch_sides',
    'type' => 'true_false',
    'layout' => 'vertical',
    ),
    array (
    'key' => 'widget_feature_box_has_underline',
    'label' => 'Do you want to underline the heading',
    'name' => 'has_underline',
    'type' => 'true_false',
    'wrapper' => array (
      'class' => 'extra-widget-settings',
    ),
    'layout' => 'vertical',
    ),
  ),
);

$widget_config["content-types"] = array('sponsored_longform', 'sponsored_hub');
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
