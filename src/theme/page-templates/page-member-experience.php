<?php /* Template Name: Member Experience */ 

get_header();
?>

<div class="member-exp responsive-font-size">

    <?php
    
    get_template_part( 'sections/section-header-yellow',null, 
        array( 
        'data'  => array(
                'id' => 'me-header',
                'display' => get_field('me_header_display'),
                'label' => get_field('me_header_label'),
                'content' => get_field('me_header_content'),
            )
        ) 
    );

    get_template_part( 'sections/section-card-grid',null, 
        array( 
        'data'  => array(
                'id' => 'commitment',
                'display' => get_field('commitment_display'),
                'bg_color' => get_field('commitment_bg-color'),
                'heading' => get_field('commitment_heading'),
                'sub_heading' => get_field('commitment_sub_heading'),
                'content' => get_field('commitment_content'),
                'cards' => get_field('commitment_cards'),
            )
        ) 
    );
    
    ?>
    
    <div class="section-placeholder"><h2>Member Flow</h2></div>

    <?php
    
    get_template_part( 'sections/section-image-copy', null,
        array( 
            'data'  => array(
                'id' => 'member-collaboration',
                'display' => get_field('collab_display'),
                'vertical_alignment' => get_field('collab_vertical_alignment'),
                'image_alignment' => get_field('collab_image_alignment'),
                'spacing_class' => get_field('collab_spacing'),
                'image' => get_field('collab_image'),
                'image_tile' => get_field('collab_image_tile'),
                'heading' => get_field('collab_heading'),
                'sub_heading' => get_field('collab_sub_heading'),
                'content' => get_field('collab_content'),
                'cta' => get_field('collab_cta_link'),
                'bg_color' => get_field('collab_bg-color'),
            )
        ) 
    );

    get_template_part( 'sections/section-yellow-cta', null,
        array( 
            'data'  => array(
                'id' => 'join-omaw',
                'full_width' => true,
                'display' => get_field('join_display'),
                'heading' => get_field('join_heading'),
                'sub_heading' => get_field('join_sub_heading'),
                'content' => get_field('join_content'),
                'cta' => get_field('join_link')
            )
        ) 
    );

    get_template_part( 'sections/section-quote-carousel', null,
        array( 
            'data'  => array(
                'id' => 'member-quotes',
                'display' => get_field('member_quotes_display'),
                'items' => get_field('member_quotes_items'),
            )
        ) 
    );
    
    ?>
</div>

<?php get_footer(); ?>