<?php 
    if ( $args['class'] && $args['data']['url'] && $args['data']['copy'] ) {
        $class = 'button ' . $args['class'];
        $url = $args['data']['url'];
        echo '<a href="'. $url .'" class="'. $class .'">'. $args['data']['copy'] .'</a>';
    } else {
        echo 'DONT READ MORE';
    }
?>