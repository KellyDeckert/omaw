<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'leadership-team-'.rand();
$teams = isset($args['data']['teams']) ? $args['data']['teams'] : null;

// $display = isset($args['data']['display']) ? $args['data']['display'] : true;
// $heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
// $content = isset($args['data']['content']) ? $args['data']['content'] : null;
// $items = isset($args['data']['items']) ? $args['data']['items'] : null;
// $cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;

    if( $teams ):
        foreach( $teams as $team ) {
            $id = str_replace(' ', '-', strtolower($team['team_title']));

            get_template_part( 'sections/section-team', null,
                array( 
                    'data'  => array(
                        'id' => $id,
                        'display' => $team['team_display'],
                        'jump_menu' => $team['team_jump_menu'],
                        'heading' => $team['team_title'],
                        'content' => $team['team_copy'],
                        'members' => $team['leadership_team_items'],
                    )
                ) 
            );
        }
    endif;
?>