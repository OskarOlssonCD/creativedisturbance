</div><!-- /.container -->
</div><!-- /wrap -->
</div><!-- /main -->
	<footer class="clearfix clear-fix">
		<div class="container">
			<div class="row">	
				<div class="col-md-6">
					<div>
						<?php wp_list_pages(array('title_li' => '')); ?>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-1">
					<img src="http://texashats.org/cd/wp-content/uploads/2014/08/leonardo-logo.png" width="150" />
				</div>
				<div class="col-md-1">
					<img src="http://texashats.org/cd/wp-content/uploads/2014/08/MIT_press.png" width="60" />
				</div>
				<div class="col-md-1">
					<img src="http://texashats.org/cd/wp-content/uploads/2014/08/utd-logo-orange-transparent.png" width="100" />
				</div>
				<div class="col-md-1">
					<img src="http://texashats.org/cd/wp-content/uploads/2014/08/ArtSciLab.png" width="100" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				  <p class="text-center">&copy; Creative Disturbance 2014</p>
				</div>
			</div>
		</div>
		</footer>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://osvaldas.info/examples/audio-player-responsive-and-touch-friendly/audioplayer.min.js"></script>
  <script>
  $(function(){
	// enable audioplayer
	$('audio').audioPlayer();
	// host images on podcast pages
	$('.push img').hover(function(){
	  $(this).parent().prevAll().addClass("back");
	  $(this).parent().nextAll().addClass("back");
	},function(){
	  $(this).parent().prevAll().removeClass("back");
	  $(this).parent().nextAll().removeClass("back");
	});
    //enable popover on host images
  });
</script>
		<?php wp_footer(); ?>
	</body>
</html>