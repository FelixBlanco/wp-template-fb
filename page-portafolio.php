<?php 
  /*
    Template Name: portafolio
  */

  get_header();
?>

<div class="container mt-5">
    <div class="row">
      <?php foreach($proyectos_empresas as $proyectos_empresa){ ?>
        <div class="col-md-4 mb-2">
          <div class="rounded shadow bg-white p-2">
            <img src="<?php echo get_stylesheet_directory_uri().''.$proyectos_empresa['img'] ?>" alt="">
            <h3 class="text-center"><?php echo $proyectos_empresa['empresa'] ?></h3>
            <p>
              <?php echo $proyectos_empresa['descripcion'] ?>
            </p>
            <hr>
            <p class="text-center">
            <ion-icon name="flag-outline"></ion-icon> <span><?php echo $proyectos_empresa['pais'] ?></span>  
              <ion-icon name="calendar-outline"></ion-icon> <span class="ml-2"><?php echo $proyectos_empresa['periodo'] ?></span>
            </p>
            <hr>
            <ul class="nav justify-content-center">
              <?php foreach($proyectos_empresa['tags'] as $tag){ ?>
                <li class="nav-item"> 
                  <div class="nav-link">
                    <div class="badge bg-primary">
                      <?php echo $tag ?>
                    </div>              
                  </div>             
                </li>
              <?php } ?>                                  
            </ul>
          </div>
        </div>
      <?php } ?>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <h2 class="fs-1">Contáctame</h2>
        <p class="mt-2 about ">
        ¿Tienes un proyecto o necesitas un desarrollador web/Móvil? puedes 
        contactarme por mi correo electronico Yo@BlancoFelix.com o por 
        mis redes sociales, con gusto te atendere.
        </p>    
      </div>
    </div>      
  </div>

<?php get_footer() ?>