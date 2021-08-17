<?php

function yourtheme_menus_init() {
  register_nav_menus( [
    'main-menu' => 'Main Menu',
    'redes-sociais' => 'Redes Sociais',
  ]);
}
add_action( 'init', 'yourtheme_menus_init' );

?>