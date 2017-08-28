<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'after_setup_theme', 'oblique_child_setup', 20 );

function oblique_child_setup() {
  remove_action( 'oblique_footer', 'oblique_footer_credits' );
  register_nav_menu( 'top-menu', __( 'Top Menu' ) );
}

/**
 * Footer credits
 */
add_action( 'oblique_footer', 'oblique_child_footer_credits' );

function oblique_child_footer_credits() {
  echo 'Copyright © ' . date("Y") . ' ' . get_bloginfo( 'name' );
}
