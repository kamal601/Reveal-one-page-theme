<?php 

add_shortcode('reveal_testimonial','reveal_testimonial_shortcode');
function reveal_testimonial_shortcode($testimonial){
	$result = shortcode_atts(array(
		'section_title'			 =>'',
		'sub_title'				 =>'',
		'reveal_testimonial_group'	 =>'',
	),$testimonial);
	extract($result);
	ob_start();
	?>
    <!--==========================
      Testimonials Section
    ============================-->
    <div id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($section_title); ?></h2>
          <p><?php echo esc_html($sub_title); ?></p>
        </div>
        <div class="owl-carousel testimonials-carousel">
		 <?php 
			$testimonial=vc_param_group_parse_atts($reveal_testimonial_group);
			foreach ($testimonial as $spk_class): 
		?>

            <div class="testimonial-item">
              <p>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                <?php echo esc_html($spk_class['cont']); ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <?php $src = wp_get_attachment_url($spk_class['Image']); ?>
              <img src="<?php echo esc_url($src) ?>" class="testimonial-img" alt="">
              <h3><?php echo esc_html($spk_class['title']); ?></h3>
              <h4><?php echo esc_html($spk_class['cont_text']); ?></h4>
            </div>
		<?php endforeach; ?>
        </div>

      </div>
    </div><!-- #testimonials -->
    <!--==========================
    
<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'reveal_testimonial_el' );
function reveal_testimonial_el() {
 vc_map( array(
  "name" => __( "Reveal testimonial Section", "reveal" ), 
  "base" => "reveal_testimonial",
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
			 'heading'		=>'testimonial Section  Group',
			 'param_name'	=>'reveal_testimonial_group',
			 'params'=>array(
		  		 array(
					  "type" 		=> "attach_image",
					  "heading" 	=> __( "Upload Testimonial Image", "reveal" ),
					  "param_name" 	=> "Image",
					 ), 
		  		  array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Name", "reveal" ),
					  "param_name" 	=> "title",
					 ),
		  		  array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Testimonial Content", "reveal" ),
					  "param_name" 	=> "cont",
					 ),
		  		 array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Designation", "reveal" ),
					  "param_name" 	=> "cont_text",
					 ), 
		  		
				 )	
			 ),

  		)
		
  	
 	)

  );
}






