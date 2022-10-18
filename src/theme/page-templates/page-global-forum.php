<?php 
/* Template Name: Global Forum */ 
get_header(); ?>
<div class="global-forum responsive-font-size">
<?php

get_template_part( 'sections/section-page-hero', null,
    array( 
        'data'  => array(
            'display' => get_field('hero_display'),
            'heading' => get_field('hero_heading'),
            'sub_heading' => get_field('hero_sub_heading'),
            'content' => get_field('hero_content'),
            'image' => get_field('hero_image'),
            // 'items' => get_field('hero_items'),
        )
    ) 
);

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'id' => 'theme',
            'padding' => 'compact', // 'full' or 'compact'
            'display' => get_field('block_1_display'),
            'background' => get_field('block_1_background'),
            'pre_heading' => get_field('block_1_pre_heading'),
            'heading' => get_field('block_1_heading'),
            'sub_heading' => get_field('block_1_sub_heading'),
            'statement' => get_field('block_1_statement'),
            'statement_cta' => get_field('block_1_statement_cta'),
            'content' => get_field('block_1_content'),
        )
    ) 
);

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'id' => 'forum',
            'display' => get_field('block_2_display'),
            'background' => get_field('block_2_background'),
            'pre_heading' => get_field('block_2_pre_heading'),
            'heading' => get_field('block_2_heading'),
            'sub_heading' => get_field('block_2_sub_heading'),
            'statement' => get_field('block_2_statement'),
            'statement_cta' => get_field('block_2_statement_cta'),
            'content' => get_field('block_2_content'),
        )
    ) 
);

get_template_part( 'sections/section-featured-cards', null,
    array( 
        'data'  => array(
            'id' => 'keynote-speakers',
            'display' => get_field('speakers_display'),
            'heading' => get_field('speakers_heading'),
            'content' => get_field('speakers_content'),
            'items' => get_field('speakers_items'),
            // 'cta' => get_field('speakers_link')
        )
    ) 
);

get_template_part( 'sections/section-agenda', null,
    array( 
        'data'  => array(
            'id' => 'agenda',
            'display' => get_field('agenda_display'),
            'heading' => get_field('agenda_heading'),
            'content' => get_field('agenda_content'),
            'items' => get_field('agenda_days'),
        )
    ) 
);

get_template_part( 'sections/section-sponsors', null,
    array( 
        'data'  => array(
            'id' => 'sponsors',
            'display' => get_field('sponsors_display'),
            'heading' => get_field('sponsors_heading'),
            'items' => get_field('sponsors_items'),
        )
    ) 
);

get_template_part( 'sections/section-yellow-cta', null,
    array( 
        'data'  => array(
            'id' => 'sponsor',
            'display' => get_field('cta_display'),
            'heading' => get_field('cta_heading'),
            'sub_heading' => get_field('cta_sub_heading'),
            'content' => get_field('cta_content'),
            'cta' => get_field('cta_link')
        )
    ) 
);

get_template_part( 'sections/section-two-col-block', null,
    array( 
        'data'  => array(
            'id' => 'award',
            'display' => get_field('block_3_display'),
            'background' => get_field('block_3_background'),
            'statement' => get_field('block_3_statement'),
            'statement_cta' => get_field('block_3_statement_cta'),
            'statement_image' => get_field('block_3_statement_image'),
            'content' => get_field('block_3_content'),
        )
    ) 
);

get_template_part( 'sections/section-event-summaries', null,
    array( 
        'data'  => array(
            'id' => 'past-event-summaries',
            'display' => get_field('event_summaries_display'),
            'heading' => get_field('event_summaries_heading'),
            'media_type' => get_field('event_summaries_featured_media_type'),
            'image' => get_field('event_summaries_featured_image'),
            'video_type' => get_field('event_summaries_featured_video_type'),
            'mp4_video' => get_field('event_summaries_featured_mp4_video'),
            'youtube_video_id' => get_field('event_summaries_featured_youtube_video_id'),
            'featured_sub_heading' => get_field('event_summaries_featured_sub_heading'),
            'featured_heading' => get_field('event_summaries_featured_heading'),
            'featured_cta' => get_field('event_summaries_featured_link'),
            'content' => get_field('event_summaries_content')
        )
    ) 
);

get_template_part( 'sections/section-faq', null,
    array( 
        'data'  => array(
            'id' => 'faq',
            'display' => get_field('faq_display'),
            'heading' => get_field('faq_heading'),
            'items' => get_field('faq_items'),
        )
    ) 
);

?>
</div>
<?php get_footer(); ?>