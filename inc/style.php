<?php 
	function ion_style_enqueue_Style(){

	wp_enqueue_style( 'reveal-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'reveal-font-awesome', get_template_directory_uri() . '/assets/lib/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'reveal-animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css' );
	wp_enqueue_style( 'reveal-ionicons', get_template_directory_uri() . '/assets/lib/ionicons/css/ionicons.min.css' );
	wp_enqueue_style( 'reveal-owl.carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'reveal-magnific-popup', get_template_directory_uri() . '/assets/lib/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'reveal-ionicons', get_template_directory_uri() . '/assets/lib/ionicons/css/ionicons.min.css' );
	wp_enqueue_style( 'reveal-main', get_template_directory_uri() . '/assets/css/main.css' );


	wp_enqueue_script( 'reveal-jquery-migrate', get_template_directory_uri() . '/assets/lib/jquery/jquery-migrate.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-hoverIntent', get_template_directory_uri() . '/assets/lib/superfish/hoverIntent.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-superfish', get_template_directory_uri() . '/assets/lib/superfish/superfish.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-magnific-popup', get_template_directory_uri() . '/assets/lib/magnific-popup/magnific-popup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-sticky', get_template_directory_uri() . '/assets/lib/sticky/sticky.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-contactform', get_template_directory_uri() . '/assets/contactform/contactform.js', array('jquery'), '', true );
	wp_enqueue_script( 'reveal-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
	}
	add_action('wp_enqueue_scripts','ion_style_enqueue_Style');
