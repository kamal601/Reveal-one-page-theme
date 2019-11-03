<?php 

add_shortcode('reveal_call_to_action','reveal_call_to_action_shortcode');
function reveal_call_to_action_shortcode($call_to_action){
	$result = shortcode_atts(array(
		'title'		 =>'',
		'text'		 =>'',
		'btn'	 	 =>'',
		'btn_link'	 =>'',
	),$call_to_action);
	extract($result);
	ob_start();
	?>
<!-- Call To Action Section Start -->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
              <h4 class="cta-title"><?php echo esc_html($title); ?></h4>
              <p class="cta-text"><?php echo esc_html($text); ?> </p>
            </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo esc_html($btn_link); ?>"><?php echo esc_html($btn); ?></a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
 

   
<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'reveal_call_to_action_el' );
function reveal_call_to_action_el() {
 vc_map( array(
  "name" => __( "Reveal Call To Action", "reveal" ), 
  "base" => "reveal_call_to_action",
  "category" => __( "reveal", "reveal"),
  "params" => array(
  		
		  		array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Titel of Section", "reveal" ),
					  "param_name" 	=> "title",
					 ),
		  		 array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Text of the Section", "reveal" ),
					  "param_name" 	=> "text",
					 ),
		  		 array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Call To Action Button", "reveal" ),
					  "param_name" 	=> "btn",
					 ), 
		  		 array(
					  "type" 		=> "textfield",
					  "heading" 	=> __( "Button Link", "reveal" ),
					  "param_name" 	=> "btn_link",
					 ),

				 
			 ), 
  			
	 )

 );
}






