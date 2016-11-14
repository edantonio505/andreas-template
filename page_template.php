<?php  /* Template Name: Carita */ ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.3.0/css/slider-pro.min.css">
	<style type="text/css">
		*,body {
			padding: 0px;
			margin: 0px;
			clear:both;
		}

		body {
			overflow-x: hidden;
		}

		a {
			text-decoration: none;
		}

		.entry-title {
			display: none;
		}


		.menu-primary-container {
			position: absolute;
			top:20px;
			left:50px;
			z-index: 1000;
		}

		
		.menu-primary-container li{
			display: inline-block;
			margin:10px;
			font-family: Arial;
		}

		.menu-primary-container a {
			color:white;
			text-shadow: 0px 0px 10px black;
		}

		.inner-container {
			overflow-x: hidden;
			min-width: 10px;
			width: 90%;
			margin: 0 auto;
			color: #444444;
			font-family: Arial;
			text-align: justify;
		}

		.menu-footer-links-container {
			min-width: 10px;
			width:90%;
			margin:0 auto;
			text-align: center;
			margin-top: 20px;
			padding-top:10px;
		}


		.menu-footer-links-container li {
			border-left:1px solid white;
			width:150px;	
			display: inline-block;
			font-family: Arial;
			margin-bottom: 10px;
			cursor:pointer;
		}

		.menu-footer-links-container li a {
			color:white;
			cursor:pointer;
		}

		.footer_container {
			width:100%;
			background-color: black;
		}

		.sp-slide p {
			background-color:transparent !important;
			color:transparent !important;
			cursor:pointer;
		}
		.sp-image { cursor:pointer; }
	</style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.3.0/js/jquery.sliderPro.js"></script>
</head>
<body>
	<?php 
		wp_nav_menu(['menu'=> 'primary']); 
	    while ( have_posts() ) : 
	    	the_post();
	        get_template_part( 'template-parts/content', 'page' );
	    endwhile; ?>

	    <div class="footer_container">
	    	<?php wp_nav_menu(['menu'=> 'new_footer']);?>
	    </div>
<?php wp_footer(); ?> 