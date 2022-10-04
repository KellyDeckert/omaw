<?php
function serve_person_route( WP_REST_Request $request ) {
    
    // query parameters
    $args = array(
        'post_type' => $request['type'],
        'p' => $request['id'],
        'posts_per_page' => 1
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

            // get featured image and alt text
            $has_featured_image = has_post_thumbnail($id);
            if( $has_featured_image ){
                $image_array = array(
                    'alt' => get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true),
                    'small_thumbnail' => get_the_post_thumbnail_url($id,'small-thumbnail'),
                    'thumbnail' => get_the_post_thumbnail_url($id,'thumbnail'),
                    'medium' => get_the_post_thumbnail_url($id,'medium'),
                    'large' => get_the_post_thumbnail_url($id,'large'),
                    'full' => get_the_post_thumbnail_url($id,'full'),
                );
            } else {
                $image_url = catch_that_image();
                if($image_url){
                    $image_array = array(
                        'alt' => $slug,
                        'small_thumbnail' => $image_url,
                        'thumbnail' => $image_url,
                        'medium' =>$image_url,
                        'large' => $image_url,
                        'full' => $image_url,
                    );
                }
            }

            $posts_data = array(
                'id' => $id,
                'slug' => $slug,
                'title' => $title,
                'image' => $image_array,
                'permalink' => get_the_permalink(),
                'content' => $content,
                'custom_fields' => $fields
            );            
            
        endwhile;        

    endif;

    return $posts_data;

}