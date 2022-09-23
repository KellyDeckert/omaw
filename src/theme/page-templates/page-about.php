<?php /* Template Name: About */ 

get_header();

?>

<div class="responsive-font-size">

    <div class="section-placeholder on-hold">
        <h2>Hero + Static Image</h2>
    </div>

    <div class="section-placeholder on-hold">
        <h2>Blue CTA</h2>
    </div>

    <div class="section-placeholder">
        <h2>Jump Links</h2>
    </div>

    <div class="section-placeholder on-hold">
        <h2>Two Column Copy Block</h2>
    </div>

    <?php 
    get_template_part( 'sections/section','our-story-content', 
        array( 
            'data'  => array(
                'id' => 'our-story',
                'display' => get_field('story_display'),
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
    ?>

    <div class="section-placeholder">
        <h2>Single Quote</h2>
    </div>

    <div class="section-placeholder">
        <h2>Values</h2>
    </div>

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