<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'two-col-block-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$background = isset($args['data']['background']) ? $args['data']['background'] : '#d0d0d0';
$pre_heading = isset($args['data']['pre_heading']) ? $args['data']['pre_heading'] : null;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$statement = isset($args['data']['statement']) ? $args['data']['statement'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$snippet = isset($args['data']['snippet']) ? $args['data']['snippet'] : null;

$has_header = $pre_heading || $sub_heading || $heading;

if( $display):
$delay = 200;
?>
<section id="<?php echo $section_id?>" class="two-col-block section-h-padding color-brand-primary two-col-block--<?php echo $background;?>">
    <div class="section-860">
        <?php if($has_header): ?>
        <div class="two-col-block__header two-col-block__header--<?php echo $pre_heading || $sub_heading ? 'full' : 'single' ;?>" data-aos="fade" data-aos-delay="'.$delay.'" data-aos-duration="500" data-aos-easing="cubic">
            <?php
            if($pre_heading){
                echo '<h5 class="two-col-block__pre-heading" data-aos="zoom-out" data-aos-delay="'.$delay.'" data-aos-duration="350" data-aos-easing="cubic">'.$pre_heading.'</h5>';
                $delay += 200;
            }
            if($heading){
                echo '<h2 class="two-col-block__heading" data-aos="smooth-slide-up" data-aos-delay="'.$delay.'" data-aos-duration="500" data-aos-easing="cubic">'.$heading.'</h2>';
                $delay += 200;
            }
            if($sub_heading){
                echo '<h4 class="two-col-block__sub-heading" data-aos="fade" data-aos-delay="'.$delay.'" data-aos-duration="350" data-aos-easing="cubic">'.$sub_heading.'</h4>';
                $delay += 200;
            }
            ?>
        </div>
        <?php endif; ?>
        <div class="two-col-block__columns desktop-narrow-cols">
            <div class="two-col-block__statement" data-aos="smooth-slide-left" data-aos-delay="<?php echo $delay;?>" data-aos-duration="750" data-aos-easing="cubic" data-aos-anchor="#<?php echo $section_id?>">
            <?php 
                echo $statement ? $statement : ''; 
                $delay += 500;
            ?>
            </div>
            <div class="two-col-block__content" data-aos="fade" data-aos-delay="<?php echo $delay;?>" data-aos-duration="600" data-aos-easing="cubic" data-aos-anchor="#<?php echo $section_id?>">
            <?php echo $content ? $content : ''; ?>
            </div>
        </div>
        <?php
        if($snippet) {
            get_template_part( 'snippets/'.$snippet['name'], null,
                array( 
                    'data'  => array(
                        'section_id' => $section_id,
                        'items' => $snippet['items'],
                        'snippet' => $snippet
                    )
                ) 
            );            
        }
        ?>
    </div>
</section>
<?php endif; ?>