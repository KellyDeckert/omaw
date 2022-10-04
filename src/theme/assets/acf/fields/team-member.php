<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'team-members__fields',
    'title' => 'conditions',
    'style' => 'seamless',
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'speakers',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'team-members',
			),
		),
	),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'hide_on_screen' => array(
        // 0 => 'the_content',
           1 => 'excerpt',
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

        array(
            'key' => 'team-members__title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
        ),
        array(
            'key' => 'team-members__twitter',
            'label' => 'Twitter',
            'name' => 'twitter',
            'type' => 'text',
        ),
        array(
            'key' => 'team-members__linkedin',
            'label' => 'LinkedIn',
            'name' => 'linkedin',
            'type' => 'text',
        ),
        array(
          'key' => 'team-members__description',
          'label' => 'Credentials / Description',
          'name' => 'description',
          'type' => 'textarea',
          'rows' => 2
        ),
        array(
            'key' => 'team-members__quote',
            'label' => 'Quote',
            'name' => 'quote',
            'type' => 'textarea',
            'rows' => 4
          ),

    ),
  ));

endif;