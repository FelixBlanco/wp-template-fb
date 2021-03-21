<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php // wp_head(); ?>
  <title><?php bloginfo('name')." - "; if(wp_title(' ', false)) { echo ' | '; } else { echo ' '.bloginfo('description'); } wp_title('') ." - "; ?></title>


  <meta name="description" content="Hola soy Felix Blanco, Fullstack Developer, escribiendo codigo desde hace + de cuatros años.">
  <meta name="keywords" content="Fullstack Developer, Laravel, React, Angular, React Nactive, Ionic, Mysql, Linux">
  <meta name="author" content="Felix Blanco">
  
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri()."/img/favicon.ico" ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri()."/img/favicon.ico" ?>" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">  

  <script data-ad-client="ca-pub-8885363887400217" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item menu-items">
          <a class="nav-link" aria-current="page" style="color: black; font-size: 20px;" href="https://blancofelix.com/"><ion-icon name="home-outline"></ion-icon> Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" style="color: black; font-size: 20px;" href="https://blancofelix.com/post/"><ion-icon name="newspaper-outline"></ion-icon> Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" style="color: black; font-size: 20px;" href="https://blancofelix.com/portafolio/"><ion-icon name="briefcase-outline"></ion-icon> Portafolio</a>
        </li>                
        <li class="nav-item">
          <a class="nav-link" aria-current="page" style="color: black; font-size: 20px;" href="https://blancofelix.com/certificaciones/"><ion-icon name="library-outline"></ion-icon> Certificaciones</a>
        </li>                        
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>