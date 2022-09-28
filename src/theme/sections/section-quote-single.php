<?php

$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'quote-carousel-'.rand();
$section_name = isset($args['data']['name']) ? $args['data']['name'] : $section_id;
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$image = isset($args['data']['image']) ? $args['data']['image'] : true;
// $mobile_image = isset($args['data']['mobile_image']) ? $args['data']['mobile_image'] : true;
$quote = isset($args['data']['quote']) ? $args['data']['quote'] : true;
$title = isset($args['data']['title']) ? $args['data']['title'] : true;
$org = isset($args['data']['organization']) ? $args['data']['organization'] : true;
$image_url = $image['sizes']['750x'];
if( $image['mime_type'] == 'image/png' ){
    $image_url = $image['url'];
}

?>


<section class="quote-single layout--1080" id="<?php echo $section_id?>" data-name="<?php echo $section_name; ?>">
    <div class="quote-single__inner">
        <div class="quote-single__content">
            <?php 
            echo $quote ? '<h4 class="quote-single__quote">'.$quote.'</h4>' : '';
            echo $title ? '<h5 class="quote-single__author">'.$title.( $org ? '<span class="font-light">'.$org.'</span>' : '' ).'</h5>' : '';
            ?>
        </div>
        <?php
        if($image){
            echo '<div class="quote-single__image">';
            echo '<img '.( $image ? 'srcset="'.$image['sizes']['750x'].' 600w, '.$image['sizes']['750x'].' 330w" sizes="(max-width: 767px) 600px, 330px"' : '' ).' src="'.$image['sizes']['750x'].'" alt="'.$image['alt'].'">';
            echo '</div>';
        }
        echo $image ? '' : '';?>
    </div>
</section>