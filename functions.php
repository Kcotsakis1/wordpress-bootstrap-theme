<?php
  //register nav walker
  require_once("wp_bootstrap_navwalker.php");
  
  //theme support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
  	//nav menus
  	register_nav_menus(array(
  		'primary' => __('Primary Menu')
  	));
  }
//add when function will fire
  add_action('after_setup_theme', 'theme_setup');



//excerpt length control
  function set_excerpt_length(){
  	return 50;
  }
  add_filter('excerpt_length', 'set_excerpt_length');



  ?>


