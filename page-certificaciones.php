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

  <div class="row justify-content-center mt-5">
    <?php foreach($certificaciones as $certificacion){ ?>
      <div class="col-md-4">
        <a href="<?php echo $certificacion['url'] ?>" target="_blank" class="nav-link">
          <img src="<?php echo get_stylesheet_directory_uri().''.$certificacion['img']; ?>" class="img-fluid">
        </a>
      </div>
    <?php } ?>                                     
  </div> 
</div>

<?php get_footer() ?>