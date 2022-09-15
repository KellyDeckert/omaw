<?php
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$vertical_alignment = isset($args['data']['vertical_alignment']) ? $args['data']['vertical_alignment'] : 'left';
$spacing_class = isset($args['data']['spacing_class']) ? $args['data']['spacing_class'] : 'center';
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$image = isset($args['data']['image']) ? $args['data']['image'] : null;
$image_tile = isset($args['data']['image_tile']) ? $args['data']['image_tile'] : null;
$image_alignment = isset($args['data']['image_alignment']) ? $args['data']['image_alignment'] : 'left';
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
$image_url = $image['sizes']['750x'];
if( $image['mime_type'] == 'image/png' ){
    $image_url = $image['url'];
}
if( $display):
?>
<section class="image-copy color-brand-primary image-copy--align-<?php echo $vertical_alignment;?> <?php echo $image_tile ? 'image-copy--has-tile' : '';?> image-copy--image-<?php echo $image_alignment.' image-copy--'.$spacing_class;?>">
    <div class="image-copy__columns layout--1440">
        <div class="mobile">
            <?php
            echo $heading ? '<h2 class="image-copy__heading">'.$heading.'</h2>' : '';
            echo $sub_heading ? '<h4 class="image-copy__sub-heading">'.$sub_heading.'</h4>' : '';
            echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="">' : '';
            echo $content ? '<div class="image-copy__copy">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button  button--alt">'.$cta['title'].'</a>' : '';   
            ?>
        </div>
        <?php 
        if($image){
            echo '<div class="desktop image-copy__image">';
                echo $image_tile ? '<div class="image-copy__image-wrapper">' : '';
                    echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="'.$image['alt'].'">' : ''; 
                    echo $image_tile ? '<span class="image-copy__image-tile" style="background-image:url('.$image_tile['url'].');"></span>' : ''; 
                echo $image_tile ? '</div>' : '';
            echo '</div>';
        }   
        ?>
        <div class="desktop image-copy__content">
            <?php
            echo $heading ? '<h2 class="image-copy__heading">'.$heading.'</h2>' : '';
            echo $sub_heading ? '<h4 class="image-copy__sub-heading">'.$sub_heading.'</h4>' : '';
            echo $content ? '<div class="image-copy__copy">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button  button--alt">'.$cta['title'].'</a>' : '';  
            ?>
        </div>        
    </div>
</section>
<?php endif; ?>