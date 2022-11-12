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
            'key' => 'faq__jump-links_display',
            'label' => 'Display',
            'name' => 'jump-links_display',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => 'Show jump link menu',
            'ui_off_text' => 'Hide jump link menu',
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
            'layout' => 'block',
            'button_label' => 'Add Section',
            'sub_fields' => array(
              array(
                'key' => 'faq__section_display',
                'label' => 'Display',
                'name' => 'display',
                'type' => 'true_false',
                'ui' => 1,
                'ui_on_text' => 'Show this section',
                'ui_off_text' => 'Hide this section',
                'wrapper' => array(
                  'width' => '33'
                ),
              ),              
              array(
                'key' => 'faq__section_name',
                'label' => 'Section Title',
                'name' => 'name',
                'type' => 'text',
                'wrapper' => array(
                  'width' => '66'
                ),
              ), 
              array(
                'key' => 'faq__section_jump_link_display',
                'label' => 'Jump Menu Link Display',
                'name' => 'jump_link_display',
                'type' => 'true_false',
                'ui' => 1,
                'ui_on_text' => 'Jump Menu Link On',
                'ui_off_text' => 'Jump Menu Link Off',
                'wrapper' => array(
                  'width' => '33'
                ),
              ),
              array(
                'key' => 'faq__section_jump_link_name',
                'label' => 'Jump Menu Section Name',
                'name' => 'jump_link_name',
                'type' => 'text',
                'wrapper' => array(
                  'width' => '66'
                ),
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