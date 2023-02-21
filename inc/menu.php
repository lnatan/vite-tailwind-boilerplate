<?php

function register_main_menu() {
  register_nav_menu('main-menu',__( 'Header' ));
}
add_action( 'init', 'register_main_menu' );

function get_menu_header()
{
  wp_nav_menu(array(
    'menu' => 'Main Menu',
    'menu_class' => 'flex',
    'menu_id' => 'main-menu',
    'container' => false
  ));
}
