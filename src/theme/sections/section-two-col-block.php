<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'two-col-block-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$background = isset($args['data']['background']) ? $args['data']['background'] : null;
$pre_heading = isset($args['data']['pre_heading']) ? $args['data']['pre_heading'] : null;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$statement = isset($args['data']['statement']) ? $args['data']['statement'] : null;
$statement_cta = isset($args['data']['statement_cta']) ? $args['data']['statement_cta'] : null;
$statement_image = isset($args['data']['statement_image']) ? $args['data']['statement_image'] : null;
$statement_image_url = isset($statement_image['sizes']) ? $statement_image['sizes']['300x'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$snippet = isset($args['data']['snippet']) ? $args['data']['snippet'] : null;
$column_width = isset($args['data']['column_width']) ? $args['data']['column_width'] : '1080';
$padding = isset($args['data']['padding']) ? $args['data']['padding'] : 'full';
$has_header = $pre_heading || $sub_heading || $heading;

if( $display):
$delay = 200;
?>
<section id="<?php echo $section_id?>" class="two-col-block section-h-padding color-brand-primary <?php echo $background && $background != 'white' ? 'two-col-block--'.$background.' two-col-block--padding-'.$padding  : 'section-v-margin' ;?>      ">
    <div class="layout--<?php echo $column_width?>">
        <?php if($has_header): ?>
        <div class="two-col-block__header centered two-col-block__header--<?php echo $pre_heading || $sub_heading ? 'full' : 'single' ;?>" data-aos="fade" data-aos-delay="'.$delay.'" data-aos-duration="500" data-aos-easing="cubic">
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
                if($statement_image){
                    echo '<img class="two-col-block__statement-logo" loading="lazy" src="'.$statement_image_url.'" alt="'.$statement_image['alt'].'">'; 
                }
                echo $statement ? $statement : ''; 
                if($statement_cta){
                    $cta_classes = $background == 'dark-blue' ? 'button button--accent button--accent-light' : 'button button--secondary';
                    $delay += 200;
                    echo '<a href="'.$statement_cta['url'].'" target="'.( isset($statement_cta['target']) ? $statement_cta['target'] : '_self' ).'" class="'.$cta_classes.'" data-aos="fade" data-aos-delay="650" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$statement_cta['title'].'</a>'; 
                    $delay += 500;
                } else {
                    $delay += 500;
                }
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
                        'items' => isset($snippet['items']) ? $snippet['items'] : null,
                        'snippet' => $snippet
                    )
                ) 
            );            
        }
        ?>
    </div>
</section>
<?php endif; ?>