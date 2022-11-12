<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'gf__fields',
    'title' => 'Homepage',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/page-global-forum.php',
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
        'key' => 'gf__hero_tab',
        'label' => 'Hero',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__hero_display',
        'label' => 'Display',
        'name' => 'hero_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__container_width',
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
        'key' => 'gf__hero_spacing',
        'label' => 'Section top and bottom spacing',
        'name' => 'hero_spacing',
        'type' => 'select',
        'choices' => array(
            'padding-default' => 'Default',
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
        'key' => 'gf__hero_vertical_alignment',
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
        'key' => 'gf__hero_image_alignment',
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
        'key' => 'gf__hero_image',
        'label' => 'Image',
        'name' => 'hero_image',
        'type' => 'image',
        'return_format' => 'array',
        'wrapper' => array(
          'width' => '50'
        ),
      ),
      array(
        'key' => 'our-members__hero_image_tile',
        'label' => 'Extended Image Tile',
        'name' => 'hero_image_tile',
        'type' => 'image',
        'return_format' => 'array',
        'wrapper' => array(
          'width' => '50'
        ),
      ),

      array(
        'key' => 'gf__hero_heading',
        'label' => 'Heading',
        'name' => 'hero_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'gf__hero_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'hero_sub_heading',
        'type' => 'text',
      ),
      array(
        'key' => 'gf__hero_content',
        'label' => 'Content',
        'name' => 'hero_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'gf__hero_cta_link',
        'label' => 'CTA Link',
        'name' => 'hero_cta_link',
        'type' => 'link',
      ), 



      /**
       * Content Block 1
       */
      array(
        'key' => 'gf__block_1_heading_tab',
        'label' => 'Content Block 1',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__block_1_display',
        'label' => 'Display',
        'name' => 'block_1_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__block_1_background',
        'label' => 'Background Color',
        'name' => 'block_1_background',
        'type' => 'select',
        'choices' => array(
            'white' => 'White',
            'light-blue' => 'Light Blue',
            'dark-blue' => 'Dark Blue',
        ),
        'wrapper' => array(
          'width' => '25'
        ),
      ),
      array(
        'key' => 'gf__block_1_statement',
        'label' => 'Left Column',
        'name' => 'block_1_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'gf__block_1_content',
        'label' => 'Right Column',
        'name' => 'block_1_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),  
      array(
        'key' => 'gf__block_1_statement_cta',
        'label' => 'Statement Link',
        'name' => 'block_1_statement_cta',
        'type' => 'link',
      ),

      /**
       * Content Block 2
       */
      array(
        'key' => 'gf__block_2_heading_tab',
        'label' => 'Content Block 2',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__block_2_display',
        'label' => 'Display',
        'name' => 'block_2_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__block_2_background',
        'label' => 'Background Color',
        'name' => 'block_2_background',
        'type' => 'select',
        'choices' => array(
            'white' => 'White',
            'light-blue' => 'Light Blue',
            'dark-blue' => 'Dark Blue',
        ),
        'wrapper' => array(
          'width' => '25'
        ),
      ),
      array(
        'key' => 'gf__block_2_statement',
        'label' => 'Left Column',
        'name' => 'block_2_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'gf__block_2_statement_cta',
        'label' => 'Statement Link',
        'name' => 'block_2_statement_cta',
        'type' => 'link',
      ), 
      array(
        'key' => 'gf__block_2_content',
        'label' => 'Right Column',
        'name' => 'block_2_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),


      /**
       * Featured Posts
       */
      array(
        'key' => 'gf__speakers_tab',
        'label' => 'Speakers',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__speakers_display',
        'label' => 'Display',
        'name' => 'speakers_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__speakers_heading',
        'label' => 'Heading',
        'name' => 'speakers_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'gf__speakers_content',
        'label' => 'Content',
        'name' => 'speakers_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'gf__speakers_posts',
        'label' => 'Featured Posts',
        'name' => 'speakers_items',
        'type' => 'relationship',
        'post_type' => 'speakers',
        'filters' => array('search'),
      ),       
      array(
        'key' => 'gf__speakers_link',
        'label' => 'CTA Link',
        'name' => 'speakers_link',
        'type' => 'link',
      ),


      /**
       * Agenda
       */
      array(
        'key' => 'gf__agenda_tab',
        'label' => 'Agenda',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__agenda_display',
        'label' => 'Display',
        'name' => 'agenda_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__agenda_heading',
        'label' => 'Heading',
        'name' => 'agenda_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'gf__agenda_content',
        'label' => 'Content',
        'name' => 'agenda_content',
        'type' => 'textarea',
        'rows' => 2
      ),
      array(
        'key' => 'gf__agenda_days',
        'label' => 'Agenda Days',
        'name' => 'agenda_days',
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
        'layout' => 'block',
        'button_label' => 'Add Day',
        'sub_fields' => array(
            array(
              'key' => 'gf__agenda_days__item_date',
              'label' => 'Date',
              'name' => 'date',
              'type' => 'date_picker',
              'display_format' => 'm/d/Y',
              'return_format' => 'm/d/Y',
              'first_day' => 1,
            ), 

            array(
              'key' => 'gf__agenda_days__item_items',
              'label' => 'Agenda Items',
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
                  'key' => 'gf__agenda_days__item_item_type',
                  'label' => 'Event type',
                  'name' => 'type',
                  'type' => 'text',
                ), 
                array(
                  'key' => 'gf__agenda_days__item_item_name',
                  'label' => 'Event name',
                  'name' => 'heading',
                  'type' => 'text',
                ), 
                array(
                  'key' => 'gf__agenda_days__item_item_description',
                  'label' => 'Event description',
                  'name' => 'description',
                  'type' => 'textarea',
                  'rows' => 2
                ), 
                array(
                  'key' => 'gf__agenda_days__item_item_content',
                  'label' => 'Event content',
                  'name' => 'content',
                  'type' => 'wysiwyg',
                  'toolbar' => 'full',
                  'media_upload' => 0,
                ), 

              ),
            ),


        ),
      ),


      /**
       * Sponsors
       */
      array(
        'key' => 'gf__sponsors_tab',
        'label' => 'Sponsors',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__sponsors_display',
        'label' => 'Display',
        'name' => 'sponsors_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__sponsors_heading',
        'label' => 'Heading',
        'name' => 'sponsors_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'gf__sponsors_items',
        'label' => 'Sponsor Tiers',
        'name' => 'sponsors_items',
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
        'button_label' => 'Add Tier',
        'sub_fields' => array(
          array(
            'key' => 'gf__sponsors_item_name',
            'label' => 'Tier Name',
            'name' => 'name',
            'type' => 'text',
          ), 
          array(
            'key' => 'gf__sponsors_item_size',
            'label' => 'Logo Size',
            'name' => 'size',
            'type' => 'select',
            'choices' => array(
                'extra-large' => 'Extra Large',
                'large' => 'Large',
                'medium' => 'Medium',
                'small' => 'Small',
            )
          ),
          array(
            'key' => 'gf__sponsors_item_items',
            'label' => 'Sponsors',
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
            'layout' => 'block',
            'button_label' => 'Add Sponsor',
            'sub_fields' => array(
              array(
                'key' => 'gf__sponsors_item_logo',
                'label' => 'Logo',
                'name' => 'image',
                'type' => 'image',
                'return_format' => 'array',
                'wrapper' => array(
                  'width' => '50'
                ),
              ),
              array(
                'key' => 'gf__sponsors_item_link',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'link',
                'wrapper' => array(
                  'width' => '50'
                ),
              ), 
            ),
          ),


        ),
      ),


      /**
       * CTA
       */
      array(
        'key' => 'gf__cta_tab',
        'label' => 'CTA',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__cta_display',
        'label' => 'Display',
        'name' => 'cta_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__cta_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'cta_sub_heading',
        'type' => 'text',
      ),          
      array(
        'key' => 'gf__cta_heading',
        'label' => 'Heading',
        'name' => 'cta_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'gf__cta_content',
        'label' => 'Content',
        'name' => 'cta_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),
      array(
        'key' => 'gf__cta_link',
        'label' => 'CTA Link',
        'name' => 'cta_link',
        'type' => 'link',
      ), 


      /**
       * Content Block 3
       */
      array(
        'key' => 'gf__block_3_heading_tab',
        'label' => 'Content Block 3',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__block_3_display',
        'label' => 'Display',
        'name' => 'block_3_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__block_3_background',
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
        'key' => 'gf__block_3_statement_image',
        'label' => 'Left Column Image',
        'name' => 'block_3_statement_image',
        'type' => 'image',
        'return_format' => 'array',
        'wrapper' => array(
          'width' => '50'
        ),
      ),
      array(
        'key' => 'gf__block_3_statement',
        'label' => 'Left Column',
        'name' => 'block_3_statement',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),
      array(
        'key' => 'gf__block_3_content',
        'label' => 'Right Column',
        'name' => 'block_3_content',
        'type' => 'wysiwyg',
        'toolbar' => 'full',
        'media_upload' => 0,
      ),


      /**
       * Event Summaries
       */
      array(
        'key' => 'gf__event_summaries_tab',
        'label' => 'Event Summaries',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__event_summaries_display',
        'label' => 'Display',
        'name' => 'event_summaries_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__event_summaries_heading',
        'label' => 'Heading',
        'name' => 'event_summaries_heading',
        'type' => 'text',
      ), 


      array(
        'key' => 'gf__event_summaries_featured_media_type',
        'label' => 'Featured Event Media Type',
        'name' => 'event_summaries_featured_media_type',
        'type' => 'select',
        'choices' => array(
          'image' => 'Image',
          'video' => 'Video'
        ),
        'wrapper' => array(
          'width' => '25'
        ),
      ),

      array(
        'key' => 'gf__event_summaries_featured_image',
        'label' => 'Image',
        'name' => 'event_summaries_featured_image',
        'type' => 'image',
        'return_format' => 'array',
        'preview_size' => 'medium',
        'wrapper' => array(
          'width' => '75'
        ),
      ),

      array(
        'key' => 'gf__event_summaries_featured_video_type',
        'label' => 'Video Type',
        'name' => 'event_summaries_featured_video_type',
        'type' => 'select',
        'choices' => array(
          'upload' => 'Upload',
          'youtube' => 'YouTube'
        ),
        'conditional_logic' => array(
          array(
            array(
              'field' => 'gf__event_summaries_featured_media_type',
              'operator' => '==',
              'value' => 'video',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '25'
        ),
      ),
      array(
        'key' => 'gf__event_summaries_featured_video',
        'label' => 'MP4 Video File',
        'name' => 'event_summaries_featured_mp4_video',
        'type' => 'file',
        'conditional_logic' => array(
            array(
              array(
                'field' => 'gf__event_summaries_featured_video_type',
                'operator' => '==',
                'value' => 'upload',
              ),
            ),
        ),
        'wrapper' => array(
          'width' => '75'
        ),
      ),
      array(
        'key' => 'gf__event_summaries_featured_youtube_video_id',
        'label' => 'YouTube Video ID',
        'name' => 'event_summaries_featured_youtube_video_id',
        'type' => 'text',
        'conditional_logic' => array(
            array(
              array(
                'field' => 'gf__event_summaries_featured_video_type',
                'operator' => '==',
                'value' => 'youtube',
              ),
            ),
        ),
        'wrapper' => array(
          'width' => '75'
        ),
      ),

      
      array(
        'key' => 'gf__event_summaries_featured_sub_heading',
        'label' => 'Featured Event Sub Heading',
        'name' => 'event_summaries_featured_sub_heading',
        'type' => 'text',
      ),          
      array(
        'key' => 'gf__event_summaries_featured_heading',
        'label' => 'Featured Event Heading',
        'name' => 'event_summaries_featured_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'gf__event_summaries_featured_link',
        'label' => 'Featured Event CTA Link',
        'name' => 'event_summaries_featured_link',
        'type' => 'link',
      ), 
      array(
        'key' => 'gf__event_summaries_content',
        'label' => 'All Event Content',
        'name' => 'event_summaries_content',
        'type' => 'wysiwyg',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ),


      /**
       * FAQs
       */
      array(
        'key' => 'gf__faq_tab',
        'label' => 'FAQs',
        'type' => 'tab',
      ),
      array(
        'key' => 'gf__faq_display',
        'label' => 'Display',
        'name' => 'faq_display',
        'type' => 'true_false',
        'ui' => 1,
        'ui_on_text' => 'Show this section',
        'ui_off_text' => 'Hide this section',
      ),
      array(
        'key' => 'gf__faq_heading',
        'label' => 'Heading',
        'name' => 'faq_heading',
        'type' => 'text',
      ), 
      array(
        'key' => 'gf__faq_items',
        'label' => 'FAQ Items',
        'name' => 'faq_items',
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
            'key' => 'gf__faq_item_name',
            'label' => 'Question',
            'name' => 'heading',
            'type' => 'text',
          ), 
          array(
            'key' => 'gf__faq_item_content',
            'label' => 'Answer',
            'name' => 'content',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload' => 0,
          ), 

        ),
      ),

      
    ),
  ));

endif;