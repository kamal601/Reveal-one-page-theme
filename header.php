<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link 
 *
 * @package reveal
 */
global $reveal;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>
    <style>
      .nav-menu a,.menu-item-has-children ul li a{
        color:<?php echo esc_attr($reveal['ftfontclr']); ?>;
      }
      #topbar .social-links a,
      #topbar .contact-info a{
         color:<?php echo esc_attr($reveal['httext']); ?>;
      }
    </style>
<body id="body" <?php body_class(); ?> style="background:<?php echo esc_attr($reveal['bg']['background-color']);?>;width:<?php echo esc_attr($reveal['sitelayoutttt']);?>;margin:auto;">


  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block" style="background:<?php echo esc_attr($reveal['htbg']);?>">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <?php $icon = $reveal['opt-multitext']; ?>
        <i class="<?php echo esc_html($icon['0']); ?>"></i> <a href="mailto:contact@example.com"><?php echo esc_html($icon['1']); ?></a>
        <i class="<?php echo esc_html($icon['2']); ?>"></i> <a href=""><?php echo esc_html($icon['3']); ?></a>
      </div>
      <div class="social-links float-right">
        <a href="<?php echo esc_url($icon['5']); ?>" class="twitter"><i class="fa <?php echo esc_attr($icon['4']); ?>"></i></a>
        <a href="<?php echo esc_url($icon['7']); ?>" class="facebook"><i class="fa <?php echo esc_attr($icon['6']); ?>"></i></a>
        <a href="<?php echo esc_url($icon['9']); ?>" class="instagram"><i class="fa <?php echo esc_attr($icon['8']); ?>"></i></a>
        <a href="<?php echo esc_url($icon['11']); ?>" class="google-plus"><i class="fa <?php echo esc_attr($icon['10']); ?>"></i></a>
        <a href="<?php echo esc_url($icon['13']); ?>" class="linkedin"><i class="fa <?php echo esc_attr($icon['12']); ?>"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header"style="background:<?php echo esc_attr($reveal['menubg']);?>;">
    <div class="container">

      <div id="logo" class="pull-left">
        <?php if($reveal['logo']['url']==true){?>

           <a href="#body"><img src="<?php echo esc_url($reveal['logo']['url']); ?>" alt="Logo" title="Reveal" /></a>

        <?php } 
          else {
            ?>
          <h1><a href="#body" class="scrollto"><?php echo esc_html_e("Reve","reveal") ?><span><?php echo esc_html_e("al","reveal") ?></span></a></h1>
        <?php } ?>
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>

    <?php wp_nav_menu(array(
      'theme_location' => 'menu-1',
      'container' => 'nav',
      'container_id' => 'nav-menu-container',
      'menu_class' => 'nav-menu',
    )) ?>
      
    </div>
  </header><!-- #header -->
