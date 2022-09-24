<?php 
/* Template Name: Business Case */ 
get_header(); ?>

<div class="business-case responsive-font-size">
<?php
get_template_part( 'sections/section-header-illustration', null,
    array( 
        'data'  => array(
            'id' => 'business-case',
            'heading' => get_the_title()
        )
    ) 
);

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'id' => 'priority',
            'display' => get_field('block_1_display'),
            'background' => get_field('block_1_background'),
            'pre_heading' => get_field('block_1_pre_heading'),
            'heading' => get_field('block_1_heading'),
            'sub_heading' => get_field('block_1_sub_heading'),
            'statement' => get_field('block_1_statement'),
            'content' => get_field('block_1_content'),
        )
    ) 
);

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'id' => 'cost',
            'display' => get_field('block_2_display'),
            'background' => get_field('block_2_background'),
            'pre_heading' => get_field('block_2_pre_heading'),
            'heading' => get_field('block_2_heading'),
            'sub_heading' => get_field('block_2_sub_heading'),
            'statement' => get_field('block_2_statement'),
            'content' => get_field('block_2_content'),
            'snippet' => array(
                'name' => 'centered-stats',
                'items' => get_field('block_2_items'),
            ),
        )
    ) 
);

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'id' => 'better',
            'display' => get_field('block_3_display'),
            'background' => get_field('block_3_background'),
            'pre_heading' => get_field('block_3_pre_heading'),
            'heading' => get_field('block_3_heading'),
            'sub_heading' => get_field('block_3_sub_heading'),
            'statement' => get_field('block_3_statement'),
            'content' => get_field('block_3_content'),    
            'snippet' => array(
                'name' => 'percentages-list',
                'items' => get_field('block_3_items'),
            ),
        )
    ) 
);

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'id' => 'opportunity',
            'display' => get_field('block_4_display'),
            'background' => get_field('block_4_background'),
            'pre_heading' => get_field('block_4_pre_heading'),
            'heading' => get_field('block_4_heading'),
            'sub_heading' => get_field('block_4_sub_heading'),
            'statement' => get_field('block_4_statement'),
            'content' => get_field('block_4_content'),
            'snippet' => array(
                'name' => 'two-column-indicator',
                'heading' => get_field('block_4_snippet_heading'),
                'left_sub_heading' => get_field('block_4_snippet_left_sub_heading'),
                'left_items' => get_field('block_4_snippet_left_items'),
                'right_sub_heading' => get_field('block_4_snippet_right_sub_heading'),
                'right_items' => get_field('block_4_snippet_right_items'),   
            ),
        )
    ) 
);

get_template_part( 'sections/section-citations', null,
    array( 
        'data'  => array(
            'id' => 'citations',
            'display' => get_field('citations_display'),
            'heading' => get_field('citations_heading'),
            'content' => get_field('citations_content'),
        )
    ) 
);





?>





</div>

<?php get_footer(); ?>