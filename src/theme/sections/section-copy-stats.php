<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'copy-stats-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
$stats_heading = isset($args['data']['stats_heading']) ? $args['data']['stats_heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="copy-stats color-brand-primary">
    <div class="copy-stats__columns section-1080">
        <div class="copy-stats__content" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="cubic">
            <?php
            echo $heading ? '<h2 class="copy-stats__heading">'.$heading.'</h2>' : '';
            echo $sub_heading ? '<h4 class="copy-stats__sub-heading">'.$sub_heading.'</h4>' : '';
            echo $content ? '<div class="copy-stats__copy">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--alt button--alt-dark">'.$cta['title'].'</a>' : '';   
            ?>
        </div>
        <div class="copy-stats__stats">
        <?php 
        echo $stats_heading ? '<h2 class="copy-stats__stats-heading font-light" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="500" data-aos-easing="cubic" data-aor-anchor="#">'.$stats_heading.'</h2>' : '';
        if($items): ?>
        <div class="copy-stats__items">
            <?php
            $delay = 400;
            foreach( $items as $item ):
            echo '<figure class="copy-stats__item" data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">';
                echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : ''; 
                echo '<figcaption>'.$item['title'] .'</figcaption>';
            echo '</figure>';
            $delay += 100;
            endforeach; ?>
        </div>
        <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>