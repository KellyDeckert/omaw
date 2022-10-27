<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'homepage__fields',
    'title' => 'Homepage',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'front-page.php',
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
        'key' => 'homepage__hero_tab',
        'label' => 'Hero',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__hero_sub_heading',
        'label' => 'Heading',
        'name' => 'hero_sub_heading',
        'type' => 'text',
      ),        
      array(
        'key' => 'homepage__hero_heading',
        'label' => 'Heading',
        'name' => 'hero_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'homepage__hero_items',
        'label' => 'Headshots',
        'name' => 'hero_items',
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
        'button_label' => 'Add Headshot',
        'sub_fields' => array(
            array(
              'key' => 'homepage__hero_item__image',
              'label' => 'Image',
              'name' => 'image',
              'type' => 'image',
              'return_format' => 'array',
              'preview_size' => 'x-small-thumbnail',
            ),
            array(
              'key' => 'homepage__hero_item__title',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
            ), 
            array(
              'key' => 'homepage__hero_item__organization',
              'label' => 'Organization',
              'name' => 'organization',
              'type' => 'text',
            ), 
        ),
      ),


      /**
       * CTA
       */
      array(
        'key' => 'homepage__cta_tab',
        'label' => 'CTA',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__cta_display',
        'label' => 'Display',
        'name' => 'cta_display',
        'type' => 'true_false',
        'message' => 'Check to display this CTA'
      ),
      array(
        'key' => 'homepage__cta_heading',
        'label' => 'Heading',
        'name' => 'cta_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'homepage__cta_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'cta_sub_heading',
        'type' => 'text',
      ),     
      array(
        'key' => 'homepage__cta_cta_link',
        'label' => 'CTA Link',
        'name' => 'cta_link',
        'type' => 'link',
      ), 


      /**
       * Copy and Stats
       */
      array(
        'key' => 'homepage__who_tab',
        'label' => 'Who We Are',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__who_display',
        'label' => 'Display',
        'name' => 'who_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'homepage__who_heading',
        'label' => 'Heading',
        'name' => 'who_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'homepage__who_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'who_sub_heading',
        'type' => 'text',
      ),     
      array(
        'key' => 'homepage__who_content',
        'label' => 'Content',
        'name' => 'who_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'homepage__who_cta_link',
        'label' => 'CTA Link',
        'name' => 'who_cta_link',
        'type' => 'link',
      ), 
      array(
        'key' => 'homepage__who_stats_heading',
        'label' => 'Stats Heading',
        'name' => 'who_stats_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'homepage__who_stats_items',
        'label' => 'Stats',
        'name' => 'who_stats_items',
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
              'key' => 'homepage__who_stats_item__image',
              'label' => 'Image',
              'name' => 'image',
              'type' => 'image',
              'return_format' => 'array',
            ),
            array(
              'key' => 'homepage__who_stats_item__title',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
            ), 
        ),
      ),


      /**
       * Business
       */
      array(
        'key' => 'homepage__business_tab',
        'label' => 'Business Stats',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__business_display',
        'label' => 'Display',
        'name' => 'business_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'homepage__business_heading',
        'label' => 'Heading',
        'name' => 'business_heading',
        'type' => 'text',
      ),     
      array(
        'key' => 'homepage__business_stats_items',
        'label' => 'Stats',
        'name' => 'business_stats_items',
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
              'key' => 'homepage__business_stats_item__image',
              'label' => 'Image',
              'name' => 'image',
              'type' => 'image',
              'return_format' => 'array',
            ),
            array(
              'key' => 'homepage__business_stats_item__title',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
            ), 
        ),
      ),
      array(
        'key' => 'homepage__business_content',
        'label' => 'Content',
        'name' => 'business_content',
        'type' => 'textarea',
        'rows' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'homepage__business_cta_link',
        'label' => 'CTA Link',
        'name' => 'business_cta_link',
        'type' => 'link',
      ), 
      
      
      
      
       /**
       * Approach
       */
      array(
        'key' => 'homepage__approach_tab',
        'label' => 'Approach',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__approach_display',
        'label' => 'Display',
        'name' => 'approach_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'homepage__approach_spacing',
        'label' => 'Section top and bottom spacing',
        'name' => 'approach_spacing',
        'type' => 'select',
        'choices' => array(
            'padding-120' => '120px padding',
            'padding-180' => '180px padding',
            'margin-120' => '120px margin',
            'margin-180' => '180px margin'
        )
      ),
      array(
        'key' => 'homepage__approach_vertical_alignment',
        'label' => 'Image and Copy Vertical Alignment',
        'name' => 'approach_vertical_alignment',
        'type' => 'select',
        'choices' => array(
            'top' => 'Top',
            'center' => 'Center',
            'bottom' => 'Bottom'
        )
      ),
      array(
        'key' => 'homepage__approach_image_alignment',
        'label' => 'Image Alignment',
        'name' => 'approach_image_alignment',
        'type' => 'select',
        'choices' => array(
            'left' => 'Left',
            'right' => 'Right'
        )
      ),

      array(
        'key' => 'homepage__approach_image',
        'label' => 'Image',
        'name' => 'approach_image',
        'type' => 'image',
        'return_format' => 'array',
      ),
      array(
        'key' => 'homepage__approach_image_tile',
        'label' => 'Extended Image Tile',
        'name' => 'approach_image_tile',
        'type' => 'image',
        'return_format' => 'array',
      ),
      array(
        'key' => 'homepage__approach_heading',
        'label' => 'Heading',
        'name' => 'approach_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'homepage__approach_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'approach_sub_heading',
        'type' => 'text',
      ),     
      array(
        'key' => 'homepage__approach_content',
        'label' => 'Content',
        'name' => 'approach_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'homepage__approach_cta_link',
        'label' => 'CTA Link',
        'name' => 'approach_cta_link',
        'type' => 'link',
      ), 


      /**
       * Interest CTA
       */
      array(
        'key' => 'homepage__interest_tab',
        'label' => 'Interest CTA',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__interest_display',
        'label' => 'Display',
        'name' => 'interest_display',
        'type' => 'true_false',
        'message' => 'Check to display this CTA'
      ),
      array(
        'key' => 'homepage__interest_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'interest_sub_heading',
        'type' => 'text',
      ),          
      array(
        'key' => 'homepage__interest_heading',
        'label' => 'Heading',
        'name' => 'interest_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'homepage__interest_content',
        'label' => 'Content',
        'name' => 'interest_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'homepage__interest_link',
        'label' => 'CTA Link',
        'name' => 'interest_link',
        'type' => 'link',
      ), 


      /**
       * Members
       */
      array(
        'key' => 'homepage__members_tab',
        'label' => 'Members',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__members_display',
        'label' => 'Display',
        'name' => 'members_display',
        'type' => 'true_false',
        'message' => 'Check to display this CTA'
      ),
      array(
        'key' => 'homepage__members_heading',
        'label' => 'Heading',
        'name' => 'members_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'homepage__members_content',
        'label' => 'Content',
        'name' => 'members_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'homepage__members_items',
        'label' => 'Members',
        'name' => 'members_items',
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
        'button_label' => 'Add Member',
        'sub_fields' => array(
            array(
              'key' => 'homepage__members_item__image',
              'label' => 'Image',
              'name' => 'image',
              'type' => 'image',
              'return_format' => 'array',
            ),
        ),
      ),
      array(
        'key' => 'homepage__members_link',
        'label' => 'CTA Link',
        'name' => 'members_link',
        'type' => 'link',
      ), 

      
      /**
       * Quotes
       */
      array(
        'key' => 'homepage__quotes_tab',
        'label' => 'Quotes',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__quotes_display',
        'label' => 'Display',
        'name' => 'quotes_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'homepage__quotes_items',
        'label' => 'Members',
        'name' => 'quotes_items',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 1,
        'max' => 5,
        'layout' => 'row',
        'button_label' => 'Add Member',
        'sub_fields' => array(
          
          array(
            'key' => 'homepage__quotes_item__image',
            'label' => 'Desktop Image',
            'name' => 'image',
            'type' => 'image',
            'return_format' => 'array'
          ),
          array(
            'key' => 'homepage__quotes_item__mobile_image',
            'label' => 'Mobile Image',
            'name' => 'mobile_image',
            'type' => 'image',
            'return_format' => 'array'
          ),
          array(
            'key' => 'homepage__quotes_item__quote',
            'label' => 'Quote',
            'name' => 'quote',
            'type' => 'textarea',
            'rows' => 2
          ), 
          array(
            'key' => 'homepage__quotes_item__title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
          ), 
          array(
            'key' => 'homepage__quotes_item__organization',
            'label' => 'Organization',
            'name' => 'organization',
            'type' => 'text',
          ), 
        ),
      ),




      /**
       * Featured Posts
       */
      array(
        'key' => 'homepage__featured_posts_tab',
        'label' => 'Featured Posts',
        'type' => 'tab',
      ),
      array(
        'key' => 'homepage__featured_posts_display',
        'label' => 'Display',
        'name' => 'featured_posts_display',
        'type' => 'true_false',
        'message' => 'Check to display this section'
      ),
      array(
        'key' => 'homepage__featured_posts_heading',
        'label' => 'Heading',
        'name' => 'featured_posts_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'homepage__featured_posts_content',
        'label' => 'Content',
        'name' => 'featured_posts_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      /*
      array(
        'key' => 'homepage__featured_posts_posts',
        'label' => 'Featured Posts',
        'name' => 'featured_posts_items',
        'type' => 'relationship',
        'post_type' => 'post',
        'filters' => array('search'),
      ),   
      */    
      array(
        'key' => 'homepage__featured_posts_link',
        'label' => 'CTA Link',
        'name' => 'featured_posts_link',
        'type' => 'link',
      ),


    ),
  ));

endif;