<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'options__fields',
    'title' => 'Options',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options',
        ),
      ),
    ),
    'fields' => array(

      /**
       * Social Media Accounts
       */
      array(
        'key' => 'options__social-media',
        'label' => 'Social Media',
        'type' => 'tab',
      ),
      array(
        'key' => 'options__social-media__facebook',
        'label' => 'Facebook',
        'name' => 'facebook',
        'type' => 'text',
      ),
      array(
        'key' => 'options__social-media__instagram',
        'label' => 'Instagram',
        'name' => 'instagram',
        'type' => 'text',
      ),
      array(
        'key' => 'options__social-media__twitter',
        'label' => 'Twitter',
        'name' => 'twitter',
        'type' => 'text',
      ),
      array(
        'key' => 'options__social-media__linkedin',
        'label' => 'LinkedIn',
        'name' => 'linkedin',
        'type' => 'text',
      ),
      /*
      array(
        'key' => 'options__social-media__youtube',
        'label' => 'YouTube',
        'name' => 'youtube',
        'type' => 'text',
      ),
      */

    ),
  ));

endif;