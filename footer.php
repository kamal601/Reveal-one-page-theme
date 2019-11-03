<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link 
 *
 * @package reveal
 */
global $reveal;
?>
<!-- Footer
  ============================-->
  <style>
    #footer .credits{
      color:<?php echo esc_attr($reveal['crfontclr']);?>;
    } 
    #footer .credits a{
      color:<?php echo esc_attr($reveal['crlinkclr']);?>;
    }
  </style>
  <footer id="footer" style="background:<?php echo esc_attr($reveal['crftbg']);?>; color:<?php echo esc_attr($reveal['crfontclr']);?>">
    <div class="container">
      <div class="copyright">
       <?php echo esc_html($reveal['year']); ?><strong><?php echo esc_html_e(" Reveal","reveal"); ?></strong>. <?php echo esc_html($reveal['cprreserved']); ?>
      </div>
      <div class="credits">

       <?php echo esc_html_e("Designed by","reveal"); ?>  <a href="<?php echo esc_url($reveal['comlinkurl']); ?>"><?php echo esc_html($reveal['comlink']); ?></a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  
<?php wp_footer(); ?>
</body>
</html>
