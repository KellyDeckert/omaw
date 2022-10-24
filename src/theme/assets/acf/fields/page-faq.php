<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'faq__fields',
    'title' => 'Homepage',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/page-faq.php',
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


        /*  JUMP LINKS MENU
        ============================= */
        array(
            'key' => 'faq__jump-links_tab',
            'label' => 'Jump Links Menu',
            'display' => true,
            'type' => 'tab',
        ),
        array(
            'key' => 'faq__jump-links_display',
            'label' => 'Display',
            'name' => 'jump-links_display',
            'type' => 'true_false',
            'instructions' => 'The links in the menu are dynamically generated. To modify the name in the menu, edit the Jump Menu Section Name in each tab.',
            'message' => 'Check to display this quick menu.'
        ),


        /*  FAQ SECTIONS
        ============================= */
        array(
          'key' => 'faq__sections_tab',
          'label' => 'FAQ Sections',
          'type' => 'tab',
        ),
        array(
            'key' => 'faq__sections',
            'label' => 'FAQ Sections',
            'name' => 'faq_sections',
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
            'button_label' => 'Add Section',
            'sub_fields' => array(
              array(
                'key' => 'faq__section_display',
                'label' => 'Display',
                'name' => 'display',
                'type' => 'true_false',
                'message' => 'Check to display this section'
              ),              
              array(
                'key' => 'faq__section_name',
                'label' => 'Name',
                'name' => 'name',
                'type' => 'text',
              ), 
              array(
                'key' => 'faq__section_jump_link_name',
                'label' => 'Jump Menu Section Name',
                'name' => 'jump_link_name',
                'type' => 'text',
              ), 
              array(
                'key' => 'faq__section_items',
                'label' => 'FAQ Items',
                'name' => 'items',
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
                'button_label' => 'Add Item',
                'sub_fields' => array(
                  array(
                    'key' => 'faq__section_item_name',
                    'label' => 'Question',
                    'name' => 'heading',
                    'type' => 'text',
                  ), 
                  array(
                    'key' => 'faq__section_item_content',
                    'label' => 'Answer',
                    'name' => 'content',
                    'type' => 'wysiwyg',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                  ), 
                ),
              ),
            ),
        ),

    ),
  ));

endif;