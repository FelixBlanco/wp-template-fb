<?php get_header('header') ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">      
      <img src="<?php echo get_stylesheet_directory_uri().'/img/fb-400x400.jpg'; ?>" class="img-fluid d-block mx-auto rounded-circle my-sm-5">
    </div>
    <div class="col-md-8">
      <div class="text-center cont-title">          
        <h1>Felix Blanco</h1>        
        <small>FULL-STACK DEVELOPER</small> <br>
        <small>LARAVEL - NODEJS - ANGULAR - IONIC - REACT</small>
        <ul class="nav justify-content-center mt-4">
            <li class="nav-link">
              <a href="https://www.github.com/FelixBlanco" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/img/social/github.png'; ?>" class="img-fluid mx-auto d-block" width="55">
              </a>
            </li>
            <li class="nav-link">
              <a href="https://www.instagram.com/felix__blanco/?hl=es-la" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/img/social/instagram.png'; ?>" class="img-fluid mx-auto d-block" width="55">
              </a>
            </li>
            <li class="nav-link">
              <a href="https://twitter.com/felix__blanco" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/img/social/twitter.png'; ?>" class="img-fluid mx-auto d-block" width="55">
              </a>
            </li>  
            <li class="nav-link">
              <a href="https://www.linkedin.com/in/felix-blanco-54488684/" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/img/social/linkedin.png'; ?>" class="img-fluid mx-auto d-block" width="55">
              </a>
            </li>
            <li class="nav-link">
              <a href="https://www.facebook.com/felixablancoe" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/img/social/facebook.png'; ?>" class="img-fluid mx-auto d-block" width="55">
              </a>
            </li> 
            <li class="nav-link">
              <a href="https://www.youtube.com/channel/UClYqs-rYH764AcU2G3ueoyw" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/img/social/youtube.png'; ?>" class="img-fluid mx-auto d-block" width="55">
              </a>
            </li>                                        
          </ul>        
      </div>
    </div>
  </div>
</div>

<!-- Post -->

<?php  query_posts( 'posts_per_page=4' ); // Que solo muestre 3 Post  ?>	

<div class="container-fluid mt-4">    
  <div class="row py-5" style="background-color: cornflowerblue;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
    <div class="col-md-3 mt-2">
      <div class="shadow bg-white rounded pb-4 no-link">
        <a  href="<?php the_permalink(); ?>" >            
          <?php the_post_thumbnail('large',['class'=>'rounded img-fluid mx-auto d-block'])  ?>
          <h5 class="mt-4 text-center"><?php the_title(); ?></h5>
          <p class="text-center">            
            <small>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg> <?php the_time( 'd-m-Y' ) ?></small>
          </p>
        </a>
      </div>
    </div>        
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Disculpa, No hay post disponibles.' ); ?></p>
    <?php endif; ?>		
  </div>
  <div class="row">
    <div class="col-md-12">          
      <a href="https://blancofelix.com/post">
        <h4 class="text-right p-2 mt-2">Ver mas <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
          <path fill-rule="evenodd" d="M6 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H6.5A.5.5 0 0 1 6 8zm-2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z"/>
        </svg></h4>
      </a>          
    </div>
  </div>    
</div>



<!-- Proyectos -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="p-2 text-center">Proyectos Personales</h2>
      <p class="text-justify">Me considero una persona emprendedora, por ello me motivo a desarrollar y poner a prueba mis habilidades y conocimientos.</p>
    </div>
  </div>

  <div class="row mt-5">
    <?php foreach($proyectos_personales as $proyectos_personal){ ?>          
      <div class="col-md-4 mb-4">
        <div class="card">
        <div class="p-2">
          <img src="<?php echo get_stylesheet_directory_uri().''.$proyectos_personal['img']; ?>" class="d-block mx-auto img-fluid" width="<?php echo $proyectos_personal['width_img']; ?>">
        </div>
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $proyectos_personal['empresa']; ?></h5>
          <p class="card-text text-justify"><?php echo $proyectos_personal['descripcion']; ?></p>
          <hr>
          <div class="text-center">
            <?php foreach($proyectos_personal['tags'] as $e_tags){ ?>  
              <span class="badge badge-secondary"> <?php echo $e_tags; ?> </span>
            <?php } ?>           
          </div>
          <hr>         
          <div class="text-right">
            <a href="<?php echo $proyectos_personal['url'] ?>" class="btn btn-info">Ver</a>
          </div>          
        </div>
        </div>
      </div>  
      <?php } ?>
  </div>
</div>

<!-- Youtube -->
<div class="container-fluid mt-5 py-4" style="background-color:#019bdd;">
  <div class="row">
    <div class="col-md-3 mb-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/6ej0v6XbuAk" class="embed-responsive-item" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div> 
    </div>
    <div class="col-md-3 mb-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/frao4aBmWW4" class="embed-responsive-item" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div> 
    </div>
    <div class="col-md-3 mb-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/pf2zs0MiOcE" class="embed-responsive-item" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div> 
    </div>
    <div class="col-md-3 mb-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/qM9nP2Wf0WE" class="embed-responsive-item" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div> 
    </div>            
  </div>

  <!-- Plugin Youtube  -->
  <div class="row justify-content-end mt-4">
    <div class="col-md-4 text-right">
      <script src="https://apis.google.com/js/platform.js"></script>
      <div class="g-ytsubscribe" data-channelid="UClYqs-rYH764AcU2G3ueoyw" data-layout="full" data-count="default"></div>
    </div>
  </div>

</div>

<!-- Certificaciones -->
<div class="container mt-5">
  
  <div class="row mt-5">
    <div class="col-md-12">     
      <h2 class="p-2">Certificaciones en Backend</h2> 
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <ul class="nav justify-content-center">
              <?php foreach($backends_landing[0][0] as $backends_lg_one){ ?>
                <li class="nav-item">
                  <a href="<?php echo $backends_lg_one['url'] ?>" target="_blank" class="nav-link">
                    <img src="<?php echo get_stylesheet_directory_uri().''.$backends_lg_one['img']; ?>" class="img-fluid mx-auto d-block" width="220">  
                  </a>
                </li>
              <?php } ?>
            </ul>        
          </div>

          <div class="carousel-item">
            <ul class="nav justify-content-center">
              <?php foreach($backends_landing[0][1] as $backends_lg_two){ ?>
                <li class="nav-item">
                  <a href="<?php echo $backends_lg_two['url'] ?>" target="_blank" class="nav-link">
                    <img src="<?php echo get_stylesheet_directory_uri().''.$backends_lg_two['img']; ?>" class="img-fluid mx-auto d-block" width="220">  
                  </a>
                </li>
              <?php } ?>
            </ul> 
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="background-color: black; width : 45px;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="background-color: black; width : 45px;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12">     
      <h2 class="p-2">Certificaciones en Frontend</h2> 
      <div id="carouselFrontendControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <ul class="nav justify-content-center">
              <?php foreach($frontends_landing[0][0] as $frontend_lg_one){ ?>
                <li class="nav-item">
                  <a href="<?php echo $frontend_lg_one['url'] ?>" target="_blank" class="nav-link">
                    <img src="<?php echo get_stylesheet_directory_uri().''.$frontend_lg_one['img']; ?>" class="img-fluid mx-auto d-block" width="240">  
                  </a>
                </li>
              <?php } ?>
            </ul>        
          </div>
          <div class="carousel-item">
            <ul class="nav justify-content-center">
              <?php foreach($frontends_landing[0][1] as $frontend_lg_two){ ?>
                <li class="nav-item">
                  <a href="<?php echo $frontend_lg_two['url'] ?>" target="_blank" class="nav-link">
                    <img src="<?php echo get_stylesheet_directory_uri().''.$frontend_lg_two['img']; ?>" class="img-fluid mx-auto d-block" width="240">  
                  </a>
                </li>
              <?php } ?>
            </ul> 
          </div>
          <div class="carousel-item">
            <ul class="nav justify-content-center">
              <?php foreach($frontends_landing[0][2] as $frontends_lg_theen){ ?>
                <li class="nav-item">
                  <a href="<?php echo $frontends_lg_theen['url'] ?>" target="_blank" class="nav-link">
                    <img src="<?php echo get_stylesheet_directory_uri().''.$frontends_lg_theen['img']; ?>" class="img-fluid mx-auto d-block" width="240">  
                  </a>
                </li>
              <?php } ?>
            </ul> 
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFrontendControls" role="button" data-slide="prev" style="background-color: black; width : 45px;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFrontendControls" role="button" data-slide="next" style="background-color: black; width : 45px;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12">     
      <h2 class="p-2">Certificaciones en Complementos</h2> 
      <div id="carouselComplementosControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <ul class="nav justify-content-center">
              <?php foreach($complementos_landing[0][0] as $complementos_lg_one){ ?>
                <li class="nav-item">
                  <a href="<?php echo $complementos_lg_one['url'] ?>" target="_blank" class="nav-link">
                    <img src="<?php echo get_stylesheet_directory_uri().''.$complementos_lg_one['img']; ?>" class="img-fluid mx-auto d-block" width="230">  
                  </a>
                </li>
              <?php } ?>
            </ul>        
          </div>
          <div class="carousel-item">
            <ul class="nav justify-content-center">
              <?php foreach($complementos_landing[0][1] as $complementos_lg_two){ ?>
                <li class="nav-item">
                <a href="<?php echo $complementos_lg_two['url'] ?>" target="_blank" class="nav-link">
                  <img src="<?php echo get_stylesheet_directory_uri().''.$complementos_lg_two['img']; ?>" class="img-fluid mx-auto d-block" width="230">  
                </a>
                </li>
              <?php } ?>
            </ul> 
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselComplementosControls" role="button" data-slide="prev" style="background-color: black; width : 45px;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselComplementosControls" role="button" data-slide="next" style="background-color: black; width : 45px;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    
    </div>
  </div>
</div>

<!-- Experiencia con empresas -->
<div class="container mt-5">

  <div class="row">
    <div class="col-md-12">
      <h2 class="p-2">Experiencia con empresas</h2>
    </div>
  </div>

  <div class="row">

    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="p-2">
          <img src="<?php echo get_stylesheet_directory_uri().''.$proyectos_empresas[0]['img']; ?>" class="d-block mx-auto img-fluid">
        </div>
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $proyectos_empresas[0]['empresa']; ?></h5>
          <p class="card-text text-justify"><?php echo $proyectos_empresas[0]['descripcion']; ?></p>
          
          <p class="text-center"><b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
              <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
            </svg></b> <?php echo $proyectos_empresas[0]['pais'] ?> <b class="ml-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
              <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
              <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
            </svg></b> <?php echo $proyectos_empresas[0]['periodo'] ?></p>
            
            <div class="text-center">
              <?php foreach($proyectos_empresas[0]['tags'] as $e_tags){ ?>  
                <span class="badge badge-primary"><?php echo $e_tags; ?> </span>
              <?php } ?>
            </div>

        </div>
      </div>
    </div>  

    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="p-2">
          <img src="<?php echo get_stylesheet_directory_uri().''.$proyectos_empresas[1]['img']; ?>" class="d-block mx-auto img-fluid">
        </div>
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $proyectos_empresas[1]['empresa']; ?></h5>
          <p class="card-text text-justify"><?php echo $proyectos_empresas[1]['descripcion']; ?></p>
          
          <p class="text-center"><b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
              <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
            </svg></b> <?php echo $proyectos_empresas[1]['pais'] ?> <b class="ml-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
              <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
              <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
            </svg></b> <?php echo $proyectos_empresas[1]['periodo'] ?></p>
            
            <div class="text-center">
              <?php foreach($proyectos_empresas[1]['tags'] as $e_tags){ ?>  
                <span class="badge badge-primary"><?php echo $e_tags; ?> </span>
              <?php } ?>
            </div>

        </div>
      </div>
    </div>  

    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="p-2">
          <img src="<?php echo get_stylesheet_directory_uri().''.$proyectos_empresas[2]['img']; ?>" class="d-block mx-auto img-fluid">
        </div>
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $proyectos_empresas[2]['empresa']; ?></h5>
          <p class="card-text text-justify"><?php echo $proyectos_empresas[2]['descripcion']; ?></p>
          
          <p class="text-center"><b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
              <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
            </svg></b> <?php echo $proyectos_empresas[2]['pais'] ?> <b class="ml-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
              <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
              <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
            </svg></b> <?php echo $proyectos_empresas[2]['periodo'] ?></p>
            
            <div class="text-center">
              <?php foreach($proyectos_empresas[2]['tags'] as $e_tags){ ?>  
                <span class="badge badge-primary"><?php echo $e_tags; ?> </span>
              <?php } ?>
            </div>

        </div>
      </div>
    </div>          

  </div>

  <div class="row">
    <div class="col-md-12 text-right p-2 mt-2">
      <a href="#">Otras experiencias</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>