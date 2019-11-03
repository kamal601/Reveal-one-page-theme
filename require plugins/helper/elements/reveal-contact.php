<?php 

add_shortcode('reveal_contact_one','reveal_contact_one_shortcode');
function reveal_contact_one_shortcode($conatac){
	$result = shortcode_atts(array(
		'contact_title'			 =>'',
		'sub_title'				 =>'',
		'reveal_conatac_group'	 =>'',
	),$conatac);
	extract($result);
	ob_start();
	?>
    <!--==========================
      Contact Section
    ============================-->
    <!-- <section id="contact" class="wow fadeInUp"> -->
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($contact_title); ?></h2>
          <p><?php echo esc_html($sub_title); ?></p>
        </div>

        <div class="row contact-info">
  		 <?php 
			$conatac=vc_param_group_parse_atts($reveal_conatac_group);
			foreach ($conatac as $spk_class): 
		?>
          <div class="col-md-4">
            <div class="contact-address">
              <i class="<?php echo esc_attr($spk_class['icon']); ?>"></i>
              <h3><?php echo esc_html($spk_class['title']); ?></h3>
              <address><?php echo esc_html($spk_class['cont_text']); ?></address>
            </div>
          </div>
		<?php endforeach; ?>

        </div>
      </div>

<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'reveal_contact_one_el' );
function reveal_contact_one_el() {
 vc_map( array(
  "name" => __( "Reveal contact", "reveal" ), 
  "base" => "reveal_contact_one",
  "category" => __( "reveal", "reveal"),
  "params" => array(
  		 array(
			"type" => "textfield",
			"heading" => __( "contact Title", "reveal" ),
			"param_name" => "contact_title",
		 ), 
		 array(
			"type" => "textfield",
			"heading" => __( "contact Text", "reveal" ),
			"param_name" => "sub_title",
		 ),

  		 array(
			 'type'			=>'param_group',
			 'heading'		=>'conatac contact  Group',
			 'param_name'	=>'reveal_conatac_group',
			 'params'=>array(
		  		 array(
					  "type" 		=> "iconpicker",
					  "heading" 	=> __( "choose Your Icon", "reveal" ),
					  "param_name" 	=> "icon",
					 ), 
		  		  array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Write down Title", "reveal" ),
					  "param_name" 	=> "title",
					 ),
		  		 array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Write Down Content", "reveal" ),
					  "param_name" 	=> "cont_text",
					 ), 
				 )	
			 ),

  		)
		
  	
 	)

  );
}






