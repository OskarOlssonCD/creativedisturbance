<?php
/*
Template Name: People
*/
?>

<?php get_header(); ?>
<div class="text-center"><h1>Producers</h1></div>
<?php
$type = 'people';
$var = 0 ;
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1 );

$my_query = null;
$my_query = new WP_Query($args);
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php if($var%4==0)
{	if($var!=0)
	{
		echo "</div>";
	}
	echo "<div class=\"row\">";
}
?>
<div class="col-xs-6 col-md-3 col-lg-3">
	<div class="panel panel-default text-center people-panel">	
			<div class="panel-body people-panel-body text-center">
				<div class="panel-title people-panel-title"><?php echo get_the_title(); ?></div>
				<div class="people-panel-lead"><?php print_custom_field('expertise'); ?></div>
				<a href="<?php echo get_the_permalink(); ?>">
					<figure>
						<img src="<?php print_custom_field('photo:to_image_src'); ?>" class="img-responsive" />
					</figure>
				</a>
			</div>
	</div>
</div>
<?php $var = $var + 1 ; ?>
<?php endwhile; wp_reset_query(); ?>
<script src="/cd/wp-content/themes/custom bootstrap theme v3/js/disturbances.js"></script>
<?php get_footer(); ?>