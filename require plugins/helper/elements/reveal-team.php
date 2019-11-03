<?php 

add_shortcode('reveal_team','reveal_team_shortcode');
function reveal_team_shortcode($team){
	$result = shortcode_atts(array(
		'section_title'		 =>'',
		'team_group'		 =>'',
	),$team);
	extract($result);
	ob_start();
	?>
    <!--==========================
      Our Team Section
      ============================-->
      <div id="team" class="wow fadeInUp">
      	<div class="container">
      		<div class="section-header">
      			<h2><?php echo esc_html($section_title); ?></h2>
      		</div>
      		<div class="row">
      			<?php 
      			$team_section=vc_param_group_parse_atts($team_group);

      			foreach ($team_section as $spk_class): 
      				?>

      				<div class="col-lg-3 col-md-6">
      					<div class="member">
      						<?php $src = wp_get_attachment_url($spk_class['image']); ?>
      						<div class="pic"><img src="<?php echo esc_url($src);?>" alt ="">
      							<div class="details">
      								<h4><?php echo esc_html($spk_class['name']); ?></h4>
      								<span><?php echo esc_html($spk_class['desig']); ?></span>
      								<div class="social">
      									<?php 
      									$team_icon=vc_param_group_parse_atts($spk_class['team_icon_group']);
      									foreach ($team_icon as $spk_class): 
      										?>
      										<a href="<?php echo esc_html($spk_class['icon_link']); ?>"><i class="<?php echo esc_html($spk_class['link_class']); ?>"></i></a>
      									<?php endforeach; ?>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			<?php endforeach; ?>
      			
      		</div>
      	</div>
      </div><!-- #team -->

      
      <?php 
      return ob_get_clean(); 
  } 

  add_action( 'vc_before_init', 'reveal_team_el' );
  function reveal_team_el() {
  	vc_map( array(
  		"name" => __( "team Section", "reveal" ), 
  		"base" => "reveal_team",
  		"category" => __( "reveal", "reveal"),
  		"params" => array(
  			array(
  				"type" => "textfield",
  				"heading" => __( "Section Title", "reveal" ),
  				"param_name" => "section_title",
  			),
  			array(
  				'type'			=>'param_group',
  				'heading'		=>'Team Section Group',
  				'param_name'	=>'team_group',
  				'group' 		=> 'team Content',
  				'params'		=>array(

  					array(
  						"type" 		=> "attach_image",
  						"heading" 	=> __( "Upload Team Member Image", "meetup" ),
  						"param_name" 	=> "image",
  					),
  					array(
  						"type" 		=> "textfield",
  						"heading" 	=> __( "Name of Team Member", "meetup" ),
  						"param_name" 	=> "name",
  					),
  					array(
  						"type" 		=> "textfield",
  						"heading" 	=> __( "Designation OF Team Member", "meetup" ),
  						"param_name" 	=> "desig",
  					),

  					array(
  						'type'			=>'param_group',
  						'heading'		=>'Tab text field Group',
  						'param_name'	=>'team_icon_group',
  						'group' 		=> 'team Content',
  						'params'=>array(
  							
  							array(
  								"type" 		=> "textfield",
  								"heading" 	=> __( "Social Link", "meetup" ),
  								"param_name" 	=> "icon_link",
  							),
  							array(
  								"type"		=> "iconpicker",
  								"heading" 	=> __( "Social Link Class", "meetup" ),
  								"param_name" 	=> "link_class",
  							),
  						)	
  					)
  				)	
  			), 



  		)
  		
  		
  	)

  );
  }






