<?php 

add_shortcode('reveal_main_banner','reveal_main_banner_shortcode');
function reveal_main_banner_shortcode($banner){
	$result = shortcode_atts(array(
		'banner_title' 	 =>'',
		'banner_sub' 	 =>'',
		'dbtn' 			 =>'',
		'btn'			 =>'',
		'image_group' 	 =>'',
	),$banner);
	extract($result);
	ob_start();
	?>

  <div id="intro">

    <div class="intro-content">
      <h2><?php echo esc_html($banner_title); ?><br><?php echo esc_html($banner_sub); ?></h2>
      <div>
        <a href="#about" class="btn-get-started scrollto"><?php echo esc_html($dbtn); ?></a>
        <a href="#portfolio" class="btn-projects scrollto"><?php echo esc_html($btn); ?></a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
     <?php 
		$intro_link=vc_param_group_parse_atts($image_group);

			foreach ($intro_link as $intro_icon): 
		?>
		<?php $src = wp_get_attachment_url($intro_icon['image']); ?>
      <div class="item" style="background-image: url('<?php echo $src; ?>');"></div>

  <?php endforeach; ?>
    </div>

  </div><!-- #intro -->

	<?php 
	return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'reveal_main_banner_el' );
function reveal_main_banner_el() {
	vc_map( array(
		"name" => __( "Main banner", "reveal" ), 
		"base" => "reveal_main_banner",
		"category" => __( "reveal", "reveal"),
		"params" => array(

			
			array(
				"type" => "textfield",
				"heading" => __( "Give Title", "reveal" ),
				"param_name" => "banner_title",
			), 
			array(
				"type" => "textfield",
				"heading" => __( "Give Title", "reveal" ),
				"param_name" => "banner_sub",
			), 

			array(
				"type" => "textfield",
				"heading" => __( "Get Started Button Name", "reveal" ),
				"param_name" => "dbtn",
			),  
			array(
				"type" => "textfield",
				"heading" => __( "Our Project Button", "reveal" ),
				"param_name" => "btn",
			),  

			array(
				'type'			=>'param_group',
				 'heading'		=>'carousel Image Group',
				'param_name'	=>'image_group',
				 'group' 		=> 'Carousel Image Group',
				'params'=>array(
				  		
				   array(
						 "type" 		=> "attach_image",
						"heading" 		=> __( "Upload Image", "reveal" ),
						 "param_name" 	=> "image",
						),

					 )	
				) 

		),

	) );
}
