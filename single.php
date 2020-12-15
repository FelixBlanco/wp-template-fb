<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 mt-2">      
				
				<?php the_post_thumbnail('post-thumbnails',['class'=>'rounded img-fluid mx-auto d-block my-2'])  ?>
        
				<div class="shadow bg-white">                    
            <div class="p-2">
              <h2 class="p-2 text-center"><?php the_title(); ?></h2>
              <p class="p-1 text-center fz-13px"> 
                <span class="lnr lnr-calendar-full"></span> <?php the_time( 'd/m/Y' ) ?>, 
                Escrito po Felix Blanco                
              </p>
              <div class="p-3 fz-20px">
                <?php the_content(); ?>		              
              </div>

							<!-- next & Previus -->
              <div class="row mt-2 justify-content-center">
                <div class="col-md-6">
                  <div class="p-3 no-link"><h4><?php previous_post_link(); ?></h4></div>
                </div>
                <div class="col-md-6 text-right">
                  <div class="p-3 no-link"><h4><?php next_post_link(); ?></h4></div>
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
          </a>
        </div>        
      </div>                    
    </div>
  </div>

<?php endwhile;  wp_reset_postdata(); else : ?>

<?php endif; ?>

<?php 	
	query_posts( 'posts_per_page=3' )  // Que solo muestre 3 Post
?>
<div class="container-fluid mt-4">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-4">
				<div class="post bg-white shadow no-link">
					<a href="<?php the_permalink(); ?>" class="link-style">
						<?php the_post_thumbnail('full',['class'=>'rounded img-fluid mx-auto d-block'])  ?>		
						<div class="p-2">
							<span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
							<?php the_time( 'd-m-Y' ) ?></span>
							<h4 class="p-2"><?php the_title(); ?></h4>
						</div>
					</a>
				</div>  
			</div>	
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Disculpa, No hay post disponibles.' ); ?></p>
		<?php endif; ?>															
	</div>
</div>


<?php get_footer(); ?>