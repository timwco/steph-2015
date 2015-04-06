<?php

// Custom Portfolio Pieces
function projects_register() {
  $args = array(
      'label' => __('Projects'),
      'singular_label' => __('projects'),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'page',
      'hierarchical' => true,
      '_builtin' => false,
      'supports' => array('title','editor','thumbnail', 'page-attributes'),
      'rewrite' => array('slug'=>'projects','with_front'=>false),
      'menu_position' => 20
    );
  register_post_type( 'projects' , $args );
  flush_rewrite_rules();
}
add_action('init', 'projects_register');