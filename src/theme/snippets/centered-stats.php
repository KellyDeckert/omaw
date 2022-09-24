<?php 
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$section_id = isset($args['data']['section_id']) ? $args['data']['section_id'] : null;
if($items): ?>
<div id="<?php echo $section_id; ?>-items" class="centered-stats__items">
    <?php
    $delay = 400;
    foreach( $items as $item ):
    echo '<figure class="centered-stats__item" data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'-items">';
        echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : ''; 
        echo '<figcaption>'.$item['title'] .'</figcaption>';
    echo '</figure>';
    $delay += 100;
    endforeach; ?>
</div>
<?php endif; ?>