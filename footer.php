	<div class="container-fluid mt-5 bg-white l-b-blue">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="p-2">
					<h2 class="p-2 text-center">Contactame</h2>
					<p class="text-justify">Si deseas contactarte conmigo lo puedes hacer por medio de mi redes sociales o escribirme a 
						<b> <a href="mailto:yo@blancofelix.com">Yo@blancofelix.com </a> </b> y con gusto te atendere.</p>

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
			</div>
		</div>
	</div>	


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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