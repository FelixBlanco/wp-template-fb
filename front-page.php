<?php get_header(); ?>

<div class="container" id="landing-content">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fb-400x400.jpg"  class="img-fluid mx-auto d-block rounded-circle my-2">
        </div>        
        <div class="col-md-6">
          <div>
            <h1 id="titulo">Felix Blanco</h1>
            <h4 id="sub-titulo">FULLSTACK DEVELLOPER</h4>
            <p class="my-2 text-justify" id="descripcion-landing">
              Desarrollo aplicaciones web y movil usando Laravel, Angular, ReactJs, Nodejs, Ionic y React Native. 
              en mis tiempos libre desarrollo en mis proyectos personales. 
            </p>
            <div class="nav-social mt-2">
              <ul class="nav">
                <li class="nav-item">
                  <a href="https://www.facebook.com/felixablancoe" target="_blank" class="nav-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.instagram.com/felix__blanco/?hl=es-la" target="_blank" class="nav-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>                
                <li class="nav-item">
                  <a href="https://www.linkedin.com/in/felix-blanco-54488684/" target="_blank" class="nav-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>   
                <li class="nav-item">
                  <a href="https://twitter.com/felix__blanco" target="_blank" class="nav-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="https://www.github.com/FelixBlanco" target="_blank" class="nav-link">
                    <ion-icon name="logo-github"></ion-icon>
                  </a>
                </li>                                                                 
              </ul>
            </div> 
          </div>
        </div>
      </div>
    </div> 

<?php wp_footer(); ?>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>