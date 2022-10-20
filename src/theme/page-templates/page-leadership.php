<?php /* Template Name: Leadership */ 

get_header();

?>

<div class="leadership responsive-font-size">

    <?php 

        get_template_part( 'sections/section-page-hero', null,
            array( 
                'data'  => array(
                    'display' => get_field('hero_display'),
                    'heading' => get_field('hero_heading'),
                    'sub_heading' => get_field('hero_sub_heading'),
                    'content' => get_field('hero_content'),
                    'image' => get_field('hero_image'),
                    // 'items' => get_field('hero_items'),
                )
            ) 
        );

        get_template_part( 'sections/section','jump-links-menu', 
            array( 
                'data'  => array(
                    'display' => get_field('jump-links_display'),
                )
            )
        );
    
        get_template_part( 'sections/section-leadership-teams', null,
            array( 
                'data'  => array(
                    'id' => 'leadership-teams',
                    'teams' => get_field('leadership_sections'),
                )
            ) 
        );

        get_template_part( 'sections/section','yellow-cta-w-img', 
            array( 
                'data'  => array(
                    'id' => 'connect',
                    'full_width' => false,
                    'display' => get_field('yellow-cta__display'),
                    'heading' => get_field('yellow-cta__heading'),
                    'sub_heading' => get_field('yellow-cta__sub_heading'),
                    'content' => get_field('yellow-cta__content'),
                    'cta' => get_field('yellow-cta__link'),
                    'image' => get_field('yellow-cta__image'),
                )
            )
        );
    
    ?>

</div>

<?php

get_footer();

?>