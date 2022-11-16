<?php
$type = isset($args['data']['type']) ? $args['data']['type'] : 'site' ; 
switch($type){
    case 'site':
        $linkedin_url = get_field('linkedin','options');
        $twitter_url = get_field('twitter','options');
        $instagram_url = get_field('instagram','options');
        $facebook_url = get_field('facebook','options');

    break;
    case 'post':
        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url='.get_the_permalink();
        $twitter_url = 'https://twitter.com/share?url='.get_the_permalink();
        $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink();
    break;
}
?>
<div class="social-media">
    <ul class="social-media-list">        
    <?php
    if(isset($linkedin_url)){
        echo '<li class="social-media-list-item">';
        get_template_part( 'snippets/social-icon', null,
            array( 
                'data'  => array(
                    'icon' => 'linkedIn',
                    'url' => $linkedin_url
                ),
            )
        );
        echo '</li>';
    }
    if(isset($twitter_url)){
        echo '<li class="social-media-list-item">';
        get_template_part( 'snippets/social-icon', null,
            array( 
                'data'  => array(
                    'icon' => 'twitter',
                    'url' => $twitter_url
                ),
            )
        );
        echo '</li>';
    }
    if(isset($instagram_url)){
        echo '<li class="social-media-list-item">';
        get_template_part( 'snippets/social-icon', null,
            array( 
                'data'  => array(
                    'icon' => 'instagram',
                    'url' => $instagram_url
                ),
            )
        );
        echo '</li>';
    }
    if(isset($facebook_url)){
        echo '<li class="social-media-list-item">';
        get_template_part( 'snippets/social-icon', null,
            array( 
                'data'  => array(
                    'icon' => 'facebook',
                    'url' => $facebook_url
                ),
            )
        );
        echo '</li>';
    }
    ?>  
    </ul>
</div>