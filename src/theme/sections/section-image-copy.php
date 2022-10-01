<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'image-copy-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$vertical_alignment = isset($args['data']['vertical_alignment']) ? $args['data']['vertical_alignment'] : 'center';
$spacing_class = isset($args['data']['spacing_class']) ? $args['data']['spacing_class'] : 'center';
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$heading_size = isset($args['data']['heading_size']) ? $args['data']['heading_size'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$image = isset($args['data']['image']) ? $args['data']['image'] : null;
$image_tile = isset($args['data']['image_tile']) ? $args['data']['image_tile'] : null;
$image_alignment = isset($args['data']['image_alignment']) ? $args['data']['image_alignment'] : 'left';
$image_mobile_pos = isset($args['data']['image_mobile_pos']) ? $args['data']['image_mobile_pos'] : 'left';
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
$image_url = $image['sizes']['750x'];
if( $image['mime_type'] == 'image/png' ){
    $image_url = $image['url'];
}

$bg_color = isset($args['data']['bg_color']) ? $args['data']['bg_color'] : null;
$text_color = 'color-brand-primary';
$button_color = 'button--alt';
$extend = false;
$extend_class = '';
$extend_color = '';
switch($bg_color){
    case '#010F3A':
        $text_color = 'color-bg-dark';
        $button_color = 'button--alt button--alt-invert';
        $extend = true;
        $extend_color = 'bg-brand-primary';
        break;
    case '#016FB9':
        $extend = true;
        $extend_color = 'bg-brand-secondary';
        break;
    case '#F4F4F4':
        $extend = true;
        $extend_color = 'bg-brand-neutral-light';
        break;
    case '#C3D7D9':
        $extend = true;
        $extend_color = 'bg-brand-neutral-dark';
        break;
    case '#FECA30':
        $extend = true;
        $extend_color = 'bg-brand-secondary-accent';
        break;
}
if($extend != false):
    $extend_class = ($image_alignment == 'left') ? 'extend-bg extend-bg--right' : 'extend-bg';
    $extend_class .=  ' ' . $extend_color;
endif;

if( $display):
?>

<section id="<?php echo $section_id?>" class="image-copy <?php echo $text_color; ?> <?php echo ($image_mobile_pos == 'top') ? ' image-copy__mobile-top' : ''; ?> image-copy--align-<?php echo $vertical_alignment;?> <?php echo $image_tile ? 'image-copy--has-tile' : '';?> image-copy--image-<?php echo $image_alignment.' image-copy--'.$spacing_class;?>">
    <div class="image-copy__columns layout--1440 <?php echo $extend_class; ?>">
    <?php 
    if($image_mobile_pos == 'top'): ?>
        <div class="mobile">
            <?php 
                echo $image ? '<div class="mobile__img"><img loading="lazy" src="'.$image_url.'" alt=""></div>' : '';
                echo '<div class="mobile__content">';
                    // echo $heading ? '<h2 class="image-copy__heading">'.$heading.'</h2>' : '';
                    echo $heading ? ($heading_size ? '<h4 class="image-copy__heading">'.$heading.'</h4>' : '<h2 class="image-copy__heading">'.$heading.'</h2>' ) : '';
                    echo $sub_heading ? '<h4 class="image-copy__sub-heading">'.$sub_heading.'</h4>' : '';
                    echo $content ? '<div class="image-copy__copy">'.$content.'</div>' : '';
                    echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button '. $button_color .'">'.$cta['title'].'</a>' : '';   
                echo '</div>';
            ?>
        </div>
    <?php else: ?>
        <div class="mobile">
            <?php

            echo $heading ? ($heading_size ? '<h4 class="image-copy__heading">'.$heading.'</h4>' : '<h2 class="image-copy__heading">'.$heading.'</h2>' ) : '';

            echo $sub_heading ? '<h4 class="image-copy__sub-heading">'.$sub_heading.'</h4>' : '';
            echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="">' : '';
            echo $content ? '<div class="image-copy__copy">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button '. $button_color .'">'.$cta['title'].'</a>' : '';   
            ?>
        </div>
    
    <?php endif; ?>
        

        <?php 
        if($image){
            $bg_fill = ($bg_color != null) ? 'fill-bg' : '' ;
            echo '<div data-color="'.$bg_color.'" class="desktop image-copy__image '.$bg_fill.'" data-aos="smooth-slide-'.( $image_alignment == 'left' ? 'right' : 'left').'" data-aos-delay="100" data-aos-duration="350">';
                echo $image_tile ? '<div class="image-copy__image-wrapper">' : '';
                    echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="'.$image['alt'].'">' : ''; 
                    echo $image_tile ? '<span class="image-copy__image-tile" style="background-image:url('.$image_tile['url'].');"></span>' : ''; 
                echo $image_tile ? '</div>' : '';
            echo '</div>';
        }   
        ?>
        <div class="desktop image-copy__content">
            <?php

            if($heading_size && $heading):
                echo $heading ? '<h4 class="image-copy__heading" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$heading.'</h4>' : '';
            else:
                echo $heading ? '<h2 class="image-copy__heading" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$heading.'</h2>' : '';
            endif;
            
            echo $sub_heading ? '<h4 class="image-copy__sub-heading" data-aos="smooth-slide-up" data-aos-delay="300" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$sub_heading.'</h4>' : '';
            echo $content ? '<div class="image-copy__copy" data-aos="fade" data-aos-delay="450" data-aos-duration="600" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button '. $button_color .'"" data-aos="smooth-slide-up" data-aos-delay="500" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$cta['title'].'</a>' : '';  
            ?>
        </div>        
    </div>
</section>
<?php endif; ?>