<?php /* Template Name: About */ 

get_header();

?>

<div class="responsive-font-size">

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

    get_template_part( 'sections/section', 'blue-cta-right', 
        array( 
            'data'  => array(
                'id' => 'upcoming-event',
                'display' => get_field('blue-cta_display'),
                'extend' => get_field('blue-cta_extend'),
                'heading' => get_field('blue-cta_heading'),
                'sub_heading' => get_field('blue-cta_sub_heading'),
                'cta' => get_field('blue-cta_link')
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

    get_template_part( 'sections/section-two-col-block', null,
        array( 
            'data'  => array(
                'column_width' => '1080',
                'id' => 'mission',
                'display' => get_field('mission_display'),
                'jump_menu' => get_field('mission_jump_menu'),
                'background' => get_field('mission_background'),
                'pre_heading' => get_field('mission_pre_heading'),
                'heading' => get_field('mission_heading'),
                'sub_heading' => get_field('mission_sub_heading'),
                'statement' => get_field('mission_statement'),
                'content' => get_field('mission_content'),
            )
        ) 
    );

    get_template_part( 'sections/section','our-story-content', 
        array( 
            'data'  => array(
                'id' => 'our-story',
                'display' => get_field('story_display'),
                'jump_menu' => get_field('story_jump_menu'),
                'image' => get_field('story_image'),
                'image_tile' => get_field('story_image_tile'),
                'alt' => get_field('story_image_alt'),
                'label' => get_field('story_label'),
                'heading' => get_field('story_heading'),
                'content' => get_field('story_content'),
                'overlay_content' => get_field('story_overlay_content'),
            )
        )
    );
    
    get_template_part( 'sections/section','quote-single', 
        array( 
            'data'  => array(
                'id' => 'single-quote',
                'display' => get_field('quote__display'),
                'jump_menu' => get_field('quote__jump_menu'),
                'quote' => get_field('quote__quote'),
                'title' => get_field('quote__title'),
                'organization' => get_field('quote__organization'),
                'image' => get_field('quote__image'),
            )
        )
    );
    
    get_template_part( 'sections/section','card-scroller', 
        array( 
            'data'  => array(
                'id' => 'values',
                'display' => get_field('scrolling-cards__display'),
                'jump_menu' => get_field('scrolling-cards__jump_menu'),
                'heading' => get_field('scrolling-cards__heading'),
                'card_heading' => get_field('scroller__heading'),
                'card_content' => get_field('scroller__content'),
            )
        )
    );

    get_template_part( 'sections/section-image-copy', null,
        array( 
            'data'  => array(
                'id' => 'leadership',
                'display' => get_field('leadership_display'),
                'jump_menu' => get_field('leadership_jump_menu'),
                'vertical_alignment' => get_field('leadership_vertical_alignment'),
                'image_alignment' => get_field('leadership_image_alignment'),
                'spacing_class' => get_field('leadership_spacing'),
                'image' => get_field('leadership_image'),
                'image_tile' => get_field('leadership_image_tile'),
                'heading' => get_field('leadership_heading'),
                'sub_heading' => get_field('leadership_sub_heading'),
                'content' => get_field('leadership_content'),
                'cta' => get_field('leadership_cta_link')
            )
        ) 
    );

    get_template_part( 'sections/section','yellow-cta-w-img', 
        array( 
            'data'  => array(
                'id' => 'become-a-member',
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

<?php get_footer(); ?>