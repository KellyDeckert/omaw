<?php
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section class="blue-cta-right">
    <div class="blue-cta-right__banner section-1080">
        <?php
        echo $heading ? '<h4 class="blue-cta-right__heading">'.$heading.'</h4>' : '';
        echo $sub_heading ? '<h4 class="blue-cta-right__sub-heading">'.$sub_heading.'</h4>' : '';
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--accent button--accent-light">'.$cta['title'].'</a>' : '';   
        ?>
    </div>
</section>
<?php endif; ?>