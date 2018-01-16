<?php get_header(); ?>
<section class="row showcase animated fadeIn">
	<div class="container">
		<div class="col-md-12">
			<div class="showcase-content">
				<h1><?php echo get_theme_mod('showcase_heading', 'CleanCut Theme'); ?></h1>
				<p class="lead"><?php echo get_theme_mod('showcase_text','A Wordpress theme by you'); ?> </p>

				<?php if(get_theme_mod('facebook_url', 'http://www.facebook.com') != '') : ?>
				<a class="btn btn-secondary btn-lg" href="<?php echo get_theme_mod('facebook_url', 'http://www.facebook.com'); ?>" target="_blank"><i class="fa fa-facebook fa-fw">
				</i> Facebook</a>
			    <?php endif; ?>

			    <?php if(get_theme_mod('twitter_url', 'http://www.twitter.com') != '') : ?>
				<a class="btn btn-secondary btn-lg" href="<?php echo get_theme_mod('twitter_url', 'http://www.twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-fw">
				</i> Twitter</a>
				<?php endif; ?>

				<?php if(get_theme_mod('linkedin_url', 'http://www.linkedin.com') != '') : ?>
				<a class="btn btn-secondary btn-lg" href="<?php echo get_theme_mod('linkedin_url', 'http://www.linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw">
				</i> LinkedIn</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php 
  $latest_blog_posts = new WP_Query(array(
  'posts_per_page' => 3,
  'tax_query' => array(
  	array(
      'taxonomy' => 'post_format',
       'field' => 'slug',
       'terms' =>  array(
              'post-format-aside',
              'post-format-gallery'
          ),
       'operator' => 'NOT IN',
        )
   )
));
 ?>
<?php
  $i=0;
  $section = "section-a";
?>
<?php if($latest_blog_posts->have_posts()) : while($latest_blog_posts->have_posts()) : $latest_blog_posts->the_post(); ?>

	<?php
	$i++;
	if($i % 2 != 0){ ?>
	<div class="section-a">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-sm-6 animated fadeInLeft">
				<hr class"section-heading-spacer">
				<div class="clearfix"></div>
				<h2 class="section-heading"><?php the_title(); ?></h2>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<div class="cl-lg-5 col-lg-offset-2 col-sm-6">
				<?php the_post_thumbnail('full', array(
					'class' => 'rounded-circle img-responsive animated fadeInRight', 
					'style' => 'height: 200px; width: 100%;')); ?>
			</div>
		</div>
	</div>
</div>


	<?php } else{ ?>
	<div class="section-b">
	<div class="container">
		<div class="row">
			<div class="col-md-5 order-md-2 animated fadeInRight">
				<hr class"section-heading-spacer">
				<div class="clearfix"></div>
				<h2 class="section-heading"><?php the_title(); ?></h2>
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
			<div class="cl-lg-5 col-lg-offset-2 col-sm-6">
				<?php the_post_thumbnail('full', array(
					'class' => 'rounded-circle img-responsive animated fadeInLeft', 
					'style' => 'height: 200px; width: 100%;')); ?>
			</div>
		</div>
	</div>
</div>

	<?php } ?>
<?php endwhile; endif; ?>





<?php get_footer(); ?>
