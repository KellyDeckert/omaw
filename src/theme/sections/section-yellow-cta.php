<?php
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$full_width = isset($args['data']['full_width']) ? $args['data']['full_width'] : false;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section class="yellow-cta section-h-padding color-brand-primary <?php echo $full_width ? 'yellow-cta--full-width' : '';?>">
    <div class="yellow-cta__banner section-1080">
        <?php
        echo '<div class="yellow-cta__content">';
            echo $sub_heading ? '<h5 class="yellow-cta__sub-heading">'.$sub_heading.'</h5>' : '';
            echo $heading ? '<h2 class="yellow-cta__heading font-light">'.$heading.'</h2>' : '';
            echo $content ? '<div class="yellow-cta__copy">'.$content.'</div>' : '';
        echo '</div>';
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--secondary button--accent-light">'.$cta['title'].'</a>' : '';   
        ?>
    </div>
</section>
<?php endif; ?>