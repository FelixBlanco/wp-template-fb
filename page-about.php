<?php 
  /*
    Template Name: about
  */

  get_header();
?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="fs-1">Contáctame</h2>
        <p class="mt-2 about ">
        ¿Tienes un proyecto o necesitas un desarrollador web/Móvil? puedes 
        contactarme por mi correo electronico Yo@BlancoFelix.com o por 
        mis redes sociales, con gusto te atendere.
        </p>

        <div class="mt-5">
          <div class="row">
            <div class="col-md-12">
              <h3 class="my-2">Enviarme un mensaje</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="">Nombre o empresa</label>
                <input type="text" class="form-control" placeholder="Ingrese nombre o empresa">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Ingrese email">
              </div>              
            </div>
          </div>
          <div class="mb-3 mt-2">
            <label for="">Mensaje</label>
            <textarea class="form-control" cols="30" rows="10" placeholder="Ingrese el mensaje"></textarea>
          </div>
          <div class="mb-3 text-end mt-2">
            <button class="btn btn-success">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer() ?>