<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<!-- AQUI vínculo Bootstrap 5 -->
<!-- AQUI fuentes Google según prototipo -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body <?php body_class(); ?> >


  <header>

    <div class="barra-menu"></div>

    <div class="barra-nav">
      <a href="<?php echo home_url(); ?>"><h1 class="logo-menu">TheHell</h1></a>

      <div class="cabecera-burguer">

        <div></div>
        <div></div>
        <div></div>
            
        </div>

    </div>

<nav class="cabecera-nav">
  <?php wp_nav_menu( array( 
                      'theme_location' => 'topmenu', 
                      'container' => 'false', 
                      'menu_class'=>'menu-principal') 
                      ); ?>
          </nav>

  </header>
  
  <main>