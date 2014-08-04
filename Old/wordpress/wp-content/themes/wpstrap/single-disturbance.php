<?php get_header(); ?>
</div>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="container-fluid cinemersia">
	<div class="row">
		<div class="col-xs-12">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<figure>
							<img src="<?php print_custom_field('album_cover:to_image_src'); ?>" class="img-responsive" />
						</figure>
					</div>
					<div class="col-xs-11">
						<h4><?php print_custom_field('channel:do_shortcode'); ?></h4>
						<p><?php print_custom_field('channeldesc'); ?></p>
					</div>
					<div class="col-xs-12">
						<h2><?php print_custom_field('topic'); ?></h2>
						<p>with <?php print_custom_field('voices'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-offset-1 col-md-9">
		<h2>Disturbances</h2>
		<p class="lead">Audio</p> 
		<p><strong>Detail</strong> <?php print_custom_field('detail'); ?><br /></p> 
		</div>
	</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>