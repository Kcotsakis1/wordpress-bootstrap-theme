<br>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2><?php echo get_theme_mod('banner_heading' , 'Follow Us On Social Media'); ?>:</h2>
			</div>
			<div class="col-lg-6">
				<ul class="list-inline banner-social-buttons">
				<li><?php if(get_theme_mod('facebook_url', 'http://www.facebook.com') != '') : ?>
				<a class="btn btn-secondary btn-lg" href="<?php echo get_theme_mod('facebook_url', 'http://www.facebook.com'); ?>" target="_blank"><i class="fa fa-facebook fa-fw">
				</i> Facebook</a>
			    <?php endif; ?></li>

			   <li><?php if(get_theme_mod('twitter_url', 'http://www.twitter.com') != '') : ?>
				<a class="btn btn-secondary btn-lg" href="<?php echo get_theme_mod('twitter_url', 'http://www.twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-fw">
				</i> Twitter</a>
				<?php endif; ?></li>

				<li><?php if(get_theme_mod('linkedin_url', 'http://www.linkedin.com') != '') : ?>
				<a class="btn btn-secondary btn-lg" href="<?php echo get_theme_mod('linkedin_url', 'http://www.linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw">
				</i> LinkedIn</a>
				<?php endif; ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<footer>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="list-inline">
				<li class="list-inline-item">
					<a href="#">Home</a>
				</li>
				<li class="list-inline-item">
					<a href="#">About</a>
				</li>
				<li class="list-inline-item">
					<a href="#">Services</a>
				</li>
				<li class="list-inline-item">
					<a href="#">Contact</a>
				</li>
			</ul>
			<p class="copyright text-muted small">Copyright &copy; CleanCut Theme 2016</p>
		</div>
	</div>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>