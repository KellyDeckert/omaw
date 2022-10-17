<?php /* Template Name: About */ 

get_header();

?>

<div class="responsive-font-size">

    <div class="section-placeholder on-hold">
        <h2>Hero + Static Image</h2>
    </div>

    <?php
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
    ?>

    <div class="section-placeholder on-hold">
        <h2>Two Column Copy Block</h2>
    </div>

    <?php 
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
    ?>

    <div class="section-placeholder on-hold">
        <h2>Image Float Left</h2>
    </div>

    <?php 
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