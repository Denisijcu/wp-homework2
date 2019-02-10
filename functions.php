<?php 
/**
 * Enqueue scripts and styles.
 */


  function bsimple_scripts() {
  
      wp_enqueue_style( 'bsimple-style', get_stylesheet_uri(),null,microtime() );
      wp_enqueue_style( 'bsimple-materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' );
      wp_enqueue_script('bsimple-materializes', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');

      wp_enqueue_style('bsimple-w3schools-com','https://www.w3schools.com/w3css/4/w3.css');
      wp_enqueue_style('bsimple-font.googleapis-com','https://fonts.googleapis.com/css?family=Montserrat');
  
      wp_enqueue_style('bsimple-font-awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
      wp_enqueue_style('bsimple-font-awesome.min','//https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    
     
      wp_register_script( 'custom-js', get_template_directory_uri() . './js/script.js' );
      wp_enqueue_script( 'custom-js');
  }
  
  add_action( 'wp_enqueue_scripts', 'bsimple_scripts' );


 ?>
  

