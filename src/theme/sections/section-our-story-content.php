<?php

$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'our-story-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;

$jump_menu = isset($args['data']['jump_menu']) ? $args['data']['jump_menu'] : '';
$section_menu_on = isset($jump_menu['menu-display']) ? $jump_menu['menu-display'] : '';
$section_name = isset($jump_menu['menu-name']) ? $jump_menu['menu-name'] : '';

$image = isset($args['data']['image']) ? $args['data']['image'] : true;
$image_tile = isset($args['data']['image_tile']) ? $args['data']['image_tile'] : true;
$label = isset($args['data']['label']) ? $args['data']['label'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : true;
$content = isset($args['data']['content']) ? $args['data']['content'] : true;
$overlay_content = isset($args['data']['overlay_content']) ? $args['data']['overlay_content'] : true;
$image_url = $image['sizes']['750x'];
if( $image['mime_type'] == 'image/png' ){
    $image_url = $image['url'];
}
if( $display):
?>

<section id="<?php echo $section_id?>" data-quicklink-on="<?php echo $section_menu_on; ?>" data-quicklink-name="<?php echo $section_name; ?>" class="content-story extend-bg color-brand-primary">
    <div class="content-story__columns">
        <div class="content-story__content" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="cubic">

            <?php
            echo $label ? '<h5 class="content-story__label">'.$label.'</h5>' : '';
            echo $heading ? '<h2 class="content-story__heading">'.$heading.'</h2>' : '';
            echo $content ? '<div class="content-story__copy">'.$content.'</div>' : '';
            ?>

        </div>

        <?php 

        if($image){
            echo '<div class="content-story__img desktop drawn-bg drawn_bg--right">
                <div class="content-story__image aos-init aos-animate" data-aos="smooth-slide-right" data-aos-delay="100" data-aos-duration="350">
                    <div class="drawn_bg_wrapper">';
                        echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="'.$image['alt'].'">' : '';
                        echo $image_tile ? '<span class="drawn_bg_tile" style="background-image:url('.$image_tile['url'].');"></span>' : '';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }   

        ?>




        
    </div>
</section>
    <div class="content-story__overlay">
    <?php if($overlay_content):
        echo '<div class="story-overlay__gutter"></div>
        <div class="story-overlay__container">
            <div class="story-overlay__inner layout--1080" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="cubic">' .$overlay_content . '</div>
        </div>';
        endif;
        if($image):
            echo '<div class="content-story__img mobile">
                <div class="mobile content-story__image aos-init aos-animate" data-aos="smooth-slide-right" data-aos-delay="100" data-aos-duration="350">
                    <div class="drawn_bg_wrapper">';
                        echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="'.$image['alt'].'">' : '';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        endif;
        ?>

    </div>
<?php endif; ?>