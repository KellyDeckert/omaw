<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'card-scroller-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;

$jump_menu = isset($args['data']['jump_menu']) ? $args['data']['jump_menu'] : '';
$section_menu_on = isset($jump_menu['menu-display']) ? $jump_menu['menu-display'] : '';
$section_name = isset($jump_menu['menu-name']) ? $jump_menu['menu-name'] : '';

$heading = isset($args['data']['heading']) ? $args['data']['heading'] : true;

$card_heading = isset($args['data']['card_heading']) ? $args['data']['card_heading'] : true;
$card_content = isset($args['data']['card_content']) ? $args['data']['card_content'] : true;

if( $display):?>

<section class="card-scroller" id="<?php echo $section_id?>" data-quicklink-on="<?php echo $section_menu_on; ?>" data-quicklink-name="<?php echo $section_name; ?>">
    <div class="card-scroller__inner layout--1080">
        <div class="card-scroller__col card-scroller__title">
            <?php
                echo $heading ? '<h2 class="card-scroller__heading" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'. $heading .'</h2>' : '';
                echo '<div class="card-scroller__gutter devices"></div><div class="card-scroller__nav devices"><div class="swiper-button-prev swiper-button"></div><div class="swiper-button-next swiper-button"></div></div>';
            ?>
        </div>
        <div class="card-scroller__col">
            <div class="card-scroller__cards desktop">
                <?php
                if( have_rows('about__scrolling-cards__cards') ):
                    while( have_rows('about__scrolling-cards__cards') ) : the_row();

                        $heading = get_sub_field('scroller__heading');
                        $copy = get_sub_field('scroller__content');

                        echo get_template_part('snippets/scroller-card-single',null,
                        array(
                            'class' => '',
                            'data' => array(
                                'heading' => $heading,
                                'copy' => $copy
                            )
                        ));

                    endwhile;
                endif;
                ?>
            </div>
            <div class="card-scroller__cards swiper scroll-cards mobile">
                <div class="swiper-wrapper">
                <?php
                    if( have_rows('about__scrolling-cards__cards') ):
                        while( have_rows('about__scrolling-cards__cards') ) : the_row();

                            $heading = get_sub_field('scroller__heading');
                            $copy = get_sub_field('scroller__content');

                            echo get_template_part('snippets/scroller-card-single',null,
                            array(
                                'class' => 'swiper-slide h-100',
                                'data' => array(
                                    'heading' => $heading,
                                    'copy' => $copy
                                )
                            ));

                        endwhile;
                    endif;
                ?>
                </div>
            </div>
        
        </div>
    </div>
</section>
<?php 
endif; ?>