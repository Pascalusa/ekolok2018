<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ekolok
 */

get_header(); ?>

<section>
	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=14Iw3mfu3dnEzYyveMUKAOFCsMfA" width
      ="100%" style="">
    </iframe>
    <div class="globale-location">
		    <div class="show-location z-depth-2">

					<div class="row" style="width: 97%; background-color: red; ">
					    <div class="input-field col s12">
						    <select>
						      <option value="">Choose your option</option>
						      <option value="1">Option 1</option>
						      <option value="2">Option 2</option>
						      <option value="3">Option 3</option>
						    </select>
						    <label></label>
						  </div>
                 
				      <?php
						$args = array('post_per_page' => -1,
                         'post_type' => 'colocation',); 
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>

					    <div class="col s12 m6">
					      <div class="card">
					        <div class="card-image">
					          <img src="<?php the_post_thumbnail('small-thumbnails');?>">
					          <span class="card-title"><?php the_title();?></span>
					          <a href="<?php the_permalink(); ?>"  target="_blank" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
					        </div>
					        <div class="card-content">
					          <p><?php the_excerpt(); ?></p>
					        </div>
					      </div>
					    </div>
					  <?php endwhile;?>   
			        </div>
            </div>			
	</div>
	<div class="copyright"><h6 id="text-copyright"> ©  Copyright all rights reserveds - 
            Mention Légales</h6>
           </div>
</section>	



<!-- 	<footer style="background-color: red; height: 45px; position: absolute;">
	
</footer> -->

	<style>
     @import url("<?php bloginfo('stylesheet_directory'); ?>/css/index.css");
    </style>

    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script>
    	 $(document).ready(function() {
    $('select').material_select();
  });
    </script>

