<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,700,800,900' rel='stylesheet' type='text/css'>

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<div class="wrapper">
  <div class="container">
    <!--   <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1> -->

    <nav class="top">
      <div class="nav">
        <a class="bars" href="#"><i class="fa fa-bars"></i>Menu</a>

       <!--  <a class="logo" href="index.html">Smith &amp; co</a> -->
       <h1><a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('name'); ?></a></h1>

          <!-- <ul class="subNav">
            <li><a href="index.html">home</a></li>
            <li><a href="port.html">Womens</a></li>
            <li><a href="info.html" >Sale</a></li>
            <li><a href="contact.html#aboutLink" class="end">info</a></li>
            <li><a href="contact.html">contact</a></li>
          </ul> -->
           <?php wp_nav_menu(array(
             'container' => false,
             'menu'=>'Menu 1',
             'menu_class' => 'subNav'
             )); ?>
      </div>
      <!-- end .nav -->
    </nav>

  </div> <!-- /.container -->
</header><!--/.header-->

