<div class="social-media">
    <ul class="social-media-list">
        <li class="social-media-list-item">
            <?php
                get_template_part( 'snippets/social-icon', null,
                array( 
                    'data'  => array(
                        'icon' => 'linkedIn',
                        'url' => '#linkedIn'
                    ),
                )
                );
            ?>
        </li>
        <li class="social-media-list-item">
            <?php
                get_template_part( 'snippets/social-icon', null,
                array( 
                    'data'  => array(
                        'icon' => 'twitter',
                        'url' => '#twitter'
                    ),
                )
                );
            ?>
        </li>
        <li class="social-media-list-item">
            <?php
                get_template_part( 'snippets/social-icon', null,
                array( 
                    'data'  => array(
                        'icon' => 'instagram',
                        'url' => '#instagram'
                    ),
                )
                );
            ?>
        </li>
    </ul>
</div>