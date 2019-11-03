<?php 

add_shortcode('reveal_section_one','reveal_section_one_shortcode');
function reveal_section_one_shortcode($service){
	$result = shortcode_atts(array(
		'section_title'			 =>'',
		'sub_title'				 =>'',
		'reveal_service_group'	 =>'',
	),$service);
	extract($result);
	ob_start();
	?>

    <!--==========================
      Services Section
    ============================-->
    <div id="services">
      <div class="container">
        <div class="div-header">
          <h2><?php echo esc_html($section_title); ?></h2>
          <p><?php echo esc_html($sub_title); ?></p>
        </div>

        <div class="row">
  		 <?php 
			$service=vc_param_group_parse_atts($reveal_service_group);
			foreach ($service as $spk_class): 
		?>
          <div class="col-lg-6">
            <div class="box wow <?php echo esc_attr($spk_class['fleft']); ?>" data-wow-delay="<?php echo esc_attr($spk_class['dtime']); ?>">
              <div class="icon"><i class="<?php echo esc_attr($spk_class['icon']); ?>"></i></div>
              <h4 class="title"><a href=""><?php echo esc_html($spk_class['title']); ?></a></h4>
              <p class="description"><?php echo esc_html($spk_class['cont_text']); ?></p>
            </div>
          </div>
    	<?php endforeach; ?>

        </div>

      </div>
    </section><!-- #services -->



<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'reveal_section_one_el' );
function reveal_section_one_el() {
 vc_map( array(
  "name" => __( "Reveal Service Section", "reveal" ), 
  "base" => "reveal_section_one",
  "category" => __( "reveal", "reveal"),
  "params" => array(
  		 array(
			"type" => "textfield",
			"heading" => __( "Section Title", "reveal" ),
			"param_name" => "section_title",
		 ), 
		 array(
			"type" => "textfield",
			"heading" => __( "Section Text", "reveal" ),
			"param_name" => "sub_title",
		 ),

  		 array(
			 'type'			=>'param_group',
			 'heading'		=>'Service Section  Group',
			 'param_name'	=>'reveal_service_group',
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
		  		 array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Fade in from left or Rigth", "reveal" ),
					  "param_name" 	=> "fleft",
					 ), 
		  		 array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Delay Time", "reveal" ),
					  "param_name" 	=> "dtime",
					 ),
				 )	
			 ),

  		)
		
  	
 	)

  );
}






