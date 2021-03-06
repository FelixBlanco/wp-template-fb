<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php // wp_head(); ?>
  <title><?php bloginfo('name'); if(wp_title('', false)) { echo ' | '; } else { echo bloginfo('description'); } wp_title(''); ?></title>


  <meta name="description" content="Hola soy Felix Blanco, Fullstack Developer, escribiendo codigo desde hace + de cuatros años.">
  <meta name="keywords" content="Fullstack Developer, Laravel, React, Angular, React Nactive, Ionic, Mysql, Linux">
  <meta name="author" content="Felix Blanco">
  
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri()."/img/favicon.ico" ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri()."/img/favicon.ico" ?>" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">  

  <script data-ad-client="ca-pub-8885363887400217" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://blancofelix.com/">            
              <img src="<?php echo get_stylesheet_directory_uri().'/img/logo-azul.png'; ?>" alt="logo felix blanco" class="img-fluid" width="50">
              <span id="titulo-navbar">                  
                Felix Blanco
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-top">
              <nav>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'menu_class'    => 'menu-principal',
                    )
                ); 
                ?>
              </nav>          
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
