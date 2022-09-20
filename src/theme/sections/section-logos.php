<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'logos-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="logos section-h-padding section-v-margin color-brand-primary">
    <div class="section-1080">
        <?php
        echo $heading ? '<h2 class="logos__heading" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$heading.'</h2>' : '';
        echo $content ? '<h4 class="logos__copy" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="450" data-aos-easing="cubic">'.$content.'</h4>' : '';
        if($items): ?>
        <div id="<?php echo $section_id?>-items" class="logos__items">
            <?php
            $delay = 450;
            foreach( $items as $item ):
            echo '<figure class="logos__item" data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'-items">';
                echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : ''; 
            echo '</figure>';
            $delay += 100;
            endforeach; ?>
        </div>
        <?php endif;
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$cta['title'].'</a>' : '';   
        ?>    
    </div>
</section>
<?php endif; ?>