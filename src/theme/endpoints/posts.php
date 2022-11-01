<?php
function serve_posts_route( WP_REST_Request $request ) {
    
    // query parameters
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category__not_in' => array(24,18)
    );
 
    $the_query = new WP_Query( $args );
    $posts_data = array();
    
    if ( $the_query->have_posts() ) :
    
        while ( $the_query->have_posts() ) : $the_query->the_post();
            global $post;
            
            $id = get_the_ID();
            $image_array = '';
            $fields = get_fields();

            $categories = get_the_category($id);
            $categories_array = array();
            foreach( $categories as $category ){
                array_push($categories_array,$category->slug);
            }
            $author = getRelationShipAuthor(get_field('authors'));
            array_push($posts_data, array(
                'date' => get_the_date('M. j, Y'),
                'timestamp' => get_the_date('U'),
                'id' => $id,
                'slug' => $post->post_name,
                'author' => $author,
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'excerpt' => get_card_excerpt($id,124),
                'image' => getImageObject($id),
                'categories' => implode(',',$categories_array)
            ));  
            
        endwhile;        

    endif;

    return $posts_data;

}