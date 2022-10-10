<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'faq-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cards = isset($args['data']['cards']) ? $args['data']['cards'] : null;
$bg_color = isset($args['data']['bg_color']) ? $args['data']['bg_color'] : null;
$bg_class = '';
switch($bg_color){
    case '#010F3A':
        $bg_class = 'bg-color-on bg-brand-primary';
        break;
    case '#016FB9':
        $bg_class = 'bg-color-on bg-brand-secondary';
        break;
    case '#F4F4F4':
        $bg_class = 'bg-color-on bg-brand-neutral-light';
        break;
    case '#C3D7D9':
        $bg_class = 'bg-color-on bg-brand-neutral-dark';
        break;
    case '#FECA30':
        $bg_class = 'bg-color-on bg-brand-secondary-accent';
        break;
}


if( $display):
?>

<section class="card-grid <?php echo $bg_class; ?>" id="<?php echo $section_id; ?>" data-quicklink-name="<?php echo $section_name; ?>">
    <div class="card-grid__inner layout--1080">
        <div class="card-grid__col card-grid__title color-brand-primary">
            <?php
                echo $heading ? '<h2 class="card-grid__heading" data-aos="smooth-slide-left" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'. $heading .'</h2>' : '';
                echo $sub_heading ? '<h4 class="card-grid__sub_heading" data-aos="smooth-slide-left" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'. $sub_heading .'</h4>' : '';
                echo $content ? '<div class="card-grid__content" data-aos="smooth-slide-left" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'. $content .'</div>' : '';
            ?>
        </div>
        <div class="card-grid__cards">
            <?php if($cards):
                foreach( $cards as $card ): 
                    echo $card['cc_toggle_type'] ? '<div class="grid-card-single grid-card-single--cta" data-aos="smooth-slide-left" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic"><div class="grid-card-single--cta-inner">' : '<div class="grid-card-single" data-aos="smooth-slide-left" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">';
                        echo '<h4 class="grid-card-single__heading">'.$card['cc_heading'].'</h4>';
                        echo $card['cc_toggle_type'] ? '<h4 class="grid-card-single__cta">'.$card['cc_content'].'</h4>' : '<p class="grid-card-single__blurb">'.$card['cc_content'].'</p>';
                        echo $card['cc_toggle_type'] ? '<a href="'.$card['cc_link']['url'].'" target="'.( isset($card['cc_link']['target']) ? $card['cc_link']['target'] : '_self' ).'" class="grid-card-single__link button button--alt button--alt-invert" data-aos="fade" data-aos-delay="650" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$card['cc_link']['title'].'</a>' : '';
                        echo $card['cc_toggle_type'] ? '</div></div>' : '</div>';
                endforeach;
            endif; ?>
        </div>
    </div>
</div>

<?php
endif;
?>