<?php
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'new-member__fields',
        'title' => 'Become a Member',
        'style' => 'seamless',
        'location' => array(
        array(
            array(
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'page-templates/page-new-member.php',
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
            array(
                'key' => 'become-member-page__content_tab',
                'label' => 'Content',
                'type' => 'tab',
            ),
            array(
                'key' => 'become-member-page__heading',
                'label' => 'Heading',
                'name' => 'become-member-heading',
                'type' => 'text',
            ),
            array(
                'key' => 'become-member-page__subheading',
                'label' => 'Subheading',
                'name' => 'become-member-subheading',
                'type' => 'text',
                'placeholder' => 'Let\'s connect!'
            ),
            array(
                'key' => 'become-member-page__content',
                'label' => 'Content',
                'name' => 'become-member-page-content',
                'type' => 'wysiwyg',
                'toolbar' => 'basic',
                'media_upload' => 0
            ),
            array(
                'key' => 'become-member-page__logos_tab',
                'label' => 'Member Logos',
                'type' => 'tab',
            ),
            array(
                'key' => 'become-member-page__logo-header',
                'label' => 'Logo Section Copy',
                'name' => 'become-member-logo-heading',
                'type' => 'wysiwyg',
                'toolbar' => 'full',
                'media_upload' => 0
            ),
            array(
                'key' => 'become-member-page__member_logos',
                'label' => 'Member Logos',
                'name' => 'member_logos',
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
                      'key' => 'become-member-page__members_logo__img',
                      'label' => 'Image',
                      'name' => 'image',
                      'type' => 'image',
                      'return_format' => 'array',
                    ),
                ),
            ),
            /**
             * Gravity Form Embed
             * 
             */
            array(
                'key' => 'become-member-page__form_tab',
                'label' => 'Form',
                'type' => 'tab',
            ),
            array(
                'key' => 'become-member-page__form',
                'label' => 'Gravity Form',
                'name' => 'become-member-form',
                'type' => 'text',
            ),
            /* Modified from Homepage -> Our Approach */
            array(
                'key' => 'become-member-page__cta-info_tab',
                'label' => 'Additional Info CTA',
                'type' => 'tab',
            ),
            array(
                'key' => 'become-member-page__cta-info_display',
                'label' => 'Display',
                'name' => 'cta-info_display',
                'type' => 'true_false',
                'message' => 'Check to display this section'
            ),
            array(
                'key' => 'become-member-page__cta-info_bg_color',
                'label' => 'Background Color',
                'name' => 'cta-info_bg-color',
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
                'key' => 'become-member-page__cta-info_bg_color_location',
                'label' => 'Background Color Location',
                'name' => 'cta-info_bg-color-location',
                'type' => 'select',
                'choices' => array(
                    'section' => 'Whole section',
                    'content' => 'Content Column',
                ),
                'default_value' => 'section',
            ),
            array(
                'key' => 'become-member-page__cta-info_spacing',
                'label' => 'Section top and bottom spacing',
                'name' => 'cta-info_spacing',
                'type' => 'select',
                'choices' => array(
                    'padding-120' => '120px padding',
                    'padding-180' => '180px padding',
                    'margin-120' => '120px margin',
                    'margin-180' => '180px margin'
                )
            ),
            array(
                'key' => 'become-member-page__cta-info_vertical_alignment',
                'label' => 'Image and Copy Vertical Alignment',
                'name' => 'cta-info_vertical_alignment',
                'type' => 'select',
                'choices' => array(
                    'top' => 'Top',
                    'center' => 'Center',
                    'bottom' => 'Bottom'
                )
            ),
            array(
                'key' => 'become-member-page__cta-info_image_alignment',
                'label' => 'Image Alignment',
                'name' => 'cta-info_image_alignment',
                'type' => 'select',
                'choices' => array(
                    'left' => 'Left',
                    'right' => 'Right'
                )
            ),
            array(
                'key' => 'become-member-page__cta-info_image_mobile_pos',
                'label' => 'Mobile Image Position',
                'name' => 'cta-info_image_mobile_pos',
                'type' => 'select',
                'choices' => array(
                    'middle' => 'Middle',
                    'top' => 'Top'
                )
            ),

            array(
                'key' => 'become-member-page__cta-info_image',
                'label' => 'Image',
                'name' => 'cta-info_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
            array(
                'key' => 'become-member-page__cta-info_image_tile',
                'label' => 'Extended Image Tile',
                'name' => 'cta-info_image_tile',
                'type' => 'image',
                'return_format' => 'array',
            ),
            array(
                'key' => 'become-member-page__cta-info_heading',
                'label' => 'Heading',
                'name' => 'cta-info_heading',
                'type' => 'text',
            ), 
            /*
            array(
                'key' => 'become-member-page__cta-info_heading_size',
                'label' => 'Heading Size',
                'name' => 'cta-info_heading_size',
                'type' => 'true_false',
                'message' => 'Use a reduced header size (h4). Default is an h2.'
            ), 
            */
            array(
                'key' => 'become-member-page__cta-info_sub_heading',
                'label' => 'Sub Heading',
                'name' => 'cta-info_sub_heading',
                'type' => 'text',
            ),     
            array(
                'key' => 'become-member-page__cta-info_content',
                'label' => 'Content',
                'name' => 'cta-info_content',
                'type' => 'wysiwyg',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            array(
                'key' => 'become-member-page__cta-info_cta_link',
                'label' => 'CTA Link',
                'name' => 'cta-info_cta_link',
                'type' => 'link',
            ), 
        ),
    ),
);
endif;