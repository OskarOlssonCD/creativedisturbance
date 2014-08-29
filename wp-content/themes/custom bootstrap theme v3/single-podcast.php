<?php get_header(); ?>
</div>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php $channel_name = get_custom_field('channel'); ?>
<div class="container-fluid cinemersia">
	<div class="row">
		<div class="col-xs-12">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<figure>
							<?php
								$value=get_custom_field('episode_image:to_image_src');
								if (!empty($value))
								{
									$url1 = $value;
								}
								else
								{
									$channel = new WP_Query( array(
										'post_type' => 'channel',
										'post_status' => 'publish',
										'posts_per_page' => -1,
										) );
										if ( $channel->have_posts() )
										{
											while ( $channel->have_posts() ) : $channel->the_post();
												if(get_custom_field('channel')==$channel_name)
												{
													$url1 = get_custom_field('album_cover:to_image_src');
													$url1;
												break;
												}
											endwhile;
											wp_reset_query();
										}
								}
								echo "<img src=$url1 class='img-responsive' />";
							?>
						</figure>
					</div>
					<div class="col-xs-11">
						<h1><?php print_custom_field('channel'); ?></h1>
					</div>
					<div class="col-xs-12">
						<h2><?php print_custom_field('episode'); ?></h2>
						<p>with 
							<?php
								$voices = get_custom_field('voices:to_array');
								$i = 0 ;
								foreach ($voices as $item)
								{
									if($i==0)
									{
										echo "$item";
									}
									else
									{
										echo ", $item";
									}
									$i = $i + 1;
								}
							?>
						</p>
						<div class="text-muted"><?php print_custom_field('Locations'); ?></div><br />
						<?php print_custom_field('lang'); ?><br />
						<?php print_custom_field('date'); ?><br />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-offset-1 col-md-8">
			<h2>Episode</h2>
			<p class="lead">
				<audio width="300" height="32" controls="controls">
				<source src="<?php print_custom_field('AudioURL'); ?>" type="audio/mp3" />
				<!--fallback-->
					Your browser does not support the audio tag.
				</audio>
				<a href="<?php print_custom_field('AudioURL'); ?>" download="<?php print_custom_field('episode'); ?>.mp3">Download</a>
			</p> 
			<p><strong>Detail</strong> <?php print_custom_field('detail'); ?><br /></p>
			
			<h6><?php print_custom_field('topic'); ?></h6>
		</div>
		<div class="col-md-2 text-right">
			<h4>Voices</h4>
			<?php
				$i = 0 ;
				$people = new WP_Query( array(
				'post_type' => 'people',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				) );
				if ( $people->have_posts() )
				{
					while ( $people->have_posts() ) : $people->the_post();
					{
						foreach ($voices as $item)
						{
							if(get_the_title()==$item)
							{
								echo "<img src=\"" . get_custom_field('photo:to_image_src'). "\" class='img-responsive'/>";
							}	
						}
					}
					endwhile;
					wp_reset_query();
				}
			?>
		</div>
	</div>
</div>
<?php endwhile; // end of the loop. ?>

<script src="/cd/wp-content/themes/custom bootstrap theme v3/js/click_play.js"></script>
<?php get_footer(); ?>