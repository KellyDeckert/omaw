<?php /* Template Name: Leadership */ 

get_header();

?>

<div class="leadership responsive-font-size">

    <?php

        get_template_part( 'sections/section-image-copy', null,
            array( 
                'data'  => array(
                    'id' => 'about-omaw',
                    'display' => get_field('hero_display'),
                    'vertical_alignment' => get_field('hero_vertical_alignment'),
                    'image_alignment' => get_field('hero_image_alignment'),
                    'spacing_class' => get_field('hero_spacing'),
                    'additional_classes' => 'image-copy--wide-content',
                    'image' => get_field('hero_image'),
                    'image_tile' => get_field('hero_image_tile'),
                    'heading_tag' => 'h1',
                    'heading' => get_field('hero_heading'),
                    'sub_heading_tag' => 'h3',
                    'sub_heading' => get_field('hero_sub_heading'),
                    'content' => get_field('hero_content'),
                    'cta' => get_field('hero_cta_link')
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
                    'padding' => get_field('yellow-cta__padding'),
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