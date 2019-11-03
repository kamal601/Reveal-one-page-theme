<?php 

add_shortcode('reveal_about_section','reveal_about_shortcode');
function reveal_about_shortcode($section){
	$result = shortcode_atts(array(
		'section_title'			 =>'',
		'about_icon_group'	 	 =>'',
		'cont' 				 	 =>'',
		'image' 				 =>'',
	),$section);
	extract($result);
	ob_start();
	?>
	 <!--==========================
	 About Section
    ============================-->
    <div id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
          	<?php $src = wp_get_attachment_url($image); ?>
            <img src="<?php echo esc_url($src); ?>" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2><?php echo esc_html($section_title); ?></h2>
            <h3><?php echo esc_html($cont); ?></h3>

            <ul>
            	  <?php 
		$intro_link=vc_param_group_parse_atts($about_icon_group);

			foreach ($intro_link as $intro_icon): 
		?>
              <li><i class="<?php echo esc_attr($intro_icon['icon']) ?>"></i> <?php echo esc_html($intro_icon['text']) ?></li>
             
          <?php endforeach; ?>
            </ul>

          </div>
        </div>

      </div>
    </div><!-- #about -->
	   


	<?php  
	return ob_get_clean();
} 

add_action( 'vc_before_init', 'reveal_about_el' );
function reveal_about_el() {
	vc_map( array(
		"name" => __( "Reveal about Section", "reveal" ), 
		"base" => "reveal_about_section",
		"category" => __( "reveal", "reveal"),
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => __( "Section Title", "reveal" ),
				"param_name" => "section_title", 
			),

			array(
				"type" => "textfield",
				"heading" => __( "reveal_about Content", "reveal" ),
				"param_name" => "cont",
				),  

				array(
				"type" => "attach_image",
				"heading" => __( "Upload reveal_about image", "reveal" ),
				"param_name" => "image",
				), 
				array(
				'type'			=>'param_group',
				 'heading'		=>'About Icon Group',
				'param_name'	=>'about_icon_group',
				 'group' 		=> 'About Icon Content',
				'params'=>array( 		
				   array(
						 "type" 		=> "textfield",
						"heading" 		=> __( "Icon Class Name", "reveal" ),
						 "param_name" 	=> "icon",
						),
				   array(
						 "type" 		=> "textfield",
						"heading" 		=> __( "Icon Content", "reveal" ),
						 "param_name" 	=> "text",
						),

					 )	
				)  

			)
		) 
	);

}