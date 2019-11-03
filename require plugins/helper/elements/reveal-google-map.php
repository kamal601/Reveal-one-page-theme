<?php 

add_shortcode('reveal_contact_map','reveal_contact_map_shortcode');
function reveal_contact_map_shortcode($conatac){
	$result = shortcode_atts(array(
		'width'			=>'',
		'higher'		=>'',
		'location'	 	=>'',
		'zoom'	 		=>'',
	),$conatac);
	extract($result);
	ob_start();
	?>
	<div class="container mb-4">
		<iframe width="<?php echo $width; ?>" height="<?php echo $higher;?>" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $location; ?>&t=&z=<?php echo $zoom; ?>&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>



	<?php 
	return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'reveal_contact_map_el' );
function reveal_contact_map_el() {
	vc_map( array(
		"name" => __( "Reveal conatac Google Map", "reveal" ), 
		"base" => "reveal_contact_map",
		"category" => __( "reveal", "reveal"),
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => __( "Map Width", "reveal" ),
				"param_name" => "width",
			), 
			array(
				"type" => "textfield",
				"heading" => __( "Map Height", "reveal" ),
				"param_name" => "higher",
			),
			array(
				"type" => "textfield",
				"heading" => __( "Map Location", "reveal" ),
				"param_name" => "location",
			), 
			array(
				"type" => "textfield",
				"heading" => __( "Map Zoom", "reveal" ),
				"param_name" => "zoom",
			),


		)
		

	)

);
}






