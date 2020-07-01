	
	<div class="container my-5">
		<div class="row justify-content-center mt-10">
			<a name="contactame" id="contactame"></a>
			<div class="col-md-6">
				<h3 class="ff-merienda fz-2em">Contactame</h3>
				<hr class="line-azul">    
				<p class="text-justify p-3">Si quieres que sea parte de tu equipo o quieres iniciar un proyecto conmigo, puedes conéctame por mis redes sociales o escribirme al email.</p> 
				<p class="text-center"><span class="lnr lnr-envelope"></span> Yo@blancofelix.com <span class="lnr lnr-map-marker ml-2"></span> Venezuela</p>
				
				<ul class="nav justify-content-center mt-4">
					<li class="nav-link">
						<a href="https://www.github.com/FelixBlanco" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri().'/img/social/github.png' ?>" class="img-fluid mx-auto d-block" width="55">
						</a>
					</li>
					<li class="nav-link">
						<a href="https://www.instagram.com/felix__blanco/?hl=es-la" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri().'/img/social/instagram.png' ?>" class="img-fluid mx-auto d-block" width="55">
						</a>
					</li>
					<li class="nav-link">
						<a href="https://twitter.com/felix__blanco" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri().'/img/social/twitter.png' ?>" class="img-fluid mx-auto d-block" width="55">
						</a>
					</li>  
					<li class="nav-link">
						<a href="https://www.linkedin.com/in/felix-blanco-54488684/" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri().'/img/social/linkedin.png' ?>" class="img-fluid mx-auto d-block" width="55">
						</a>
					</li>
					<li class="nav-link">
						<a href="https://www.facebook.com/felixablancoe" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri().'/img/social/facebook.png' ?>" class="img-fluid mx-auto d-block" width="55">
						</a>
					</li> 
					<li class="nav-link">
						<a href="https://www.youtube.com/channel/UClYqs-rYH764AcU2G3ueoyw" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri().'/img/social/youtube.png' ?>" class="img-fluid mx-auto d-block" width="55">
						</a>
					</li>                                        
				</ul>        
			</div>
			<!-- <div class="col-md-6">
				<h3 class="ff-merienda fz-2em">Contactame</h3>
				<hr class="line-azul">     
				<form action="">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nombre y Apellido">
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Escribe tu mensaje" rows="10"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-block">Listo, Enviar</button>
					</div>                    
				</form>
			</div>       -->
		</div>
	</div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script>
		$(document).ready(function(){
			
			$('#arriba').click(function(){ //Id del elemento cliqueable
				$('html, body').animate({scrollTop:0}, 'slow');
				return false;
			});

			// Scroll NavDinamico
			$('.nav-item a').click(function(e){			
				e.preventDefault(); //evitar el eventos del enlace normal
				var strAncla=$(this).attr('href'); //id del ancla
				$('body,html').stop(true,true).animate({				
					scrollTop: $(strAncla).offset().top
				},1000);
				
			});			
		})    
	</script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157258114-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-157258114-1');
	</script>	
</body>
</html>