<?php
$embed_code = '';
$video_type = get_field('video_type') != '' ? get_field('video_type') : 'facebook' ;
$facebook_video_url = get_field('facebook_video_url');
$instagram_embed_code = get_field('instagram_embed_code');
$instagram_embed_aspect = get_field('instagram_embed_aspect');
$instagram_embed_code = get_field('instagram_embed_code');
$linkedin_embed_code = get_field('linkedin_embed_code');
$youtube_video_url = get_field('youtube_video_url');

if($video_type == 'facebook' && $facebook_video_url != ''){
    $embed_code = '<div class="fb-video" data-href="'.$facebook_video_url.'" data-width="auto" data-allowfullscreen="true"></div>';
    ?>
    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=1442339122680441&autoLogAppEvents=1" nonce="LctCSvW7"></script>
    <!-- End Facebook SDK -->    
    <?php
}

$is_video_container = $video_type == 'youtube' || $video_type == 'linkedin' ? true : false ;

if($video_type == 'instagram' && $instagram_embed_code != ''){
    $embed_code = $instagram_embed_code;
}

if($video_type == 'linkedin' && $linkedin_embed_code != ''){
    $embed_code = $linkedin_embed_code;
}

if($video_type == 'youtube' && $youtube_video_url != ''){
    $embed_code = '<iframe src="https://www.youtube.com/embed/'.youtube_id_from_url($youtube_video_url).'?autoplay=1&controls=2&modestbranding=1&rel=0" frameborder="0" allowfullscreen></iframe>';
}

if($embed_code != ''){
echo '<div class="'.( $is_video_container ? 'video-container ' : '' ).'post__video post__video--'.$video_type.( $video_type == 'instagram' ? ' post__video--'.$instagram_embed_aspect : '' ).'">';
    echo $embed_code;
echo '</div>';
}