<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 mt-2">      
        <div class="shadow bg-white">            
        <?php the_post_thumbnail('post-thumbnails',['class'=>'rounded img-fluid mx-auto d-block my-2'])  ?>
            <div class="p-2">
              <h2 class="p-2 text-center"><?php the_title(); ?></h2>
              <p class="p-1 text-center fz-13px"> 
                <span class="lnr lnr-calendar-full"></span> <?php the_time( 'd/m/Y' ) ?>, 
                Escrito po Felix Blanco                
              </p>
              <div class="p-3 fz-20px">
                <?php the_content(); ?>		              
              </div>
              <div class="row mt-2 justify-content-center">
                <div class="col-md-6">
                  <div class="p-3"><?php previous_post_link(); ?></div>
                </div>
                <div class="col-md-6 text-right">
                  <div class="p-3"><?php next_post_link(); ?></div>
                </div>
              </div>
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
				<div class="post bg-white shadow">
					<a href="<?php the_permalink(); ?>" class="link-style">
						<?php the_post_thumbnail('post-thumbnails',['class'=>'rounded img-fluid mx-auto d-block'])  ?>		
						<div class="p-2">
							<span><?php the_time( 'd-m-Y' ) ?></span>
							<h5><?php the_title(); ?></h5>
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