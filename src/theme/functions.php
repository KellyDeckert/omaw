<?php

// Disable Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);


//  Add HTML 5 Support for script and style -  this removes the type attrubute for scripts and style tags
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', array('script','style') );
    }
);


// Featured image support
add_theme_support( 'post-thumbnails' );

// SVG image support
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// JPEG image compression
add_filter('jpeg_quality', function($arg){return 65;});

// // Google Material Design for Web
// function google_material_design() {
// 	wp_enqueue_style('material-styles',"https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css",false);
// 	wp_enqueue_script('material-scripts',"https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js",false);
// }
// add_action( 'wp_enqueue_scripts', 'google_material_design' );

// Swiper
function enqueue_swiperjs() {
	wp_enqueue_style('swiper-styles',"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css",false);
	wp_enqueue_script('swiper-scripts',"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js",false);
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiperjs' );

// Add stylesheets and scripts
function theme_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/main.css', false, filemtime(get_stylesheet_directory() .'/main.css') );
	wp_enqueue_style( 'aos.css', get_template_directory_uri() . '/assets/css/aos.css', false, 1 );
	wp_enqueue_script( 'polyfill.min.js', 'https://cdn.polyfill.io/v2/polyfill.min.js?features=fetch,Promise,default', false, null, true);
	wp_enqueue_script( 'aos.js', get_template_directory_uri() . '/assets/js/aos.js', false, null, true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/scripts.js', false, filemtime(get_stylesheet_directory() .'/assets/js/scripts.js'), true );
	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/bundle.js', false, filemtime(get_stylesheet_directory() .'/bundle.js'), true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// add class to nav menu links
function add_link_atts($atts) {
	$atts['class'] = "nav__link menu-item-link";
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

// Google Font [Libre Franklin]
function google_fonts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200;300;400;600;700&display=swap', false);
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

// function deregister_scripts() {
// 	wp_deregister_script('jquery'); 
// 	wp_register_script('jquery', '', '', '', true);
// 	// jQuery
// 	wp_enqueue_script("jquery");
// }
// add_action( 'wp_enqueue_scripts', 'deregister_scripts' );

// // jQuery
wp_enqueue_script("jquery");

// Image sizes
add_image_size('750x', 750, 0);
add_image_size('1440x', 1440, 0);
add_image_size('1920x', 1920, 0);

// Disable auto generation of thumbnails
function add_image_insert_override($sizes){
	unset( $sizes['medium_large']);
	unset( $sizes['1536x1536']);
	unset($sizes['2048x2048']); // disable 2x large size
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );
// Disable scaled
add_filter('big_image_size_threshold', '__return_false');

// Add theme title support
add_theme_support( 'title-tag' );

// Add Menu Support
register_nav_menus( array(
	'header'   => __( 'Header' ),
	'footer'   => __( 'Footer' )
) );

// ACF
require_once( __DIR__ . '/assets/acf/acf.php');

// Converts strings to slugs
function slugify($string){
	return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
}

// Returns the YouTube video ID from any YouTube URL
function youtube_id_from_url($url) {
    /*
    $pattern =
    '%^# Match any youtube URL
    (?:https?://)?  # Optional scheme. Either http or https
    (?:www\.)?      # Optional www subdomain
    (?:             # Group host alternatives
      youtu\.be/    # Either youtu.be,
    | youtube\.com  # or youtube.com
      (?:           # Group path alternatives
        /embed/     # Either /embed/
      | /v/         # or /v/
      | /watch\?v=  # or /watch\?v=
      )             # End path alternatives.
    )               # End host alternatives.
    ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
    $%x'
    ;
    */
    $pattern = '/(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/user\/\S+|\/ytscreeningroom\?v=|\/sandalsResorts#\w\/\w\/.*\/))([^\/&]{10,12})/i';
    $result = preg_match($pattern, $url, $matches);
    if ($result) {
        return $matches[1];
    }
    return false;
}

// CUSTOM EXCERPT
function get_excerpt($source,$limit=0){
	$excerpt = $source;
	// strip shortcodes
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	// strip html
	$excerpt = strip_tags($excerpt);
	// strip multiple spaces
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	// if limit set, truncate
	if( $limit > 0){
		$excerpt = substr($excerpt, 0, $limit);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = $excerpt !== '' ? $excerpt.' ...' : '';
		// $excerpt = $excerpt.'... <a href="'.get_permalink($post->ID).'">more</a>';		
	}
	// return results
    return $excerpt;
}

// CUSTOM POST TYPES
function register_post_types() {
	/**
	 * Post Type: Videos.
	*/
	$labels = array(
		'name' => _x('Videos', 'post type general name'),
		'singular_name' => _x('Video', 'post type singular name'),
		'add_new' => _x('Add New', 'Video'),
		'add_new_item' => __('Add New Video'),
		'edit_item' => __('Edit Video'),
		'new_item' => __('New Video'),
		'view_item' => __('View Video'),
		'search_items' => __('Search Videos'),
		'not_found' =>  __('No Video found'),
		'not_found_in_trash' => __('No Video found in Trash'),
		'parent_item_colon' => ''
	);
	$supports = array('title', 'editor','excerpt');
	$args = array(
		'labels' => $labels,
		'public' => true,
		'supports' => $supports,
		'capabilities' => array(
			'edit_post'          => 'update_core',
			'read_post'          => 'update_core',
			'delete_post'        => 'update_core',
			'edit_posts'         => 'update_core',
			'edit_others_posts'  => 'update_core',
			'publish_posts'      => 'update_core',
			'read_private_posts' => 'update_core'
		),
		'has_archive' => true,
	);
	register_post_type( 'videos',$args);
}
add_action( 'init', 'register_post_types' );

// wrap wp menu submenu - custom walker
// class My_Walker_Nav_Menu extends Walker_Nav_Menu {
//     private $_before = null;

//     public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
//         // Backup the original "before", if any.
//         if ( null === $this->_before ) {
//             $this->_before = $args->before;
//         }
//         // Now add the wrapper div, if applicable.
//         if ( 0 == $depth ) {
//             $args->before = '<div class="sub-menu-wrapper">' . $this->_before;
//         } else {
//             $args->before = $this->_before;
//         }

//         // Then let the parent walker does the output generation.
//         parent::start_el( $output, $item, $depth, $args, $id );
//     }

//     public function end_el( &$output, $item, $depth = 0, $args = array() ) {
//         // Close the wrapper div, if applicable.
//         if ( 0 == $depth ) {
//             $output .= '</div><!-- .sub-menu-wrapper -->';
//         }
//         $output .= "</li>\n";
//     }
// }

/* EXTEND SUBNAV
******************************************/
class submenu_wrap extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-menu-wrapper'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}


// MODIFY ADMIN MENU
/*
// remove unneeded pages
function custom_menu_page_removing() {
	// remove comments
	remove_menu_page( 'edit-comments.php' );  
  }
  add_action( 'admin_menu', 'custom_menu_page_removing' );



// edit menu order
function custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;
	return array(
	  'index.php', // Dashboard

	  'separator1', // First separator
	  'edit.php?post_type=page', // Pages
	  'edit.php', // Posts
	  // 'edit.php?post_type=researchers',
	  'edit.php?post_type=team-members',
	  'edit.php?post_type=conditions',
	  'edit.php?post_type=quotes',
	  'edit.php?post_type=award-winner',
	  'upload.php', // Media
	  'acf-options', // ACF Site Options

	  'separator2', // Second separator
	  'edit.php?post_type=main-level-links',
	  'themes.php', // Appearance
	  'plugins.php', // Plugins
	  'users.php', // Users
	  'tools.php', // Tools
	  'options-general.php', // Settings
	  'separator-last', // Last separator
  );
  }
  add_filter('custom_menu_order', 'custom_menu_order');
  add_filter('menu_order', 'custom_menu_order');

// edit menu labels
function customize_post_admin_menu_labels() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Posts';
	// $submenu['edit.php'][5][0] = 'News';
	// $submenu['edit.php'][10][0] = 'Add News';
	echo '';
  }
add_action( 'admin_menu', 'customize_post_admin_menu_labels' );
*/