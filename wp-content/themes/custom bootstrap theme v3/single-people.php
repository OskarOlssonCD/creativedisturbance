<?php get_header();
?>
</div>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();
?>
<div class="container-fluid cinemersia" style="background:url(http://texashats.org/cd/wp-content/uploads/2014/08/cinemersia-bg-300x300.jpg) 50% 50%; background-size: cover;">
	<div class="row">
	  <div class="col-xs-12">
		<div class="container">
		  <div class="row">
			<div class="col-md-2 col-xs-4">
			  <figure>
				<img src="<?php print_custom_field('photo:to_image_src'); ?>" class="img-responsive" /><br/>
			  </figure>
			</div>
			<div class="col-md-8">
			  <h1><?php print_custom_field('firstname'); ?> <?php print_custom_field('lastname'); ?></h1>
			  <div class="lead"><strong>Expertise</strong> <?php print_custom_field('expertise'); ?></div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="container">
  <div class="row">
	<div class="col-xs-8">
	  <h4>Bio <?php print_custom_field('ChannelAuthor');
		?></h4>
	  <p><?php print_custom_field('bio'); ?></p>
	  <?php 
	  	$value=get_custom_field('weburl');
			if (!empty($value))
			{
				echo "<a href='$value'><strong>Web URL</strong></a>";
			}
	  ?>
	</div>
  </div>
</div>
</div>
</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>