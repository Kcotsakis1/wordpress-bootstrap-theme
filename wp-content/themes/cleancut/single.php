<?php get_header(); ?>
  <?php while(have_posts()) : the_post(); ?>
  	<section class="row title-bar">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
        </div>
        </div>
    </div>
</section>

<section class="row page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
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
				<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
                <p><?php the_content(); ?></p>
                <?php comments_template(); ?>
            </div>
            <div class="col-md-4">
            	<?php if(is_active_sidebar('sidebar')) : ?>
            		<?php dynamic_sidebar('sidebar'); ?>
            	<?php endif; ?>
            	                   
            </div>
        </div>
    </div>
</section>
  <?php endwhile; ?>

<?php get_footer(); ?>