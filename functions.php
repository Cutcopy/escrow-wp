<?php
  function escrow_resourses() {
    wp_enqueue_style('style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'escrow_resourses');

  //navigation menus
  register_nav_menus(array(
    'primary' => __('primary menu'),
    'footer'=> __('footer menu')
  ));
 ?>
