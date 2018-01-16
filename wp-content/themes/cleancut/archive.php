<?php get_header(); ?>
<section class="row title-bar">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h1>
            	<?php if(is_category()){
            		single_cat_title();
            	} else if(is_author()){
            		the_post();
            		echo 'Archives By Author: ' .get_the_author();
            		rewind_posts();
            	} else if(is_tag()){
            		single_tag_title();
            	} else if(is_day()){
            		echo 'Archives By Day: ' .get_the_date();
            	} else if(is_month()){
            		echo'Archives By Day: ' .get_the_date('F Y');
            	} else if (is_yeaer()){
            		echo 'Archives By Day: ' .get_the_date('Y');
            	} else {
            		echo 'Archives ';
            	}
            	?>          	
            </h1>
        </div>
        <div class="col-md-8">
        	<?php if(is_active_sidebar('sidenav')) : ?>
        		<?php dynamic_sidebar('sidenav'); ?>
        	<?php endif; ?>          
        </div>
        </div>
    </div>
</section>
<?php
  $i=0; 
?>
<?php while(have_posts()) : the_post(); ?>
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
				<div class="meta">
					Posted on <?php the_time('F j, Y g:i a'); ?>
					By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
						<?php the_author(); ?>
					</a>
					in
					<?php
					$categories = get_the_category();
					$separator = ", ";
					$output = '';

					if($categories){
							foreach($categories as $category){
								$output .='<a href="'.
								get_category_link($category->term_id).'">'.$category->cat_name .'</a>'.$separator;
							}
						}
						echo trim($output, $separator);
					?>
				</div>	
				<div class="excerpt"><?php the_excerpt(); ?></div>
				<a class="btn btn-secondary" href="<?php the_permalink(); ?>">
				Read More</a>
			</div>
			<div class="cl-lg-5 col-lg-offset-2 col-sm-6">
				<?php the_post_thumbnail('full', array(
					'class' => 'rounded-circle img-responsive animated fadeInRight', 
					'style' => 'height: 50%; width: 50%')); ?>
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
				<div class="meta">
					Posted on <?php the_time('F j, Y g:i a'); ?>
					By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
						<?php the_author(); ?>
					</a>
					in
					<?php
					$categories = get_the_category();
					$separator = ", ";
					$output = '';

					if($categories){
							foreach($categories as $category){
								$output .='<a href="'.
								get_category_link($category->term_id).'">'.$category->cat_name .'</a>'.$separator;
							}
						}
						echo trim($output, $separator);
					?>
				</div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
				<a class="btn btn-secondary" href="<?php the_permalink(); ?>">
				Read More</a>
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
<?php endwhile; ?>

<?php get_footer(); ?>
