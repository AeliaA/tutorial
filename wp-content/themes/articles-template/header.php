<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8">
  <title><?php wp_title() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/articles-template/style.css" >
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


  <?php wp_head(); ?> 
   
</head>

<body>

  <header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
         <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <?php echo get_bloginfo( 'name' ); ?></h1>
          <?php bloginfo( 'description' ); ?> 
      </div>
    </div> <!--/row -->
  </div> <!--/container -->
    
  </header> 

  <?php
      $main_menu = array(
      'theme_location' => 'main-menu',
      'container' => '',
      'items_wrap' => '<ul class="nav nav-pills mynav">%3$s</ul>', 
      // '<li class="active">%3$s</li>',
      );
  ?>

 <div class="container-fluid">
    <div class="row ">
      <div class="col-md-12 mynav1">
         <nav><?php wp_nav_menu($main_menu); ?></nav>
      </div>
    </div> <!--/row -->
  </div> <!--/container -->
