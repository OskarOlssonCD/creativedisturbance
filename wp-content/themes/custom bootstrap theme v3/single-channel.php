<?php get_header();
?>
</div>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();
?>
<?php $channel_name = get_custom_field('channel');
?>
<div class="container-fluid cinemersia" style="background:url(http://texashats.org/cd/wp-content/uploads/2014/08/cinemersia-bg-300x300.jpg) 50% 50%; background-size: cover;">
	<div class="row">
	  <div class="col-xs-12">
		<div class="container">
		  <div class="row">
			<div class="col-md-2 col-xs-4">
			  <figure>
				<img src="<?php print_custom_field('album_cover:to_image_src'); ?>" width="200px" class="img-responsive" /><br/>
			  </figure>
			</div>
			<div class="col-md-8">
			  <h1><?php print_custom_field('channel');
				?></h1>
			  <div class="lead"><?php print_custom_field('Tagline');
				?></div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="container">
  <div class="row">
	<div class="col-xs-8">
	  
	  <h4>Hosted by <?php print_custom_field('ChannelAuthor');
		?></h4>
	  <p><?php print_custom_field('channeldesc');
		?></p>
	  <div class="list">
		<ol>
			<?php 
				$voices = array();
				$episodes = new WP_Query( array(
				  'post_type' => 'podcast',
				  'post_status' => 'publish',
				  'posts_per_page' => -1,
				) );
				if ( $episodes->have_posts() )
				{
					while ( $episodes->have_posts() ) : $episodes->the_post();
					if(get_custom_field('channel')==$channel_name)
					{
						$url1 = get_permalink() ;
						echo '<li>'."<a href=$url1>".get_custom_field('episode').'</a></li>';
						array_push($voices,get_custom_field('voices:to_array'));
					}
					endwhile;
					wp_reset_query();
				}
			?>
		</ol>
	  </div>
	</div>
	<div class="col-xs-3 col-xs-offset-1">
		<h4>Voices</h4>
		<?php
			$uniq_voices = array_unique($voices);
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
					foreach ($uniq_voices[0] as $item)
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
	  <!-- <div class="push push-left">
		<img src="//texashats.org/cd/wp-content/uploads/2014/08/david-marlett-300x300.jpg" class="img-responsive" alt="" data-toggle="popover" data-placement="left" title="David Marlett" data-content="David is an author, screenwriter, filmmaker, crowdfunding expert, and photoartist. He is pursuing his PhD in Immersive Cinema at the University of Texas (Dallas).  He is currently developing his screenplay BLUE HIGHWAY to be one of the first immersive cinema feature films.  www.dmarlett.com">
	  </div>
	  <div class="push push-right">
		<img src="//texashats.org/cd/wp-content/uploads/2014/08/michael-neimark-300x300.jpg" class="img-responsive" alt="" data-toggle="popover" data-placement="left" title="Michael Neimark" data-content="Michael is an immersive media artist and researcher, focused on the dynamics between art and research, with specific focus on stereo-panoramic motion picture capture and display.  Michael is recently affiliated with the MIT Media Lab, USC School of Cinematic Arts - Interactive Media Division, and NYU's Interactive Telecommunications Program.  www.naimark.net ">
	  </div> -->
	</div>
  </div>
</div>
</div>
</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>