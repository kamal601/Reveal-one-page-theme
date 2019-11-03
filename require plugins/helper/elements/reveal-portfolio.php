<?php 

add_shortcode('portfolio_post','portfolio_post_shortcode');
function portfolio_post_shortcode($slider){
	$result = shortcode_atts(array(
		'count' =>'',
		'section_title' =>'',
		'text' =>'',
	),$slider);
	extract($result);
	ob_start();
	?>
  
    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo esc_html($section_title); ?></h2>
          <p><?php echo esc_html($text) ?></p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          <?php $portfolio = new WP_Query(array(
            'post_type' => 'portfolio',
          )) ?>
        <?php while( $portfolio->have_posts()){
          $portfolio->the_post();?>
          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php esc_url(the_post_thumbnail_url()); ?>" class="portfolio-popup">
                <img src="<?php esc_url(the_post_thumbnail_url()); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"><?php esc_html(the_title()); ?></h2></div>
                </div>
              </a>
            </div>
          </div>
       <?php  } ?>
          

<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'portfolio_post_el' );
function portfolio_post_el() {
 vc_map( array(
  "name" => __( "portfolio post page ", "reveal" ), 
  "base" => "portfolio_post",
  "category" => __( "reveal", "reveal"),
  "params" => array( 
		  
		 array(
			 "type" => "textfield",
			 "heading" => __( "Portfolio Item number", "reveal" ),
			 "param_name" => "count",
		  ), 
		 array(
			 "type" => "textfield",
			 "heading" => esc_html__( "Title Of the Section", "reveal" ),
			 "param_name" => "section_title",
			 'description'=>esc_html__('Portfolio Section Title','reveal'),
		  ), 
		 array(
			 "type" => "textfield",
			 "heading" => esc_html__( "Content Of the Section", "reveal" ),
			 "param_name" => "text",
			 'description'=>esc_html__('Content Of the Section','reveal'),
			 
		  ), 

				
		 ),
		
 	) );
}
