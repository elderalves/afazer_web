<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo( 'name' ); ?></title>

<meta name="keywords" content="AFAZER" >
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="author" content="AFAZER">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Exo+2:700,600,200,800,300,400,500,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Page Wrap ===========================================-->
<div id="wrap">

  <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li>
          <p class="exo">Legislação e normas técnicas.</p>
        </li>
      </ul>
      <ul class="right-bar-side social_icons">
        <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="linkedin"> <a href="#."><i class="fa fa-google-plus"></i> </a></li>
        <li class="tumblr"> <a href="#."><i class="fa fa-instagram"></i> </a></li>
      </ul>
    </div>
  </div>

  <!--======= HEADER =========-->
  <header>
    <div class="container">

      <!--======= LOGO =========-->
      <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" ></a> </div>

      <!--======= TOP INFORMATION =========-->
      <div class="header-contact">
        <ul class="row">
          <li class="col-xs-12">
            <a href="http://app.oquetenhoafazer.com.br" target="_blank" class="btn-action btn-login">
              <i class="fa fa-lock"></i> Login
            </a>
          </li>
        </ul>
      </div>

      <!--======= NAV =========-->
      <nav>

        <!--======= MENU START =========-->
        <ul class="ownmenu">
          <li class="active">
            <a href="<?php echo home_url(); ?>">Home</a>
          </li>
          <li><a href="<?php echo get_permalink( get_page_by_path( 'afazer' ) ); ?>">AFAZER</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path( 'solucoes' ) ); ?>">Soluções AFAZER</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>">Blog</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path( 'cases' ) ); ?>">Cases</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path( 'contato' ) ); ?>">Fale Conosco</a></li>
        </ul>

        <!--======= SUBMIT COUPON =========-->
        <div class="sub-nav-co"> <a href="#."><i class="fa fa-search"></i></a> </div>
      </nav>
    </div>

    <?php wp_head(); ?>
  </header>

  <?php
    if(!is_front_page() && !is_home() && !is_category()) {
  ?>
  <!--======= BANNER =========-->
  <div class="sub-banner">
    <div class="container">
      <h1><?php the_title(); ?></h1>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            ?>
              <p class="exo">
                <?php 
                  if(!is_single()) the_content(); 
                ?>
              </p>
            <?php
            endwhile;
        endif; 
        ?>
    </div>
    <ol class="breadcrumb">
      <li><a href="<?php echo home_url(); ?>">home </a></li>
      <li class="active"> <?php the_title(); ?></li>
    </ol>
  </div>
<?php } ?>