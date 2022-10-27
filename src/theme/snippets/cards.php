<?php 
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$layout = isset($args['data']['layout']) ? $args['data']['layout'] : 'image-top';
if($items){
    echo '<div class="cards" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="600" data-aos-easing="cubic">';
    foreach( $items as $post ): 
        get_template_part('snippets/card',null,array(
            'data' => array(
                'layout' => $layout
            )
        ));
    endforeach;
    wp_reset_postdata();
    echo '</div>';
}
?>