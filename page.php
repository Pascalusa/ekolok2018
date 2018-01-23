<?php
/*
Template Name: Custom page ekolok
Template Post Type: post, colocation
*/
/**
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
    <title>So Lunch</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <nav style="background-color: #e8501f;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/ekolok.png"></a>
      <a href="https://www.facebook.com/ekolok.org/" target="_blank" class="social" style="    float: right; margin-right: 15px; width: 73px;"><img class="fac" style="position: relative; width: 15px; top: 10px; left: 27px;" src="<?php bloginfo('template_directory');?>/img/logo-facebook1.png"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
         <?php 
                                    
                                    wp_nav_menu( array(
                                      'theme_locaion' => 'primary',
                                      ));
                              ?>
      </ul>
    </div>
  </nav>
</header>  
	<div id="primary" class="content-area"  style="position: relative; bottom: 0px;">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/concept-ekolok', 'page' );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_template_part( 'footer' );?>
