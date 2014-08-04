<?php
/*
Template Name: Disturbances page
*/
?>

<?php get_header(); ?>
<?php
$type = 'disturbance';
$var = 0 ;
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1 );

$my_query = null;
$my_query = new WP_Query($args);
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php if($var%3==0)
{	if($var!=0)
	{
		echo "</div>";
	}
	echo "<div class=\"row\">";
}
?>
<div class="col-xs-6 col-md-4">
	<div class="well text-center">
		<a href="<?php the_permalink(); ?>">
			<figure>
				<img src="<?php print_custom_field('album_cover:to_image_src'); ?>" width="200" />
			</figure>
		</a>
		<div class="box">
			<h4><?php print_custom_field('channel:do_shortcode'); ?></h4>
			<p class="lead"><?php print_custom_field('channeldesc'); ?></p>
			<div class="languages">
				<span class=""><?php print_custom_field('lang'); ?></span>
			</div>

			<div class="list">
				<?php print_custom_field('list'); ?>
			</div>
			<div class="text-center read-more"><span class="glyphicon glyphicon-chevron-down clk" /></div>
		</div>
	</div>
</div>
<?php $var = $var + 1 ; ?>
<?php endwhile; wp_reset_query(); ?>

<script src="/wordpress/wp-content/themes/wpstrap/js/disturbances.js"></script>
<?php get_footer(); ?>