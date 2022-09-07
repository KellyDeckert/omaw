<?php
    if ( $args['data']['size'] ) {
        $src = 'https://via.placeholder.com/' . $args['data']['size'];
    } else {
        $src = 'https://via.placeholder.com/160';
    }
    echo '<img src="' . $src . '" />';
?>