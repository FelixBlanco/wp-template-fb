<?php 
  /*
    Template Name: about
  */

  get_header();
?>



<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 mb-2">
      <img src="<?php echo get_stylesheet_directory_uri().'/img/fb-400x400.jpg'; ?>" class="img-fluid mx-auto d-block rounded">        
    </div>
    <div class="col-md-8">
      <div class="row rounded shadow bg-white">
        <div class="col-md-12">
          <div class="p-4">
            <h2>Resumen</h2>
            <p class="text-justify">Nací hace 26 años, en Maturin estado Monagas - Venezuela, Estudie y culmine una carrera de <b>Licenciatura en Informática</b> en la Universidad Bolivariana de Venezuela, desde entonces 
              Me dedico completamente a trabajar remotamente con clientes de toda Latinoamérica como <b>Freelancer <a href="https://blancofelix.com/fullstack-develloper/" target="_blanck"> Full -Stack Developer </a>.</b></p>
          </div>
        </div>
      </div>

      <!-- Proyectos Personales -->

      <div class="row mt-5">
        <div class="col-md-12">
          <h2 class="title p-2">Proyectos Personales</h2>
        </div>
      </div>
      <?php foreach($proyectos_personales as $proyectos_personal){ ?>                  
        <div class="row mt-4 bg-white shadow rounded py-4">
          <div class="col-md-5">            
            <img 
                src="<?php echo get_stylesheet_directory_uri().''.$proyectos_personal['img']; ?>" 
                width="100" 
                class="img-fluid mx-auto d-block">   
          </div>
          <div class="col-md-7 no-link">
            <a href="<?php echo $proyectos_personal['url'] ?>">
              <h3 class=""><?php echo $proyectos_personal['title'] ?></h3>
              <p class="text-justify">              
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quod assumenda est dicta dolor laboriosam aut placeat aliquam velit aperiam non eius. Repellat qui vel dolores porro ea hic. Maxime?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam dignissimos rerum dolores, illo corporis modi quaerat, inventore debitis molestiae cum et magnam mollitia ratione nostrum, quod eveniet. Culpa, sunt. 
              </p>
              <p><b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
                <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
              </svg></b> Venezuela <b class="ml-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg></b> Dic. 2019 Ene. 2020</p>
              <span class="badge badge-secondary">Angular</span>
              <span class="badge badge-secondary">Laravel</span>
              <span class="badge badge-secondary">Boostrap</span>
              <span class="badge badge-secondary">Apis</span>
            </a>
          </div>
        </div> 
      <?php } ?>

      <!-- Experiencia -->

      <div class="row mt-5">
        <div class="col-md-12">
          <h2 class="title p-2">Experiencia con empresas</h2>
        </div>
      </div>
      <?php foreach($proyectos_empresas as $proyectos_empresa){ ?>                  
        <div class="row mt-4 bg-white shadow rounded py-4">
          <div class="col-md-5">            
            <img 
                src="<?php echo get_stylesheet_directory_uri().''.$proyectos_empresa['img']; ?>" 
                width="100" 
                class="img-fluid mx-auto d-block">   
          </div>
          <div class="col-md-7 no-link">
            <a href="<?php echo $proyectos_empresa['url'] ?>">
              <h3 class=""><?php echo $proyectos_empresa['empresa'] ?></h3>
              <p class="text-justify"><?php echo $proyectos_empresa['descripcion'] ?></p>
              <p><b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
                <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
              </svg></b> <?php echo $proyectos_empresa['pais'] ?> <b class="ml-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg></b> <?php echo $proyectos_empresa['periodo'] ?></p>

              <?php foreach($proyectos_empresa['tags'] as $e_tags){ ?>  
                <span class="badge badge-secondary"><?php echo $e_tags; ?> </span>
              <?php } ?>
            </a>
          </div>
        </div> 
      <?php } ?>
    </div>
  </div>
  </div>

  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="title p-2">Certificaciones</h2>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <a href="#" class="nav-link">
          <img src="img/certificacion/1.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="nav-link">
          <img src="img/certificacion/1.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="nav-link">
          <img src="img/certificacion/1.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="nav-link">
          <img src="img/certificacion/1.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="nav-link">
          <img src="img/certificacion/1.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="nav-link">
          <img src="img/certificacion/1.png" class="img-fluid">
        </a>
      </div>                                        
    </div>     
  </div>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="p-2 l-b-blue">
          <h2 class="p-2 text-center">Contactame</h2>
          <p class="text-justify">Si deseas contactarte conmigo lo puedes hacer por medio de mi redes sociales o escribirme a 
            <b> <a href="#:mailto">Yo@blancofelix.com </a> </b> y con gusto te atendere.</p>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer() ?>