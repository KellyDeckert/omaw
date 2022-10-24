<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'header-illustration-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$label = isset($args['data']['label']) ? $args['data']['label'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;

if( $display):
?>
<section class="header-simple-yellow color-brand-primary" id="<?php echo $section_id?>">
    <div class="header-simple-yellow__inner section-h-padding layout--1080" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="500" data-aos-easing="cubic">
        <?php
            echo '<div class="layout--1080 header-simple-yellow__content">';
                echo $label ? '<h5 class="header-simple-yellow__label" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="700" data-aos-easing="cubic">'.$label.'</h5>' : '';
                echo '<div class="header-simple-yellow__copy" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="700" data-aos-easing="cubic">
                    '.$content.'
                </div>';
            echo '</div>';
    ?>
    </div>
</section>
<?php endif; ?>