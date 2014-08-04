<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="<?php print_custom_field('voices'); ?>">
	<title><?php wp_title();
	  ?> - <?php bloginfo('name');
	  ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- Custom styles for this template -->
	<!-- <link href="starter-template.css" rel="stylesheet"> -->
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<?php wp_enqueue_script("jquery");
	?>
	<?php wp_head();
	?>
  </head>
  
  <!--body <?php body_class();
  ?>-->
  <?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
	<div id="wrap">
	  <div id="main">
		<nav>
		  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">Creative Disturbance</div>
			  </div>
			  <div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				  <?php wp_list_pages(array('title_li' => '', 'exclude' => 4));
				  ?>
				</ul>
			  </div><!--/.nav-collapse -->
			</div>
		  </div>
		</nav>
		
		<div class="container">