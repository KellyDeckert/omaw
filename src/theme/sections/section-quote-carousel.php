<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'quote-carousel-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
if( $display):
?>

<section class="quote-carousel section-h-padding section-v-margin color-brand-primary">
    <div class="section-1080" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="600" data-aos-easing="cubic">

        <?php if($items): ?>
        <!-- Slider main container -->
        <div class="quote-slider">
            <div class="swiper quote-slider__slides">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach( $items as $item ): ?>
                    <div class="swiper-slide quote-slider__slide">
                        <div class="quote-slider__slide-inner">
                            <div class="quote-slider__content">
                                <?php 
                                echo $item['quote'] ? '<h4 class="quote-slider__quote">'.$item['quote'].'</h4>' : '';
                                echo $item['title'] ? '<h5 class="quote-slider__author">'.$item['title'].( $item['organization'] ? '<span class="font-light">'.$item['organization'].'</span>' : '' ).'</h5>' : '';
                                ?>
                            </div>
                            <?php
                            if($item['image']){
                                echo '<div class="quote-slider__image">';
                                echo '<img '.( $item['mobile_image'] ? 'srcset="'.$item['mobile_image']['sizes']['750x'].' 600w, '.$item['image']['sizes']['750x'].' 330w" sizes="(max-width: 767px) 600px, 330px"' : '' ).' src="'.$item['image']['sizes']['750x'].'" alt="'.$item['image']['alt'].'">';
                                echo '</div>';
                            }
                            echo $item['image'] ? '' : '';?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination" data-index="1"></div>

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

        </div>
        <?php endif; ?>
   
    </div>
</section>
<?php endif; ?>