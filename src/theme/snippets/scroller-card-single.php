<?php 
if ( $args['data']['heading'] && $args['data']['copy'] ): 

    $heading = $args['data']['heading'];
    $copy = $args['data']['copy'];
    $class = ($args['class']) ? $args['class'] : '';

    echo '<div class="single-card '.$class.'" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="600" data-aos-easing="cubic">';
    echo $heading ? '<h4 class="single-card__title">'.$heading.'</h4>' : '';
    echo $copy ? '<div class="single-card__copy">'.$copy.'</div>' : '';
    echo '</div>';

endif; ?>