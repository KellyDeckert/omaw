<?php
function serve_members_route( WP_REST_Request $request ) {
    
    // query parameters
    $args = array(
        'post_type' => 'members',
        'posts_per_page' => -1
    );
 
    $the_query = new WP_Query( $args );
    $posts_data = array();
    
    if ( $the_query->have_posts() ) :
    
        while ( $the_query->have_posts() ) : $the_query->the_post();
            global $post;

            $slug = $post->post_name;
            $id = get_the_ID();
            $title = get_the_title();
            $content = wpautop( get_the_content() );
            $image_array = '';
            $fields = get_fields();
            $guiding_council = isset($fields['guiding_council']) ? true : false ;

            // get industries 
            $industry_terms = get_the_terms( $post->ID, 'industry' );

            // get regions of engagement 
            $region_terms = get_the_terms( $post->ID, 'region-of-engagement' );

            array_push($posts_data, array(
                'id' => $id,
                'slug' => $slug,
                'title' => $title,
                'permalink' => get_the_permalink(),
                'content' => $content,
                'industry_slugs' => join(', ', wp_list_pluck($industry_terms, 'slug')),
                'regions_slugs' => join(', ', wp_list_pluck($region_terms, 'slug')),
                'industry' => join(', ', wp_list_pluck($industry_terms, 'name')),
                'regions' => join(', ', wp_list_pluck($region_terms, 'name')),
                'guiding_council' => $guiding_council
            ));  
            
        endwhile;        

    endif;

    return $posts_data;

}