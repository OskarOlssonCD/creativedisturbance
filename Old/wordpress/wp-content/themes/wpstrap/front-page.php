<?php get_header(); ?>

<?php 
	query_posts('posts_per_page=1');
		while(have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
		<p><?php the_excerpt(); ?></p>
	</div>
<?php endwhile; wp_reset_query(); ?>

<div class="panel panel-default panel-body">
	<div class="row">
		<div class="col-md-2">
			<?php
				if ( ! is_user_logged_in() ) { // Display WordPress login form:
					$args = array(
						'redirect' => admin_url(), 
						'form_id' => 'loginform-custom',
						'label_username' => __( 'Username' ),
						'label_password' => __( 'Password' ),
						'label_remember' => __( 'Remember Me?' ),
						'label_log_in' => __( 'Log In' ),
						'remember' => true
					);
					wp_login_form( $args );
					wp_register('', '');
				} else { // If logged in:
					wp_loginout( home_url() ); // Display "Log Out" link.
					echo " | ";
					wp_register('', ''); // Display "Site Admin" link.
				}
				?>
		</div>
		<div class="col-md-10">
			<?php
				$type = 'disturbance';
				$var = 0 ;
				$args=array(
					'post_type' => $type,
					'post_status' => 'publish',
					'posts_per_page' => 5,
					'caller_get_posts'=> 1 );
				$my_query = null;
				$my_query = new WP_Query($args);
				while ($my_query->have_posts()) : $my_query->the_post();
			?>
			<h3><a href="<?php the_permalink(); ?>"><?php print_custom_field('topic'); ?></a></h3>
			<p><?php print_custom_field('voices'); ?></p>
			<p class="text-muted">Posted on <?php the_time('F jS, Y')?></p>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>