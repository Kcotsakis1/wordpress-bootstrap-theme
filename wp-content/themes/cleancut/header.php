<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php if(get_theme_mod('animation' ,1)) : ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css">
  <?php endif; ?>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style>
	.showcase {
		height: <?php echo get_theme_mod('showcase_height', 700); ?>px;
		background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
	}
	.banner {
		background: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url').'/img/banner.jpg'); ?>) no-repeat center center;
	}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbarColor01">
<?php
   wp_nav_menu([
     'menu'            => 'top',
     'theme_location'  => 'primary',
     'container'       => 'div',
     'container_id'    => 'bs4navbar',
     'container_class' => 'collapse navbar-collapse',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav mr-auto',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);
   ?>
  </div>
</nav>
