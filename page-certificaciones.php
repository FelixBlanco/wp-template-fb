<?php 
/*
	Template Name: certificaciones
*/
get_header();
 ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <h2 class="title p-2">Certificaciones</h2>
    </div>  
  </div>

  <div class="row mt-5">
    <div class="col-md-12">
      <h3>Backend</h3>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <?php foreach($backends as $backend){ ?>
      <div class="col-md-4">
        <a href="<?php echo $backend['url'] ?>" target="_blank" class="nav-link">
          <img src="<?php echo get_stylesheet_directory_uri().''.$backend['img']; ?>" class="img-fluid">
        </a>
      </div>
    <?php } ?>                                     
  </div> 

  <div class="row mt-5">
    <div class="col-md-12">
      <h3>Frontend</h3>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <?php foreach($frontends as $frontend){ ?>
      <div class="col-md-4">
        <a href="<?php echo $frontend['url'] ?>" target="_blank" class="nav-link">
          <img src="<?php echo get_stylesheet_directory_uri().''.$frontend['img']; ?>" class="img-fluid">
        </a>
      </div>
    <?php } ?>                                     
  </div>  

  <div class="row mt-5">
    <div class="col-md-12">
      <h3>Wordpress Develloper</h3>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <?php foreach($wordpress as $wordpres){ ?>
      <div class="col-md-4">
        <a href="<?php echo $wordpres['url'] ?>" target="_blank" class="nav-link">
          <img src="<?php echo get_stylesheet_directory_uri().''.$wordpres['img']; ?>" class="img-fluid">
        </a>
      </div>
    <?php } ?>                                     
  </div> 


  <div class="row mt-5">
    <div class="col-md-12">
      <h3>Complementos</h3>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <?php foreach($complementos as $complemento){ ?>
      <div class="col-md-4">
        <a href="<?php echo $complemento['url'] ?>" target="_blank" class="nav-link">
          <img src="<?php echo get_stylesheet_directory_uri().''.$complemento['img']; ?>" class="img-fluid">
        </a>
      </div>
    <?php } ?>                                     
  </div> 

  <div class="row mt-5">
    <div class="col-md-12">
      <h3>Ingles</h3>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <?php foreach($englishs as $english){ ?>
      <div class="col-md-4">
        <a href="<?php echo $english['url'] ?>" target="_blank" class="nav-link">
          <img src="<?php echo get_stylesheet_directory_uri().''.$english['img']; ?>" class="img-fluid">
        </a>
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