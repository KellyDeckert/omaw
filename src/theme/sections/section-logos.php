<?php
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section class="logos section-h-padding section-v-margin color-brand-primary">
    <div class="section-1080">
        <?php
        echo $heading ? '<h2 class="logos__heading">'.$heading.'</h2>' : '';
        echo $content ? '<h4 class="logos__copy">'.$content.'</h4>' : '';
        if($items): ?>
        <div class="logos__items">
            <?php
            foreach( $items as $item ):
            echo '<figure class="logos__item">';
                echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : ''; 
                // echo '<figcaption>'.$item['title'] .'</figcaption>';
            echo '</figure>';
            endforeach; ?>
        </div>
        <?php endif;
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button">'.$cta['title'].'</a>' : '';   
        ?>    
    </div>
</section>
<?php endif; ?>