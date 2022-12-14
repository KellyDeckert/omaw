<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'featured-cards-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;

// if no items passed, load the last 3, excluding publications
if(is_null($items)){
    $the_latest = new WP_Query( array(
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'post__not_in' => array($post->ID),
        'category__not_in' => array(get_cat_ID('publications'))
    ));
    wp_reset_postdata();    
    $items = $the_latest->posts;
}

if( $display):
?>
<section id="<?php echo $section_id?>" class="featured-cards section-v-padding section-h-padding color-brand-primary">
    <div class="layout--1080">
        <?php
            echo $heading ? '<h2 class="featured-cards__heading" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$heading.'</h2>' : '';
            echo $content ? '<div class="featured-cards__copy" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="450" data-aos-easing="cubic">'.$content.'</div>' : '';
            echo '<div class="featured-cards__wrapper">';
            if($items){

                echo '<div class="featured-cards__cards cards desktop" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="600" data-aos-easing="cubic">';
                foreach( $items as $post ): 
                    get_template_part('snippets/card',null,array(
                        'data' => array(
                            'layout' => 'image-top'
                        )
                    ));
                endforeach;
                echo '</div>';
            
                echo '<div class="featured-cards__cards swiper cards '.( $cta ? 'cards--cta-after' : '' ).' mobile"><div class="swiper-wrapper">';
                foreach( $items as $post ): 
                    get_template_part('snippets/card',null,array(
                        'data' => array(
                            'layout' => 'image-top',
                            'swiper_slide' => true
                        )
                    ));
                endforeach;
                echo '</div><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div>';

            }
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="featured-cards__cta button" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$cta['title'].'</a>' : '';  
            echo '</div>';
        ?>
    </div>
</section>
<?php endif; ?>