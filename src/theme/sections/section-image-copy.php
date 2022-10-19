<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'image-copy-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$vertical_alignment = isset($args['data']['vertical_alignment']) ? $args['data']['vertical_alignment'] : 'center';
$spacing_class = isset($args['data']['spacing_class']) ? $args['data']['spacing_class'] : 'center';
$additional_classes = isset($args['data']['additional_classes']) ? $args['data']['additional_classes'] : '';
$heading_tag = isset($args['data']['heading_tag']) ? $args['data']['heading_tag'] : 'h2';
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading_tag = isset($args['data']['sub_heading_tag']) ? $args['data']['sub_heading_tag'] : 'h4';
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
$bg_color_location = isset($args['data']['bg_color_location']) ? $args['data']['bg_color_location'] : 'section';
$text_color = 'color-brand-primary';
$button_color = 'button--alt';

switch($bg_color){
    case '#010F3A':
        $text_color = 'color-bg-dark';
        $button_color = 'button--alt button--alt-invert';
        $bg_color_class = 'bg-brand-primary';
        break;
    case '#016FB9':
        $bg_color_class = 'bg-brand-secondary';
        break;
    case '#F4F4F4':
        $bg_color_class = 'bg-brand-neutral-light';
        break;
    case '#C3D7D9':
        $bg_color_class = 'bg-brand-neutral-dark';
        break;
    case '#FECA30':
        $bg_color_class = 'bg-brand-secondary-accent';
        break;
}


$section_classes = $bg_color_class;
$section_classes .= ' image-copy--bg-'.$bg_color_location;
$section_classes .= ' '.$text_color;
$section_classes .= $image_mobile_pos == 'top' ? ' image-copy__mobile-top' : '';
$section_classes .= ' image-copy--align-'.$vertical_alignment;
$section_classes .= $image_tile ? ' image-copy--has-tile' : '' ;
$section_classes .= ' image-copy--image-'.$image_alignment;
$section_classes .= ' image-copy--'.$spacing_class;
$section_classes .= $additional_classes != '' ? ' '.$additional_classes : '';

if( $display):
?>

<section id="<?php echo $section_id?>" 
    class="image-copy <?php echo $section_classes;?>" 
    data-quicklink-on="<?php echo $section_menu_on; ?>" data-quicklink-name="<?php echo $section_name; ?>"
    data-aos="fade" data-aos-delay="100" data-aos-duration="400" data-aos-easing="cubic"
    >
    <div class="image-copy__columns layout--1440">
        <?php 
        if($image_mobile_pos == 'top'): ?>
        <div class="mobile">
            <?php 
                echo $image ? '<div class="mobile__img"><img loading="lazy" src="'.$image_url.'" alt=""></div>' : '';
                echo '<div class="mobile__content">';
                    echo $heading ? '<'.$heading_tag.' class="image-copy__heading">'.$heading.'</'.$heading_tag.'>' : '';
                    echo $sub_heading ? '<'.$sub_heading_tag.' class="image-copy__sub-heading">'.$sub_heading.'</'.$sub_heading_tag.'>' : '';
                    echo $content ? '<div class="image-copy__copy">'.$content.'</div>' : '';
                    echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button '. $button_color .'">'.$cta['title'].'</a>' : '';   
                echo '</div>';
            ?>
        </div>
    <?php else: ?>
        <div class="mobile">
            <?php

            echo $heading ? '<'.$heading_tag.' class="image-copy__heading">'.$heading.'</'.$heading_tag.'>' : '';
            echo $sub_heading ? '<'.$sub_heading_tag.' class="image-copy__sub-heading">'.$sub_heading.'</'.$sub_heading_tag.'>' : '';
            echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="">' : '';
            echo $content ? '<div class="image-copy__copy">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button '. $button_color .'">'.$cta['title'].'</a>' : '';   
            ?>
        </div>
        <?php endif; ?>
        <?php 
        if($image){
            echo '<div data-color="'.$bg_color.'" class="desktop image-copy__image" data-aos="smooth-slide-'.( $image_alignment == 'left' ? 'right' : 'left').'" data-aos-delay="100" data-aos-duration="350">';
                echo $image_tile ? '<div class="image-copy__image-wrapper">' : '';
                    echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="'.$image['alt'].'">' : ''; 
                    echo $image_tile ? '<span class="image-copy__image-tile" style="background-image:url('.$image_tile['url'].');"></span>' : ''; 
                echo $image_tile ? '</div>' : '';
            echo '</div>';
        }   
        ?>
        <div class="desktop image-copy__content">
            <?php            
            echo $heading ? '<'.$heading_tag.' class="image-copy__heading" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$heading.'</'.$heading_tag.'>' : '';
            
            echo $sub_heading ? '<'.$sub_heading_tag.' class="image-copy__sub-heading" data-aos="smooth-slide-up" data-aos-delay="300" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$sub_heading.'</'.$sub_heading_tag.'>' : '';
            echo $content ? '<div class="image-copy__copy" data-aos="fade" data-aos-delay="450" data-aos-duration="600" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button '. $button_color .'"" data-aos="smooth-slide-up" data-aos-delay="500" data-aos-duration="300" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$cta['title'].'</a>' : '';  
            ?>
        </div>        
    </div>
</section>
<?php endif; ?>