<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php $recent = new WP_Query("page_id=27"); while($recent->have_posts()) : $recent->the_post();?>
	<div class="jumbotron">
		<h2><?php the_title();?></h2>
		<div class="text-justify"><?php the_content(); ?></div>
	</div>
<?php endwhile; ?>

<div class="panel panel-default panel-body">
	<div class="row">
		<div class="col-md-2">
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
			<!--?php
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
				?-->
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