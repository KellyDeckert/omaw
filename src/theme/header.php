<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">-->
	<?php wp_head(); ?>
</head>
<body <?php body_class('wip'); ?>>

  <header>
    <div class="header__inner layout--1080">
      <div class="header__logo">
        <?php get_template_part( 'snippets/omaw-logo' ); ?>
      </div>
      <nav>
        <div class="nav__menu">
            <?php wp_nav_menu(['Main Menu','walker' => new submenu_wrap()]); ?>
        </div>
      </nav>
    </div>
  </header>