<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'content-carousel-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;

$label = isset($args['data']['label']) ? $args['data']['label'] : null;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;

$slides = isset($args['data']['items']) ? $args['data']['items'] : null;
if( $display):
?>

<section class="content-carousel section-h-padding color-brand-primary">
    <div class="layout--1080">
        <div class="content-carousel-header">
            <?php

            echo $label ? '<h6 class="cc-header__label">'.$label.'</h6>' : '';
            echo $heading ? '<h2 class="cc-header__title">'.$heading.'</h2>' : '';
            echo $content ? '<div class="cc-header__copy">'.$content.'</div>' : '';

            ?>
        </div>

        <?php if($slides): ?>
        <!-- Slider main container -->
        <div class="content-slider">
            <div class="swiper content-slider__slides">
                <!-- If we need pagination -->
                <div class="swiper-pagination content-slider__pagination" data-index="1"></div>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach( $slides as $slide ): ?>
                        <div class="swiper-slide content-slider__slide">
                            <div class="content-slider__slide-inner">
                                <div class="content-slider__content">
                                    <?php 
                                        // echo 'slide';
                                        echo $slide['mcs_heading'] ? '<h3 class="content-slide__heading">'.$slide['mcs_heading'].'</h3>' : '' ;
                                        echo $slide['mcs_content'] ? '<div class="content-slide__wysiwyg">'.$slide['mcs_content'].'</div>' : '' ;
                                    ?>
                                </div>
                                <?php
                                if($slide['slide_image']){
                                    echo '<div class="content-slider__image">';
                                    echo '<img '.( $slide['slide_mobile_image'] ? 'srcset="'.$slide['slide_mobile_image']['sizes']['750x'].' 600w, '.$slide['slide_image']['sizes']['750x'].' 330w" sizes="(max-width: 767px) 600px, 330px"' : '' ).' src="'.$slide['slide_image']['sizes']['750x'].'" alt="'.$slide['slide_image']['alt'].'">';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
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