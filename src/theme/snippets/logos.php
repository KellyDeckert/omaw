<?php 
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$items_per_row = isset($args['data']['items_per_row']) ? $args['data']['items_per_row'] : null;
$section_id = isset($args['data']['section_id']) ? $args['data']['section_id'] : null;
if($items): ?>
<div id="<?php echo $section_id?>-items" class=" logo-list logo-list--mobile-<?php echo $items_per_row['mobile'];?> logo-list--desktop-<?php echo $items_per_row['desktop'];?>">
    <?php
    $delay = 450;
    foreach( $items as $item ):
    echo '<figure class=" logo-list__item" data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'-items">';
        echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : ''; 
    echo '</figure>';
    $delay += 100;
    endforeach; ?>
</div>
<?php endif; ?>