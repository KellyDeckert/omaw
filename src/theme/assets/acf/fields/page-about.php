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

/*  BLUE CTA
============================= */
array(
  'key' => 'about__blue-cta_tab',
  'label' => 'Blue CTA',
  'type' => 'tab',
),
array(
  'key' => 'about__blue-cta_display',
  'label' => 'Display',
  'name' => 'blue-cta_display',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Show this section',
  'ui_off_text' => 'Hide this section',
),
array(
  'key' => 'about__blue-cta_extend',
  'label' => 'Extend Background Color',
  'name' => 'blue-cta_extend',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Hide extended background color',
  'ui_off_text' => 'Show extended background color',
),
array(
  'key' => 'about__blue-cta_heading',
  'label' => 'Heading',
  'name' => 'blue-cta_heading',
  'type' => 'text',
), 
array(
  'key' => 'about__blue-cta_sub_heading',
  'label' => 'Sub Heading',
  'name' => 'blue-cta_sub_heading',
  'type' => 'text',
),     
array(
  'key' => 'about__blue-cta_blue-cta_link',
  'label' => 'CTA Link',
  'name' => 'cta_link',
  'type' => 'link',
), 

/*  JUMP LINKS MENU
============================= */
array(
  'key' => 'about__jump-links_tab',
  'label' => 'Jump Links Menu',
  'type' => 'tab',
),
array(
  'key' => 'about__jump-links_msg',
  'name' => 'jump-links_msg',
  'type' => 'message',
  'message' => 'The links in this menu are dynamically generated. To modify the name in the menu or disable a link, edit the Jump Menu Section in each tab. Hidden sections are not included in the menu.',
),
array(
  'key' => 'about__jump-links_display',
  'label' => 'Display',
  'name' => 'jump-links_display',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Show jump link menu',
  'ui_off_text' => 'Hide jump link menu',
),


/*  OUR STORY
============================= */
  array(
    'key' => 'about__hero_tab',
    'label' => 'Our Story',
    'type' => 'tab',
  ),
  array(
    'key' => 'about__story__display',
    'label' => 'Display',
    'name' => 'story_display',
    'type' => 'true_false',
    'ui' => 1,
    'ui_on_text' => 'Show this section',
    'ui_off_text' => 'Hide this section',
  ),
  array(
    'key' => 'about__story__jump_menu',
    'label' => 'Jump Links Menu',
    'name' => 'story_jump_menu',
    'type' => 'group',
    'layout' => 'block',
    'instructions' => 'A hidden section is automatically removed from the Jump Link Menu.',
    'sub_fields' => array(
      array(
        'key' => 'about_story_menu_display',
        'label' => 'Display',
        'name' => 'menu-display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Jump Menu Link On',
        'ui_off_text' => 'Jump Menu Link Off',
      ),
      array(
        'key' => 'about_story_menu_name',
        'label' => 'Jump Menu Button Name',
        'instructions' => 'The name of this section as it should appear in the jump menu.',
        'name' => 'menu-name',
        'type' => 'text',
        'placeholder' => 'Our Story',
      ),
    ),
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
    'toolbar' => 'full',
    'media_upload' => 0,
  ),
    

/*  SINGLE QUOTE
============================= */
  array(
    'key' => 'about__quote__tab',
    'label' => 'Quote',
    'type' => 'tab',
  ),
  array(
    'key' => 'about__quote__display',
    'label' => 'Display',
    'name' => 'quote__display',
    'type' => 'true_false',
    'ui' => 1,
    'ui_on_text' => 'Show this section',
    'ui_off_text' => 'Hide this section',
  ),
  array(
    'key' => 'about__quote__jump_menu',
    'label' => 'Jump Links Menu',
    'name' => 'quote__jump_menu',
    'type' => 'group',
    'layout' => 'block',
    'instructions' => 'A hidden section is automatically removed from the Jump Link Menu.',
    'sub_fields' => array(
      array(
        'key' => 'about_quote_menu_display',
        'label' => 'Display',
        'name' => 'menu-display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Jump Menu Link On',
        'ui_off_text' => 'Jump Menu Link Off',
      ),
      array(
        'key' => 'about_quote_menu_name',
        'label' => 'Jump Menu Button Name',
        'instructions' => 'The name of this section as it should appear in the jump menu.',
        'name' => 'menu-name',
        'type' => 'text',
        'placeholder' => 'Our Beliefs',
      ),
    ),
  ),
  array(
    'key' => 'about__quote__image',
    'label' => 'Desktop Image',
    'name' => 'quote__image',
    'type' => 'image',
    'return_format' => 'array'
  ),
  array(
    'key' => 'about__quote__quote',
    'label' => 'Quote',
    'name' => 'quote__quote',
    'type' => 'textarea',
    'rows' => 2
  ), 
  array(
    'key' => 'about__quote__title',
    'label' => 'Title',
    'name' => 'quote__title',
    'type' => 'text',
  ), 
  array(
    'key' => 'about__quote__organization',
    'label' => 'Organization',
    'name' => 'quote__organization',
    'type' => 'text',
  ),
/*  VALUES - CARD SCROLLER
============================= */
  array(
    'key' => 'about__scrolling-cards__tab',
    'label' => 'Values',
    'type' => 'tab',
  ),
  array(
    'key' => 'about__scrolling-cards__display',
    'label' => 'Display',
    'name' => 'scrolling-cards__display',
    'type' => 'true_false',
    'ui' => 1,
    'ui_on_text' => 'Show this section',
    'ui_off_text' => 'Hide this section',
  ),
  array(
    'key' => 'about__scrolling-cards__jump_menu',
    'label' => 'Jump Links Menu',
    'name' => 'scrolling-cards__jump_menu',
    'type' => 'group',
    'layout' => 'block',
    'instructions' => 'A hidden section is automatically removed from the Jump Link Menu.',
    'sub_fields' => array(
      array(
        'key' => 'about_scrolling-cards_menu_display',
        'label' => 'Display',
        'name' => 'menu-display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Jump Menu Link On',
        'ui_off_text' => 'Jump Menu Link Off',
      ),
      array(
        'key' => 'about_scrolling-cards_menu_name',
        'label' => 'Jump Menu Button Name',
        'instructions' => 'The name of this section as it should appear in the jump menu.',
        'name' => 'menu-name',
        'type' => 'text',
        'placeholder' => 'Our Values',
      ),
    ),
  ),
  array(
    'key' => 'about__scrolling-cards__heading',
    'label' => 'Heading',
    'name' => 'scrolling-cards__heading',
    'type' => 'text',
  ), 
  array(
    'key' => 'about__scrolling-cards__cards',
    'label' => 'Heading',
    'name' => 'cards',
    'type' => 'repeater',
    'min' => 3,
    'max' => 7,
    'layout' => 'row',
    'sub_fields' => array(
      array(
        'key' => 'about__scroller__heading',
        'label' => 'Card Heading',
        'name' => 'scroller__heading',
        'type' => 'text'
      ), 
      array(
        'key' => 'about__scroller__content',
        'label' => 'Card Content',
        'name' => 'scroller__content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0
      ),
    )
  ),
  
/*  YELLOW CTA
============================= */
array(
  'key' => 'about__yellow-cta__tab',
  'label' => 'Yellow CTA',
  'type' => 'tab',
),
array(
  'key' => 'about__yellow-cta__display',
  'label' => 'Display',
  'name' => 'yellow-cta__display',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Show this section',
  'ui_off_text' => 'Hide this section',
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