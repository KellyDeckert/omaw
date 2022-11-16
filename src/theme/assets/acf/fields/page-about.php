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

/*  HERO
============================= */
array(
  'key' => 'about__hero_tab',
  'label' => 'Hero',
  'type' => 'tab',
),
array(
  'key' => 'about__hero_display',
  'label' => 'Display',
  'name' => 'hero_display',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Show this section',
  'ui_off_text' => 'Hide this section',
),
array(
  'key' => 'about__container_width',
  'label' => 'Section Width',
  'name' => 'hero_width',
  'type' => 'select',
  'choices' => array(
      'layout--1440' => 'Default',
      'layout--1080' => 'Site Width (1080px)',
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),
array(
  'key' => 'about__hero_spacing',
  'label' => 'Section top and bottom spacing',
  'name' => 'hero_spacing',
  'type' => 'select',
  'choices' => array(
      'padding-120' => '120px padding',
      'padding-180' => '180px padding',
      'margin-120' => '120px margin',
      'margin-180' => '180px margin'
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),
array(
  'key' => 'about__hero_vertical_alignment',
  'label' => 'Image and Copy Vertical Alignment',
  'name' => 'hero_vertical_alignment',
  'type' => 'select',
  'choices' => array(
      'top' => 'Top',
      'center' => 'Center',
      'bottom' => 'Bottom'
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),
array(
  'key' => 'about__hero_image_alignment',
  'label' => 'Image Alignment',
  'name' => 'hero_image_alignment',
  'type' => 'select',
  'choices' => array(
      'left' => 'Left',
      'right' => 'Right'
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),
array(
  'key' => 'about__hero_image',
  'label' => 'Image',
  'name' => 'hero_image',
  'type' => 'image',
  'return_format' => 'array',
  'preview_size' => 'thumbnail',
  'wrapper' => array(
    'width' => '50'
  ),
),
array(
  'key' => 'our-members__hero_image_tile',
  'label' => 'Extended Image Tile',
  'name' => 'hero_image_tile',
  'type' => 'image',
  'preview_size' => 'medium',
  'return_format' => 'array',
  'wrapper' => array(
    'width' => '50'
  ),
),

array(
  'key' => 'about__hero_heading',
  'label' => 'Heading',
  'name' => 'hero_heading',
  'type' => 'text',
),
array(
  'key' => 'about__hero_sub_heading',
  'label' => 'Sub Heading',
  'name' => 'hero_sub_heading',
  'type' => 'text',
),
array(
  'key' => 'about__hero_content',
  'label' => 'Content',
  'name' => 'hero_content',
  'type' => 'wysiwyg',
  'toolbar' => 'full',
  'media_upload' => 0,
),
array(
  'key' => 'about__hero_cta_link',
  'label' => 'CTA Link',
  'name' => 'hero_cta_link',
  'type' => 'link',
), 


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
  'wrapper' => array(
    'width' => '50'
  ),
),
array(
  'key' => 'about__blue-cta_sub_heading',
  'label' => 'Sub Heading',
  'name' => 'blue-cta_sub_heading',
  'type' => 'text',
  'wrapper' => array(
    'width' => '50'
  ),
),
array(
  'key' => 'about__blue-cta_blue-cta_link',
  'label' => 'CTA Link',
  'name' => 'blue-cta_link',
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
  'key' => 'leadership__jump-links_msg',
  'name' => 'jump-links_msg',
  'type' => 'message',
  'message' => 'The links in this menu are dynamically generated.<br>To modify the name in the menu or disable a link, edit the Jump Menu Section in each tab.<br>Hidden sections are automatically not included in the jump menu.',
  'wrapper' => array(
      'class' => 'bkomaw'
  ),
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

/*  MISSION
============================= */
array(
  'key' => 'about__mission_heading_tab',
  'label' => 'Mission',
  'type' => 'tab',
),
array(
  'key' => 'about__mission_display',
  'label' => 'Display',
  'name' => 'mission_display',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Show this section',
  'ui_off_text' => 'Hide this section',
),
array(
  'key' => 'about__mission__jump_menu',
  'label' => 'Jump Links Menu',
  'name' => 'mission_jump_menu',
  'type' => 'group',
  'layout' => 'block',
  'instructions' => 'A hidden section is automatically removed from the Jump Link Menu.',
  'sub_fields' => array(
    array(
      'key' => 'about_mission_menu_display',
      'label' => 'Display',
      'name' => 'menu-display',
      'type' => 'true_false',
      'ui' => 1,
      'ui_on_text' => 'Jump Menu Link On',
      'ui_off_text' => 'Jump Menu Link Off',
      'instructions' => 'Show or hide this section in the jump menu',
      'wrapper' => array(
        'width' => '33'
      ),
    ),
    array(
      'key' => 'about_mission_menu_name',
      'label' => 'Jump Menu Button Name',
      'instructions' => 'The name of this section as it should appear in the jump menu.',
      'name' => 'menu-name',
      'type' => 'text',
      'placeholder' => 'Our Mission',
      'wrapper' => array(
        'width' => '66'
      ),
    ),
  ),
),
array(
  'key' => 'about__mission_background',
  'label' => 'Background Color',
  'name' => 'mission_background',
  'type' => 'select',
  'choices' => array(
      'white' => 'White',
      'light-blue' => 'Light Blue'
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),
array(
  'key' => 'about__mission_header_group',
  'name' => 'mission_header_group',
  'label' => 'Section Header',
  'type' => 'group',
  'sub_fields' => array(
    array(
      'key' => 'about__mission_group_display',
      'label' => 'Display',
      'name' => 'mission_header_display',
      'type' => 'true_false',
      'ui' => 1,
      'ui_on_text' => 'Show the section header',
      'ui_off_text' => 'Hide the section header',
    ),
    array(
      'key' => 'about__mission_pre_heading',
      'label' => 'Small Heading',
      'name' => 'mission_pre_heading',
      'type' => 'text',
      'placeholder' => 'Our Mission',
      'wrapper' => array(
        'width' => '50'
      ),
    ),
    array(
      'key' => 'about__mission_heading',
      'label' => 'Heading',
      'name' => 'mission_heading',
      'type' => 'text',
      'placeholder' => 'A Healthier Workplace for All',
    ),
    array(
      'key' => 'about__mission_sub_heading',
      'label' => 'Sub Heading',
      'name' => 'mission_sub_heading',
      'type' => 'text',
      'placeholder' => 'One Mind at Work is a movement of business leaders driving change in global workplaces committed to improving psychological safety and thriving. ',
    ),
  ),
),
array(
  'key' => 'about__mission_statement',
  'label' => 'Left Column',
  'name' => 'mission_statement',
  'type' => 'wysiwyg',
  'toolbar' => 'full',
  'media_upload' => 0,
),
array(
  'key' => 'about__mission_content',
  'label' => 'Right Column',
  'name' => 'mission_content',
  'type' => 'wysiwyg',
  'toolbar' => 'full',
  'media_upload' => 0,
),


/*  OUR STORY
============================= */
  array(
    'key' => 'about__story_tab',
    'label' => 'Story',
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
        'instructions' => 'Show or hide this section in the jump menu',
        'wrapper' => array(
          'width' => '33'
        ),
      ),
      array(
        'key' => 'about_story_menu_name',
        'label' => 'Jump Menu Button Name',
        'instructions' => 'The name of this section as it should appear in the jump menu.',
        'name' => 'menu-name',
        'type' => 'text',
        'placeholder' => 'Our Story',
        'wrapper' => array(
          'width' => '66'
        ),
      ),
    ),
  ),
  array(
    'key' => 'about__story_label',
    'label' => 'Small Heading',
    'name' => 'story_label',
    'type' => 'text',
    'default_value' => 'Our Story',
    'wrapper' => array(
      'width' => '25'
    ),
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
    'toolbar' => 'full',
    'media_upload' => 0,
  ),
  array(
    'key' => 'about__story_image',
    'label' => 'Image',
    'name' => 'story_image',
    'type' => 'image',
    'return_format' => 'array',
    'preview_size' => 'medium',
    'wrapper' => array(
      'width' => '50'
    ),
  ),
  array(
    'key' => 'about__story_image_tile',
    'label' => 'Extended Image Tile',
    'name' => 'story_image_tile',
    'type' => 'image',
    'return_format' => 'array',
    'preview_size' => 'medium',
    'wrapper' => array(
      'width' => '50'
    ),
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
        'instructions' => 'Show or hide this section in the jump menu',
        'wrapper' => array(
          'width' => '33'
        ),
      ),
      array(
        'key' => 'about_quote_menu_name',
        'label' => 'Jump Menu Button Name',
        'instructions' => 'The name of this section as it should appear in the jump menu.',
        'name' => 'menu-name',
        'type' => 'text',
        'placeholder' => 'Our Beliefs',
        'wrapper' => array(
          'width' => '66'
        ),
      ),
    ),
  ),
  array(
    'key' => 'about__quote__quote',
    'label' => 'Quote',
    'name' => 'quote__quote',
    'type' => 'textarea',
    'rows' => 6,
    'wrapper' => array(
      'width' => '50'
    ),
  ),
  array(
    'key' => 'about__quote__image',
    'label' => 'Image',
    'name' => 'quote__image',
    'type' => 'image',
    'preview_size' => 'thumbnail',
    'return_format' => 'array',
    'wrapper' => array(
      'width' => '50'
    ),
  ),
  array(
    'key' => 'about__quote__title',
    'label' => 'Title',
    'name' => 'quote__title',
    'type' => 'text',
    'wrapper' => array(
      'width' => '50'
    ),
  ),
  array(
    'key' => 'about__quote__organization',
    'label' => 'Organization',
    'name' => 'quote__organization',
    'type' => 'text',
    'wrapper' => array(
      'width' => '50'
    ),
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
        'instructions' => 'Show or hide this section in the jump menu',
        'wrapper' => array(
          'width' => '33'
        ),
      ),
      array(
        'key' => 'about_scrolling-cards_menu_name',
        'label' => 'Jump Menu Button Name',
        'instructions' => 'The name of this section as it should appear in the jump menu.',
        'name' => 'menu-name',
        'type' => 'text',
        'placeholder' => 'Our Values',
        'wrapper' => array(
          'width' => '66'
        ),
      ),
    ),
  ),
  array(
    'key' => 'about__scrolling-cards__heading',
    'label' => 'Sticky Scrolling Heading',
    'name' => 'scrolling-cards__heading',
    'type' => 'text',
    'wrapper' => array(
      'width' => '50'
    ),
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

/*  LEADERSHIP
============================= */
array(
  'key' => 'about__leadership_tab',
  'label' => 'Leadership',
  'type' => 'tab',
),
array(
  'key' => 'about__leadership_display',
  'label' => 'Display',
  'name' => 'leadership_display',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Show this section',
  'ui_off_text' => 'Hide this section',
),
array(
  'key' => 'about__leadership__jump_menu',
  'label' => 'Jump Links Menu',
  'name' => 'leadership_jump_menu',
  'type' => 'group',
  'layout' => 'block',
  'instructions' => 'A hidden section is automatically removed from the Jump Link Menu.',
  'sub_fields' => array(
    array(
      'key' => 'about_leadership_menu_display',
      'label' => 'Display',
      'name' => 'menu-display',
      'type' => 'true_false',
      'ui' => 1,
      'ui_on_text' => 'Jump Menu Link On',
      'ui_off_text' => 'Jump Menu Link Off',
      'instructions' => 'Show or hide this section in the jump menu',
      'wrapper' => array(
        'width' => '33'
      ),
    ),
    array(
      'key' => 'about_leadership_menu_name',
      'label' => 'Jump Menu Button Name',
      'instructions' => 'The name of this section as it should appear in the jump menu.',
      'name' => 'menu-name',
      'type' => 'text',
      'placeholder' => 'Leadership',
      'wrapper' => array(
        'width' => '66'
      ),
    ),
  ),
),
array(
  'key' => 'about__leadership_spacing',
  'label' => 'Section top and bottom spacing',
  'name' => 'leadership_spacing',
  'type' => 'select',
  'choices' => array(
      'padding-120' => '120px padding',
      'padding-180' => '180px padding',
      'margin-120' => '120px margin',
      'margin-180' => '180px margin'
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),
array(
  'key' => 'about__leadership_vertical_alignment',
  'label' => 'Image and Copy Vertical Alignment',
  'name' => 'leadership_vertical_alignment',
  'type' => 'select',
  'choices' => array(
      'top' => 'Top',
      'center' => 'Center',
      'bottom' => 'Bottom'
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),
array(
  'key' => 'about__leadership_image_alignment',
  'label' => 'Image Alignment',
  'name' => 'leadership_image_alignment',
  'type' => 'select',
  'choices' => array(
      'left' => 'Left',
      'right' => 'Right'
  ),
  'wrapper' => array(
    'width' => '25'
  ),
),

array(
  'key' => 'about__leadership_image',
  'label' => 'Image',
  'name' => 'leadership_image',
  'type' => 'image',
  'return_format' => 'array',
  'wrapper' => array(
    'width' => '50'
  ),
),
array(
  'key' => 'about__leadership_image_tile',
  'label' => 'Extended Image Tile',
  'name' => 'leadership_image_tile',
  'type' => 'image',
  'return_format' => 'array',
  'wrapper' => array(
    'width' => '50'
  ),
),
array(
  'key' => 'about__leadership_heading',
  'label' => 'Heading',
  'name' => 'leadership_heading',
  'type' => 'text',
), 
array(
  'key' => 'about__leadership_sub_heading',
  'label' => 'Sub Heading',
  'name' => 'leadership_sub_heading',
  'type' => 'text',
),     
array(
  'key' => 'about__leadership_content',
  'label' => 'Content',
  'name' => 'leadership_content',
  'type' => 'wysiwyg',
  'toolbar' => 'full',
  'media_upload' => 0,
),
array(
  'key' => 'about__leadership_cta_link',
  'label' => 'CTA Link',
  'name' => 'leadership_cta_link',
  'type' => 'link',
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
  'key' => 'bc__yellow-cta__padding',
  'label' => 'Padding',
  'name' => 'yellow-cta__padding',
  'type' => 'true_false',
  'ui' => 1,
  'ui_on_text' => 'Extra Padding',
  'ui_off_text' => 'Default',
),
array(
  'key' => 'about__yellow-cta__heading',
  'label' => 'Heading',
  'name' => 'yellow-cta__heading',
  'type' => 'text',
  'wrapper' => array(
    'width' => '50'
  ),
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
  'wrapper' => array(
    'width' => '50'
  ),
),
array(
  'key' => 'about__yellow-cta__img',
  'label' => 'CTA Image',
  'name' => 'yellow-cta__image',
  'type' => 'image',
  'return_format' => 'array',
  'preview_size' => 'medium',
  'wrapper' => array(
    'width' => '50'
  ),
),


),
));
endif;