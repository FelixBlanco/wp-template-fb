<?php get_header('landing') ?>


<div class=" bg-code py-5">
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <img src="<?php echo get_stylesheet_directory_uri().'/img/fb-400x400.jpg'; ?>" class="rounded-circle img-fluid mx-auto d-block" width="320">
          <h1 class="text-center mt-2 ff-merienda fz-4em">Felix Blanco</h1>
          <h5 class="text-center">Fullstack Develloper</h5>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-md-8">
          <p class="text-justify fz-20px">
            ¡Hola!, Soy Felix Blanco, nací hace 27 años en Monagas Venezuela, estudie y culmine una carrera de Licenciatura en Informática en el período 2017, desde entonces trabajo de forma remota como <a href="https://blancofelix.com/fullstack-develloper/">Fullstack Develloper</a> para empresas de diferentes países de Latinoamérica logrando con ello mas de 4 años escribiendo código.
          </p>
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

  <?php  query_posts( 'posts_per_page=3' ); // Que solo muestre 3 Post  ?>	

  <div class="container-fluid mt-10">
    <a name="post" id="post"></a>
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
      <div class="col-md-4 mt-2">
        <div class="shadow bg-white rounded cont-post">
          <a  href="<?php the_permalink(); ?>" class="link-style">            
            <?php the_post_thumbnail('post-thumbnails',['class'=>'rounded img-fluid mx-auto d-block'])  ?>
            <div class="p-2">
              <h2 class="p-1 text-center"><?php the_title(); ?></h2>
              <p class="p-1 text-center"> 
                <span class="lnr lnr-calendar-full"></span> <?php the_time( 'd-m-Y' ) ?>, 
                Escrito po Felix Blanco                
              </p>
            </div>
          </a>
        </div>
      </div>
      <?php endwhile; else : ?>
				<p><?php esc_html_e( 'Disculpa, No hay post disponibles.' ); ?></p>
			<?php endif; ?>		
    </div>
  </div>


  <!-- Proyectos personales -->
  <div class="container mt-10">
    <a name="proyectos" id="proyectos"></a>
    <div class="row">
      <div class="col-md-6">
        <div class="rounded p-2 mt-5">
          <h3 class="text-center ff-merienda fz-3em">Proyectos Personales</h3>
          <hr class="line-azul">
          <p class="text-justify p-2 mt-1">
            Me considero una persona autodidacta por ello me apasiona emprender diferentes proyectos,
            te invito a visitarlos y comentar qué te parecen Cotoperices, Personal Nómina, es muy importante 
            para mi tu opinión. 
          </p>
        </div>
      </div>
      <div class="col-md-5 offset-md-1">
        <div class="row mt-5">
          <div class="col-md-6 mt-1">
            <a href="https://blancofelix.com/cotoperices">
              <img src="<?php echo get_stylesheet_directory_uri().'/img/personal/cosecha.png' ?>" class="rounded img-fluid mx-auto d-block">
            </a>
          </div>
          <div class="col-md-6 mt-1">
            <a href="https://blancofelix.com/personal-nomina">
              <img src="<?php echo get_stylesheet_directory_uri().'/img/personal/nomina-personal.png' ?>" class="rounded img-fluid mx-auto d-block">
            </a>
          </div>
        </div>      
      </div>
    </div>
  </div>


  <!-- Experiencia -->
  <div class="container-fluid mt-10">
    <a name="experiencias" id="experiencias"></a>
    <div class="row">
      <div class="col-md-12">
        <h3 class="ff-merienda fz-3em">Experiencia con empresas</h3>
        <hr class="line-azul">
        <div class="mt-4">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner mb-5">
              <div class="carousel-item active">
                <ul class="nav justify-content-center">
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/ruca.png' ?>" class="d-block w-100" width="200"></li>
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/ruleta.png' ?>" class="d-block w-100" width="200"></li>
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/elev.png' ?>" class="d-block w-100" width="200"></li>
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/deposito-central.png' ?>" class="d-block w-100" width="200"></li>
                </ul>
              </div>
              <div class="carousel-item">
                <ul class="nav justify-content-center">
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/farmagroup.png' ?>" class="d-block w-100" width="200"></li>
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/jimenez-puertas.png' ?>" class="d-block w-100" width="200"></li>
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/teraima.png' ?>" class="d-block w-100" width="200"></li>
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/pdvsa.png' ?>" class="d-block w-100" width="200"></li>
                </ul>
              </div>
              <div class="carousel-item">
                <ul class="nav justify-content-center">
                  <li class="nav-item ml-2 mt-1"><img src="<?php echo get_stylesheet_directory_uri().'/img/experiencia/EMJGNR.png' ?>" class="d-block w-100" width="200"></li>
                </ul>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="background-color: deepskyblue; width: 60px;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only" style="color: black;">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="background-color: deepskyblue; width: 60px;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>        
        </div>
      </div>
    </div>
  </div> 



  <div class="container mt-5">
    <a name="certificados" id="certificados"></a>
    <div class="row">
      <div class="col-md-6">
        <h3 class="ff-merienda fz-2em">Skills</h3>
        <hr class="line-azul">   
        <div class="p-4">
          <ul class="nav">
            <li class="nav-item ml-1"><h5><span class="badge badge-primary">Laravel</span> </h5></li>
            <li class="nav-item ml-1"><h5><span class="badge badge-primary">Apis Rest</span> </h5></li>
            <li class="nav-item ml-1"><h5><span class="badge badge-primary">Ionic 4</span></h5></li>
            <li class="nav-item ml-1"><h5><span class="badge badge-primary">Angular 7</span> </h5></li>
            <li class="nav-item ml-1"><h5><span class="badge badge-primary">Boostrap</span> </h5></li>
            <li class="nav-item ml-1"><h5><span class="badge badge-primary">Bash</span> </h5></li>
            <li class="nav-item ml-1"><h5><span class="badge badge-primary">Trello</span> </h5></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="ff-merienda fz-2em">Certificaciones y Cursos</h3>
        <hr class="line-azul">          
        <ul>
          <?php 
            foreach($certificaciones as $certificacion){ 
              echo "<li class='mt-2'><a href='".$certificacion['url']."' target='_blank'>".$certificacion['title']."</a></li>";  
            }
          ?>        
        </ul>
      </div>
    </div>

  </div>

<?php get_footer(); ?>