<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'leadership__fields',
    'title' => 'Leadership',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/page-leadership.php',
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
            'key' => 'leadership__hero_tab',
            'label' => 'Hero',
            'type' => 'tab',
        ),
        array(
            'key' => 'leadership__hero_display',
            'label' => 'Display',
            'name' => 'hero_display',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Show this section',
            'ui_off_text' => 'Hide this section',
        ),
        
        array(
            'key' => 'leadership__hero_spacing',
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
            'key' => 'leadership__hero_vertical_alignment',
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
            'key' => 'leadership__hero_image_alignment',
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
            'key' => 'leadership__hero_image',
            'label' => 'Image',
            'name' => 'hero_image',
            'type' => 'image',
            'return_format' => 'array',
            'wrapper' => array(
                'width' => '50'
            ),
            'preview_size' => 'thumbnail',
        ),
        array(
            'key' => 'our-members__hero_image_tile',
            'label' => 'Extended Image Tile',
            'name' => 'hero_image_tile',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'medium',
            'wrapper' => array(
                'width' => '50'
            ),
        ),
        
        array(
            'key' => 'leadership__hero_heading',
            'label' => 'Heading',
            'name' => 'hero_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'leadership__hero_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'hero_sub_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'leadership__hero_content',
            'label' => 'Content',
            'name' => 'hero_content',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload' => 0,
        ),
        array(
            'key' => 'leadership__hero_cta_link',
            'label' => 'CTA Link',
            'name' => 'hero_cta_link',
            'type' => 'link',
        ), 

        /*  JUMP LINKS MENU
        ============================= */
        array(
            'key' => 'leadership__jump-links_tab',
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
            'key' => 'leadership__jump-links_display',
            'label' => 'Display',
            'name' => 'jump-links_display',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Show jump link menu',
            'ui_off_text' => 'Hide jump link menu',
        ),

        /*  TEAM MEMBER ROWS
        ============================= */
        array(
            'key' => 'leadership__sections_tab',
            'label' => 'Team Members',
            'type' => 'tab',
        ),
        array(
            'key' => 'leadership__sections',
            'label' => 'Team Member Sections',
            'name' => 'leadership_sections',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'row',
            'button_label' => 'Add Section',
            'sub_fields' => array(
                array(
                    'key' => 'leadership_team__display',
                    'label' => 'Display',
                    'name' => 'team_display',
                    'type' => 'true_false',
                    'ui' => 1,
                    'ui_on_text' => 'Show this section',
                    'ui_off_text' => 'Hide this section',
                ),
                array(
                    'key' => 'leadership_team__jump_menu',
                    'label' => 'Jump Links Menu',
                    'name' => 'team_jump_menu',
                    'type' => 'group',
                    'layout' => 'block',
                    'instructions' => 'A hidden section is automatically removed from the Jump Link Menu.',
                    'sub_fields' => array(
                        array(
                            'key' => 'leadership_team_menu_display',
                            'label' => 'Display',
                            'name' => 'menu-display',
                            'type' => 'true_false',
                            'ui' => 1,
                            'ui_on_text' => 'Jump Menu Link On',
                            'ui_off_text' => 'Jump Menu Link Off',
                            'instructions' => 'Show or hide this section in the jump menu',
                            'wrapper' => array(
                                'width' => '50'
                            ),
                        ),
                        array(
                            'key' => 'leadership_team_menu_name',
                            'label' => 'Jump Menu Button Name',
                            'instructions' => 'The name of this section as it should appear in the jump menu.',
                            'name' => 'menu-name',
                            'type' => 'text',
                            'placeholder' => 'Our Story',
                            'wrapper' => array(
                                'width' => '50'
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'leadership_team__title',
                    'label' => 'Section Title',
                    'name' => 'team_title',
                    'type' => 'text',
                    'required' => 1
                ),
                array(
                    'key' => 'leadership_team__copy',
                    'label' => 'Section Copy',
                    'name' => 'team_copy',
                    'type' => 'wysiwyg',
                    'type' => 'wysiwyg',
                    'toolbar' => 'full',
                    'media_upload' => 0
                ),
                array(
                    'key' => 'leadership_team__members',
                    'label' => 'Team Members',
                    'name' => 'leadership_team_items',
                    'type' => 'relationship',
                    'post_type' => 'team-members',
                    // 'taxonomy' => array('category:brain-waves-video-interviews'),
                    'filters' => array('search'),
                ),   
            ),
        ),


        /*  YELLOW CTA
        ============================= */
        array(
            'key' => 'leadership__yellow-cta__tab',
            'label' => 'Yellow CTA',
            'type' => 'tab',
        ),
        array(
            'key' => 'leadership__yellow-cta__display',
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
            'key' => 'leadership__yellow-cta__heading',
            'label' => 'Heading',
            'name' => 'yellow-cta__heading',
            'type' => 'text',
        ),
        array(
            'key' => 'leadership__yellow-cta__content',
            'label' => 'Content',
            'name' => 'yellow-cta__content',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload' => 0,
        ),
        array(
            'key' => 'leadership__yellow-cta__link',
            'label' => 'CTA Link',
            'name' => 'yellow-cta__link',
            'type' => 'link',
            'wrapper' => array(
                'width' => '50'
            ),
        ),
        array(
            'key' => 'leadership__yellow-cta__img',
            'label' => 'CTA Image',
            'name' => 'yellow-cta__image',
            'type' => 'image',
            'return_format' => 'array',
            'wrapper' => array(
                'width' => '50'
            ),
        ),
),
));

endif;