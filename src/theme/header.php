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
        <div class="header__mobile-cta devices">
          <?php
            get_template_part( 'snippets/button', null,
              array( 
                'class' => 'button--secondary',
                'data'  => array(
                    'url' => '/become-a-member/',
                    'copy' => 'Become a Member'
                ),
              )
            );
          ?>
        </div>
        <div class="header__mobile-toggle devices">
          <input type="checkbox" class="mobile-toggle-input" id="toggle-mobile-menu" name="mobile-menu" />
          <label id="mobile-toggle-label" for="toggle-mobile-menu">
            <img class="mobile-toggle-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" class="" alt="" />
          </label>
          <div class="nav__menu devices mobile-menu-wrapper" id="mobile-menu">
            <aside class="mobile-drawer">
              <div class="mobile-drawer__closer">
                <label for="toggle-mobile-menu" class="mobile-closer-label">
                  <img id="closer" class="mobile-closer-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" />
                </label>
              </div>
              <div class="mobile-drawer__content">
                <nav class="mobile-drawer__menu">
                  <?php wp_nav_menu(['Main Menu','walker' => new submenu_wrap()]); ?>
                </nav>
              </div>
              <div class="mobile-drawer__footer">
                <div class="mobile-drawer__cta">
                  <?php
                  get_template_part( 'snippets/button', null,
                    array( 
                      'class' => 'button--secondary',
                      'data'  => array(
                          'url' => '/become-a-member/',
                          'copy' => 'Become a Member'
                      ),
                    )
                  );
                ?>
                </div>
                <div class="mobile-drawer__social">
                  <?php get_template_part( 'sections/section-social-links' ); ?>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
      <nav>
        <div class="nav__menu monitors">
            <?php wp_nav_menu(['Main Menu','walker' => new submenu_wrap()]); ?>
        </div>        
      </nav>
    </div>
  </header>