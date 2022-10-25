<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'posts__fields',
    'title' => 'Posts',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 1,
    'position' => 'acf_after_title',
    'hide_on_screen' => array(
    // 0 => 'the_content',
    //   1 => 'excerpt',
    //   2 => 'custom_fields',
    //   3 => 'discussion',
    //   4 => 'comments',
    //   5 => 'slug',
    //   6 => 'author',
    //   7 => 'format',
    //   8 => 'featured_image',
    //   9 => 'categories',
    //   10 => 'tags',
    //   11 => 'send-trackbacks',
    ),
    'fields' => array(

        /**
         * * Settings
         * */
        array(
            'key' => 'posts__settings_tab',
            'label' => 'Post Settings',
            'type' => 'tab',
        ),
        array(
            'key' => 'posts__hide_featured_image',
            'label' => 'Hide Featured Image',
            'name' => 'hide_featured_image',
            'type' => 'true_false',
            'message' => 'Check to hide the featured image from the content.'
        ), 
        
        /**
         * * Videos
         * */
        array(
          'key' => 'posts__video_type',
          'label' => 'Video Type',
          'name' => 'video_type',
          'type' => 'select',
          'choices' => array(
              'facebook' => 'Facebook',
              'instagram' => 'Instagram',
              'linkedin' => 'LinkedIn',
              'youtube' => 'YouTube'
          )
        ),
        array(
          'key' => 'posts__facebook_video_url',
          'label' => 'Facebook Video Url',
          'name' => 'facebook_video_url',
          'type' => 'text',
          'conditional_logic' => array(
            array(
              array(
                'field' => 'posts__video_type',
                'operator' => '==',
                'value' => 'facebook',
              ),
            ),
          ),
        ), 
        array(
          'key' => 'posts__instagram_embed_aspect',
          'label' => 'Instagram video aspect ratio',
          'name' => 'instagram_embed_aspect',
          'type' => 'select',
          'default_value' => 'square',
          'choices' => array(
              'square' => 'Square / Vertical',
              'wide' => 'Wide'
          ),
          'conditional_logic' => array(
            array(
              array(
                'field' => 'posts__video_type',
                'operator' => '==',
                'value' => 'instagram',
              ),
            ),
          ),
        ),
        array(
          'key' => 'posts__instagram_embed_code',
          'label' => 'Instagram Embed Code',
          'name' => 'instagram_embed_code',
          'type' => 'textarea',
          'conditional_logic' => array(
            array(
              array(
                'field' => 'posts__video_type',
                'operator' => '==',
                'value' => 'instagram',
              ),
            ),
          ),
        ), 
        array(
          'key' => 'posts__linkedin_embed_code',
          'label' => 'LinkedIn Embed Code',
          'name' => 'linkedin_embed_code',
          'type' => 'text',
          'conditional_logic' => array(
            array(
              array(
                'field' => 'posts__video_type',
                'operator' => '==',
                'value' => 'linkedin',
              ),
            ),
          ),
        ), 
        array(
          'key' => 'posts__youtube_video_url',
          'label' => 'YouTube Video Url',
          'name' => 'youtube_video_url',
          'type' => 'text',
          'conditional_logic' => array(
            array(
              array(
                'field' => 'posts__video_type',
                'operator' => '==',
                'value' => 'youtube',
              ),
            ),
          ),
        ), 

        /**
         * * Author
         * */        
        array(
          'key' => 'posts__author_tab',
          'label' => 'Author',
          'type' => 'tab',
        ),
        array(
          'key' => 'posts__author_posts',
          'label' => 'Author Item',
          'name' => 'authors',
          'type' => 'relationship',
          'instructions' => 'The excerpt can be edited on the author\'s Team Members post.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
          ),
          'post_type' => array(
          0 => 'team-members',
          ),
          'taxonomy' => '',
          'filters' => array(
          0 => 'search',
          ),
          'elements' => '',
          'min' => '',
          'max' => '1',
          'return_format' => 'object',
      ),


    ),
  ));

endif;