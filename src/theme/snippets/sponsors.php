<?php 
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$section_id = isset($args['data']['section_id']) ? $args['data']['section_id'] : null;
$section_id = isset($args['data']['section_id']) ? $args['data']['section_id'] : null;
if($items): ?>
<div id="<?php echo $section_id?>-items" class="sponsors-list">
    <?php
    $delay = 450;
    foreach( $items as $tier ):
        echo '<div class="sponsors-list__tier"  data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'-items">';
        $delay += 100;
            echo $tier['name'] ? '<h6 class="sponsors-list__heading uppercase">'.$tier['name'].'</h6>' : '' ;
            if($tier['items']){
                echo '<div class="sponsors-list__logos-wrapper">';
                    echo '<div class="sponsors-list__logos sponsors-list__logos--'.$tier['size'].'">';
                    foreach( $tier['items'] as $item ):
                        echo '<'.( $item['link'] ? 'a href="'.$item['link']['url'].'" target="'.$item['link']['target'].'"' : 'span').' class=" sponsors-list__item"  data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'-items">';
                            echo $item['image'] ? '<img class="block-image" src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : ''; 
                        echo '</'.( $item['link'] ? 'a' : 'span').'>';
                        $delay += 100;
                    endforeach; 
                    echo '</div>';
                echo '</div>';
            }
        echo '</div>';
    $delay += 100;
    endforeach; ?>
</div>
<?php endif; ?>