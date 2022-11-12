<?php
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'contact__fields',
        'title' => 'Contact',
        'style' => 'seamless',
        'location' => array(
        array(
            array(
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'page-templates/page-contact.php',
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
                'key' => 'contact-page__header',
                'label' => 'Header',
                'type' => 'tab',
            ),
            array(
                'key' => 'contact-page__heading',
                'label' => 'Alternate Heading',
                'name' => 'contact-heading',
                'type' => 'text',
                'instructions' => 'Type an alternate heading to replace the page title',
            ),
            array(
                'key' => 'contact-page__subheading',
                'label' => 'Subheading',
                'name' => 'contact-subheading',
                'type' => 'text',
                'placeholder' => 'Have a question? We\'re here to listen.'
            ),
            /**
             * Gravity Form Embed
             * 
             */
            array(
                'key' => 'contact-page__gf',
                'label' => 'Gravity Form',
                'type' => 'tab',
            ),
            array(
                'key' => 'contact-page__form',
                'label' => 'Gravity Form',
                'name' => 'contact-form',
                'type' => 'text',
            ),
            /**
             * Sidebar CTA
             * 
             */
            array(
                'key' => 'contact-page__sidebar',
                'label' => 'Sidebar',
                'type' => 'tab',
            ),
            array(
                'key' => 'contact-page__widgets',
                'label' => 'Sidebar Widgets',
                'name' => 'sidebar-widget',
                'type' => 'repeater',
                'min' => 1,
                'max' => 4,
                'layout' => 'block',
                'button_label' => 'Add Sidebar Widget',
                'sub_fields' => array(
                    array(
                        'key' => 'widget__heading',
                        'label' => 'Heading',
                        'name' => 'contact-sidebar-heading',
                        'type' => 'text',
                        'wrapper' => array(
                            'width' => '50'
                        ),
                    ),
                    array(
                        'key' => 'widget__bg_color',
                        'label' => 'Background Color',
                        'name' => 'contact-sidebar-bg-color',
                        'type' => 'select',
                        'choices' => array(
                            '#FECA30' => 'Gold',
                            '#010F3A' => 'Dark Blue',
                            '#016FB9' => 'Light Blue',
                            '#F3F3F3' => 'Light Grey',
                            '#C3D7D9' => 'Alt Grey'
                        ),
                        'default_value' => array(
                            '#FE3CA30' => 'Gold',
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 1,
                        'wrapper' => array(
                            'width' => '50'
                        ),
                    ),
                    array(
                        'key' => 'widget__button',
                        'label' => 'Button',
                        'name' => 'contact-sidebar-button',
                        'type' => 'link',
                    ), 
                    array(
                        'key' => 'widget__content',
                        'label' => 'Content',
                        'name' => 'contact-sidebar-content',
                        'type' => 'wysiwyg',
                        'toolbar' => 'basic',
                        'media_upload' => 0
                    ),
                )
            ),
        ),
    ),
);
endif;