<?php get_header('header') ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">      
      <img src="<?php echo get_stylesheet_directory_uri().'/img/fb-400x400.jpg'; ?>" class="img-fluid d-block mx-auto rounded-circle my-5">
    </div>
    <div class="col-md-8">
      <div class="text-center cont-title">          
        <h1>Felix Blanco</h1>        
        <small>FULL-STACK DEVELOPER</small>
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

<div class="container mt-4">    
  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
    <div class="col-md-4 mt-2">
      <div class="shadow bg-white rounded pb-4 no-link">
        <a  href="<?php the_permalink(); ?>" >            
          <?php the_post_thumbnail('post-thumbnails',['class'=>'rounded img-fluid mx-auto d-block'])  ?>
          <h4 class="p-1 text-center"><?php the_title(); ?></h4>
          <div class="text-center">            
            <small>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg> <?php the_time( 'd-m-Y' ) ?></small>
          </div>
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
        <p class="text-right p-2">Ver mas <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
          <path fill-rule="evenodd" d="M6 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H6.5A.5.5 0 0 1 6 8zm-2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z"/>
        </svg></p>
      </a>          
    </div>
  </div>    
</div>



<!-- Proyectos -->
<div class="container-fluid bg-white py-5 my-5">
  <div class="row justify-content-center">
    <div class="col-md-3 offset-1">
      <h2>Proyectos Personales</h2>
      <p class="text-justify">Me considero una persona emprendedora, por ello me motivo a desarrollar y poner a prueba mis habilidades y conocimientos.</p>
    </div>
    <div class="col-md-4">
      <ul class="nav mt-2">
        <?php foreach($proyectos_personales as $proyectos_personal){ ?>          
          <li class="nav-item ml-5">
            <a href="<?php echo $proyectos_personal['url'] ?>">
              <img 
                src="<?php echo get_stylesheet_directory_uri().''.$proyectos_personal['img']; ?>" 
                width="100" 
                class="img-fluid d-block mx-auto">              
            </a>
          </li>                   
        <?php } ?>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <!-- Plugin Youtube  -->
  <div class="row justify-content-end">
    <div class="col-md-4">
      <script src="https://apis.google.com/js/platform.js"></script>
      <div class="g-ytsubscribe" data-channelid="UClYqs-rYH764AcU2G3ueoyw" data-layout="full" data-count="default"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/frao4aBmWW4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>        
    </div>
  </div>
</div>


<?php get_footer(); ?>