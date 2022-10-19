<?php 
/* Template Name: Front Page */ 
get_header(); ?>

<div class="home-page responsive-font-size">
<?php
get_template_part( 'sections/section-page-hero', null,
    array( 
        'data'  => array(
            'heading' => get_field('hero_heading'),
            'sub_heading' => get_field('hero_sub_heading'),
            'items' => get_field('hero_items'),
            'border_bottom' => get_field('cta_display') ? false : true
        )
    ) 
);

get_template_part( 'sections/section-blue-cta-right', null,
    array( 
        'data'  => array(
            'aos_anchor' => 'hero',
            'id' => 'upcoming-event',
            'display' => get_field('cta_display'),
            'heading' => get_field('cta_heading'),
            'sub_heading' => get_field('cta_sub_heading'),
            'cta' => get_field('cta_link')
        )
    ) 
);

get_template_part( 'sections/section-copy-stats', null,
    array( 
        'data'  => array(
            'id' => 'who-we-are',
            'display' => get_field('who_display'),
            'heading' => get_field('who_heading'),
            'sub_heading' => get_field('who_sub_heading'),
            'content' => get_field('who_content'),
            'cta' => get_field('who_cta_link'),
            'stats_heading' => get_field('who_stats_heading'),
            'items' => get_field('who_stats_items'),
        )
    ) 
);

get_template_part( 'sections/section-centered-stats', null,
    array( 
        'data'  => array(
            'id' => 'business-stats',
            'display' => get_field('business_display'),
            'heading' => get_field('business_heading'),
            'items' => get_field('business_stats_items'),
            'content' => get_field('business_content'),
            'cta' => get_field('business_cta_link'),
        )
    ) 
);

get_template_part( 'sections/section-image-copy', null,
    array( 
        'data'  => array(
            'id' => 'our-approach',
            'display' => get_field('approach_display'),
            'vertical_alignment' => get_field('approach_vertical_alignment'),
            'image_alignment' => get_field('approach_image_alignment'),
            'spacing_class' => get_field('approach_spacing'),
            'image' => get_field('approach_image'),
            'image_tile' => get_field('approach_image_tile'),
            'heading' => get_field('approach_heading'),
            'sub_heading' => get_field('approach_sub_heading'),
            'content' => get_field('approach_content'),
            'cta' => get_field('approach_cta_link')
        )
    ) 
);

get_template_part( 'sections/section-yellow-cta', null,
    array( 
        'data'  => array(
            'id' => 'interest',
            'full_width' => true,
            'display' => get_field('interest_display'),
            'heading' => get_field('interest_heading'),
            'sub_heading' => get_field('interest_sub_heading'),
            'content' => get_field('interest_content'),
            'cta' => get_field('interest_link')
        )
    ) 
);

get_template_part( 'sections/section-logos', null,
    array( 
        'data'  => array(
            'id' => 'our-members',
            'display' => get_field('members_display'),
            'heading' => get_field('members_heading'),
            'content' => get_field('members_content'),
            'items' => get_field('members_items'),
            'cta' => get_field('members_link')
        )
    ) 
);

get_template_part( 'sections/section-quote-carousel', null,
    array( 
        'data'  => array(
            'id' => 'quotes',
            'display' => get_field('quotes_display'),
            'items' => get_field('quotes_items'),
        )
    ) 
);

get_template_part( 'sections/section-featured-cards', null,
    array( 
        'data'  => array(
            'id' => 'mental-health-blogs',
            'display' => get_field('featured_posts_display'),
            'heading' => get_field('featured_posts_heading'),
            'content' => get_field('featured_posts_content'),
            'items' => get_field('featured_posts_items'),
            'cta' => get_field('featured_posts_link')
        )
    ) 
);
?>
</div>

<?php get_footer(); ?>