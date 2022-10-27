<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'publications__fields',
    'title' => 'Homepage',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/page-publications.php',
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

        /*
         * Header
         */
        array(
            'key' => 'publications__header_tab',
            'label' => 'Header',
            'type' => 'tab',
        ),
        array(
            'key' => 'publications__header_display',
            'label' => 'Display',
            'name' => 'publications_header_display',
            'type' => 'true_false',
            'message' => 'Check to display this section'
        ),
        array(
            'key' => 'publications__header_label',
            'label' => 'Label',
            'name' => 'publications_header_label',
            'type' => 'text',
        ),
        array(
            'key' => 'publications__header_content',
            'label' => 'content',
            'name' => 'publications_header_content',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload' => 0,
        ),
        array(
            'key' => 'publications__header_cta',
            'label' => 'CTA Link',
            'name' => 'publications_header_cta',
            'type' => 'link',
        ), 





        /*  JUMP LINKS MENU
        ============================= */
        array(
            'key' => 'publications__jump-links_tab',
            'label' => 'Jump Links Menu',
            'type' => 'tab',
        ),
        array(
            'key' => 'publications__jump-links_display',
            'label' => 'Display',
            'name' => 'jump-links_display',
            'type' => 'true_false',
            'instructions' => 'The links in the menu are dynamically generated. To modify the name in the menu, edit the Jump Menu Section Name in each tab.',
            'message' => 'Check to display this quick menu.'
        ),


        /*  PUBLICATION SECTIONS
        ============================= */
        array(
            'key' => 'publications__sections_tab',
            'label' => 'Publications Sections',
            'type' => 'tab',
          ),
          array(
              'key' => 'publications__sections',
              'label' => 'Publications Sections',
              'name' => 'publications_sections',
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
                  'key' => 'publications__section_display',
                  'label' => 'Display',
                  'name' => 'display',
                  'type' => 'true_false',
                  'message' => 'Check to display this section'
                ),              
                array(
                  'key' => 'publications__section_name',
                  'label' => 'Name',
                  'name' => 'name',
                  'type' => 'text',
                ), 
                array(
                  'key' => 'publications__section_jump_link_display',
                  'label' => 'Jump Menu Link Display',
                  'name' => 'jump_link_display',
                  'type' => 'true_false',
                  'ui' => 1,
                  'ui_on_text' => 'Jump Menu Link On',
                  'ui_off_text' => 'Jump Menu Link Off',
                ),
                array(
                  'key' => 'publications__section_jump_link_name',
                  'label' => 'Jump Menu Section Name',
                  'name' => 'jump_link_name',
                  'type' => 'text',
                ), 
                array(
                    'key' => 'publications__section_content',
                    'label' => 'Content',
                    'name' => 'content',
                    'type' => 'wysiwyg',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ),

                array(
                    'key' => 'publications__posts',
                    'label' => 'Posts',
                    'name' => 'posts',
                    'type' => 'relationship',
                    'post_type' => array(
                        0 => 'post',
                    ),
                    'taxonomy' => array(
                        0 => 'category:publications',
                    ),
                    'filters' => array(
                        0 => 'search',
                    ),
                    'return_format' => 'object',
                ),

                // relationship here
              ),
          ),


            /**
             * Featured Posts
             */
            array(
                'key' => 'publications__featured_posts_tab',
                'label' => 'Featured Posts',
                'type' => 'tab',
            ),
            array(
                'key' => 'publications__featured_posts_display',
                'label' => 'Display',
                'name' => 'featured_posts_display',
                'type' => 'true_false',
                'message' => 'Check to display this section'
            ),
            array(
                'key' => 'publications__featured_posts_heading',
                'label' => 'Heading',
                'name' => 'featured_posts_heading',
                'type' => 'text',
            ), 
            array(
                'key' => 'publications__featured_posts_content',
                'label' => 'Content',
                'name' => 'featured_posts_content',
                'type' => 'wysiwyg',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            /*
            array(
                'key' => 'publications__featured_posts_posts',
                'label' => 'Featured Posts',
                'name' => 'featured_posts_items',
                'type' => 'relationship',
                'post_type' => 'post',
                'filters' => array('search'),
            ),   
            */    
            array(
                'key' => 'publications__featured_posts_link',
                'label' => 'CTA Link',
                'name' => 'featured_posts_link',
                'type' => 'link',
            ),




       /*
      array(
        'key' => 'publications__hero_tab',
        'label' => 'Hero',
        'type' => 'tab',
      ),
      array(
        'key' => 'publications__hero_display',
        'label' => 'Display',
        'name' => 'hero_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'publications__hero_spacing',
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
        'key' => 'publications__hero_vertical_alignment',
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
        'key' => 'publications__hero_image_alignment',
        'label' => 'Image Alignment',
        'name' => 'hero_image_alignment',
        'type' => 'select',
        'choices' => array(
            'left' => 'Left',
            'right' => 'Right'
        )
      ),

      array(
        'key' => 'publications__hero_image',
        'label' => 'Image',
        'name' => 'hero_image',
        'type' => 'image',
        'return_format' => 'array',
      ),
      array(
        'key' => 'publications__hero_image_tile',
        'label' => 'Extended Image Tile',
        'name' => 'hero_image_tile',
        'type' => 'image',
        'return_format' => 'array',
      ),
      array(
        'key' => 'publications__hero_heading',
        'label' => 'Heading',
        'name' => 'hero_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'publications__hero_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'hero_sub_heading',
        'type' => 'text',
      ),     
      array(
        'key' => 'publications__hero_content',
        'label' => 'Content',
        'name' => 'hero_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'publications__hero_cta_link',
        'label' => 'CTA Link',
        'name' => 'hero_cta_link',
        'type' => 'link',
      ), 
      */

    ),
  ));

endif;