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
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'bc__block_1_background',
        'label' => 'Background Color',
        'name' => 'block_1_background',
        'type' => 'select',
        'choices' => array(
            'white' => 'White',
            'light-blue' => 'Light Blue'
        )
      ),
      array(
        'key' => 'bc__block_1_pre_heading',
        'label' => 'Pre Heading',
        'name' => 'block_1_pre_heading',
        'type' => 'text',
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
      array(
        'key' => 'bc__block_1_statement',
        'label' => 'Statement',
        'name' => 'block_1_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_1_content',
        'label' => 'Content',
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
        'label' => 'Content Block 2',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__block_2_display',
        'label' => 'Display',
        'name' => 'block_2_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'bc__block_2_background',
        'label' => 'Background Color',
        'name' => 'block_2_background',
        'type' => 'select',
        'choices' => array(
            'white' => 'White',
            'light-blue' => 'Light Blue'
        )
      ),
      array(
        'key' => 'bc__block_2_pre_heading',
        'label' => 'Pre Heading',
        'name' => 'block_2_pre_heading',
        'type' => 'text',
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
      array(
        'key' => 'bc__block_2_statement',
        'label' => 'Statement',
        'name' => 'block_2_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_2_content',
        'label' => 'Content',
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
        'instructions' => '',
        'required' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'row',
        'button_label' => 'Add Stat',
        'sub_fields' => array(
            array(
              'key' => 'bc__block_2_item__image',
              'label' => 'Image',
              'name' => 'image',
              'type' => 'image',
              'return_format' => 'array',
            ),
            array(
              'key' => 'bc__block_2_item__title',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
            ), 
        ),
      ),

      /**
       * Content Block 3
       */
      array(
        'key' => 'bc__block_3_heading_tab',
        'label' => 'Content Block 3',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__block_3_display',
        'label' => 'Display',
        'name' => 'block_3_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'bc__block_3_background',
        'label' => 'Background Color',
        'name' => 'block_3_background',
        'type' => 'select',
        'choices' => array(
            'white' => 'White',
            'light-blue' => 'Light Blue'
        )
      ),
      array(
        'key' => 'bc__block_3_pre_heading',
        'label' => 'Pre Heading',
        'name' => 'block_3_pre_heading',
        'type' => 'text',
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
      array(
        'key' => 'bc__block_3_statement',
        'label' => 'Statement',
        'name' => 'block_3_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_3_content',
        'label' => 'Content',
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
        'instructions' => '',
        'required' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'row',
        'button_label' => 'Add Stat',
        'sub_fields' => array(
            array(
              'key' => 'bc__block_2_item__percentage',
              'label' => 'Percentage',
              'name' => 'percentage',
              'type' => 'number',
              'min' => 0,
              'max' => 100
            ),
            array(
              'key' => 'bc__block_2_item__label',
              'label' => 'Label',
              'name' => 'label',
              'type' => 'text',
            ), 
        ),
      ),

      /**
       * Content Block 4
       */
      array(
        'key' => 'bc__block_4_heading_tab',
        'label' => 'Content Block 4',
        'type' => 'tab',
      ),
      array(
        'key' => 'bc__block_4_display',
        'label' => 'Display',
        'name' => 'block_4_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'bc__block_4_background',
        'label' => 'Background Color',
        'name' => 'block_4_background',
        'type' => 'select',
        'choices' => array(
            'white' => 'White',
            'light-blue' => 'Light Blue'
        )
      ),
      array(
        'key' => 'bc__block_4_pre_heading',
        'label' => 'Pre Heading',
        'name' => 'block_4_pre_heading',
        'type' => 'text',
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
      array(
        'key' => 'bc__block_4_statement',
        'label' => 'Statement',
        'name' => 'block_4_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_4_content',
        'label' => 'Content',
        'name' => 'block_4_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'bc__block_4_snippet_heading',
        'label' => 'Snippet Heading',
        'name' => 'block_4_snippet_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'bc__block_4_snippet_left_sub_heading',
        'label' => 'Left Sub Heading',
        'name' => 'block_4_snippet_left_sub_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'bc__block_4_snippet_left_items',
        'label' => 'Left Bullets',
        'name' => 'block_4_snippet_left_items',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'row',
        'button_label' => 'Add Bullet',
        'sub_fields' => array(
            array(
              'key' => 'bc__block_4_snippet_left_item_text',
              'label' => 'Bullet text',
              'name' => 'text',
              'type' => 'text',
            ), 
        ),
      ),
      array(
        'key' => 'bc__block_4_snippet_right_sub_heading',
        'label' => 'Right Sub Heading',
        'name' => 'block_4_snippet_right_sub_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'bc__block_4_snippet_right_items',
        'label' => 'Right Bullets',
        'name' => 'block_4_snippet_right_items',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'row',
        'button_label' => 'Add Bullet',
        'sub_fields' => array(
            array(
              'key' => 'bc__block_4_snippet_right_item_text',
              'label' => 'Bullet text',
              'name' => 'text',
              'type' => 'text',
            ), 
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
        'message' => 'Check to display this section'
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