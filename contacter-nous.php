<?php
/*
Template Name: Contact
*/

 get_header(); ?>

  <?php wp_head(); ?>

<body <?php body_class(); ?>  style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/background-1.png); background-repeat: no-repeat; background-position:center center; background-size: cover; height: 100vh;">

   <!-- Partie form contact -->
      <div class="globale-contact z-depth-4" style="background-color: #e9502036; position: relative;">
          <div>
             <h4 class="tittle-contact" style="position: relative; top: 105px;" name="From So Lunch page Contact">Contactez - Nous</h4>
          </div>   

          <div class="row globale-form" style="width: 100%; position: relative; top: 200px;">
            <form class="col s12" action="https://formspree.io/usa.pascal@yahoo.fr" method="POST" style="">
              <div class="row" style="position: relative; top: 50px;">
              <input type="hidden" name="From So Lunch page Contact"/>
                <div class="input-field col s12 l12 ">
                  <i class="material-icons prefix">send</i>
                  <input id="icon_telephone" type="text" name="Sujet" class="validate" style="">
                  <label for="icon_telephone">Sujet</label>
                </div>
                <div class="input-field col s12 l6">
                  <i class="material-icons prefix">email</i>
                  <input id="icon_telephone" type="email" name="email" class="validate" style="">
                  <label for="icon_telephone">E-mail</label>
                </div>
                <div class="input-field col s12  l6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" name="name" class="validate">
                  <label for="icon_prefix">Nom Prénom</label>
                </div>
                <div class="input-field col s12 l12 ">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
                  <label for="icon_telephone">Message</label>
                </div>
                 <div class="input-field col s12 l12 " style="position: relative; bottom: 15px; margin-bottom: 45px;">
                  <button class="btn waves-effect waves-light pulse " type="submit" style="margin-right:auto;margin-left: auto; display: -webkit-box; display: inherit; background-color: #abd3a7!important; font-family: 'Josefin Sans', sans-serif; padding-top: 3px">Envoyer
                  <!-- Page reirection thank -->
                  <input type="hidden" name="_next" value="https://codepen.io/tmd-uk/pen/GgVWGG" />
                  <!-- Multiple email -->
                  <input type="hidden" name="_cc" value="usa.pascal@yahoo.fr,pascal.webdesigner@gmail.com" />
                  <!-- Capcha -->
                  <input type="hidden" name="_language" value="fr" />
                  </button>
                </div> 
              </div>
            </form>
         </div> 
    </div>

</section>



  <style>
    @import url("<?php bloginfo('template_directory'); ?>/css/contact.css");
  </style>

    <script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
   </script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
  </html>