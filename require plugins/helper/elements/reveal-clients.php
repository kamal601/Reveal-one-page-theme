<?php 

add_shortcode('reveal_clients_one','reveal_clients_one_shortcode');
function reveal_clients_one_shortcode($clients){
	$result = shortcode_atts(array(
		'clients_title'			 =>'',
		'sub_title'				 =>'',
		'reveal_clients_group'	 =>'',
	),$clients);
	extract($result);
	ob_start();
	?>

    <!--==========================
      Clients clients
    ============================-->
    <div id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="clients-header">
          <h2><?php echo esc_html($clients_title); ?></h2>
          <p><?php echo esc_html($sub_title); ?></p>
        </div>

        <div class="owl-carousel clients-carousel">
        <?php 
			$clients=vc_param_group_parse_atts($reveal_clients_group);
			foreach ($clients as $spk_class): 
		?>
		<?php $src = wp_get_attachment_url($spk_class['image']) ?>
          <img src="<?php echo esc_url($src); ?>" alt="">
		<?php endforeach; ?>
        </div>

      </div>
    </div><!-- #clients -->





<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'reveal_clients_one_el' );
function reveal_clients_one_el() {
 vc_map( array(
  "name" => __( "Reveal clients clients", "reveal" ), 
  "base" => "reveal_clients_one",
  "category" => __( "reveal", "reveal"),
  "params" => array(
  		 array(
			"type" => "textfield",
			"heading" => __( "clients Title", "reveal" ),
			"param_name" => "clients_title",
		 ), 
		 array(
			"type" => "textfield",
			"heading" => __( "clients Text", "reveal" ),
			"param_name" => "sub_title",
		 ),

  		 array(
			 'type'			=>'param_group',
			 'heading'		=>'clients clients  Group',
			 'param_name'	=>'reveal_clients_group',
			 'params'=>array(
		  		 array(
					  "type" 		=> "attach_image",
					  "heading" 	=> __( "Upload Clients Image", "reveal" ),
					  "param_name" 	=> "image",
					 ), 
		  		 
				 )	
			 ),

  		)
		
  	
 	)

  );
}






