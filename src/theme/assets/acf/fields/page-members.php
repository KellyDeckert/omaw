<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'our-members__fields',
    'title' => 'Homepage',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/page-members.php',
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

       /**
       * Hero
       */
      array(
        'key' => 'our-members__hero_tab',
        'label' => 'Hero',
        'type' => 'tab',
      ),
      array(
        'key' => 'our-members__hero_display',
        'label' => 'Display',
        'name' => 'hero_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'our-members__hero_spacing',
        'label' => 'Section top and bottom spacing',
        'name' => 'hero_spacing',
        'type' => 'select',
        'choices' => array(
            'padding-120' => '120px padding',
            'padding-180' => '180px padding',
            'margin-120' => '120px margin',
            'margin-180' => '180px margin'
        )
      ),
      array(
        'key' => 'our-members__hero_vertical_alignment',
        'label' => 'Image and Copy Vertical Alignment',
        'name' => 'hero_vertical_alignment',
        'type' => 'select',
        'choices' => array(
            'top' => 'Top',
            'center' => 'Center',
            'bottom' => 'Bottom'
        )
      ),
      array(
        'key' => 'our-members__hero_image_alignment',
        'label' => 'Image Alignment',
        'name' => 'hero_image_alignment',
        'type' => 'select',
        'choices' => array(
            'left' => 'Left',
            'right' => 'Right'
        )
      ),

      array(
        'key' => 'our-members__hero_image',
        'label' => 'Image',
        'name' => 'hero_image',
        'type' => 'image',
        'return_format' => 'array',
      ),
      array(
        'key' => 'our-members__hero_image_tile',
        'label' => 'Extended Image Tile',
        'name' => 'hero_image_tile',
        'type' => 'image',
        'return_format' => 'array',
      ),
      array(
        'key' => 'our-members__hero_heading',
        'label' => 'Heading',
        'name' => 'hero_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'our-members__hero_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'hero_sub_heading',
        'type' => 'text',
      ),     
      array(
        'key' => 'our-members__hero_content',
        'label' => 'Content',
        'name' => 'hero_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'our-members__hero_cta_link',
        'label' => 'CTA Link',
        'name' => 'hero_cta_link',
        'type' => 'link',
      ), 

    ),
  ));

endif;