<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ekolok
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
  <nav>
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
    <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  </nav>
</header> 
       <a href="#" data-activates="slide-out" class="button-collapse"><i style="color: red;" class="material-icons">menu</i></a>
 
 <style>
     @import url("<?php bloginfo('stylesheet_directory'); ?>/css/header.css");
 </style>

 <script type="text/javascript">
  $(document).ready(function(){
     $(".button-collapse").sideNav();
  });
   </script>
