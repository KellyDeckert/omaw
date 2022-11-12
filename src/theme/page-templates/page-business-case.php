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

$header_1 = get_field('bc__block_1_header_group');

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'column_width' => '860',
            'id' => 'priority',
            'display' => get_field('block_1_display'),
            'background' => get_field('block_1_background'),
            'header_display' => $header_1['block_1_header_display'],
            'pre_heading' => $header_1['block_1_pre_heading'],
            'heading' => $header_1['block_1_heading'],
            'sub_heading' => $header_1['block_1_sub_heading'],
            'statement' => get_field('block_1_statement'),
            'content' => get_field('block_1_content'),
        )
    ) 
);

$header_2 = get_field('bc__block_2_header_group');

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'column_width' => '860',
            'id' => 'cost',
            'display' => get_field('block_2_display'),
            'background' => get_field('block_2_background'),
            'header_display' => $header_2['block_2_header_display'],
            'pre_heading' => $header_2['block_2_pre_heading'],
            'heading' => $header_2['block_2_heading'],
            'sub_heading' => $header_2['block_2_sub_heading'],
            'statement' => get_field('block_2_statement'),
            'content' => get_field('block_2_content'),
            'snippet' => array(
                'name' => 'centered-stats',
                'items' => get_field('block_2_items'),
            ),
        )
    ) 
);

$header_3 = get_field('bc__block_3_header_group');

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'column_width' => '860',
            'id' => 'better',
            'display' => get_field('block_3_display'),
            'background' => get_field('block_3_background'),
            'header_display' => $header_3['block_3_header_display'],
            'pre_heading' => $header_3['block_3_pre_heading'],
            'heading' => $header_3['block_3_heading'],
            'sub_heading' => $header_3['block_3_sub_heading'],
            'statement' => get_field('block_3_statement'),
            'content' => get_field('block_3_content'),    
            'snippet' => array(
                'name' => 'percentages-list',
                'items' => get_field('block_3_items'),
            ),
        )
    ) 
);

$header_4 = get_field('bc__block_4_header_group');
$left_list = get_field('bc__block_4_list_group_left');
$right_list = get_field('bc__block_4_list_group_right');

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'column_width' => '860',
            'id' => 'opportunity',
            'display' => get_field('block_4_display'),
            'background' => get_field('block_4_background'),
            'header_display' => $header_4['block_4_header_display'],
            'pre_heading' => $header_4['block_4_pre_heading'],
            'heading' => $header_4['block_4_heading'],
            'sub_heading' => $header_4['block_4_sub_heading'],
            'statement' => get_field('block_4_statement'),
            'content' => get_field('block_4_content'),
            'snippet' => array(
                'name' => 'two-column-indicator',
                'list_display' => get_field('bc__block_4_list_display'),
                'heading' => get_field('block_4_snippet_heading'),
                'left_sub_heading' => $left_list['block_4_snippet_left_sub_heading'],
                'left_items' => $left_list['block_4_snippet_left_items'],
                'right_sub_heading' => $right_list['block_4_snippet_right_sub_heading'],
                'right_items' => $right_list['block_4_snippet_right_items'],   
            ),
        )
    ) 
);

get_template_part( 'sections/section','yellow-cta-w-img', 
    array( 
        'data'  => array(
            'id' => 'become-a-member',
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