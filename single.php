<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container mt-5">
    <div class="row">
      <div class="col-md-12">        
				<?php the_post_thumbnail('post-thumbnails',['class'=>'img-fluid d-block rounded mx-auto'])  ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        
        <h2 class="text-center p-2 mt-2"><?php the_title(); ?></h2>
        <p class="text-center"><ion-icon name="calendar-outline"></ion-icon> <?php the_time( 'd/m/Y' ) ?></p>
        <div class="content-parrafo m-2">
					<?php the_content(); ?>
				</div>

        <hr>
        <h3 class="text-center p-2"><ion-icon name="pricetags-outline"></ion-icon> Categorias</h3>
				
				<div class="text-center">
					<?php the_category(", "); ?>
				</div>

        <!-- <ul class="nav justify-content-center">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="badge bg-light text-dark fs-5">#PHP</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="badge bg-light text-dark fs-5">#Js</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="badge bg-light text-dark fs-5">#Angular</span>
            </a>
          </li>                        
        </ul>   -->

      </div>
    </div>

		<!-- next & Previus -->
		<div class="row mt-2 justify-content-center">
			<div class="col-md-6">
				<div class="p-3 a-link"><h4><?php previous_post_link(); ?></h4></div>
			</div>
			<div class="col-md-6 text-end">
				<div class="p-3 a-link"><h4><?php next_post_link(); ?></h4></div>
			</div>
		</div>

		<!-- Disque -->
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div id="disqus_thread"></div>
				<script>
				
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				s.src = 'https://https-blancofelix-com.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>         
				<script id="dsq-count-scr" src="//https-blancofelix-com.disqus.com/count.js" async></script>     		
			</div>
		</div>
  </div>
	<?php endwhile;  wp_reset_postdata(); else : ?>

	<?php endif; ?>



		<?php 	
			query_posts( 'posts_per_page=3' )  // Que solo muestre 3 Post
		?>
		<div class="container mt-4">
			<div class="row">
			 	<div class="col-md-12">
					<h3>Post Relacionados</h3>
				</div>
			</div>
			<div class="row mt-2">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4 a-none">
						<a href="<?php the_permalink(); ?>" class="link-style">							
							<?php the_post_thumbnail('full',['class'=>'img-fluid d-block rounded mx-auto'])  ?>		
							<h4 class="text-center p-2"><?php the_title(); ?></h4>        
						</a>
					</div>  
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Disculpa, No hay post disponibles.' ); ?></p>
				<?php endif; ?>															
			</div>
		</div>

<?php get_footer(); ?>