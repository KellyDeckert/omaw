<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'header-illustration-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;

if( $display):
?>
<section id="<?php echo $section_id?>" class="header-illustration  color-brand-primary <?php echo !$heading ? 'header-illustration--empty': '';?>">
    <div class="header-illustration__inner section-h-padding layout--1440" data-aos="smooth-slide-down" data-aos-delay="250" data-aos-duration="400" data-aos-easing="cubic"><?php
        if($heading){
            echo '<div class="layout--1080">';
                echo '<h1 class="header-illustration__heading" data-aos="smooth-slide-left" data-aos-delay="450" data-aos-duration="700" data-aos-easing="cubic">'.$heading.'</h1>';
            echo '</div>';
        }
    ?></div>
</section>
<?php endif; ?>