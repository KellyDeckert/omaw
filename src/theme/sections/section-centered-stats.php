<?php
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section class="centered-stats color-brand-primary section-h-padding">
    <div class="layout--1080">
        <?php
        echo $heading ? '<h2 class="centered-stats__heading font-light">'.$heading.'</h2>' : '';
        if($items): ?>
        <div class="centered-stats__items">
            <?php
            foreach( $items as $item ):
            echo '<figure class="centered-stats__item">';
                echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : ''; 
                echo '<figcaption>'.$item['title'] .'</figcaption>';
            echo '</figure>';
            endforeach; ?>
        </div>
        <?php endif;
        echo $content ? '<h4 class="centered-stats__copy">'.$content.'</h4>' : '';
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--secondary">'.$cta['title'].'</a>' : '';   
        ?>    
    </div>
</section>
<?php endif; ?>