<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'about__fields',
    'title' => 'About',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/page-about.php',
        ),
      ),
    ),
    'hide_on_screen' => array(
      0 => 'the_content',
      1 => 'excerpt',
      2 => 'custom_fields',
      3 => 'discussion',
      4 => 'comments',
      5 => 'slug',
      6 => 'author',
      7 => 'format',
      8 => 'featured_image',
      9 => 'categories',
      10 => 'tags',
      11 => 'send-trackbacks',
    ),
    'fields' => array(


/*  OUR STORY
============================= */
  array(
    'key' => 'about__hero_tab',
    'label' => 'Our Story',
    'type' => 'tab',
  ),
  array(
    'key' => 'about__story_display',
    'label' => 'Display',
    'name' => 'story_display',
    'type' => 'true_false',
    'message' => 'Check to display this section'
  ),
  array(
    'key' => 'about__story_image',
    'label' => 'Image',
    'name' => 'story_image',
    'type' => 'image',
    'return_format' => 'array',
  ),
  array(
    'key' => 'about__story_image_tile',
    'label' => 'Extended Image Tile',
    'name' => 'story_image_tile',
    'type' => 'image',
    'return_format' => 'array',
  ),
  array(
    'key' => 'about__story_label',
    'label' => 'Section Label',
    'name' => 'story_label',
    'type' => 'text',
    'default_value' => 'Our Story',
  ), 
  array(
    'key' => 'about__story_heading',
    'label' => 'Heading',
    'name' => 'story_heading',
    'type' => 'text',
  ),     
  array(
    'key' => 'about__story_content',
    'label' => 'Content',
    'name' => 'story_content',
    'type' => 'wysiwyg',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ),
  array(
    'key' => 'about__story_overlay_content',
    'label' => 'Overlay Content',
    'name' => 'story_overlay_content',
    'type' => 'wysiwyg',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ),
    
/*  YELLOW CTA
============================= */
  array(
    'key' => 'about__yellow-cta__tab',
    'label' => 'CTA',
    'type' => 'tab',
  ),
  array(
    'key' => 'about__yellow-cta__display',
    'label' => 'Display',
    'name' => 'yellow-cta__display',
    'type' => 'true_false',
    'message' => 'Check to display this CTA'
  ),
  array(
    'key' => 'about__yellow-cta__heading',
    'label' => 'Heading',
    'name' => 'yellow-cta__heading',
    'type' => 'text',
  ), 
  array(
    'key' => 'about__yellow-cta__content',
    'label' => 'Content',
    'name' => 'yellow-cta__content',
    'type' => 'wysiwyg',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ),
  array(
    'key' => 'about__yellow-cta__link',
    'label' => 'CTA Link',
    'name' => 'yellow-cta__link',
    'type' => 'link',
  ),
  array(
    'key' => 'about__yellow-cta__img',
    'label' => 'CTA Image',
    'name' => 'yellow-cta__image',
    'type' => 'image',
    'return_format' => 'array',
  ),

),
));
endif;