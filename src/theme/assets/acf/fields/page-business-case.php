<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'bc__fields',
    'title' => 'Homepage',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/page-business-case.php',
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
       * Content Block 1
       */
      array(
        'key' => 'bc__block_1_heading_tab',
        'label' => 'Content Block 1',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__block_1_display',
        'label' => 'Display',
        'name' => 'block_1_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'bc__block_1_background',
        'label' => 'Background Color',
        'name' => 'block_1_background',
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
        'key' => 'bc__block_1_header_group',
        'label' => 'Section Header',
        'name' => 'header_group_1',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'bcb1_header_group_display',
            'label' => 'Display',
            'name' => 'block_1_header_display',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Show the section header',
            'ui_off_text' => 'Hide the section header',
          ),
          array(
            'key' => 'bc__block_1_pre_heading',
            'label' => 'Small Heading',
            'name' => 'block_1_pre_heading',
            'type' => 'text',
            'wrapper' => array(
              'width' => '50'
            ),
          ),
          array(
            'key' => 'bc__block_1_heading',
            'label' => 'Heading',
            'name' => 'block_1_heading',
            'type' => 'text',
          ),
          array(
            'key' => 'bc__block_1_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'block_1_sub_heading',
            'type' => 'text',
          ),
        ),
      ),
      array(
        'key' => 'bc__block_1_statement',
        'label' => 'Left Column',
        'name' => 'block_1_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_1_content',
        'label' => 'Right Column',
        'name' => 'block_1_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),

      /**
       * Content Block 2
       */
      array(
        'key' => 'bc__block_2_heading_tab',
        'label' => 'Content Block 2: Stats',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__block_2_display',
        'label' => 'Display',
        'name' => 'block_2_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'bc__block_2_background',
        'label' => 'Background Color',
        'name' => 'block_2_background',
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
        'key' => 'bc__block_2_header_group',
        'label' => 'Section Header',
        'name' => 'header_group_2',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'bcb2_header_group_display',
            'label' => 'Display',
            'name' => 'block_2_header_display',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Show the section header',
            'ui_off_text' => 'Hide the section header',
          ),
          array(
            'key' => 'bc__block_2_pre_heading',
            'label' => 'Small Heading',
            'name' => 'block_2_pre_heading',
            'type' => 'text',
            'wrapper' => array(
              'width' => '50'
            ),
          ),
          array(
            'key' => 'bc__block_2_heading',
            'label' => 'Heading',
            'name' => 'block_2_heading',
            'type' => 'text',
          ),
          array(
            'key' => 'bc__block_2_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'block_2_sub_heading',
            'type' => 'text',
          ),
        ),
      ),

      array(
        'key' => 'bc__block_2_statement',
        'label' => 'Left Column',
        'name' => 'block_2_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_2_content',
        'label' => 'Right Column',
        'name' => 'block_2_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),

      array(
        'key' => 'bc__block_2_items',
        'label' => 'Stats',
        'name' => 'block_2_items',
        'type' => 'repeater',
        'layout' => 'block',
        'button_label' => 'Add Stat',
        'sub_fields' => array(
            array(
              'key' => 'bc__block_2_item__image',
              'label' => 'Image',
              'name' => 'image',
              'type' => 'image',
              'preview_size' => 'small',
              'return_format' => 'array',
              'wrapper' => array(
                'width' => '33'
              ),
            ),
            array(
              'key' => 'bc__block_2_item__title',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
              'wrapper' => array(
                'width' => '66'
              ),
            ), 
        ),
      ),

      /**
       * Content Block 3
       */
      array(
        'key' => 'bc__block_3_heading_tab',
        'label' => 'Content Block 3: Stats',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__block_3_display',
        'label' => 'Display',
        'name' => 'block_3_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'bc__block_3_background',
        'label' => 'Background Color',
        'name' => 'block_3_background',
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
        'key' => 'bc__block_3_header_group',
        'name' => 'header_group_3',
        'label' => 'Section Header',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'bcb3_header_group_display',
            'label' => 'Display',
            'name' => 'block_3_header_display',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Show the section header',
            'ui_off_text' => 'Hide the section header',
          ),
          array(
            'key' => 'bc__block_3_pre_heading',
            'label' => 'Small Heading',
            'name' => 'block_3_pre_heading',
            'type' => 'text',
            'wrapper' => array(
              'width' => '50'
            ),
          ),
          array(
            'key' => 'bc__block_3_heading',
            'label' => 'Heading',
            'name' => 'block_3_heading',
            'type' => 'text',
          ),
          array(
            'key' => 'bc__block_3_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'block_3_sub_heading',
            'type' => 'text',
          ),
        ),
      ),
      array(
        'key' => 'bc__block_3_statement',
        'label' => 'Left Column',
        'name' => 'block_3_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_3_content',
        'label' => 'Right Column',
        'name' => 'block_3_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_3_items',
        'label' => 'Stats',
        'name' => 'block_3_items',
        'type' => 'repeater',
        'layout' => 'block',
        'button_label' => 'Add Stat',
        'sub_fields' => array(
            array(
              'key' => 'bc__block_2_item__percentage',
              'label' => 'Percentage',
              'name' => 'percentage',
              'type' => 'number',
              'min' => 0,
              'max' => 100,
              'wrapper' => array(
                'width' => '15'
              ),
            ),
            array(
              'key' => 'bc__block_2_item__label',
              'label' => 'Label',
              'name' => 'label',
              'type' => 'text',
              'wrapper' => array(
                'width' => '85'
              ),
            ), 
        ),
      ),

      /**
       * Content Block 4
       */
      array(
        'key' => 'bc__block_4_heading_tab',
        'label' => 'Content Block 4: List',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__block_4_display',
        'label' => 'Display',
        'name' => 'block_4_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'bc__block_4_background',
        'label' => 'Background Color',
        'name' => 'block_4_background',
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
        'key' => 'bc__block_4_header_group',
        'name' => 'header_group_4',
        'label' => 'Section Header',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'bcb4_header_group_display',
            'label' => 'Display',
            'name' => 'block_4_header_display',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Show the section header',
            'ui_off_text' => 'Hide the section header',
          ),
          array(
            'key' => 'bc__block_4_pre_heading',
            'label' => 'Small Heading',
            'name' => 'block_4_pre_heading',
            'type' => 'text',
            'wrapper' => array(
              'width' => '50'
            ),
          ),
          array(
            'key' => 'bc__block_4_heading',
            'label' => 'Heading',
            'name' => 'block_4_heading',
            'type' => 'text',
          ),
          array(
            'key' => 'bc__block_4_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'block_4_sub_heading',
            'type' => 'text',
          ),
        ),
      ),
      array(
        'key' => 'bc__block_4_statement',
        'label' => 'Left Column',
        'name' => 'block_4_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_4_content',
        'label' => 'Right Column',
        'name' => 'block_4_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_4_snippet_heading',
        'label' => 'List Heading',
        'name' => 'block_4_snippet_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'bc__block_4_list_group_left',
        'name' => 'list_group_left',
        'label' => 'Left List',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'bc__block_4_snippet_left_sub_heading',
            'label' => 'Left Column Title',
            'name' => 'block_4_snippet_left_sub_heading',
            'type' => 'text',
          ),
          array(
            'key' => 'bc__block_4_snippet_left_items',
            'label' => 'Left List',
            'name' => 'block_4_snippet_left_items',
            'type' => 'repeater',
            'layout' => 'table',
            'instructions' => 'This is a custom list that uses ▲ bullets.',
            'button_label' => 'Add ▲ List Item',
            'sub_fields' => array(
                array(
                  'key' => 'bc__block_4_snippet_left_item_text',
                  'label' => '▲ List Item Copy',
                  'name' => 'text',
                  'type' => 'text',
                ), 
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '50'
        ),
      ),

      array(
        'key' => 'bc__block_4_list_group_right',
        'name' => 'list_group_right',
        'label' => 'Right List',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'bc__block_4_snippet_right_sub_heading',
            'label' => 'Right Column Title',
            'name' => 'block_4_snippet_right_sub_heading',
            'type' => 'text',
          ),
          array(
            'key' => 'bc__block_4_snippet_right_items',
            'label' => 'Right List',
            'name' => 'block_4_snippet_right_items',
            'type' => 'repeater',
            'layout' => 'table',
            'button_label' => 'Add ▼ List Item',
            'instructions' => 'This is a custom list that uses ▼ bullets.',
            'sub_fields' => array(
                array(
                  'key' => 'bc__block_4_snippet_right_item_text',
                  'label' => '▼ List Item Copy',
                  'name' => 'text',
                  'type' => 'text',
                ), 
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '50'
        ),
      ),

      /*  YELLOW CTA
      ============================= */
      array(
        'key' => 'bc__yellow-cta__tab',
        'label' => 'Yellow CTA',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__yellow-cta__display',
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
        'key' => 'bc__yellow-cta__heading',
        'label' => 'Heading',
        'name' => 'yellow-cta__heading',
        'type' => 'text',
        'wrapper' => array(
          'width' => '50'
        ),
      ),
      array(
        'key' => 'bc__yellow-cta__content',
        'label' => 'Content',
        'name' => 'yellow-cta__content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__yellow-cta__link',
        'label' => 'CTA Link',
        'name' => 'yellow-cta__link',
        'type' => 'link',
        'wrapper' => array(
          'width' => '50'
        ),
      ),
      array(
        'key' => 'bc__yellow-cta__img',
        'label' => 'CTA Image',
        'name' => 'yellow-cta__image',
        'type' => 'image',
        'return_format' => 'array',
        'preview_size' => 'medium',
        'wrapper' => array(
          'width' => '50'
        ),
      ),

      /**
       * Citations
       */
      array(
        'key' => 'bc__citations_tab',
        'label' => 'Citations',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__citations_display',
        'label' => 'Display',
        'name' => 'citations_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'bc__citations_heading',
        'label' => 'Heading',
        'name' => 'citations_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'bc__citations_content',
        'label' => 'Content',
        'name' => 'citations_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),







    ),
  ));

endif;