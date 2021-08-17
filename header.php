<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo get_bloginfo('name'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet"> 
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page">
  <header id="navigation" class="site-header" role="banner">
    <div class="row">
      <div class="col-2 site-branding">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <?php bloginfo('name'); ?>
          </a>       
      </div>

      <nav id="site-navigation" class="col-7 main-navigation" role="navigation">
        <?php
          $args = ['theme_location' => 'main-menu'];
          wp_nav_menu($args);
        ?>
      </nav>

      <div class="col-3 site-socials-media">
      <?php
        $args = ['theme_location' => 'redes-sociais', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'walker' => new SocialMedia_Menu_Walker() ];
        wp_nav_menu($args);
      ?>
      </div>
    </div>
  </header>

  <div id="content" class="site-content">