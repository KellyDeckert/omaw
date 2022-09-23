<?php 
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$section_id = isset($args['data']['section_id']) ? $args['data']['section_id'] : null;
if($items): ?>
<div id="<?php echo $section_id; ?>-items" class="percentages-list desktop-narrow-cols">
    <?php
    $delay = 400;
    foreach( $items as $key => $item ):
    echo '<div class="percentages-list__item percentage-list-chart" data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'-items">';
        echo '<div class="percentages-list__chart-container">';
            echo '<h4 class="percentages-list__chart-label">'.$item['percentage'].'%</h4>';
            echo '<canvas id="percentage-list-chart--'.$key.'" class="percentage-list-chart-canvas" data-value="'.$item['percentage'].'" data-key="'.$key.'"></canvas>';
        echo '</div>';
        echo '<p>'.$item['label'] .'</p>';
    echo '</div>';
    $delay += 100;
    endforeach; ?>
</div>
<?php endif; ?>