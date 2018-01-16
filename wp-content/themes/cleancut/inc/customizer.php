<?php
function cleancut_customizer_register($wp_customize){

	//showcase section
  $wp_customize->add_section('showcase', array(
    'title' => __('Showcase', 'cleancut'),
    'description' => sprintf(__('Options for showcase area', 'cleancut')),
    'priority' => 130,
  ));
  //showcase image section
  $wp_customize->add_setting('showcase_image', array(
    'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
    'type' => 'theme_mod'
  ));
  //showcase image control
  $wp_customize->add_control( new
  	WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label' => __('Background Image', 'cleancut'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority' => 1,
  	)));
  //height setting section
  $wp_customize->add_setting( 'showcase_height', array(
    'default' => _x(700, 'cleancut'),
    'type' => 'theme_mod'
  ));
  //height setting control
  $wp_customize->add_control( 'showcase_height', array(
    'label' => __('Showcase Height', 'cleancut'),
    'section' => 'showcase',
    'priority' => 2,
  ));

  //heading section
  $wp_customize->add_setting( 'showcase_heading', array(
    'default' => _x('CleanCut Theme', 'cleancut'),
    'type' => 'theme_mod'
  ));
  //heading control
  $wp_customize->add_control( 'showcase_heading', array(
    'label' => __('Heading', 'cleancut'),
    'section' => 'showcase',
    'priority' => 3
  ));

  //text section
  $wp_customize->add_setting( 'showcase_text', array(
    'default' => _x('Custom Wordpress Theme By You', 'cleancut'),
    'type' => 'theme_mod'
  ));
  //text control
  $wp_customize->add_control( 'showcase_text', array(
    'label' => __('Text', 'cleancut'),
    'section' => 'showcase',
    'priority' => 4
  ));

 

  //social section
$wp_customize->add_section('social', array(
  'title' => __('Social', 'cleancut'),
  'description' => sprintf( __('Social media urls', 'cleancut')),
  'priority' => 140,
));
//facebook url settings
$wp_customize->add_setting('facebook_url', array(
  'default' => _x('http://www.facebook.com', 'cleancut'),
  'type' =>'theme_mod'
));
//Facebook url control
$wp_customize->add_control( 'facebook_url' ,array(
  'label' => __('Facebook URL', 'cleancut'),
  'section' => 'social',
  'priority' => 1,
));
//Twitter url settings
$wp_customize->add_setting('twitter_url', array(
  'default' => _x('http://www.twitter.com', 'cleancut'),
  'type' =>'theme_mod'
));
//Twitter url control
$wp_customize->add_control( 'twitter_url' ,array(
  'label' => __('Twitter URL', 'cleancut'),
  'section' => 'social',
  'priority' => 2,
));
//LinkedIn url settings
$wp_customize->add_setting('linkedin_url', array(
  'default' => _x('http://www.linkedin.com', 'cleancut'),
  'type' =>'theme_mod'
));
//LinkedIn url control
$wp_customize->add_control( 'linkedin_url' ,array(
  'label' => __('LinkedIn URL', 'cleancut'),
  'section' => 'social',
  'priority' => 3,
));

 //bottom banner section
$wp_customize->add_section('banner', array(
  'title' => __('Bottom Banner', 'cleancut'),
  'description' => sprintf( __('Options for bottom banner', 'cleancut')),
  'priority' => 160
));
//image setting
$wp_customize->add_setting('banner_image', array(
  'default' => get_bloginfo('template_directory') . '/img/banner.jpg',
  'type' => 'theme_mod',
));
//image control
$wp_customize->add_control( new
  WP_Customize_Image_Control($wp_customize, 'banner_image', array(
    'label' => __('Background Image' , 'cleancut'),
    'section' => 'banner',
    'settings' => 'banner_image',
    'priority' => 1,
  )));
//heading setting
$wp_customize->add_setting( 'banner_heading', array(
  'default' => _x('Follow Us On Social Media', 'cleancut'),
  'type' => 'theme_mod'
));
//heading control
$wp_customize->add_control( 'banner_heading', array(
  'label' => __('Heading', 'cleancut'),
  'section' => 'banner',
  'priority' => 3,
));

//misc options section
$wp_customize->add_section('misc', array(
  'title' => __('Misc Options', 'cleancut'),
  'description' => sprintf( __('Misc options for theme', 'cleancut')),
  'priority' => 150,
));
//animation setting
$wp_customize->add_setting('animation', array(
  'default' => '1'
));
$wp_customize->add_control(
  new WP_Customize_Control(
    $wp_customize,
    'animation',
    array(
      'label' => __('Enable Animation', 'cleancut'),
      'section' => 'misc',
      'settings' => 'animation', 
      'type' => 'checkbox',
    )
  )
);


}

add_action('customize_register', 'cleancut_customizer_register');