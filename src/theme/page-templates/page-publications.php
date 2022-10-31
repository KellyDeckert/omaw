<?php /* Template Name: Publication Library */

get_header();
?>

<div class="publications responsive-font-size">

    <?php
    get_template_part( 'sections/section-header-yellow',null, 
        array( 
        'data'  => array(
                'id' => 'me-header',
                'display' => get_field('publications_header_display'),
                'label' => get_field('publications_header_label'),
                'content' => get_field('publications_header_content'),
                'cta' => get_field('publications_header_cta'),
            )
        ) 
    );

    get_template_part( 'sections/section','jump-links-menu', 
        array( 
            'data'  => array(
                'aos_anchor' => 'me-header',
                'display' => get_field('jump-links_display'),
            )
        )
    );

    $publications_sections = get_field('publications_sections');
    if($publications_sections):
        foreach($publications_sections as $key => $publications_section){
            get_template_part( 'sections/section-jumplink-section', null,
                array( 
                    'data'  => array(
                        'id' => slugify($publications_section['name']),
                        'display' => $publications_section['display'],
                        'margin' => 'compact', // 'full' or 'compact',
                        'heading' => $publications_section['name'],
                        'content' => $publications_section['content'],
                        'jump_link_name' => $publications_section['jump_link_name'],
                        'jump_link_display' => $publications_section['jump_link_display'],
                        'items_type' => 'publications',
                        'items' => $publications_section['posts'],
                    )
                ) 
            );
        }
    endif;

    get_template_part( 'sections/section-featured-cards', null,
        array( 
            'data'  => array(
                'id' => 'the-latest',
                'display' => get_field('featured_posts_display'),
                'heading' => get_field('featured_posts_heading'),
                'content' => get_field('featured_posts_content'),
                // 'items' => get_field('featured_posts_items'),
                'cta' => get_field('featured_posts_link')
            )
        ) 
    );
    
    ?>
</div>

<?php get_footer(); ?>