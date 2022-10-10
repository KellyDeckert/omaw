<?php
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'memberExp__fields',
        'title' => 'Member Experience',
        'style' => 'seamless',
        'location' => array(
        array(
            array(
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'page-templates/page-member-experience.php',
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
            'key' => 'memberExp__header_tab',
            'label' => 'Header',
            'type' => 'tab',
        ),
        array(
            'key' => 'memberExp__header_display',
            'label' => 'Display',
            'name' => 'me_header_display',
            'type' => 'true_false',
            'message' => 'Check to display this section'
        ),
        array(
            'key' => 'memberExp__header_label',
            'label' => 'Label',
            'name' => 'me_header_label',
            'type' => 'text',
        ),
        array(
            'key' => 'memberExp__header_content',
            'label' => 'content',
            'name' => 'me_header_content',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload' => 0,
        ),

        /*
         * Commitment
         */
        array(
            'key' => 'memberExp__commitment_tab',
            'label' => 'Commitment',
            'type' => 'tab',
        ),
        array(
            'key' => 'memberExp__commitment_display',
            'label' => 'Display',
            'name' => 'commitment_display',
            'type' => 'true_false',
            'message' => 'Check to display this section'
        ),
        array(
            'key' => 'memberExp__commitment_bg_color',
            'label' => 'Background Color',
            'name' => 'commitment_bg-color',
            'type' => 'select',
            'choices' => array(
                '#C3D7D9' => 'Light Grey/Green',
                '#010F3A' => 'Dark Blue',
                '#016FB9' => 'Light Blue',
                '#F4F4F4' => 'Light Grey',
                '#FECA30' => 'Gold',
                'none' => 'None',
            ),
            'default_value' => array(
                '#C3D7D9' => 'Light Grey/Green',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 1
        ),
        array(
            'key' => 'memberExp__commitment_heading',
            'label' => 'Heading',
            'name' => 'commitment_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'memberExp__commitment_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'commitment_sub_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'memberExp__commitment_content',
            'label' => 'Content',
            'name' => 'commitment_content',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload' => 0,
        ),
        array(
            'key' => 'memberExp__commitment_cards',
            'label' => 'Commitments',
            'name' => 'commitment_cards',
            'type' => 'repeater',
            'min' => 3,
            'max' => 9,
            'layout' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'commitment_cards_toggle_type',
                    'label' => 'Type',
                    'name' => 'cc_toggle_type',
                    'type' => 'true_false',
                    'ui_on_text' => 'CTA',
                    'ui_off_text' => 'Default',
                    'ui' => 1,
                    'wrapper' => array(
                        'width' => '15'
                    ),
                    'instructions' => 'Toggle CTA to change the card style and to include a link.',
                ),
                array(
                    'key' => 'commitment_cards_heading',
                    'label' => 'Heading',
                    'name' => 'cc_heading',
                    'type' => 'text',
                    'required' => 1
                ),
                array(
                    'key' => 'commitment_cards_content',
                    'label' => 'Content',
                    'name' => 'cc_content',
                    'type' => 'textarea',
                    'rows' => 2,
                    'required' => 1
                ),
                array(
                    'key' => 'commitment_cards_link',
                    'label' => 'CTA Link',
                    'name' => 'cc_link',
                    'type' => 'link',
                    'required' => 1,
                    'wrapper' => array(
                        'width' => '25'
                    ),
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'commitment_cards_toggle_type',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    )
                ),
            ),
        ),

        /*
         * Membership CTA
         */
        array(
            'key' => 'memberExp__collab_tab',
            'label' => 'Collaboration',
            'type' => 'tab',
        ),
        array(
            'key' => 'memberExp__collab_display',
            'label' => 'Display',
            'name' => 'collab_display',
            'type' => 'true_false',
            'message' => 'Check to display this section'
        ),
        array(
            'key' => 'memberExp__collab_bg_color',
            'label' => 'Background Color',
            'name' => 'collab_bg-color',
            'type' => 'select',
            'choices' => array(
                'none' => 'None',
                '#010F3A' => 'Dark Blue',
                '#016FB9' => 'Light Blue',
                '#F4F4F4' => 'Light Grey',
                '#C3D7D9' => 'Alt Grey',
                '#FECA30' => 'Gold',
            ),
            'default_value' => array(
                '#010F3A' => 'Dark Blue',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 1
        ),
        array(
            'key' => 'memberExp__collab_spacing',
            'label' => 'Section top and bottom spacing',
            'name' => 'collab_spacing',
            'type' => 'select',
            'choices' => array(
                'padding-120' => '120px padding',
                'padding-180' => '180px padding',
                'margin-120' => '120px margin',
                'margin-180' => '180px margin'
            )
        ),
        array(
            'key' => 'memberExp__collab_vertical_alignment',
            'label' => 'Image and Copy Vertical Alignment',
            'name' => 'collab_vertical_alignment',
            'type' => 'select',
            'choices' => array(
                'top' => 'Top',
                'center' => 'Center',
                'bottom' => 'Bottom'
            )
        ),
        array(
            'key' => 'memberExp__collab_image_alignment',
            'label' => 'Image Alignment',
            'name' => 'collab_image_alignment',
            'type' => 'select',
            'choices' => array(
                'left' => 'Left',
                'right' => 'Right'
            )
        ),
        array(
            'key' => 'memberExp__collab_image',
            'label' => 'Image',
            'name' => 'collab_image',
            'type' => 'image',
            'return_format' => 'array',
        ),
        array(
            'key' => 'memberExp__collab_image_tile',
            'label' => 'Extended Image Tile',
            'name' => 'collab_image_tile',
            'type' => 'image',
            'return_format' => 'array',
        ),
        array(
            'key' => 'memberExp__collab_heading',
            'label' => 'Heading',
            'name' => 'collab_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'memberExp__collab_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'collab_sub_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'memberExp__collab_content',
            'label' => 'Content',
            'name' => 'collab_content',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),
        array(
            'key' => 'memberExp__collab_cta_link',
            'label' => 'CTA Link',
            'name' => 'collab_cta_link',
            'type' => 'link',
        ),

        /*
         * Membership CTA
         */
        array(
            'key' => 'memberExp__join_tab',
            'label' => 'Membership CTA',
            'type' => 'tab',
        ),
        array(
            'key' => 'memberExp__join_display',
            'label' => 'Display',
            'name' => 'join_display',
            'type' => 'true_false',
            'message' => 'Check to display this CTA'
        ),
        array(
            'key' => 'memberExp__join_sub_heading',
            'label' => 'Sub Heading',
            'name' => 'join_sub_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'memberExp__join_heading',
            'label' => 'Heading',
            'name' => 'join_heading',
            'type' => 'text',
        ),
        array(
            'key' => 'memberExp__join_content',
            'label' => 'Content',
            'name' => 'join_content',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
        ),
        array(
            'key' => 'memberExp__join_link',
            'label' => 'CTA Link',
            'name' => 'join_link',
            'type' => 'link',
        ),

        /**
       * Quotes
       */
        array(
            'key' => 'memberExp__quotes_tab',
            'label' => 'Quotes',
            'type' => 'tab',
        ),
        array(
            'key' => 'memberExp__quotes_display',
            'label' => 'Display',
            'name' => 'member_quotes_display',
            'type' => 'true_false',
            'message' => 'Check to display this section'
        ),
        array(
            'key' => 'memberExp__quotes_items',
            'label' => 'Members',
            'name' => 'member_quotes_items',
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
                'key' => 'memberExp__quotes_item__image',
                'label' => 'Desktop Image',
                'name' => 'image',
                'type' => 'image',
                'return_format' => 'array'
            ),
            array(
                'key' => 'memberExp__quotes_item__mobile_image',
                'label' => 'Mobile Image',
                'name' => 'mobile_image',
                'type' => 'image',
                'return_format' => 'array'
            ),
            array(
                'key' => 'memberExp__quotes_item__quote',
                'label' => 'Quote',
                'name' => 'quote',
                'type' => 'textarea',
                'rows' => 2
            ),
            array(
                'key' => 'memberExp__quotes_item__title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ),
            array(
                'key' => 'memberExp__quotes_item__organization',
                'label' => 'Organization',
                'name' => 'organization',
                'type' => 'text',
            ),
            ),
        ),

    ),
));
endif;