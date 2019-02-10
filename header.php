<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>




<?php wp_head(); ?>


<head>
   <title>Porfolio</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">

<style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    form {background-color: white; color: black;}
    .img-portrait { max-width: 25vw; max-height: auto; }
    img { max-width: 25vw; max-height: 25vh; }
    /* Remove margins from "page content" on small screens */
   @media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>

</head>

