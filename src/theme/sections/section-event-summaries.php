<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'event-summaries-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$featured_sub_heading = isset($args['data']['featured_sub_heading']) ? $args['data']['featured_sub_heading'] : null;
$featured_heading = isset($args['data']['featured_heading']) ? $args['data']['featured_heading'] : null;
$featured_cta = isset($args['data']['featured_cta']) ? $args['data']['featured_cta'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$media_type = isset($args['data']['media_type']) ? $args['data']['media_type'] : null;
$image = isset($args['data']['image']) ? $args['data']['image'] : null;
$video_type = isset($args['data']['video_type']) ? $args['data']['video_type'] : null;
$mp4_video = isset($args['data']['mp4_video']) ? $args['data']['mp4_video'] : null;
$youtube_video_id = isset($args['data']['youtube_video_id']) ? $args['data']['youtube_video_id'] : null;

if( $display):
?>
<section id="<?php echo $section_id?>" class="event-summaries section-v-padding section-h-padding color-brand-primary">
    <div class="layout--1080">
        <?php
        echo $heading ? '<h2 class="event-summaries__heading" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$heading.'</h2>' : '';
        ?>
        <div class="event-summaries__featured" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="450" data-aos-easing="cubic">
            <div class="event-summaries__featured-media">
                <?php
                if( $media_type ) {
                    $video_is_ready = $media_type == 'video' && $video_type && ($mp4_video || $youtube_video_id) ? true : false ;
                    // video link to overlay
                    if($video_is_ready){
                        echo '<a href="#" data-overlay-link data-overlay-type="video" data-video-type="'.$video_type.'" '.( $video_type == 'youtube' ? 'data-youtube-id="'.youtube_id_from_url($youtube_video_id).'"' : '' ).' '.( $video_type == 'upload' ? 'data-video-mp4="'.$mp4_video['url'].'"' : '' ).' class="overlay-link zoom-image content-block-2__image content-block-2__video">';
                    }
                    // image or youtube thumbnail
                    if( $image || ( $media_type == 'video' && $video_type == 'youtube' ) ){
                        echo '<picture'.( $video_is_ready ? ' class="video-thumbnail"' : '').'>';
                            if($video_is_ready){
                                get_template_part( 'snippets/icon-play'); 
                            } 
                            if( $image ){
                                echo '<source media="(min-width: 1920px)" srcset="'.$image['url'].'">';
                                echo '<source media="(min-width: 1440px)" srcset="'.$image['sizes']['1920x'].'">';
                                echo '<source media="(min-width: 750px)" srcset="'.$image['sizes']['1440x'].'">';
                                echo '<img loading="lazy" class="block-image '.( $video_is_ready ? 'absolute-full' : '').'" src="'.$image['sizes']['750x'].'" alt="'.$image['alt'].'">';
                            }
                            if( !$image && $media_type == 'video' && $video_type == 'youtube' ) {
                                echo '<source media="(min-width: 480px)" srcset="//img.youtube.com/vi/'.youtube_id_from_url($youtube_video_id).'/maxresdefault.jpg">';
                                echo '<img loading="lazy" class="block-image '.( $video_is_ready ? 'absolute-full' : '').'" src="//img.youtube.com/vi/'.youtube_id_from_url($youtube_video_id).'/hqdefault.jpg" alt="">';
                            }
                        echo '</picture>'; 
                    }
                    // close video link to overlay
                    if($video_is_ready){
                        echo '</a>';
                    }
                }
                ?>
            </div>
            <div class="event-summaries__featured-content">
                <?php
                echo $featured_sub_heading ? '<h6 class="event-summaries__featured_sub-heading">'.$featured_sub_heading.'</h6>' : '';
                echo $featured_heading ? '<h3 class="event-summaries__featured_heading font-bold">'.$featured_heading.'</h3>' : '';
                echo $featured_cta ? '<a href="'.$featured_cta['url'].'" target="'.( isset($featured_cta['target']) ? $featured_cta['target'] : '_self' ).'" class="event-summaries__featured_cta button button--alt">'.$featured_cta['title'].'</a>' : '';  
                ?>
            </div>
        </div>
        <div class="event-summaries__content">
            <?php
            echo $content ? '<div class="event-summaries__copy" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="450" data-aos-easing="cubic">'.$content.'</div>' : '';
            ?>
        </div>
    </div>
</section>
<?php endif; ?>