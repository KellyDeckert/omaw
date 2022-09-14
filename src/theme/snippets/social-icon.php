<?php 
    if ( $args['data']['icon'] && $args['data']['url'] ) {
        $icon = $args['data']['icon']; //linkedIn instagram twitter
        $url = $args['data']['url'];
        echo '<a class="social-media-link" href="'. $url .'" target="_blank"><img class="social-media-icon" src="' . get_template_directory_uri() .'/assets/img/' . $icon . '.svg" class="" alt="" /></a>';
    }
?>