<?php /* Template Name: FAQ */ 

get_header();

?>

<div class="responsive-font-size">

<?php

get_template_part( 'sections/section-header-illustration', null,
    array( 
        'data'  => array(
            'id' => 'faqs',
            'heading' => get_the_title()
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


$faq_sections = get_field('faq_sections');

if($faq_sections):
    foreach($faq_sections as $key => $faq_section){
        get_template_part( 'sections/section-faq', null,
            array( 
                'data'  => array(
                    'id' => slugify($faq_section['name']),
                    'display' => $faq_section['display'],
                    'margin' => 'compact', // 'full' or 'compact',
                    'heading' => $faq_section['name'],
                    'jump_link_name' => $faq_section['jump_link_name'],
                    'jump_link_display' => $faq_section['jump_link_display'],
                    'items' => $faq_section['items'],
                )
            ) 
        );

    }
endif;


?>
</div>

<?php get_footer(); ?>

