<?php 
    if ( $args['class'] && $args['data']['url'] && $args['data']['copy'] ) {
        $class = 'button ' . $args['class'];
        $url = $args['data']['url'];
        echo '<button type="submit" href="'. $url .'" class="'. $class .'">'. $args['data']['copy'] .'</button>';
    } else {
        echo 'DONT READ MORE';
    }
?>